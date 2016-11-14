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
                        type: "POST",
                        url: "<?php echo base_url(); ?>" + "ajaxemailregistrationcontroller/emailregisration",
                        // dataType- return data type from controller
                        dataType: 'json',
                        success: function(result)
                        {
                            // .html for html display
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
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
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
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
                                aria-expanded="false">
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