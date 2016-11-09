<!DOCTYPE html>
<html>
    <head>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta charset="UTF-8">
        <title>404 Override</title>
        <style>
            body
            {
              margin: 0;
              padding: 0;
              background: #e7ecf0;
              font-family: Arial, Helvetica, sans-serif;
              background: url("/User/assets/images/404error.jpg") no-repeat;
              /*background-size: cover;*/
            }
            *{
              margin: 0;
              padding: 0;
            }
            .f-left
            {
              float:left;
            }
            .f-right
            {
              float:right;
            }
            .clear
            {
              clear: both;
              overflow: hidden;
            }
            #block_error div{
              padding: 100px 40px 0 186px;
            }
            #block_error div h1{
              color: #218bdc;
              font-size: 24px;
              display: block;
              padding: 0 0 14px 0;
              border-bottom: 1px solid #cccccc;
              margin-bottom: 12px;
              font-weight: normal;
            }
        </style>
    </head>
    <body marginwidth="0" marginheight="0">
        <div id="block_error">
            <div>
                <h1>Error 404. </h1>
            </div>
        </div>
    </body>
</html>