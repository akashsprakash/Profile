<!DOCTYPE html>
<html>
    <head>
        <title>Success</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            @import 'https://fonts.googleapis.com/css?family=Open+Sans:300';

            h2 
            {
              font-family: 'Open Sans';
              font-weight: 300;
              text-transform: uppercase;
              font-size: 3.7em;
            }

            h3 
            {
              font-family: 'Open Sans';
              font-weight: 300;
              color: #ccc;
              font-size: 1.9em;
            }

            .page-header 
            {
              border: none;
              text-align: center;
            }
            .page-header h2 
            {
                margin-bottom: 6px;
            }
            .page-header h2 
            {
                margin-top: 0;
            }

            .icon-bar 
            {
              font-size: 1.3em;
              position: relative;
              color: #ff9933;
            }

            .icon-bar:after,
            .icon-bar:before
            {
              display: block;
              content: '';
              width: 150px;
              height: 1px;
              background: #ccc;
              position: absolute;
              left: 35px;
              top: 50%;
              margin-top: -1px;
            }

            .icon-bar:before 
            {
              left: auto;
              right: 35px;
            }
        </style>

    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="page-header">
                  <h2>Successfully Registered</h2>
                  <span class="icon-bar">
                    <i class="glyphicon glyphicon-tower" aria-hidden="true"></i>
                  </span>
                  <!-- Login Link -->
                  <a href="<?php echo base_url();?>index.php/home"><h3>Login</h3></a>
                </div>
            </div>
        </div>
    </body>
</html>