<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!-- Bootstrap Validator css-->
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css"/>

        <!-- Bootstrap Validator js -->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/js/bootstrapValidator.min.js"></script>

        <style>
        @import url("//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css");
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
            .facebook
            {
                color:#fff;
                background-color:#3b5998;
                border-color:rgba(0,0,0,0.2);
            }
        </style>
        <script>
            $(document).ready(function() {
                $('#contactForm').bootstrapValidator({
                    // container: '#messages',
                    feedbackIcons: {
                        valid: 'glyphicon glyphicon-ok',
                        invalid: 'glyphicon glyphicon-remove',
                        validating: 'glyphicon glyphicon-refresh'
                    },
                    fields: {
                        email: {
                            validators: {
                                notEmpty: {
                                    message: 'The email address is required'
                                },
                                emailAddress: {
                                    message: 'The email address is not valid'
                                }
                            }
                        },
                        password: {
                            validators: {
                                notEmpty: {
                                    message: 'Password cannot be empty'
                                },
                                stringLength: {
                                    min: 5,
                                    message: 'Password must be atleast 5 characters long'
                                }
                            }
                        }
                    }
                });
            });
        </script>
    </head>
    <body>
        <div class="container">

            <!-- Login block -->
            <div class="row login_block">
                <div class="col-md-4 col-md-offset-7">
                    <div class="panel panel-default">

                        <div class="panel-heading">
                            <span class="glyphicon glyphicon-lock"></span>  Login
                        </div>

                        <div class="panel-body">
                            <form id="contactForm" class="form-horizontal" method="POST" 
                                    action="<?php echo base_url();?>index.php/home">

                                <div class="form-group">
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" name="email" placeholder="Email"
                                            value="<?php if (!empty($email)) { echo $email;}?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" name="password"
                                            placeholder="Password">
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
                            Not Registred? <a href= "<?php echo base_url();?>index.php/signup">Sign Up</a>
                        </div>
                        <div align="center">
                            <a href="<?php echo base_url();?>index.php/facebook" 
                                class="btn facebook btn-primary" role="button">
                                <span class="fa fa-facebook">&nbsp;</span>
                                Signup With Facebook</a>
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