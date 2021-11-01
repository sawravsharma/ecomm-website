@extends('master')
@section("content")
<div class = "container p-4 my-8 bg-light text-black">
	<div class = "row">
		<div class = "col-sm-4 col-sm-offset-4">
			<form action="add" method="POST">
            @csrf
                <div class="form-group">
				<label for="exampleInputprojectname" class="form-label">Name</label>
				<input type="text" name ="name" class="form-control" id="name" placeholder="Project Name">
				</div>
				<div class="form-group">
				<label for="exampleInputPrice" class="form-label">Price</label>
				<input type="text" name ="price" class="form-control" id="price" placeholder="Price">
				</div>
                <div class="form-group">
				<label for="exampleInputCategory" class="form-label">Category</label>
				<input type="text" name="category" class="form-control" id="category" placeholder="Category">
				</div>
                <div class="form-group">
				<label for="exampleInputDescription" class="form-label">Description</label>
				<textarea rows="4" cols="40" name="description" class="form-control" id="description" placeholder="Description">
				</textarea>
				
				
				<div class=form-group>
				<label for=gallery class="form-label">Photo</label>
				<input type=text name=gallery class="form-control" id="gallery" placeholder="Gallery">
				</div >
				<button type="submit" class="btn btn-primary">ADD</button>
			</form>
		</div>
	</div>
</div>
@endsection