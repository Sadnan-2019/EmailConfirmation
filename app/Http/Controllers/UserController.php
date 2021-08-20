<?php

namespace App\Http\Controllers;

use App\Models\registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Image;
use Mail;
use Session;

class UserController extends Controller
{
    public function index(){

        return view('user.registration.form');
    }

    public function save( Request $request){


        $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'password'  => 'required|min:6|confirmed',
            'photo'=>'required'

        ]);
        $Image=$request->file('photo');
        $ImageOriginal=$Image->getClientOriginalName();
        /*dd($ImageOriginal);*/
        $directory='user-image/';
        $Imageurl=$directory.$ImageOriginal;
       /* dd($Imageurl);*/
        /*        $ProductImage->move($directory,$ImageOriginal);*/
        Image::make($Image)->resize(300,300)->save($Imageurl);
        $user=new registration();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->photo=$Imageurl;
        /*dd($user);
        exit();*/
        $user->password=Hash::make($request->password);
      /*  dd($user);
        exit();*/
        $user->save();
        $userId=$user->id;
        Session::put('userId',$userId);
        Session::put('userName',$user->name);

        $email=$user['email'];
        $messageData=['email'=>$user['email'],'name'=>$user['name']];
        Mail::send('user.mails.confirmation-mail',$messageData, function ($message) use ($email){
        $message->to($email);
        $message->subject('AsthaJibonIt Confirmation Mail');
        /*dd($email);*/

/*print_r('shakil');*/

        });
       /* echo $email;*/
        /*dd($email);*/
        return redirect('/login')->with("Success","We have send grettings to your email ".$email. " Please check your email. ");






    }

    public function LoginForm(){

        return view('user.login.login');




    }

    public function Login(Request $request){

        $this->validate($request,[

            'email'=>'required',
            'password'  => 'required|min:6|',


        ]);
        $registercustomer = registration::where('email', $request->email)->first();
        /*dd($registercustomer);*/
        if (password_verify($request->password, $registercustomer->password)) {
            /*return $registercustomer;
            exit();*/
            Session::put('userId', $registercustomer->id);
            Session::put('userName', $registercustomer->name);
            return redirect('/dashboard');


        } else {


            return redirect('/login')->with('meassage', 'Password Invalid');


        }



    }

    public function Dashboard(){

        return view('user.dashboard.dashboard');



    }


}
