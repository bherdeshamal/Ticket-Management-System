
<!-- breadcrumbs -->
<!-- /breadcrumbs -->
<!-- content -->

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
              
    <title> Ticket Management System </title>
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
</br>  
                                        

                    <li ><a href="/Ticket-Management-System/My-Tickets" style="font-weight: 600;font-size: 20px;padding: 2px 0px !important;"><i class="fa fa-user" style="font-size:20px"></i>
                        <span>My Tickets</span></a></li></br>
                     
                    <li class = "active"
><a href="/Ticket-Management-System/Tickets/Create" style="font-weight: 600;font-size: 20px;padding: 2px 0px !important;"><i class="fa fa-ticket" style="font-size:20px"></i>
                        <span>New Ticket</a></span>
                    </li>
                                    </ul>
            </div>
        </div>
    </div>
    <div class="header">
        <!-- <div class="logo">
            <a href="https://tickets.neosofttech.com">
                <img src="https://tickets.neosofttech.com/uploads/company/neosoft-logo.svg" alt="NeoSOFT" />
            </a>
            <div class="hamburger sidebar-toggle">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </div>
        </div> -->
        <div class="title-wrap">
                                    <h2>New Ticket
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
                              
                            <div class="banner-content">
                                {{$user_email}}
</br>
</br>
                                <a href="{{route('/Ticket-Management-System/UserLogout')}}"  class="cancel" >Logout</a>
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
                        
                        <div id="content" class="site-content form-style">
            <!-- open a form -->
    
    <script src="https://tickets.neosofttech.com/lb-faveo/js/jquery2.0.2.min.js" type="text/javascript"></script>
    <!--
        |====================================================
        | SELECT FROM
        |====================================================
        -->
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
       
    <form method="POST" action="{{route('Ticket-Management-System/Tickets/Store')}}" >

        {{csrf_field()}}
        <div class="ticket-box">
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
        <div class="row">
            <div class="col-md-6">
                <div class="profile">
                    <img src="https://tickets.neosofttech.com/uploads/user.png">
                    <div class="data">
                      <h4>{{$user_name}}
</br>
                        <span> {{$user_email}} </span>
                        <span style="color: #ec6060">Employee Code := {{$user_id}}</span>
                      </h4>
                     
                    </div>
                </div>
                
               
                <div class="form-group ">
                    <label for="helptopic">Ticket Type</label>
                    <span class="text-red"> *</span>
                   
                        <select class="form-control select" id="helptopic" name="helptopic">
                            <option selected="selected" value="">Select</option>
                            
                            @foreach($key as $row)
                            <option value="{{$row['id']}}">{{$row['helptopic']}}</option>
                           
                              @endforeach   
                             
</select>

                </div>

                <div class="form-group ">
                    <label for="Subject">Subject</label><span class="text-red"> *</span>
                    <input class="form-control text-capitalize" name="Subject" type="text" id="Subject">
                </div>

                <div class="form-group ">
                    <label for="priority">Priority</label>
                    <span class="text-red"> *</span>
                        <select class="form-control select" id="priority" name="priority">
                            <option selected="selected" value="">Select</option>
                            
                                   <option value="1">Low</option>
                                   <option value="2">Medium</option>
                                   <option value="3">High</option>
                        </select>
                </div>
              
               
            </div>
            <div class="col-md-6">
                <div class="form-group form-description ">
                    <label for="Details">Description</label>
                    <span class="text-red"> *</span>
                      <textarea class="form-control" style="border-radius: 8px!important" name="Details" cols="50" rows="10" id="Details" required></textarea>
                </div>
                    
                <div class="form-group ">
                   <input type="hidden" id="assigned" name="assigned" >
                </div>
                         
                <div class="text-right">
                    <input class="theme-btn" style="font-size:15px;" type="submit" value="Submit">
                </div>
               
               
            </div>
          
        </div>
    </div>
    </form>
    <!--
    |====================================================
    | SELECTED FORM STORED IN SCRIPT
    |====================================================
    -->
    <script type="text/javascript">
    function clearAll() {
        $("#attachment-error").html('');
        $("#file_details").html("");
        $("#total-size").html("");
        $("#attachment").val('');
        $("#clear-file").hide();
        $("#replybtn").removeClass('disabled');
    }
    $(document).ready(function() {
        //     var helpTopic = $("#selectid").val();
        //     send(helpTopic);
        //     $("#selectid").on("change", function () {
        //         helpTopic = $("#selectid").val();
        //         send(helpTopic);
        //     });

        //     function send(helpTopic) {
        //         $.ajax({
        //             url: "https://tickets.neosofttech.com/get-helptopic-form",
        //             data: {'helptopic': helpTopic},
        //             type: "GET",
        //             dataType: "html",
        //             success: function (response) {
        //                 $("#response").html(response);
        //             },
        //             error: function (response) {
        //                 $("#response").html(response);
        //             }
        //         });
        //     }
        $('#attachment').change(function() {
            input = document.getElementById('attachment');
            if (!input) {
                alert("Um, couldn't find the fileinput element.");
            } else if (!input.files) {
                alert("This browser doesn't seem to support the `files` property of file inputs.");
            } else if (!input.files[0]) {} else {
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                    $("#clear-file").show();
                // }
            }
        });

        function formatBytes(bytes, decimals) {
            if (bytes == 0) return '0 Byte';
            var k = 1000;
            var dm = decimals + 1 || 3;
            var sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB'];
            var i = Math.floor(Math.log(bytes) / Math.log(k));
            return parseFloat((bytes / Math.pow(k, i)).toFixed(dm)) + ' ' + sizes[i];
        }
    });

    $(function() {
        //Add text editor$("textarea").wysihtml5({
        //     "image": false

        // // });
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
