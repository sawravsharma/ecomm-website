@extends('master')
@section("content")
<div class="container p-3 my-3 bg-light text-black">
<div class = "container custom-login">
	<div class = "row">
		<div class = "col-sm-4 col-sm-offset-4">
			<form action="login" method="POST" >

				<div class="form-group">
					@csrf
				<label for="exampleInputEmail" class="form-label">Email address</label>
				<input type="email" name ="email" class="form-control" id="email" aria-describedby="emailHelp">
				</div>
				<div class="form-group">
				<label for="exampleInputPassword" class="form-label">Password</label>
				<input type="password" name="password" class="form-control" id="password">
				</div>
				<center>
				<button type="submit" class="btn btn-primary btn-lg">L o g i n</button>
				
			</form>
		</div>
	</div>
</div>

@endsection