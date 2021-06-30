<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	
		<!-- Latest compiled and minified CSS 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">-->

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	
@include('header')
</head>
<br><br>
<body>
	<div class="container">
	<form method="post" action="insert" enctype="multipart/form-data" >
		@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title" placeholder="Enter Title">
   <span style="color:red">@error('title'){{$message}}@enderror</span>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Content</label>
    <!-- <input type="text" class="form-control" name="content" id="exampleInputPassword1" placeholder="Content"> -->
    <textarea class="form-control" name="content" id="" cols="30" rows="10"></textarea>	
    <script src=""></script>
	
      <script src="https://cdn.ckeditor.com/4.16.1/full/ckeditor.js"></script>
      <script>
      CKEDITOR.replace('content');
      </script>


	<span style="color:red">@error('content'){{$message}}@enderror</span>
  </div>
 <input type="hidden" name="user_id" value="{{session('id')}}">

 <div class="form-group">
    <label for="exampleInputEmail1">Image</label>
    <input type="file" class="form-control"  name="image" >
   <span style="color:red">@error('image'){{$message}}@enderror</span>
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>
	
	</div>
</body>
</html>