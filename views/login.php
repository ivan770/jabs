<!DOCTYPE html>
<hmtl>
    <head>
        <meta charset="utf-8">
        <title>JABS</title>
        <link rel="stylesheet" href="style.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <!-- Header (navbar) -->
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a id="blog" class="navbar-brand" href="../index.php">&nbsp<?php $path = "config.php"; include "$path"; $nameOfBlog = $config[0]; echo $nameOfBlog; ?></a>
                    </div>
                </div>
            </nav> 
            <!-- END Header (navbar) -->
            <div id="login">
                <form method="post" action="admin/index.php">
                    <label>
                        Admin key
                        <input type="text" name="password" class="form-item" autofocus required>
                    </label>
                    <input type="submit" value="Log in" class="btn">
                </form>
            </div>
            <div class="tooltip">Forgot password?
                <span class="tooltiptext">You can only change password by using configuration file.</span>
            </div>
            <footer>
                <p>
                    <?php $path = "config.php"; include "$path"; $nameOfBlog = $config[0]; echo $nameOfBlog; ?><br>Copyright &copy; 2017
                </p>
            </footer>
        </div>
    </body>
</hmtl>