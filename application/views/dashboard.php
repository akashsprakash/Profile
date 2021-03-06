<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            @import url('//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css');
            body 
            {
              background: lightgray;
            }

            .navbar-fixed-top 
            {
              top: 0;
              border-width: 0 0 1px;
            }

            .navbar-default .navbar-nav #user-profile 
            {
              height: 50px;
              padding-top: 15px;
              padding-left: 58px;
            }

            .navbar-default .navbar-nav #user-profile img {
              height: 45px;
              width: 45px;
              position: absolute;
              top: 2px;
              left: 8px;
              padding: 1px;
            }

            #wrapper 
            {
              padding-top: 50px;
              padding-left: 0;
              -webkit-transition: all .5s ease;
              -moz-transition: all .5s ease;
              -o-transition: all .5s ease;
              transition: all .5s ease;
            }

            @media (min-width: 992px) {
              #wrapper 
              {
                  padding-left: 225px;
              }
            }

            @media (min-width: 992px) {
              #wrapper #sidebar-wrapper 
              {
                  width: 225px;
              }
            }

            #sidebar-wrapper 
            {
              border-right: 1px solid #e7e7e7;
            }

            #sidebar-wrapper 
            {
              z-index: 1000;
              position: fixed;
              left: 225px;
              width: 0;
              height: 100%;
              margin-left: -225px;
              overflow-y: auto;
              background: #f8f8f8;
              -webkit-transition: all .5s ease;
              -moz-transition: all .5s ease;
              -o-transition: all .5s ease;
              transition: all .5s ease;
            }

            #sidebar-wrapper .sidebar-nav
             {
              position: absolute;
              top: 0;
              width: 225px;
              font-size: 14px;
              margin: 0;
              padding: 0;
              list-style: none;
            }

            #sidebar-wrapper .sidebar-nav li 
            {
              text-indent: 0;
              line-height: 45px;
            }

            #sidebar-wrapper .sidebar-nav li a 
            {
              display: block;
              text-decoration: none;
              color: #428bca;
            }

            .sidebar-nav li:first-child a 
            {
              background: #92bce0 !important;
              color: #fff !important;
            }

            #sidebar-wrapper .sidebar-nav li a .sidebar-icon
            {
                width: 45px;
                height: 45px;
                font-size: 14px;
                padding: 0 2px;
                display: inline-block;
                text-indent: 7px;
                margin-right: 10px;
                color: #fff;
                float: left;
            }

            #sidebar-wrapper .sidebar-nav li a .caret 
            {
                position: absolute;
                right: 23px;
                top: auto;
                margin-top: 20px;
            }

            #sidebar-wrapper .sidebar-nav li ul.panel-collapse 
            {
                list-style: none;
                -moz-padding-start: 0;
                -webkit-padding-start: 0;
                -khtml-padding-start: 0;
                -o-padding-start: 0;
                padding-start: 0;
                padding: 0;
            }

            #sidebar-wrapper .sidebar-nav li ul.panel-collapse li i 
            {
                margin-right: 10px;
            }

            #sidebar-wrapper .sidebar-nav li ul.panel-collapse li 
            {
                text-indent: 15px;
            }

            @media (max-width: 992px) {
              #wrapper #sidebar-wrapper {
                  width: 45px;
              }
              #wrapper #sidebar-wrapper #sidebar #sidemenu li ul 
              {
                  position: fixed;
                  left: 45px;
                  margin-top: -45px;
                  z-index: 1000;
                  width: 200px;
                  height: 0;
              }
            }

            .sidebar-nav li:first-child a 
            {
                background: #92bce0 !important;
                color: #fff !important;
            }

            .sidebar-nav li:nth-child(2) a 
            {
                background: #6aa3d5 !important;
                color: #fff !important;
            }

            .sidebar-nav li:nth-child(3) a 
            {
                background: #428bca !important;
                color: #fff !important;
            }

            .sidebar-nav li:nth-child(4) a 
            {
                background: #3071a9 !important;
                color: #fff !important;
            }

            .sidebar-nav li:nth-child(5) a 
            {
                background: #245682 !important;
                color: #fff !important;
            }
        </style>       
    </head>
    <body>
        <div id="navbar-wrapper">
            <header>
                <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#">&nbsp &nbsp Profile</a>
                        </div>
                        <div id="navbar-collapse" class="collapse navbar-collapse">
                            <form class="navbar-form navbar-left" role="search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                                    </span>
                                </div>
                            </form>
                            <ul class="nav navbar-nav navbar-right">
                                <li class="dropdown">
                                    <a id="user-profile" href="#" class="dropdown-toggle" data-toggle="dropdown">
                                      <img src="http://lorempixel.com/100/100/people/9/" class="img-responsive img-thumbnail img-circle"> Username</a>
                                    <ul class="dropdown-menu dropdown-block" role="menu">
                                        <li><a href="#">Profile</a></li>
                                        <li><a href="<?php echo base_url();?>index.php/logout">Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>
        </div>
        <div id="wrapper">
            <div id="sidebar-wrapper">
                <aside id="sidebar">
                    <ul id="sidemenu" class="sidebar-nav">
                        <li>
                            <a href="#">
                                <span class="sidebar-icon"><i class="fa fa-home"></i></span>
                                <span class="sidebar-title">Home</span>
                            </a>
                        </li>
                        <li>
                            <a class="accordion-toggle collapsed toggle-switch" data-toggle="collapse" href="#submenu-2">
                                <span class="sidebar-icon"><i class="fa fa-users"></i></span>
                                <span class="sidebar-title">Management</span>
                                <b class="caret"></b>
                            </a>
                            <ul id="submenu-2" class="panel-collapse collapse panel-switch" role="menu">
                              <li><a href="#"><i class="fa fa-caret-right"></i>Users</a></li>
                              <li><a href="#"><i class="fa fa-caret-right"></i>Roles</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="accordion-toggle collapsed toggle-switch" data-toggle="collapse" href="#submenu-3">
                                <span class="sidebar-icon"><i class="fa fa-newspaper-o"></i></span>
                                <span class="sidebar-title">Blog</span>
                                <b class="caret"></b>
                            </a>
                            <ul id="submenu-3" class="panel-collapse collapse panel-switch" role="menu">
                                <li><a href="#"><i class="fa fa-caret-right"></i>Posts</a></li>
                                <li><a href="#"><i class="fa fa-caret-right"></i>Comments</a></li>
                            </ul>
                        </li>
                    </ul>
                </aside>            
            </div>

            <div id="page-content-wrapper" role="main">
                <ol> <div id="results"> </div></ol>
            </div>
        </div> 
    </body>
    <script>
        $(document).ready(function() {

            var total_record = 0;
            var total_groups = <?php echo $total_data; ?>;  
            $('#results').load("<?php echo base_url() ?>" + "index.php/userdashboardcontroller/loadUserData",
             {'group_no':total_record}, function() {total_record++;});
            
            $(window).scroll(function() 
            {       
                if($(window).scrollTop() + $(window).height() == $(document).height())  
                {           
                    if(total_record <= total_groups)
                    {
                        $.ajax(
                        {
                            url: "<?php echo site_url() ?>"+"index.php/userdashboardcontroller/loadUserData",
                            type: "POST",
                            dataType: 'html',
                            success: function(data)
                            {
                                $("#results").append(data);                                   
                                total_record++;
                            },
                            error: function()
                            {

                            }
                        });
                      // $.post('<?php echo site_url() ?>content/load_more',{'group_no': total_record},
                      //   function(data){ 
                      //       if (data != "") {                               
                      //           $("#results").append(data);                 
                      //           $('.loader_image').hide();                  
                      //           total_record++;
                      //       }
                      //   });     
                    }
                }
            });
        });
    </script>
</html>