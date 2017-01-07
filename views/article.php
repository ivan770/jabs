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
        <!-- Page div -->
        <div class="container">
            <!-- Header -->
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a id="blog" class="navbar-brand" href="index.php">&nbsp<?php $path = "config.php"; include "$path"; $nameOfBlog = $config[0]; echo $nameOfBlog; ?></a>
                    </div>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="admin">Admin panel</a></li>
                    </ul>
                </div>
            </nav> 
            <!-- END Header -->
            <!-- Content -->
            <div class="article">
                <h3><?=$article['title']?></h3>
                <em>Published: <?=$article['date']?></em>
                <p><?=$article['content']?></p>
                <em>Author: <?=$article['author']?></em>
            </div>
            <!-- END Content -->
            <!-- Footer -->
            <footer>
                <p>
                    <?php $path = "../config.php"; include "$path"; $nameOfBlog = $config[0]; echo $nameOfBlog; ?><br>Copyright &copy; 2017
                </p>
            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Page div -->
    </body>
</hmtl>