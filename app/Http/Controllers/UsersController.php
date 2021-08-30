<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Models\User;
use Session;
use App\Models\Ticket;
use App\Models\Comment;
use App\Models\Issue;
use Auth;
use Mail;
use Carbon\Carbon;

class UsersController extends Controller
{
    public function employee_register()
    {
      return view('dashboard.register');
    }

    public function employee_login()
    {
      return view('dashboard.login');
    }

    public function register(Request $request)
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
          $user->cpassword = bcrypt($data['cpassword']);
          $user->role=0;
          $user->save();
          if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password']]))
          {
            return redirect('/Ticket-Management-System/My-Tickets')->with('success','Register Successfully');
          }
        }
      }
    }

    public function check(Request $request)
    {
    if($request->isMethod('post'))
    {
      $data =$request->all();
      if(Auth::attempt(['email'=>$data['email'],'password'=> $data['password'],'role'=>0]))
      {
          return redirect('/Ticket-Management-System/My-Tickets')->with('success','login Successfully');
      }
      else
        {
      return redirect()->back()->with('error','Unauthorized User');
        } 
      }
    }

    public function createticket()
    {   
      if(\Auth::check()){
      $key = Issue::select('id','helptopic')->distinct()->get();
      //dd($key);
      $user_id=Auth::User()->id;
      $user_name=Auth::User()->name;
      $user_email=Auth::User()->email;
      return view('dashboard.create-ticket',['key'=>$key],compact('user_id','user_name','user_email'));
      }
      else{
        return redirect('/Ticket-Management-System/employee-login');
      }
    }

    public function storeTicket(Request $request)
    {
      if($request->isMethod('post'))
      {
          $this->validate($request, [
              'helptopic' => 'required',
              'Subject' => 'required|max:255',
              'priority' =>'required',
              'Details' => 'required',
                ]);

          $data = $request->all();
          $user_id = Auth::User()->id;
          $user_email = Auth::User()->email;
          
          $product = new Ticket;
          $product->user_id = $user_id;
          $product->user_email = $user_email;
          $product->helptopic = request('helptopic');
          $product->Subject = request('Subject');
          $product->priority = request('priority');
          $product->Details = request('Details');

          if( $product->helptopic==1|| $product->helptopic==5||$product->helptopic==8|| $product->helptopic==10)
          {
          $product->assigned ='HR';
          }
          elseif( $product->helptopic==2|| $product->helptopic==4||$product->helptopic==1)
          {
            $product->assigned ='ADMIN';
          }
          elseif( $product->helptopic==3|| $product->helptopic==7|| $product->helptopic==9)
          {
            $product->assigned ='MANAGER';
          }
          elseif( $product->helptopic==6)
          {
            $product->assigned ='TEAM LEAD';
          }
        
          $product->status = 'open';
          // dd($product);
          $product->save();
        
          $email = $user_email;
          $data= array(
          'helptopic' =>$request->helptopic,
          'Subject' =>$request->Subject,
          'priority' =>$request->priority,
          'Details' =>$request->Details,
          'assigned' =>$request->assigned,
          'user_email' =>$user_email,
          );

        Mail::send('emails.useremail',$data,function($message)use($email)
        {
            $message->to($email)->subject('Ticket Raised');
        });

        Session::flash('success','Ticket Raised Successfully.');

        return redirect('/Ticket-Management-System/My-Tickets');
        }
        
    }

    public function display()
    {
      
      if(\Auth::check()){
      $user_id=Auth::User()->id;
      $user_email=Auth::User()->email;

      $ticket = Ticket::leftJoin('issues AS b', 'tickets.helptopic', '=', 'b.id')
                  ->where('user_id',$user_id)
                  ->select('tickets.id','tickets.Subject','tickets.priority','tickets.assigned','tickets.status','b.helptopic as helptopic')
                  ->orderBy('tickets.id', 'DESC')
                  ->paginate(3);

      //$ticket = Ticket::where('user_id',$user_id)->latest()->orderBy('id','DESC')->paginate(15);
      $user =User::all();
      return view('dashboard.myticket', ['tickets'=>$ticket],compact('user','user_email'));
      }
      else
      {
        return redirect('/Ticket-Management-System/employee-login');
      }
    }
    

    public function viewCharts()
    {
      $current_month_app=Ticket::whereYear('created_at',Carbon::now()->year)->whereMonth('created_at',Carbon::now()->month)->count();                        
      $last_month_app=Ticket::whereYear('created_at',Carbon::now()->year)->whereMonth('created_at',Carbon::now()->submonth(1))->count();
      $last_last_month_app=Ticket::whereYear('created_at',Carbon::now()->year)->whereMonth('created_at',Carbon::now()->submonth(2))->count();
      $last_last_last_month_app=Ticket::whereYear('created_at',Carbon::now()->year)->whereMonth('created_at',Carbon::now()->submonth(3))->count();
      $Jobs=User::all()->count();
      $applicants=Ticket::all()->count();
      return view('admin.dashboard')->with(compact('current_month_app','last_month_app','last_last_month_app','last_last_last_month_app','Jobs','applicants'));
    }

    public function viewticket($id)
    {
    
      if(\Auth::check()){
     
      $user_id=Auth::User()->id;
      $user_email=Auth::User()->email;
      $user_name=Auth::User()->name;
      $ticket = Ticket::find($id);
      $comment = Comment::where('user_id',$user_id)->latest()->orderBy('id','DESC')->paginate(30);
      return view('dashboard.view_my_ticket' , ['comments'=>$comment],compact('user_id','user_email','user_name','ticket'));
      }
      else
      {
        return redirect('/Ticket-Management-System/employee-login');
      }
    }

    public function comment(Request $request,$id)
    {
      $user_id=Auth::User()->id;
      $this->validate($request, [
        'comment' => 'required|max:255',
           ]);
      $categoryData =new Comment;
      $categoryData->ticket_id=$request->ticket_id;
      $categoryData->user_id = $user_id;
      $categoryData->comment = $request->comment;
      $categoryData->save();
      return redirect()->back();
    }
  
   
    public function UserLogout()
    {
        Auth::logout();
        return redirect('/Ticket-Management-System/employee-login');
    }
}
