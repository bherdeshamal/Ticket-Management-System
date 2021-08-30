
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
              
    <title>Ticket Management System </title>
    <!-- faveo favicon -->
    <link href="https://tickets.neosofttech.com/images/FavIcon.png" rel="shortcut icon">
    
    <!-- samadhan css -->
    <link href="https://tickets.neosofttech.com/lb-faveo/css/custom-style.css" rel="stylesheet" type="text/css" />
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="https://tickets.neosofttech.com/lb-faveo/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Admin LTE CSS -->
    <link href="https://tickets.neosofttech.com/lb-faveo/css/AdminLTEsemi.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://tickets.neosofttech.com/lb-faveo/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="https://tickets.neosofttech.com/lb-faveo/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- fullCalendar 2.2.5-->
    <link href="https://tickets.neosofttech.com/lb-faveo/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet"
        type="text/css" />
    <!-- Theme style -->
    <link href="https://tickets.neosofttech.com/lb-faveo/css/jquery.rating.css" rel="stylesheet" type="text/css" />

    <link href="https://tickets.neosofttech.com/lb-faveo/css/app.css" rel="stylesheet" type="text/css" />

    <link href="https://tickets.neosofttech.com/lb-faveo/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
    <link href="https://tickets.neosofttech.com/css/front-custom.css" rel="stylesheet" type="text/css" />
      <link href="https://employee.neosofttech.com/metronic/assets/app/css/sso-style.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- author rahul -->
    <style>
    div.error {
        color: red;
    }
    </style>
    <!-- author rahul -->
    <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

    <script src="https://tickets.neosofttech.com/lb-faveo/js/jquery2.1.1.min.js" type="text/javascript"></script>
    </head>

        <body>
    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures" style="padding: 0 30px">
        <div class="nano">
            <div class="nano-content custom-icon-size">
                <div class="logo" style="vertical-align: middle;
    display: table-cell;
    height: 70px;padding: 2px 0 0 0">
                    <a href="https://tickets.neosofttech.com">

                        <img src="https://tickets.neosofttech.com/uploads/company/ticketsLogo-Black.svg" style="width: 139px" alt="NeoSOFT Tickets" />
                    </a>
                    <!-- <div class="hamburger sidebar-toggle">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                    </div> -->
                </div>
                <ul>
                    
                                        

                    <li class="active"><a href="/Ticket-Management-System/My-Tickets" style="font-weight: 600;font-size: 20px;padding: 2px 0px !important;"><i class="fa fa-user fa-lg" style="font-size:20px"></i>
                        <span>My Tickets</span></a></li>
</br>
                          
                    <li ><a href="/Ticket-Management-System/Tickets/Create" style="font-weight: 600;font-size: 20px;padding: 2px 0px !important;"><i class="fa fa-ticket fa-lg" style="font-size:20px"></i>
                        <span>New Ticket</a></span>
                    </li>
                                    </ul>
            </div>
        </div>
    </div>
    <div class="header">
       
        <div class="title-wrap">
                                    <h2>Tickets
                          </h2>
                    </div>
                <ul class="list-unstyled">
                       
            <li class="header-profile d-block-inline" >
                <a href="#">
                    <img src="https://tickets.neosofttech.com/uploads/user.png" class="img-circle click-dropdown user-img" alt="User Image" height="20"
                        width="20" />
                    
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <div class="user-menu text-center clearfix">
                          <button onclick="clickDropdown()" type="sso-close-btn" style="
                              background-color: white;
                              border: none;
                              position: absolute;
                              margin-left: 50%;
                              opacity: 0.7;
                          ">✖</button>
                            <img src="https://tickets.neosofttech.com/uploads/user.png" class="img-circle" alt="User Image" height="80"
                                width="80" />
                            <h5 style="word-wrap: break-word" class="banner-title">
                               {{$user_email}}</h5>
                            <div class="banner-content">
                                
                                <a href="{{route('/Ticket-Management-System/UserLogout')}}" class="cancel">Logout</a>
                            </div>
                                                                                                                                        </div>
                    </li>
                </ul>
            </li>
                    </ul>
    </div>
    <!-- Main content -->
    <div class="content-wrap">
        <section class="main-content" style="height: calc(100vh - 70px)">
                        
                        <!-- Main content -->
