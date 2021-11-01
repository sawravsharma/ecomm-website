<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('projects')->insert([
            [
                'name'=>'Car online showroom system',
                "price"=>"2500",
                "description"=>"An online system where a user can check a features of a car online as well as can buy it online.An Admin panel is also created so that an admin can add, delete or update.",
                "category"=>"Django projects",
                "gallery"=>"https://www.autocar.co.uk/sites/autocar.co.uk/files/images/car-reviews/first-drives/legacy/1_rangerover_tracking.jpg"
            ],
            [
                'name'=>'Banking system',
                "price"=>"3000",
                "description"=>"An online banking system where users can add, withdraw money.An Admin panel is also created so that an admin can add, delete or update users.",
                "category"=>"Django projects",
                "gallery"=>"https://image.shutterstock.com/image-photo/businessman-holding-word-banking-hand-260nw-1150180799.jpg"
            ],
            [
                'name'=>'Online clothing store',
                "price"=>"2500",
                "description"=>"An online clothing store where users can buy clothes online.An Admin panel is also created so that an admin can add, delete or update users and clothes.",
                "category"=>"Django projects",
                "gallery"=>"https://media.istockphoto.com/photos/clothes-shop-interior-picture-id901863672?k=6&m=901863672&s=170667a&w=0&h=6BuQyMQ9NVqPbEfNQCNvY_r2X5jR5s32sWB_SMMk0a8="
            ],
            [
                'name'=>'Immigration website',
                "price"=>"2000",
                "description"=>"An online immmigration system where users can ask their querries on different visas, and an Admin is also created, in which an admin can when the users got their visas, which have applied.",
                "category"=>"Django projects",
                "gallery"=>"https://manojchahar.com/wp-content/uploads/2020/09/immigration-website-designer.jpg"
            ],
            [
                'name'=>'Car online showroom system',
                "price"=>"2500",
                "description"=>"An online system where a user can check a features of a car online as well as can buy it online.An Admin panel is also created so that an admin can add, delete or update.",
                "category"=>"Django projects",
                "gallery"=>"https://www.autocar.co.uk/sites/autocar.co.uk/files/images/car-reviews/first-drives/legacy/1_rangerover_tracking.jpg"
            ],
            [
                'name'=>'Car online showroom system',
                "price"=>"2500",
                "description"=>"An online system where a user can check a features of a car online as well as can buy it online.An Admin panel is also created so that an admin can add, delete or update.",
                "category"=>"Django projects",
                "gallery"=>"https://www.autocar.co.uk/sites/autocar.co.uk/files/images/car-reviews/first-drives/legacy/1_rangerover_tracking.jpg"
            ],
            [
                'name'=>'Car online showroom system',
                "price"=>"2500",
                "description"=>"An online system where a user can check a features of a car online as well as can buy it online.An Admin panel is also created so that an admin can add, delete or update.",
                "category"=>"Django projects",
                "gallery"=>"https://www.autocar.co.uk/sites/autocar.co.uk/files/images/car-reviews/first-drives/legacy/1_rangerover_tracking.jpg"
            ],
            [
                'name'=>'Car online showroom system',
                "price"=>"2500",
                "description"=>"An online system where a user can check a features of a car online as well as can buy it online.An Admin panel is also created so that an admin can add, delete or update.",
                "category"=>"Django projects",
                "gallery"=>"https://www.autocar.co.uk/sites/autocar.co.uk/files/images/car-reviews/first-drives/legacy/1_rangerover_tracking.jpg"
            ],
        ]);
    }
}