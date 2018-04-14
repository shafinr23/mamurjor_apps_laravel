<?php namespace new_project_shafin\Http\Controllers;

use new_project_shafin\Http\Requests;
use new_project_shafin\Http\Controllers\Controller;

use Illuminate\Http\Request;

use DB;

class RegController extends Controller {
	public function index(){
		$user_list = DB::select('select * from reg');
		return view ('users.user-list',['users'=>$user_list]);
	}
	

	
	public function show($id){
		
		$user_list_edit = DB::select('select * from reg where id=?',[$id]);
		// print_r($user_list_edit);
		// exit();
		return view ('users.edit',['user_list_e'=>$user_list_edit]);
	}



	public function postRegister(Request $request){

		if ($request->hasFile('image')) {
			echo  $photo = $request->file('image')->getClientOriginalName()."<br/>";

			echo $photoex = $request->file('image')->getClientOriginalExtension()."<br/>";
	
			echo $photoex = $request->file('image')->getRealPath()."<br/>";
	
			echo $photoex = $request->file('image')->getSize()."<br/>";
	
		 echo $photomine = $request->file('image')->getMimeType()."<br/>";

			
$photo = $request->file('image')->getClientOriginalName();
$destination = base_path() . '/public/uploads';
$request->file('image')->move($destination, $photo);
			
	
		}else{
			echo 'slect data';
		}


		// $email=$request->input('email');
		// //echo "your email is : ".$email.'<br/>';
		// $password=$request->input('pass');
		// //echo "your pass is : ".$password;

		// DB::insert('insert into reg(email,password)values(?,?)',[$email,$password]);
		// //echo "this is done ";
		// $request->session()->flash('mes','listed in our site');
		// return redirect()->action('RegController@index');

		
	}



	public function update(Request $request){
		
		$ema=$request->input('email');
		//$id=$request->input('id');
		//echo "your email is : ".$id.'<br/>';
		$pass=$request->input('pass');
		//echo "your pass is : ".$password;

		DB::update('update reg set email=?,password=? where id = ?',[$ema,$pass,$id]);
		return redirect()->action('RegController@index');
	}

	public function destory(Request $request,$id){
		
		// $ema=$request->input('email');
		// //$id=$request->input('id');
		// //echo "your email is : ".$id.'<br/>';
		// $pass=$request->input('pass');
		// //echo "your pass is : ".$password;

		DB::delete('delete from  reg where id = ?',[$id]);
		$request->session()->flash('del','deleteded in our site');
	 return redirect()->action('RegController@index');	
	}




	public function login(){ 
		return view('users.login');
	}

}
