
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
            <title> Ticket Management System </title>
    <!-- faveo favicon -->
    <link href="https://tickets.neosofttech.com/images/FavIcon.png" rel="shortcut icon">
    

    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- samadhan css -->
    <link href="https://tickets.neosofttech.com/lb-faveo/css/custom-style.css" rel="stylesheet" type="text/css" />
    <!-- Bootstrap 3.3.2 -->
    <link href="https://tickets.neosofttech.com/lb-faveo/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <!-- Admin LTE CSS -->
    <link href="https://tickets.neosofttech.com/lb-faveo/css/AdminLTEsemi.css" rel="stylesheet" type="text/css"/>
    <!-- Font Awesome Icons -->
    <link href="https://tickets.neosofttech.com/lb-faveo/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <!-- Ionicons -->
    <link href="https://tickets.neosofttech.com/lb-faveo/css/ionicons.min.css" rel="stylesheet" type="text/css"/>
    <!-- fullCalendar 2.2.5-->
    <link href="https://tickets.neosofttech.com/lb-faveo/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet"
          type="text/css"/>
    <!-- Theme style -->
    <link href="https://tickets.neosofttech.com/lb-faveo/css/jquery.rating.css" rel="stylesheet" type="text/css"/>

    <link href="https://tickets.neosofttech.com/lb-faveo/css/app.css" rel="stylesheet" type="text/css"/>

    <link href="https://tickets.neosofttech.com/lb-faveo/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet"
          type="text/css"/>
    <link href="https://tickets.neosofttech.com/css/custom.css" rel="stylesheet" type="text/css" />
    <!-- author rahul -->
        <style>
            .error{
                color:red;
            }
        </style>
        <!-- author rahul -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <script src="https://tickets.neosofttech.com/lb-faveo/js/jquery2.1.1.min.js" type="text/javascript"></script>
    <link href="https://tickets.neosofttech.com/lb-faveo/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet"
    type="text/css" />
<link href="https://tickets.neosofttech.com/lb-faveo/css/widgetbox.css" rel="stylesheet" type="text/css" />
<link href="https://tickets.neosofttech.com/lb-faveo/plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css" />
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

<link href="https://tickets.neosofttech.com/lb-faveo/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
</head>
<body>
    <div id="page" class="hfeed site">
        <!-- <header id="masthead" class="site-header" role="banner">
            <div class="container" style="">
                <div id="logo" class="site-logo text-center" style="font-size: 30px;">
                    <a href="https://tickets.neosofttech.com">
                        <img src="https://tickets.neosofttech.com/uploads/company/logo.jpg" alt="NeoSOFT" width="200px" height="200px"/>
                    </a>
                </div>
                <div id="navbar" class="navbar-wrapper text-center">
                    <nav class="navbar navbar-default site-navigation" role="navigation">
                        <ul class="nav navbar-nav navbar-menu">

                            
                                                        

                                                            
                                
                                                    </ul>
                    </nav>
                </div>
                            </div>
        </header> -->
        <!-- Left side column. contains the logo and sidebar -->
        <!-- Right side column. Contains the navbar and content of the page -->
        <!-- 
        <div class="site-hero clearfix">
    <ol class="breadcrumb breadcrumb-custom">
        <li>
            <a href="https://tickets.neosofttech.com">
                <i class="fa fa-home "></i>&nbsp;Home
            </a>
        </li>
        <li>Login</li>
    </ol>
</div>
 -->
        <!-- Main content -->

        <div id="main" class="clearfix login-main">
         <img src="https://tickets.neosofttech.com/uploads/company/bgGrey.svg" class="login-page-bg-left"/>
                                                <!-- failure message -->
                                
<!-- <div id="content" class="site-content">
        <div id="corewidgetbox">

        </div>
    </div> -->
<div class="widgetrow text-center">
    
    </div>
<div class="login-body">
    <div class="form-login">
        <img src="https://tickets.neosofttech.com/uploads/company/ticketsLogo-Black.svg" class="neo-logo" />
        <h4 class="login-title">Login</h4>
        <h5 class="login-subtitle">Enter your details to login your account</h5>
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
    
        
                
        <form method="POST" action="{{route('Ticket-Management-System/check')}}">
        {{ csrf_field() }} 

        <div class="form-group ">
            <label for="login_email">Email</label>
            <div class="login-form__email">
                <input placeholder="Email" class="form-control" name="email" type="text">
              
            </div>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            
			  <input placeholder="Password" class="form-control" name="password" type="password" value="">
			
        </div>
        <!-- Password -->
        <!--<div class="form-group ">-->
        <!--    <label for="password">Password</label>-->
        <!--    <input placeholder="Password" class="form-control" name="password" type="password" value="">-->
        <!--</div>-->

        <button type="submit" class="theme-btn">
            Login
        </button>
        </br>
        <h3>Don't have an account <a href="/Ticket-Management-System/employee-register">Register here ...! </a></h3>


        <!-- <div class="row">
            <div class="col-xs-12">
                <div class="col-xs-4">
                    <div>
                        <label>
                            <input type="checkbox" name="remember"> Remember me
                        </label>
                    </div>
                </div>
            </div>
        </div> -->
        </form>
    </div>
