<!DOCTYPE html>
<html>
    <head>
        <title>Admin Home</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            h1.page-header 
            {
                margin-top: -5px;
            }

            .sidebar 
            {
                padding-left: 0;
            }

            .main-container 
            { 
                background: #FFF;
                padding-top: 15px;
                margin-top: -20px;
            }

            .footer 
            {
                position: fixed;
                bottom: 0;
                width: 100%;
            }  
        </style>
        <script type="text/javascript">
            $(document).ready(function()
            {
                $("#list").click(function(event)
                {
                    event.preventDefault();
                    // ajax
                    $.ajax(
                    {
                        url: "<?php echo base_url(); ?>" + "index.php/userlistingcontroller/listUser",
                        type: "POST",
                        // dataType- return data type from controller
                        dataType: 'json',
                        success: function(result)
                        {
                            // table heading
                            $('#table').html("<tr><th>" +"ID"+ "</th><th>" + "Email" +
                                "</th><th>" +"User Type" + "</th><th>" + "Activation" +
                                  "</th><th>" + "Status" + "</th></tr>");

                            // user listing
                            $.each(result.result, function(i, v) {
                                // i is index of your 0-based array index, v is your value
                                if (v.status == 1) {
                                    var statusbutton="btn btn-success";
                                    var status="Enable";
                                    $("#table").append("<tr><td>"+v.id+"</td><td>"+v.email+"</td><td>"+v.user_type+"</td><td>"+v.activation+
                                    '</td><td><a href="<?php echo base_url(); ?>index.php/userlistingcontroller/disableUser/'+
                                    v.id+'"class="'+statusbutton+'">'+status+'</a></td>');
                                }
                                if (v.status == 2) {
                                    var statusbutton="btn btn-danger";
                                    var status="Disable";
                                    $("#table").append("<tr><td>"+v.id+"</td><td>"+v.email+"</td><td>"+v.user_type+"</td><td>"+v.activation+
                                    '</td><td><a href="<?php echo base_url(); ?>index.php/userlistingcontroller/enableUser/'+
                                    v.id+'"class="'+statusbutton+'">'+status+'</a></td>');
                                }
                            });
                        },
                        error: function()
                        {
                            alert("Error");
                        }
                    });
                });
            });
        </script>
    </head>
    <body>
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" 
                     data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand">
                        Admin
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">            
                    <form class="navbar-form navbar-left" method="GET" role="search">
                        <div class="form-group">
                            <input type="text" name="q" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default">
                            <i class="glyphicon glyphicon-search">
                            </i>
                        </button>
                    </form>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown ">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" 
                             role="button" aria-expanded="false">
                                Account
                                <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li class="dropdown-header">Settings</li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="<?php echo base_url();?>index.php/adminlogout">Logout</a>
                                    </li>
                                </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
            <div class="container-fluid main-container">
                <div class="col-md-2 sidebar">
                    <ul class="nav nav-pills nav-stacked">
                        <li class="active">
                            <button class="btn btn-primary" id="list">List Users</button>
                        </li>
                        <!-- <li><a href="#" >Link</a></li> -->
                    </ul>
                </div>
                
                <div class="col-md-10 content">
                    <table class="table table-hover" id="table"> 
                    </table>
                </div>

                <footer class="pull-left footer">
                    <p class="col-md-12">
                        <hr class="divider">
                        Copyright &COPY; 2016 | Akash S Prakash
                    </p>
                </footer>
            </div>
    </body>
</html>