<div id="content" class="site-content ticket-tab">
    <div>
            <ul class="year-list list-unstyled m-0">
                
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab_1">
                    <div class="common-title" style="margin-top: 5px;">
                        <div class="row" style="width: 100%; display: none">
                            <div class="col-md-4" style="float: right; padding-right: 0px">
                                <select class="form-control select type_dropdown" data-mode="open">
                                    <option value>Select Type</option>

                                                                    </select>
                            </div>
                            <div class="col-md-2" style="float: right; padding-right: 0px"><b style="margin-top: 8px; margin-left: 10px; display: block;text-align: right">Ticket Type</b></div>

                        </div>
                    </div>
    <form method="POST" action="https://tickets.neosofttech.com/select_all" accept-charset="UTF-8"><input name="_token" type="hidden" value="pxpFUk1FQlF8NrqxOK2RhxqHFAba0Hh0ktuJbum4">
    
    <!-- Check all button -->
    
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
    
    
    <div class=" table-responsive mailbox-messages common-table-style" id="refresh1">
        <p style="display:none;text-align:center; position:fixed; margin-left:37%;margin-top:-80px;" id="show1"
            class="text-red"><b>Loading...</b></p>
        <!-- table -->
        <table class="table">
            <thead>
                
                <tr>
                    <th>
                    <h1 style="color:red;font-size:20px;"> Ticket</h1>
                    </th>
                    <th width="25%">
                    <h1 style="color:red;font-size:20px;"> Type</h1>
                    </th>
                   
                    <th width="20%">
                    <h1 style="color:red;font-size:20px;"> Subject</h1>
                    </th>
                    <th class="text-center">
                    <h1 style="color:red;font-size:20px;"> Priority</h1>
                    </th>
                    <th class="text-center">
                    <h1 style="color:red;font-size:20px;"> Assigned To</h1>
                    </th>
                    <th>
                    <h1 style="color:red;font-size:20px;"> Status</h1>
                    </th>
                    <th>
                    <h1 style="color:red;font-size:20px;"> Action</h1>
                    </th>
                </tr>
            </thead>
            <tbody>
            @foreach($tickets as $ticket)
            <tr> 
                    <th>
                    <h1 style="color:black;font-size:18px;"> {{$ticket->id}}</h1>
                    </th>
                    <th width="25%">
                    <h1 style="color:black;font-size:18px;">  {{$ticket->helptopic}}</h1>
                    </th>
                    

                    <th width="20%">
                    <h1 style="color:black;font-size:18px;">  {{$ticket->Subject}}</h1>
                    </th>
                    <th class="text-center">
                    <h1 style="color:black;font-size:18px;"> @if($ticket->priority==1)Low @elseif($ticket->priority==2) Medium @elseif($ticket->priority==3) High @endif
                   </h1>
                    </th>
                    <th class="text-center">
                    <h1 style="color:black;font-size:18px;"> {{$ticket->assigned}}</h1>
                    </th>
                    <th>
                    <h1 style="color:black;font-size:18px;">  {{$ticket->status}}</h1>
                    </th>
                    <th>
                    <h1 style="color:black;font-size:18px;"><a href="/Ticket-Management-System/view-my-ticket/{{$ticket->id}}" class="theme-btn">VIEW</a></h1>
                    </th>
                </tr>
                            </tbody>
            @endforeach
        </table>
        {!! $tickets->links('pagination::bootstrap-4')!!}
        <!-- /.table -->
        <div class="pull-right">
            &nbsp;
        </div>
    </div><!-- /.mail-box-messages -->
    </form>
     </div>
    
</div>
<div class="modal fade in" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false"
    style="display: none; padding-right: 15px;background-color: rgba(0, 0, 0, 0.7);">
    <div class="modal-dialog" role="document">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close " id="closemodal" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel1"></h4>
                </div>
                <div class="modal-body" id="custom-alert-body1">
                </div>
                <div class="modal-footer">
                    <button type="button" style="background-color: #dd4b39;" class="btn btn-primary pull-left" id="yes">Ok</button>
                    <button type="button" class="btn btn-default " id="no"
                        data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    let open_ticket_url = 'https://tickets.neosofttech.com/open/mytickets';
    let close_ticket_url = 'https://tickets.neosofttech.com/close/mytickets';
