<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>website Project</title>
	
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">  

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
 <!-- js -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
	{{View::make('header')}}
	@yield('content')
	{{View::make('footer')}}
</body>
<style>
	.navbar{
		font-size: 20px;
		padding: 10px;
	}
	 
    .custom-login{
		height: 500px;
		font-size: 10px;
		padding-top: 100px;
		}
	
	.fa {
    	width: px;
    	float: left;
    	text-align: center;
}
	.custom-project{
		height:600px;
	}

	.trending-image{
		height: 100px;
	}

	.trending-item{
		float:left;
		width:100%;
	}

	.trending-wrapper{
		margin:30px;
	}

	.detail-img{
		height:200px;
	}

	body {
		background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTtng2UT3ZLfes02mwGguClhWFTdE3TBUzL_g&usqp=CAU");
 		background-color: #bcbeff;
	}

	@media (min-width: 768px) { 
	.dropdown:hover .dropdown-menu {
    	display: block;
    	margin-top: 0; 
 	}
	
	@media (max-width: 767px) { 
	.dropdown:hover .dropdown-menu
    	display: none;
    	margin-top: auto; 
	}

	.content{ 
		font-size: 20px;
		width : 70%;
		border-bottom: 5px solid #ccc;
	}

	.outer_box{
		display: flex;
		justify-content: center;
		align-items: center;
		
	}

	.cart-list-divider{
		border-bottom: 5px solid #ccc;
		margin-bottom: 20px;
		padding-bottom: 20px;
	}

	.container-divi{
		border-bottom: 5px solid #ccc;
		margin-bottom: 20px;
		padding-bottom: 20px;
	}

	.footer {
  		text-align: center;
  		padding: 8px;
		width: 50px;
		background-color: grey;
  		color: white;
	}
</style>
</html>