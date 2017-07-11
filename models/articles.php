<?php
    function articles_all($link){
        $query = "SELECT * FROM articles ORDER BY id DESC";
        $result = mysqli_query($link, $query);
        
        if(!$result)
            die(mysqli_error($link));
        
        $n = mysqli_num_rows($result);
        $articles = array();
        
        for ($i = 0; $i < $n; $i++)
        {
            $row = mysqli_fetch_assoc($result);
            $articles[] = $row;
        }
        
        return $articles;
    }

    function article_get($link, $id_article){
        $query = sprintf("SELECT * FROM articles WHERE id=%d", (int)$id_article);
        $result = mysqli_query($link, $query);
        
        if (!$result)
            die(mysqli_error($link));
        
        $article = mysqli_fetch_assoc($result);
        
        return $article;
    }

    function articles_new($link, $title, $date, $content, $author){
        $title = trim($title);
        $content = trim($content);
        $author = trim($author);
            
        if ($title == '')
            return false;
        
        $template_add = "INSERT INTO articles (title, date, content, author) VALUES ('%s', '%s', '%s', '%s')";
        
        $query = sprintf($template_add, 
                         mysqli_real_escape_string($link, $title),
                         mysqli_real_escape_string($link, $date),
                         mysqli_real_escape_string($link, $content),
                         mysqli_real_escape_string($link, $author));
        
        echo $query;
        $result = mysqli_query($link, $query);
        
        if (!$result)
            die(mysqli_error($link));
        
        return true;
    }

    function articles_edit($link, $id, $title, $date, $content, $author){
        $title = trim($title);
        $content = trim($content);
        $date = trim($date);
        $author = trim($author);
        $id = (int)$id;
            
        if ($title == '')
            return false;
        
        $template_update = "UPDATE articles SET title='%s', author='%s', content='%s', date='%s' WHERE id='%d'";
            
        $query = sprintf($template_update, 
                         mysqli_real_escape_string($link, $title),
                         mysqli_real_escape_string($link, $author),
                         mysqli_real_escape_string($link, $content),
                         mysqli_real_escape_string($link, $date),
                         $id);
        
        $result = mysqli_query($link, $query);
        
        if (!result)
            die(mysqli_error($link));
        
        return mysqli_affected_rows($link);
    }

    function articles_delete($link, $id){
        $id = (int)$id;
        if ($id == 0)
            return false;
        
        $query = sprintf("DELETE FROM articles WHERE id='%d'", $id);
        $result = mysqli_query($link, $query);
        
        if (!result)
            die(mysqli_error($link));
        
        return mysqli_affected_rows($link);
    }

    function articles_intro($text, $len = 500)
    {
        return mb_substr($text, 0, $len);        
    }
?>





