$(function() {
    //Enable check and uncheck all functionality
    $(".checkbox-toggle").click(function() {
        var clicks = $(this).data('clicks');
        if (clicks) {
            //Uncheck all checkboxes
            $(".mailbox-messages input[type='checkbox']").iCheck("uncheck");
            $(".fa", this).removeClass("fa-check-square-o").addClass('fa-square-o');
        } else {
            //Check all checkboxes
            $(".mailbox-messages input[type='checkbox']").iCheck("check");
            $(".fa", this).removeClass("fa-square-o").addClass('fa-check-square-o');
        }
        $(this).data("clicks", !clicks);
    });
    $(".ticket-search .dropdown-toggle").on("click", function(){
        $(".search-div").toggleClass("show");
    })
});

$(function() {
    // Enable check and uncheck all functionality
    $(".checkbox-toggle").click(function() {
        var clicks = $(this).data('clicks');
        if (clicks) {
            //Uncheck all checkboxes
            $("input[type='checkbox']", ".mailbox-messages").iCheck("uncheck");
        } else {
            //Check all checkboxes
            $("input[type='checkbox']", ".mailbox-messages").iCheck("check");
        }
        $(this).data("clicks", !clicks);
    });
});

$(document).ready(function() { /// Wait till page is loaded
    $('#click1').click(function() {
        $('#refresh1').load('mytickets #refresh1');
        $('#refresh21').load('mytickets #refresh21');
        $("#show1").show();
    });
});

