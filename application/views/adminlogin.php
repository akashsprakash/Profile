<!DOCTYPE html>
<html>
    <head>
        <title>Admin Login</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            body
                { 
                    background: url("/User/assets/images/background.jpg"); 
                    background-size: cover;
                }
            .panel-default
                {
                    opacity: 0.9;
                    margin-top: 30px;
                }
            .login_block
                {
                    margin-top: 130px;
                }
            .panel-body
                {
                    background-color: #a0a0a0;
                }
            .errors_display
            {
                color: red;
            }
        </style>
    </head>
    <body>
        <div class="container">

            <!-- Login block -->
            <div class="row login_block">
                <div class="col-md-4 col-md-offset-7">
                    <div class="panel panel-default">

                        <div class="panel-heading">
                            <span class="glyphicon glyphicon-lock"></span> Admin Login
                        </div>

                        <div class="panel-body">
                            <form class="form-horizontal" method="POST" 
                                    action="<?php echo base_url();?>index.php/adminhome">

                                <div class="form-group">
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" name="email" placeholder="Email"
                                            value="<?php echo set_value('email'); ?>" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" name="password"
                                            placeholder="Password" required>
                                    </div>
                                </div>

                                <!-- Submit button -->
                                <div class="form-group last">
                                    <div class="col-sm-9">
                                        <button type="submit" class="btn btn-success btn-sm"> Sign in</button>
                                        <button type="reset" class="btn btn-default btn-sm"> Reset</button>
                                    </div>
                                </div>

                            </form>
                        </div>

                        <!-- Signup -footer -->
                        <div class="panel-footer">
                            &nbsp;
                        </div>

                    </div>
                </div>
            </div>

            <!-- Validation errors display -->
            <div class="col-md-4 col-md-offset-7 errors_display">
                <?php echo validation_errors(); ?>
            </div>

        </div>
    </body>
</html>