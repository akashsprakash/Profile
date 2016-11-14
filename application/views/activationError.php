<!DOCTYPE html>
<html>
    <head>
        <title>Not activated</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            body
            { 
                /*background-image: url();*/
            }
            .error-template 
            {
                padding: 40px 15px;text-align: center;
            }
            .error-actions 
            {
                margin-top:15px;margin-bottom:15px;
            }
            .error-actions .btn 
            { 
                margin-right:10px; 
            }
        </style>

    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="error-template">
                        <h1>
                            Oops!</h1>
                        <h2>
                            Your account is not activated</h2>
                            <br>
                        <div class="error-details">
                            Sorry, your account is not activated. Kindly activate by clicking link sent to your mail.
                        </div>
                        <div class="error-actions">
                            <a href="<?php echo base_url();?>index.php/home" class="btn btn-primary btn-lg">
                                <span class="glyphicon glyphicon-home"></span>
                                Login </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>