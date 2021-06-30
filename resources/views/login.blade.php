<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	
	
</head>

<body>


	<div class="container">

<div class="row">

<div class="col-sm-12">

<br><br>
<h2>Login</h2>
	@if(session('email'))
	<h5>Invalid Login !</h5>
	@endif


</div>

</div>

<div class="row d-flex justify-content-center">
<div class="col-sm-6">




	<form method="post" action="login">
		@csrf



  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Enter email">
   <span style="color:red">@error('email'){{$message}}@enderror</span>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
	<span style="color:red">@error('password'){{$message}}@enderror</span>
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
	

</div>

</div>

	</div>
</body>
</html>