</div>

<script type="text/javascript">
$(function() {
    $('.dialogerror, .dialoginfo, .dialogalert').fadeIn('slow');
    $("form").bind("submit", function(e) {
        $(this).find("input:submit").attr("disabled", "disabled");
    });
});
</script>
<script type="text/javascript">
try {
    if (top.location.hostname != self.location.hostname) {
        throw 1;
    }
} catch (e) {
    top.location.href = self.location.href;
}
$('.digit-group').find('input').each(function() {
	$(this).attr('maxlength', 1);
  // $(this).on('keyup', function(e) {
  //     var parent = $($(this).parent());
  //
  //     if(e.keyCode === 8 || e.keyCode === 37) {
  //         var prev = parent.find('input#' + $(this).data('previous'));
  //
  //         if(prev.length) {
  //             $(prev).select();
  //         }
  //     } else if((e.keyCode >= 96 && e.keyCode <= 105) || e.keyCode === 39) {
  //         console.log('ec');
  //         var next = parent.find('input#' + $(this).data('next'));
  //
  //         if(next.length) {
  //             $(next).select();
  //         } else {
  //             if(parent.data('autosubmit')) {
  //                 parent.submit();
  //             }
  //         }
  //     } else {
  //         event.preventDefault();
  //         return false;
  //     }
  // });
	// $(this).on('keypress', function(e) {
      // var parent = $($(this).parent());
      $(this).keydown(function(e)
      {
          var key = e.charCode || e.keyCode || 0;
          // allow backspace, tab, delete, enter, arrows, numbers and keypad numbers ONLY
          // home, end, period, and numpad decimal
          return (
              key == 8 ||
              key == 9 ||
              key == 13 ||
              key == 46 ||
              key == 110 ||
              key == 190 ||
              (key >= 35 && key <= 40) ||
              (key >= 48 && key <= 57) ||
              (key >= 96 && key <= 105));
      });
      $(this).keyup(function(e)
      {
          var parent = $($(this).parent());
          var key = e.charCode || e.keyCode || 0;
          console.log(key);
          // allow backspace, tab, delete, enter, arrows, numbers and keypad numbers ONLY
          // home, end, period, and numpad decimal
          if(key == 8 || key == 37) {
              var prev = parent.find('input#' + $(this).data('previous'));

              if(prev.length) {
                  $(prev).select();
              }
          } else if(
              key == 13 ||
              key == 46 ||
              key == 110 ||
              key == 190 ||
              (key >= 35 && key <= 40) ||
              (key >= 48 && key <= 57) ||
              (key >= 96 && key <= 105)) {
              console.log('ec');
              var next = parent.find('input#' + $(this).data('next'));

              if(next.length) {
                  $(next).select();
              } else {
                  if(parent.data('autosubmit')) {
                      parent.submit();
                  }
              }
          }
          return (
              key == 8 ||
              key == 9 ||
              key == 13 ||
              key == 46 ||
              key == 110 ||
              key == 190 ||
              (key >= 35 && key <= 40) ||
              (key >= 48 && key <= 57) ||
              (key >= 96 && key <= 105));
      });
	// });
});
</script>
                <div id="sidebar" class="site-sidebar col-md-3">
                    <div class="widget-area">
                        <section id="section-banner" class="section">
                                                    </section><!-- #section-banner -->
                        <section id="section-categories" class="section">
                                                    </section><!-- #section-categories -->
                    </div>
                </div><!-- #sidebar --> 
            <img src="https://tickets.neosofttech.com/uploads/company/login.svg" class="login-page-bg"/>
            <img src="https://tickets.neosofttech.com/uploads/company/leftbg.png" class="login-leftImg"/>
        </div>
        <!-- /.content-wrapper -->

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
        <!--  author : rahul Dhopte -->
        <script type="text/javascript" src=https://tickets.neosofttech.com/js/jquery-ui.min.js></script>
        <script type="text/javascript" src=https://tickets.neosofttech.com/js/jquery.validate.min.js></script>
        <script type="text/javascript" src=https://tickets.neosofttech.com/js/common.js></script>
        <!--  author : rahul Dhopte -->
        <script>
            $(function () {
    //Enable check and uncheck all functionality
                $(".checkbox-toggle").click(function () {
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
                $(".mailbox-star").click(function (e) {
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
        </script>
    </div>
</body>
</html>