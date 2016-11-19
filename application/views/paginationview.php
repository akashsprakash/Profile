<!DOCTYPE html>
<html>
    <head>
        <title>Pagination</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="main">
            <div id="content">
                <div id="form_input">
                    <?php
                    // Show data
                        foreach ($results as $data) {
                        echo "<label> Id </label>" . "<div class='input_text'>" . $data->id . "</div>"
                        . "<label> Name</label> " . "<div class='input_name'>" . $data->user_name . "</div>"
                        . "<label> Email </label>" . "<div class='input_email'>" . $data->email . "</div>";
                        }
                    ?>
                    <!-- Show pagination links  -->
                    <p><?php echo $links; ?></p>
                </div>
            </div>
        </div>
    </body>
</html>