<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\Register;
use App\Models\Ticket;
use App\Models\Issue;
use App\Models\Comment;
use App\Models\Admin;
use Auth;
use Mail;
use App\Models\User;

class AdminController extends Controller
{
    public function trackingstatus(Request $request)
    {
      if(\Auth::check()){
      $uid = $request->input('id');
      $status = $request->input('status'); 

      $orders = Ticket::find($uid); 
      //echo $uid; exit;
      $update = Ticket::where('id',$uid)->update(array(
          'status' => $status,
      ));      
      return json_encode( array('response_msg' => 'success'));
    }
    else
    {
      return redirect('/');
    }
    }

    public function vieworders(Request $request)
    {
      if(\Auth::check()){
      $user_id = Auth::User()->id;
      $user_email = Auth::User()->email;
      $assigned = Ticket::all();
      $support = Auth::User()->support;
      if($support=='HR')
      {
      $order = Ticket::where('assigned','HR')->orderBy('priority','desc')->paginate(5);
      }
      elseif($support=='ADMIN')
      {
        $order = Ticket::where('assigned','ADMIN')->orderBy('priority','desc')->paginate(5);
      }
      elseif($support=='MANAGER')
      {
        $order = Ticket::where('assigned','MANAGER')->orderBy('priority','desc')->paginate(5);
      }
      elseif($support=='TEAM LEAD')
      {
        $order = Ticket::where('assigned','TEAM LEAD')->orderBy('priority','desc')->paginate(5);
      }
      //dd($order);
       return view('admin.track-order', ['orders'=>$order]);
    }
    else{
      return redirect('/');
    }
    }

    public function deleteapplication($id=null)
    {
      if(\Auth::check()){
      $userCart= Ticket::where('id',$id)->delete();
      return redirect('/Ticket-Management-System/view-tickets')->with('success','Ticket delete from list');
      }
      else
      {
        return redirect('/');
      }
    }
    
    public function comments()
    {
      return view('admin.comment');
    }

    public function viewDetails($id)
    {
      if(\Auth::check()){
      $user_id=Auth::User()->id;
      $user_email=Auth::User()->email;
      $user_name=Auth::User()->name;
      $ticket = Ticket::find($id);
      $ticket_id = Ticket::where(['id'=>$id])->get();
      $comment = Comment::where('user_id',$user_id)->latest()->paginate(30);
      return view('admin.view-ticket' , ['comments'=>$comment],compact('user_id','user_email','user_name','ticket','ticket_id'));
      }
      else
      {
        return redirect('/');
      }
    }

    public function register()
    {   
      $key = Register::select('id','support')->distinct()->get();
      return view('admin.admin-register',['key'=>$key]);
    }

    public function adminlogin()
    {   
      $key = Register::select('id','support')->distinct()->get();
      return view('admin.admin-login',['key'=>$key]);
    }

    public function adminregister(Request $request)
    {
      if($request->isMethod('post'))
      {
        $data =$request->all();
        $usersCount = User::where('email',$data['email'])->count();
        if($usersCount >0)
        {
          return redirect()->back()->with('error','Email Already Exists');
        }
        else
        {
          $user = new User();
          $user->name = $data['name'];
          $user->email = $data['email'];
          $user->password = bcrypt($data['password']);          
          $user->support = $data['support'];
          $user->cpassword = ' ';
          $user->role=1;
          
          $user->save();
          if(auth::attempt(['email'=>$data['email'],'password'=>$data['password'],'role'=>1]))
          {
            return redirect('/Ticket-Management-System/admin-panel')->with('success','Register Successfully');
          }
        }
      }
    }

    public function admincheck(Request $request)
    {
     if($request->isMethod('post'))
     { 
      $data =$request->all();
        if(auth::check(['email'=>$data['email'],'password'=> $data['password'],'role'=>1]))
        {
          return redirect('/Ticket-Management-System/admin-panel')->with('success','login Successfully');
        }
        else
        {
          return redirect()->back()->with('success','Invalid Credentials');
        }
      }
    }

   public function Adminlogout()
   {
       Auth::logout();
       return redirect('/');
   }
}
