
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
                    
                                        

                <li class = "active" ><a href="/Ticket-Management-System/My-Tickets" style="font-weight: 600;font-size: 20px;padding: 2px 0px !important;"><i class="fa fa-user" style="font-size:20px"></i>
                        <span>My Tickets</span></a></li>
</br>
                        
                    <li 
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
                        <a href="/Ticket-Management-System/My-Tickets" title=""><img src="https://tickets.neosofttech.com/uploads/arrow.svg" alt=""/>Back</a>
                                    <h2>View Ticket
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
                                
                                <a href="{{route('/Ticket-Management-System/UserLogout')}}"  class="cancel">Logout</a>
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
<!-- failure message -->
<div class="ticket-box ticket-box-view" style="height: calc(100vh - 80px)">


    <div class="col-md-5 custom-first-div">
            <div class="profile">
              <img src="https://tickets.neosofttech.com/uploads/user.png">
                <div class="data">
                    <h4>{{$user_name}}
                      <span> {{$user_email}} </span>
                      <span style="color: #ec6060">Employee Code := {{$user_id}}</span>
                    </h4>
                    
                </div>

            </div>
            <div class="form-group">
                <label>Ticket No</label>
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

  </div>
        <div class="col-md-7" style="padding: 3rem 0rem 1rem 0rem; height: calc(100vh - 100px)">
        <div class="recent-comments" style="padding: 0 0 0 3rem">
            <h3 style="padding: 0; margin: 0">Recent Comments</h3>
            <ul>
                                <li>
                                        <div class="short-name own" title="EMPLOYEE"><i class="fa fa-user"></i></div>
                                        <div class="comment-details">

                                             <p> {{$ticket['Details']}}</p>
                                              
                                        </div>
                                  </li>
                                  @foreach($comments as $comment)
                                  <li>
                                        <div class="short-name own" title="{{$ticket['assigned']}}"><i class="fa fa-user"></i></div>
                                        
                                        <div class="comment-details">
                                             <p> {{$comment->comment}}</p>
                                             
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
                            
                            <input type="hidden" id="ticket_id" name="ticket_id" value="{{$ticket['id']}}">
                         
                  <input type="hidden" class="form-control" name="user_id" value="{{ $ticket->user_id }}" />
                 
                </div>
                <button type="submit" class="btn btn-danger"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
            </div>
          </form>
        </div>
    </div>
    <div class="row">
        <div id="loader" style="display:none;">
            <div class="col-xs-5">
            </div>
            <div class="col-xs-1">
                <img
                    src="https://tickets.neosofttech.com/lb-faveo/media/images/gifloader.gif"><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
            </div>
            <div class="col-xs-6">
            </div>
        </div>
    </div>

    <div class="modal fade in" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModal"
         aria-hidden="false" style="display: none; padding-right: 15px;background-color: rgba(0, 0, 0, 0.7);">
        <div class="modal-dialog" role="document">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close delete-closemodal" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">×</span></button>
                        <h4 class="modal-title"></h4>
                    </div>
                    <div class="modal-body">
                        <p id="custom-delete-body"></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" style="background-color: #dd4b39;" class="btn btn-primary pull-left delete-yes">Ok</button>
                        <button type="button" class="btn btn-default delete-no"
                                data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
