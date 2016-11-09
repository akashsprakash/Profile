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
    </head>
    <body>
        <div class="container">

            <!-- Login block -->
            <div class="row login_block form-group">
                <div class="col-md-4 col-md-offset-4">
                    <form method="POST" action="<?php echo base_url();?>index.php/signup">

                        <!-- Email input box -->
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Email"
                            value="<?php echo set_value('email'); ?>"  required>
                            <!-- set_value is used to repopulate the email -->
                        <br>

                        <!-- Password input box -->
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" 
                            placeholder="Password"  id="password" required>
                        <br>

                        <label>Confirm Password</label>
                        <input type="password" class="form-control" name="confirm_password" 
                            placeholder="Confirm Password"  id="password" required>
                        <br>

                        <!-- Button -->
                        <input class="btn btn-success btn-block" type="submit" id="submit" value="Sign up">
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