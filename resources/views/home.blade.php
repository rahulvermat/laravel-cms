<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	
	
	<!-- Latest compiled and minified CSS
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->

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
	@include('header')
	<div class="container">

	@if(session('insert_status'))
	<div class="alert alert-success" role="alert">
  Post Saved!
</div>
	@endif

	@if(session('update_status'))
	<div class="alert alert-success" role="alert">
  Post Updated!
</div>
	@endif

	@if(session('delete_status'))
	<div class="alert alert-success" role="alert">
  Post Deleted!
</div>
	@endif

		<div class="row">
		<div class="col-sm-12">
			<a href="add">
			<input type="button" class="btn btn-primary pull-right" value="Add">
			</a>
			
			</div>
		
		</div>
	
<table class="table">
	<tr>
	<td>Id</td>
	<td>Image</td>
	<td>Title</td>
	
	<td>User Id</td>
	<td>Edit</td>
	<td>Delete</td>
	
	</tr>

	
	@foreach($details as $detail)
	<tr>
	
	<td> {{$detail->id}}</td>
	<td> <img src="{{asset('uploads/product/'.$detail->image)}}" alt=""> </td>
	<td>{{$detail->title}}</td>
	
	<td>{{$detail->user_id}}</td>
	<td><a href="edit/{{$detail->id}}">Edit</a></td>
	<td><a href="delete/{{$detail->id}}">Delete</a></td>
	
	</tr>
	@endforeach
	
	
	
	</table>	
		
		</div>
</body>
</html>