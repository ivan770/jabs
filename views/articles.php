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
                        <a id="blog" class="navbar-brand" href="index.php">&nbsp<?php $path = "config.php"; include "$path"; $nameOfBlog = $config[0]; echo $nameOfBlog; ?></a>
                    </div>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="admin">Admin panel</a></li>
                    </ul>
                </div>
            </nav> 
            <!-- END Header (navbar) -->
            <?php foreach($articles as $article): ?>
            <div class="article">
                <h3><a href="article.php?id=<?=$article['id']?>"><?=$article['title']?></a></h3>
                <em>Published: <?=$article['date']?></em>
                <p><?=articles_intro($article['content'])?></p>
                <em>Author: <?=$article['author']?></em>
            </div>
            <?php endforeach ?>
            <footer>
                <p>
                    JABS<br>Copyright &copy; 2016
                </p>
            </footer>
        </div>
    </body>
</hmtl>