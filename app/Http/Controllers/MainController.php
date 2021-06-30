<?php

namespace App\Http\Controllers;
//use App\Http\Controllers\DB;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Detail;
use App\Models\Post;
use App\Models\User;
use Session;
use Illuminate\Support\Facades\File;
//use Illuminate\Support\MessageBag;
class MainController extends Controller
{
    function index(){
		$userId=Session::get('id');//['id']; // taking user id 
		$details = DB::table('users')
		->join('posts','users.id',"=",'posts.user_id')
		->where('posts.user_id',$userId)
		->orderByDesc('posts.id')
		->get();
		
		return view('home',['details'=>$details]);
	}
	
	function add(){
		
		return view('add');
	}
	
	function insert(Request $req){
		
		
		$validated = $req->validate([
        'title' => 'required',
        'content' => 'required|',
		'file' => 'image|mimes:png,jpg'
    ]);
		//$errors = $validated->errors();
		$data=new Post();
		
		//$data->image=$req->image;

		

		if($req->hasfile('image')){
			$file = $req->file('image');

			$extension = $file->getClientOriginalExtension();
			$filename = time().'.'.$extension;
			$file->move('uploads/product/',$filename);
			$data->image = $filename;
		}

		// $images = $req->file->getClientOriginalName();
        // $req->file->storeAs('public/images',$images);
        // $data->image = $images;

		// $req->file('file')->store('img');

		$data->title=$req->title;
		$data->content=$req->content;
		$data->user_id=$req->user_id;
		$req->session()->flash('insert_status','Post has been saved');
		$data->save();
		
		return redirect('home');
		
	}
	
	function edit($id){
		
		$data=Post::find($id);
		return view('edit',['details'=>$data]);
	}
	
	function update(Request $req){

		$validated = $req->validate([
			'title' => 'required',
			'content' => 'required',
			'file' => 'image|mimes:png,jpg'
		]);


		$update= Post::find($req->id);
		
		$update->title=$req->title;
		$update->content=$req->content;
		$update->user_id=$req->user_id;

		if($req->hasfile('image')){

			$destination = 'uploads/product/'.$update->image;

			if(File::exists($destination)){

				File::delete($destination);

			}
			$file = $req->file('image');

			$extension = $file->getClientOriginalExtension();
			$filename = time().'.'.$extension;
			$file->move('uploads/product/',$filename);
			$update->image = $filename;
		}

		$req->session()->flash('update_status','Post Updated!');

		// $update->phone=$req->phone;
		// $update->dob=$req->dob;

		$update->save();
		return redirect('home');
	}

	function delete(Request $req,$id){
		$data=Post::find($id);
		$data->delete();
		$req->session()->flash('delete_status','Post Deleted!');
		return redirect('home');
	}

	function new_reg(){
	return view('new_reg');
	
	}


	function create(Request $req){
		
		
		//return "working";
		 $data=new Detail();
		
		 $data->email=$req->email;
		 $data->username=$req->name;
		 $data->password=$req->password;
		 $data->role=$req->role;
		 $data->user_id=$req->user_id;
		 $data->phone=$req->phone;
		 $data->dob=$req->dob;

		// //$req->session()->flash('username', $req->username);
		 $data->save();
		
		 return redirect('home');
		
	}

	function updatetwo(Request $req){
		$update= Detail::find($req->id);
		$update->email=$req->email;
		$update->username=$req->username;
		$data->role=$req->role;
		$data->user_id=$req->user_id;
		$data->phone=$req->phone;
		$data->dob=$req->dob;
		//$req->session()->flash('email',$req->email);
		$update->save();
		return redirect('/');
	}


}
