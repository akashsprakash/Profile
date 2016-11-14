<!DOCTYPE html>
<html>
    <head>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <style>
        .listing_table
        {
            padding-left: 30px;
        }
        table
        {
            text-align: center;
        }
    </style>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-5 listing_table">
                    <table style="width:100%">
                        <!-- table heading -->
                        <tr>
                            <th>User ID</th>
                            <th>User</th>
                            <th>Activation</th>
                            <th>Status</th>
                        </tr>
                        <!-- result passed from controller -->
                        <?php 
                        foreach ($result as $value) {
                        ?>
                        <tr>
                            <td><?php echo $value->item; ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>