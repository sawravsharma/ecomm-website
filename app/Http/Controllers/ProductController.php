<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Cart;
use App\Models\Order;
use Session;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    function index()
    {
        $data=Project::paginate(2);
        return view ('project',['projects'=>$data]);
    }

    function add(Request $req)
    {
        //return $req->input();
        $project = new Project;
        $project->name=$req->name;
        $project->price=$req->price;
        $project->category=$req->category;
        $project->description=$req->description;
        $project->gallery=$req->gallery;
        $project->save();
        return redirect('/');
    }

    function detail($id)
    {
        $data = Project::find($id);
        return view('detail',['project'=>$data]);
    }
    
    function search(Request $req)
    {
        $data= Project::
        where('name', 'like', '%'.$req->input('query').'%')
        ->get();
        return view('search',['projects'=>$data]);
    }

    function addToCart(Request $req)
    {
        if($req->session()->has('user'))
        {
            $cart=new Cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->project_id=$req->project_id;
            $cart->save();
            return redirect('/');
        }
        else
        {
            return redirect('/login');
        }
    }
    static function cartItem()
    {
        $userId=Session::get('user')['id'];
        return Cart::where('user_id',$userId)->count();
    }

    function cartList()
    {
        $userId=Session::get('user')['id'];
        $projects= DB::table('cart')
        ->join('projects', 'cart.project_id','=','projects.id')
        ->where('cart.user_id',$userId)
        ->select('projects.*', 'cart.id as cart_id')
        ->get();

        return view('cartlist',['projects'=>$projects]);
    }

    function removeCart($id)
    {
        Cart::destroy($id);
        return redirect('cartlist');
    }
    function orderNow()
    {
        $userId=Session::get('user')['id'];
        $total = $projects= DB::table('cart')
        ->join('projects', 'cart.project_id','=','projects.id')
        ->where('cart.user_id',$userId)
        ->select('projects.*', 'cart.id as cart_id')
        ->sum('projects.price');

        return view('ordernow',['total'=>$total]);
    }

    function orderPlace(Request $req)
    {
        $userId=Session::get('user')['id'];
         $allCart= Cart::where('user_id',$userId)->get();
         foreach($allCart as $cart)
         {
             $order= new Order;
             $order->project_id=$cart['project_id'];
             $order->user_id=$cart['user_id'];
             $order->status="pending";
             $order->payment_method=$req->payment;
             $order->payment_status="pending";
             $order->save();
             Cart::where('user_id',$userId)->delete(); 
         }
         $req->input();
         return redirect('/');
    }

    function myOrders()
    {
        $userId=Session::get('user')['id'];
        $orders= DB::table('orders')
         ->join('projects','orders.project_id','=','projects.id')
         ->where('orders.user_id',$userId)
         ->get(); 
 
         return view('myorders',['orders'=>$orders]);
    }

    function everyorders(Request $req)
    {
        $userId=Session::get('user')['id'];
        $orders= DB::table('orders')
         ->join('projects','orders.project_id','=','projects.id')
         ->where('orders.user_id',$userId)
         ->get(); 
        return view('everyorders',['orders'=>$orders]);
    }

    function prdashboard(Request $req)
    {
        $projects = Project::all(); 
        return view ('prdashboard',['projects'=>$projects]);
    }
    
}
