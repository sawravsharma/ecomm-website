@extends('master')
@section("content")
<div class = "container custom-login">
	<div class = "row">
		<div class = "col-sm-4 col-sm-offset-4">
			<form action="register" method="POST" >
            @csrf
                <div class="form-group">
				<label for="exampleInputEmail" class="form-label">User Name</label>
				<input type="text" name ="name" class="form-control" id="User Name" placeholder="User Name">
				</div>
				<div class="form-group">
				<label for="exampleInputEmail" class="form-label">Email address</label>
				<input type="email" name ="email" class="form-control" id="email" placeholder="emailHelp">
				</div>
				<div class="form-group">
				<label for="exampleInputPassword" class="form-label">Password</label>
				<input type="password" name="password" class="form-control" id="password" placeholder="password">
				</div>
				<button type="submit" class="btn btn-success">Register</button>
			</form>
		</div>
	</div>
</div>
@endsection