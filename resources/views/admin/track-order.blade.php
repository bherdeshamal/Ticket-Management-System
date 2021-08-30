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
  <link rel="stylesheet" 
    href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" >
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


  <style>
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
</style>
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
         
          <li class="active">
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
            <a class="navbar-brand" href="#pablo"><h2> Track Ticket Status </h2></a>
            <!-- <a href="/admin-panel" class="btn btn-danger">   HOME</a>  -->
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
                <div class="top-nav">
                <h4 class="card-title"> 
                
               
                </h4>   
              
                </div>
                  </br></br>
              
                           @if(Session::has('success'))
                            <div class="alert alert-success" > 
                            
                                    {{session('success')}}
                            </div>
                            @endif
                            @if(Session::has('danger'))
                            <div class="alert alert-danger" > 
                            
                                    {{session('danger')}}
                            </div>
                            @endif
                      <!-- <div class="card-body">
                        <div class="table-responsive"> -->
                                
                            
                        <table class="table">
                            <thead class=" text-primary">
                            <tr>
                  
                            <!-- <th><b><font color="black">ID</b></th> -->
                            
                            <th><b><font color="black">Employee Email</b></th>
                            
                          
                            <th><b><font color="black">Subject</th>
                            <th><b><font color="black">Priority</th>
                            <th ><b><font color="black">Assigned </th>
                            <th ><b><font color="black">Status</th>
                            <!-- <th ><b><font color="black">Update</th>
                             -->
                            <th colspan =2><b><font color="black">Action</th>
                            
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $order)
                            <tr style="background:white;">
                            <!-- <td>
                            <h1 style="color:black;font-size:18px;">  {{$order->id}}
                            </td> -->
                            <td>
                            <h1 style="color:black;font-size:18px;">  {{$order->user_email}}
                            </td>
                            
                            <td>
                            <h1 style="color:black;font-size:18px;"> {{$order->Subject}}
                            </td><td>
                            <h1 style="color:black;font-size:18px;">  @if($order->priority==1)Low @elseif($order->priority==2) Medium @elseif($order->priority==3) High @endif
                            </td>
                            <td>
                            <h1 style="color:black;font-size:18px;">  {{$order->assigned}}
                            </td>
                           
                      
                            <td>
                              <select id="status" name="status" class="btn btn-primary status" >
                              <h1 style="color:black;font-size:18px;">
                              <option @if($order->status === 'Open') {{ 'selected' }} @endif value="{{$order->id.'~Open' }}">Open</option>  
                              <option @if($order->status === 'Closed') {{ 'selected' }} @endif value="{{$order->id.'~Closed' }}">Closed</option>
                              </select >
                            </td>
                            
                              <td> <a href="/Ticket-Management-System/view-ticket/{{$order->id}}"  <i class="fa fa-eye fa-lg" ></i></a></td>
                            <td> <a href="{{url('/view-application/delete-job/'.$order->id)}}" onclick="return confirm('Are you sure you want to delete?')" <i class="fa fa-trash fa-lg"></i></a></td>
                            
                             </tbody>

                            
                            @endforeach
                            </table>
                            {!! $orders->links('pagination::bootstrap-4')!!}
                   
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
  
  <script>
    $(document).ready(function(){
      $('.status').on('change', function() {
          //alert( this.value ); return;
           if(confirm("Are you sure you want to update? ")){ 
            var url = "{{url('/update-tracking-status')}}";  
            var status_val = this.value;
            var dataSplit = status_val.split('~');
            var uid = dataSplit[0];
            var statusText = dataSplit[1];
            //console.log('uid: ' +uid + ' text: ' +statusText); return;
            $.ajax({  
                url: url,
                type: "POST",
                dataType: 'json',
                cache: false,
                data:{ _token:'{{ csrf_token() }}', status: statusText, id: uid },
                success: function(res){ 
                 console.log(res);
                  if(res.response_msg === 'success'){
                    alert('Updated Successfully');
                      window.location.reload();
                  }else{
                      alert("Internal Server Error");
                  }
                }
              }); 
            }
        });
    });
    </script> 
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="{{asset('admin/assets/js/core/jquery.min.js')}}"></script>
  <script src="{{asset('admin/assets/js/core/popper.min.js')}}"></script>
  <script src="{{asset('admin/assets/js/core/bootstrap.min.js')}}"></script>
  <script src="{{asset('admin/assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!-- Chart JS -->
  <script src="{{asset('admin/assets/js/plugins/chartjs.min.js')}}"></script>
   <!-- Notifications Plugin   
  <script src="{{asset('admin/assets/js/plugins/bootstrap-notify.js')}}"></script> -->
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <!-- <script src="{{asset('admin/assets/js/now-ui-dashboard.min.js?v=1.5.0')}}" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <!-- <script src="{{asset('admin/assets/demo/demo.js')}}"></script> --> 
</body>

</html>