$(document).ready(function() { /// Wait till page is loaded
    var data = '';
    $('#click2').click(function() {
        $('#refresh2').load('mytickets #refresh2');
        $('#refresh22').load('mytickets #refresh22');
        $("#show2").show();
        $('#myModalLabel1').html('Are you sure?');
        var msg = "Are you sure?";


        $('.yes').html("Yes");

        $('#custom-alert-body1').html(msg);
        $("#myModal1").css("display", "block");
    });

    $('#reopen_button').click(function(e) {
        e.preventDefault();
        // var reopen_count=$("input[name=select_all[]").val();
        $('#myModalLabel1').html('Confirmation');
        var msg = "Are you sure, you want to change the status ?";


        $('#yes').html("Yes");

        $('#custom-alert-body1').html(msg);
        $("#myModal1").css("display", "block");
    });

    $(".delete").click(function() {
        // console.log('he');
        data = $(this).attr('data');
        $('#myModalLabel').html('Confirmation');
        var msg = "Are you sure, you want to delete the ticket ?";
        $('.yes').html("Yes");
        console.log($('#custom-alert-body'));
        $('#custom-alert-body').html(msg);
        $("#myModal").css("display", "block");
    });
    $('.yes').click(function() {
        window.location.href = data;
    });
    $('#yes').click(function() {
        $("#reopen_form").submit();
    });
    $(".closemodal, .no").click(function() {
        $("#myModal").css("display", "none");
    });
    $("#closemodal, #no").click(function() {
        $("#myModal1").css("display", "none");
    });

    $(".type_dropdown").on('change', function (){
        type_id = $(this).val();
        mode = $(this).data('mode');

        if(type_id == ''){
            if(mode == 'open'){
                window.location.href = open_ticket_url
            }
            else{
                window.location.href = close_ticket_url
            }
        }
        else{
            if(mode == 'open'){
                window.location.href = `${open_ticket_url}?type_id=${type_id}`
            }
            else{
                window.location.href = `${close_ticket_url}?type_id=${type_id}`
            }
        }
    })
});
</script>
            <div id="sidebar" class="site-sidebar col-md-3">
                <div class="widget-area">
                    <section id="section-banner" class="section">
                                            </section>
                    <section id="section-categories" class="section">
                                            </section>
                </div>
            </div>
        </section>
    </div>

    <div class="modal fade in" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="false" style="display: none; padding-right: 15px;background-color: rgba(0, 0, 0, 0.7);">
        <div class="modal-dialog" role="document">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close closemodal" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">×</span></button>
                        <h4 class="modal-title" id="myModalLabel"></h4>
                    </div>
                    <div class="modal-body">
                        <p id="custom-alert-body"></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" style="background-color: #dd4b39;" class="btn btn-primary pull-left yes">Ok</button>
                        <button type="button" class="btn btn-default no"
                            data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <footer id="colophon" class="site-footer" role="contentinfo">
                <div class="container">
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="site-info col-md-6">
                            <p class="text-muted">Copyright &copy; 2021 <a href="#"
                                                                                                                  target="_blank">NeoSOFT
                                    Technologies</a>. All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </footer> -->
    <!-- jQuery 2.1.1 -->
    <script src="https://tickets.neosofttech.com/lb-faveo/js/jquery2.1.1.min.js" type="text/javascript"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="https://tickets.neosofttech.com/lb-faveo/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- Slimscroll -->
    <script src="https://tickets.neosofttech.com/lb-faveo/js/superfish.js" type="text/javascript"></script>

    <script src="https://tickets.neosofttech.com/lb-faveo/js/mobilemenu.js" type="text/javascript"></script>

    <script src="https://tickets.neosofttech.com/lb-faveo/js/know.js" type="text/javascript"></script>

    <script src="https://tickets.neosofttech.com/lb-faveo/js/jquery.rating.pack.js" type="text/javascript"></script>

    <script src="https://tickets.neosofttech.com/lb-faveo/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"
        type="text/javascript"></script>

    <script src="https://tickets.neosofttech.com/lb-faveo/plugins/iCheck/icheck.min.js" type="text/javascript"></script>

    <script src="https://tickets.neosofttech.com/lb-faveo/js/languagechanger.js" type="text/javascript"></script>

    <script src="https://tickets.neosofttech.com/lb-faveo/js/languagechanger.js" type="text/javascript"></script>

    <!-- samadhan sidebar js -->
    <script src="https://tickets.neosofttech.com/lb-faveo/js/sidebar.js" type="text/javascript"></script>
    <!--  author : rahul Dhopte -->
    <script type="text/javascript" src=https://tickets.neosofttech.com/js/jquery-ui.min.js></script>
    <script type="text/javascript" src=https://tickets.neosofttech.com/js/jquery.validate.min.js></script>
    <script type="text/javascript" src=https://tickets.neosofttech.com/js/additional-methods.min.js></script>
    <script type="text/javascript" src=https://tickets.neosofttech.com/js/common.js></script>
    <script src="https://employee.neosofttech.com/metronic/assets/app/js/sso_process_new.js"></script>
    <!--  author : rahul Dhopte -->
    <script>
    $(function() {
        $(".hamburger").on('click', function() {
            $(this).toggleClass("is-active");
        });
        $(".header-profile .user-img").on('click', function() {
            $('.header-profile .dropdown-menu').toggleClass("active");
        });
        //Enable check and uncheck all functionality
        $(".checkbox-toggle").click(function() {
            var clicks = $(this).data('clicks');
            if (clicks) {
                //Uncheck all checkboxes
                $("input[type='checkbox']", ".mailbox-messages").iCheck("uncheck");
            } else {
                //Check all checkboxes
                $("input[type='checkbox']", ".mailbox-messages").iCheck("check");
            }
            $(this).data("clicks", !clicks);
        });
        //Handle starring for glyphicon and font awesome
        $(".mailbox-star").click(function(e) {
            e.preventDefault();
            //detect type
            var $this = $(this).find("a > i");
            var glyph = $this.hasClass("glyphicon");
            var fa = $this.hasClass("fa");
            //Switch states
            if (glyph) {
                $this.toggleClass("glyphicon-star");
                $this.toggleClass("glyphicon-star-empty");
            }
            if (fa) {
                $this.toggleClass("fa-star");
                $this.toggleClass("fa-star-o");
            }
        });
    });
    var token ='';
    var current_url ="https://tickets.neosofttech.com/";
    var username ="Shamal Bherde";
    var email ="shamal.bherde@neosoftmail.com";
    checkPortalPermission(current_url,username,email,token);
    function clickDropdown() {
        $('.click-dropdown').click();
    }
    </script>

</body>

</html>
