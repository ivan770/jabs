<!DOCTYPE html>
<hmtl>
    <head>
        <meta charset="utf-8">
        <title>JABS</title>
        <link rel="stylesheet" href="../style.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <!-- Header (navbar) -->
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a id="blog" class="navbar-brand" href="../index.php">&nbsp<?php $path = "../config.php"; include "$path"; $nameOfBlog = $config[0]; echo $nameOfBlog; ?></a>
                    </div>
                </div>
            </nav> 
            <!-- END Header (navbar) -->
            <div id="addart">
                <form method="post" action="index.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>">
                    <label>
                        Name
                        <input type="text" name="title" value="<?=$article['title']?>" class="form-item" autofocus required>
                    </label>
                    <label>
                        Date
                        <input type="date" name="date" value="<?=$article['date']?>" class="form-item" required>
                    </label>
                    <label>
                        Content
                        <textarea class="form-item" name="content" required><?=$article['content']?></textarea>
                    </label>
                    <label>
                        Author
                        <input type="text" name="author" value="<?=$article['author']?>" class="form-item" required>
                    </label>
                    <input type="submit" value="Save" class="btn">
                </form>
            </div>
            <footer>
                <p>
                    JABS<br>Copyright &copy; 2016
                </p>
            </footer>
        </div>
    </body>
</hmtl>