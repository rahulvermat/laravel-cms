<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
@include('header')
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>

img{
	width:100px;
	height:150px;
}

</style>
	
</head>

<body>
	<div class="container">
	<form method="post" action="edit" enctype="multipart/form-data"  >
		@csrf
		
    <img src="{{asset('uploads/product/'.$details['image'])}}" alt="">

		<input type="hidden" name="id" value="{{$details['id']}}">
  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" class="form-control"  name="title" value="{{$details['title']}}" placeholder="Title">
   <span style="color:red">@error('title'){{$message}}@enderror</span>
  </div>
  <!-- <div class="form-group">
    <label for="exampleInputPassword1">Content</label>
    <input type="text" class="form-control" value="{{$details['content']}}" name="content"  placeholder="Content">
	<span style="color:red">@error('content'){{$message}}@enderror</span>
  </div> -->

  <div class="form-group">
    <label for="exampleInputPassword1">Content</label>
    <!-- <input type="text" class="form-control" name="content" id="exampleInputPassword1" placeholder="Content"> -->
    <textarea class="form-control" name="content" value="{{$details['content']}}" cols="30" rows="10">{{$details['content']}}</textarea>	
    <script src=""></script>
	
      <script src="https://cdn.ckeditor.com/4.16.1/full/ckeditor.js"></script>
      <script>
      CKEDITOR.replace('content');
      </script>

  <input type="hidden" name="user_id" value="{{$details['user_id']}}">

  <div class="form-group">
    <label for="exampleInputEmail1">Image Upload</label>
    <input type="file" class="form-control"  name="image">
    <span style="color:red">@error('image'){{$message}}@enderror</span>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
	
	</div>
</body>
</html>