<!DOCTYPE html>
<html>
    <head>
        <title>Signup</title>

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
            .login_block
                {
                    margin: 130px 10px 0px 0px;
                }
            .validation_block   
                {
                    margin-top: 20px;
                    text-align: center;
                    color:red;
                } 
        </style>
        <script>
            $(document).ready(function() {
                $('#contactForm').bootstrapValidator({
                    feedbackIcons: {
                        valid: 'glyphicon glyphicon-ok',
                        invalid: 'glyphicon glyphicon-remove',
                        validating: 'glyphicon glyphicon-refresh'
                    },
                    fields: {
                        name: {
                            validators: {
                                notEmpty: {
                                    message: 'User name is required'
                                },
                                stringLength: {
                                    min: 3,
                                    max: 20,
                                    message: 'User name must be less than 20 characters long'
                                }
                            }
                        },
                        email: {
                            validators: {
                                notEmpty: {
                                    message: 'Email address is required'
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
                        },
                        confirm_password:{
                            validators: {
                                notEmpty: {
                                    message: 'Password cannot be empty'
                                },
                                stringLength: {
                                    min: 5,
                                    message: 'Password must be atleast 5 characters long'
                                },
                                identical: {
                                    field: 'password',
                                    message: 'The password and its confirm are not the same'
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
                <div class="col-md-4 col-md-offset-4">
                    <form id="contactForm" method="POST" action="<?php echo base_url();?>index.php/signup">

                        <!-- Name input box -->
                        <div class="form-group">
                            <label>User name</label>
                            <input type="text" class="form-control" name="name" placeholder="Name">
                            <br>
                        </div>

                        <!-- Email input box -->
                        <div class="form-group">
                            <label>Email</label>
                                <!-- set_value is used to repopulate the email -->
                            <input type="email" class="form-control" name="email" placeholder="Email"
                                value="<?php if (!empty($email)) { echo $email;}?>">
                            <br>
                        </div>

                        <!-- Password input box -->
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" 
                                placeholder="Password"  id="password" required>
                            <br>
                        </div>

                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control" name="confirm_password" 
                                placeholder="Confirm Password"  id="password" required>
                            <br>
                        </div>

                        <!-- Button -->
                        <div class="form-group">
                            <input class="btn btn-success btn-block" type="submit" id="submit" value="Sign up">
                        </div>
                    </form>
                </div>
            </div>

            <!-- Validation errors -->
            <div class="validation_block"> 
                 <?php echo validation_errors(); ?>
                 <?php echo $this->session->flashdata('message'); ?>
            </div> 

        </div>
    </body>
</html>