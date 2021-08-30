<!--

=========================================================
* Now UI Dashboard - v1.5.0
=========================================================

* Product Page: https://www.creative-tim.com/product/now-ui-dashboard
* Copyright 2019 Creative Tim (http://www.creative-tim.com)

* Designed by www.invisionapp.com Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
   
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('admin/assets/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{asset('admin/assets/img/favicon.png')}}">
 <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
   Ticket Management System
  </title>
  
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="{{asset('admin/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{asset('admin/assets/css/now-ui-dashboard.css?v=1.5.0')}}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{asset('admin/assets/demo/demo.css')}}" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
</head>


<body class="">
  <div class="wrapper ">
  <div class="sidebar" data-color="navy">
      
      <div class="logo">
        <a href="#" class="simple-text logo-mini">
          #
        </a>
        <a href="/Ticket-Management-System/admin-panel" class="simple-text logo-normal">
         Ticketing System
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
        <li >
            <a href="/Ticket-Management-System/admin-panel">
              <i class="now-ui-icons design_app"></i>
              <h5 class="card-title">  <p>Dashboard</p></h5>
            </a>
          </li>
          
         
          <li class="active" >
            <a href="/Ticket-Management-System/view-tickets">
              <i class="fa fa-ticket"></i>
              <h5 class="card-title">My Tickets</h5>
          </a>
          </li>
          <li>
            <a href="{{route('/Ticket-Management-System/AdminLogout')}}">
              <i class="fa fa-sign-out"></i>
              <h5 class="card-title">Logout</h5>
          </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo"><h2> View Details </h2></a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
           
            <ul class="navbar-nav">
            
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
            <div class="card">
            <div class="card-header">
                <h4 class="card-title"> 
                
                <a href="/Ticket-Management-System/admin-panel" class="btn btn-danger">   HOME</a>  
                <a href="/Ticket-Management-System/view-tickets" class="btn btn-success">   Back</a>  
              <div class="ticket-box ticket-box-view" style="height: calc(100vh - 80px)">


              <div class="col-md-12 custom-first-div">
                <div class="profile">
                

                </div></br></br>
                <div class="form-group">
                <h6> <label>Ticket No</label></h6>
                    <p>{{$ticket['id']}}
                        &nbsp;(<span
                            style="color:#f39c12">{{$ticket['status']}}</span>)
                    </p>
                </div>
                
               
                
                <div class="form-group">
                    <label>Subject</label>
                                    <p><span style="width: 40%" title="{{$ticket['Subject']}}">{{$ticket['Subject']}}</span></p>
                </div>
                
                <div class="form-group">
                    <label>Priority</label>
                    <p>
                        <span class="priority-span" style="color:#f39c11"
                            title="{{$ticket['priority']}}">@if($ticket->priority==1)Low @elseif($ticket->priority==2) Medium @elseif($ticket->priority==3) High @endif</span>
                    </p>
                </div>
                
                <div class="form-group rating">
                    <div>
                      <label>Assigned To</label>
                      <br>(<span style="color:#ec6060;">{{$ticket['assigned']}}</span>)
                    </div>
                </div>
              
            </br>
            <div class="recent-comments" style="padding: 0 0 0 3rem">
                <h6 style="padding: 0; margin: 0">Recent Comments</h6>
                  </br>

                   <ul>
                      <li>
                              
                              <div class="comment-details">

                                    <p> <i class="fa fa-user"> &nbsp {{$ticket['Details']}}</i></p>
                                    
                              </div>
                        </li>
                        @foreach($comments as $comment)
                        <li>
                                  <div class="comment-details">
                                    <p><i class="fa fa-user"> &nbsp {{$comment->comment}}</i></p>
                                    
                              </div>
                              
                        </li>
                        @endforeach
                      </ul>
                  <form method="POST" action="{{ route('comment', $ticket['id']) }}"">
                    {{csrf_field()}}
                    <div class="comment-textbox ">
                  
                        <div class="form-group">
                          <label>Comment</label> <span class="text-red"> *</span>
                          <textarea class="form-control" name="comment" rows="2"></textarea>
                          <input type="hidden" class="form-control" id="ticket_id" name="ticket_id" value="{{$ticket->id}}" />
                          <input type="hidden" class="form-control" name="user_id" value="{{ $ticket->user_id }}" />
                          
                        </div>
                        <button type="submit" class="btn btn-danger"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                    </div>
                  </form>
              </div>
          
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
        
     
     
     
            <footer class="footer">
        <div class=" container-fluid ">
          <nav>
            <ul>
             
            </ul>
          </nav>
          <div class="copyright" id="copyright">
         </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
</body>

</html>