// function checkFunction() {
//     var x;
//     x = document.getElementById("reply-input").value;
//     if (x == "") {
//         alert("Reply can not be blank. Please enter your reply.");
//         return false;
//     };
// }
function clearAll() {
    $("#file_details").html("");
    $("#total-size").html("");
    $("#attachment").val('');
    $("#attachment-error").html('');
    $("#clear-file").hide();
    $("#replybtn").removeClass('disabled');
}
$('#attachment').change(function() {
    input = document.getElementById('attachment');
    if (!input) {
        alert("Um, couldn't find the fileinput element.");
    } else if (!input.files) {
        alert("This browser doesn't seem to support the `files` property of file inputs.");
    } else if (!input.files[0]) {} else {
        $("#file_details").html("");
        var total_size = 0;
        for (i = 0; i < input.files.length; i++) {
            file = input.files[i];
            var supported_size = "2097152";
            var supported_actual_size = "2";
            // if (file.size < supported_size) {
                $("#file_details").append("<div style='color: #009aba'> " + file.name + ": " +
                    formatBytes(file.size) + "</div>");
            // } else {
            //     $("#file_details").append("<div style='color:red;'>" + file.name + ":" +
            //         formatBytes(file.size) + "</td> </div>");
            // }
            total_size += parseInt(file.size);
        }
        // if (total_size > supported_size) {
        //     $("#total-size").append("<span style='color:red'>Your total file upload size is greater than " +
        //         supported_actual_size + "</span>");
        //     $("#replybtn").addClass('disabled');
        //     $("#clear-file").show();
        // } else {
            $("#total-size").html("");
            $("#replybtn").removeClass('disabled');
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
// });
$("#cc_page").on('click', '.search_r', function() {
    var search_r = $('a', this).attr('id');
    $.ajax({
        type: "GET",
        url: "../ticket/status/50498/" + search_r,
        beforeSend: function() {
            $("#refresh").hide();
            $("#loader").show();
        },
        success: function(response) {
            $("#refresh").load("../check_ticket/eyJpdiI6ImJuQ1wvU3lqUFV5MUgxOGNYWDR6b29RPT0iLCJ2YWx1ZSI6ImlsQlhsWkNGRGo2VUtFeDhYaUdEU3c9PSIsIm1hYyI6ImRlNmNlZjhhZDkwZWI3YjdmNjY2NjZlM2JhNmZlYmEzNTMwZTgzNGM0NTZkMGEwNGU2NjRiZGQwZTQyYTE1MTMifQ==  #refresh");
            $("#refresh").show();
            $("#loader").hide();
            var message = response;
            $("#alert11").show();
            $('#message-success1').html(message);
            setInterval(function() {
                $("#alert11").hide();
            }, 4000);
        }
    });
    return false;
});

$(document).ready(function() {
    var data = '';
    var Data = $('input[name="rating"]:checked').val();
    var Data2 = $('input[name="rating2"]:checked').val();
    if (Data) {
        $('input[name=rating]').rating('readOnly');
        jQuery('.star').attr('disabled', true);
    }
    $('.star').change(function() {
        $('#foo').submit();
        $('.foo2').submit();
    });
    $("#delete").click(function() {
        data = $(this).attr('data');
        $('#deleteModal').find('.modal-title').html('Confirmation');
        var msg = "Are you sure, you want to delete the ticket ?";
        $('.delete-yes').html("Yes");
        $('#custom-delete-body').html(msg);
        $("#deleteModal").css("display", "block");
    });
    $('.delete-yes').click(function() {
        window.location.href = data;
    });
    $(".delete-closemodal, .delete-no").click(function() {
        $("#deleteModal").css("display", "none");
    });
    $(".closemodal, .no").click(function() {
        $("#myModal").css("display", "none");
    });
    // process the form
    $('#foo').submit(function(event) {
        // get the form data
        // there are many ways to get this data using jQuery (you can use the class or id also)
        var formData = $(this).serialize();
        //$('#foo').serialize();
        // process the form
        $.ajax({
            type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
            url: '../rating/' + 50498, // the url where we want to POST
            data: formData, // our data object
            dataType: 'json', // what type of data do we expect back from the server
            success: function() {}
        });
        // using the done promise callback
        // stop the form from submitting the normal way and refreshing the page
        event.preventDefault();
    });
    // process the form
    $('.foo2').submit(function(event) {
        // get the form data
        // there are many ways to get this data using jQuery (you can use the class or id also)
        var formData = $(this).serialize();
        //$('#foo').serialize();
        // process the form
        $.ajax({
            type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
            url: '../rating2/' + 50498, // the url where we want to POST
            data: formData, // our data object
            dataType: 'json', // what type of data do we expect back from the server
            success: function() {}
        });
        // using the done promise callback
        // stop the form from submitting the normal way and refreshing the page
        event.preventDefault();
    });
});
$(function() {
    //Add text editor
    // $("textarea").wysihtml5({
    //         "image": false
    //     });
});

jQuery(document).ready(function() {
    // Close a ticket
    $('#close').on('click', function(e) {
        $.ajax({
            type: "POST",
            url: "../ticket/close/50498",
            data: {
                "_token": "6UNWWTALAxdbKQhP9tN1WDUgXaihC5MGJM3EENWU"
            },
            beforeSend: function() {
                $("#refresh").hide();
                $("#loader").show();
            },
            success: function(response) {
                location.reload();
                $("#refresh").load("../check_ticket/eyJpdiI6ImJuQ1wvU3lqUFV5MUgxOGNYWDR6b29RPT0iLCJ2YWx1ZSI6ImlsQlhsWkNGRGo2VUtFeDhYaUdEU3c9PSIsIm1hYyI6ImRlNmNlZjhhZDkwZWI3YjdmNjY2NjZlM2JhNmZlYmEzNTMwZTgzNGM0NTZkMGEwNGU2NjRiZGQwZTQyYTE1MTMifQ==  #refresh");
                $("#refresh").show();
                $("#loader").hide();
            }
        })
        return false;
    });

    // Resolved  a ticket
    $('#resolved').on('click', function(e) {
        $.ajax({
            type: "POST",
            url: "../ticket/resolve/50498",
            data: {
                "_token": "6UNWWTALAxdbKQhP9tN1WDUgXaihC5MGJM3EENWU"
            },
            beforeSend: function() {
                $("#refresh").hide();
                $("#loader").show();
            },
            success: function(response) {
                $("#refresh").load("../check_ticket/eyJpdiI6ImJuQ1wvU3lqUFV5MUgxOGNYWDR6b29RPT0iLCJ2YWx1ZSI6ImlsQlhsWkNGRGo2VUtFeDhYaUdEU3c9PSIsIm1hYyI6ImRlNmNlZjhhZDkwZWI3YjdmNjY2NjZlM2JhNmZlYmEzNTMwZTgzNGM0NTZkMGEwNGU2NjRiZGQwZTQyYTE1MTMifQ==  #refresh");
                $("#refresh").show();
                $("#loader").hide();
                var message = "Success! Your Ticket have been Resolved";
                $("#alert11").show();
                $('#message-success1').html(message);
                setInterval(function() {
                    $("#alert11").hide();
                    setTimeout(function() {
                        var link = document.querySelector('#load-inbox');
                        if (link) {
                            link.click();
                        }
                    }, 500);
                }, 2000);
            }
        })
        return false;
    });

    // Open a ticket
    // $('#open').on('click', function (e) {

    //     return false;
    // });
    $("#open").click(function() {
        // data = $(this).attr('data');
        $('#myModalLabel').html('Are you sure?');
        var msg = "Are you sure?";


        $('.yes').html("Yes");

        $('#custom-alert-body').html(msg);
        $("#myModal").css("display", "block");
    });
    $('.yes').click(function() {
        $.ajax({
            type: "POST",
            url: "../myticket/open/50498",
            data: {
                "_token": "6UNWWTALAxdbKQhP9tN1WDUgXaihC5MGJM3EENWU"
            },
            beforeSend: function() {
                $("#refresh").hide();
                $("#loader").show();
            },
            success: function(response) {
                location.reload();

                $("#refresh").load("../check_ticket/eyJpdiI6ImJuQ1wvU3lqUFV5MUgxOGNYWDR6b29RPT0iLCJ2YWx1ZSI6ImlsQlhsWkNGRGo2VUtFeDhYaUdEU3c9PSIsIm1hYyI6ImRlNmNlZjhhZDkwZWI3YjdmNjY2NjZlM2JhNmZlYmEzNTMwZTgzNGM0NTZkMGEwNGU2NjRiZGQwZTQyYTE1MTMifQ==  #refresh");
                $("#refresh").show();
                $("#loader").hide();

                var message = "Success! Your Ticket has been Opened";
                $("#alert11").show();
                $('#message-success1').html(message);
                setInterval(function() {
                    $("#alert11").hide();
                }, 4000);
            }
        })
    });
    $('.attach').on('click', function() {
       $('.attachment').css('display', 'block');
       $('.recent-comments ul').css('height', 'calc(100vh - 360px)');
    });
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
