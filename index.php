<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
        $p = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente, laudantium? Adipisci nihil debitis, at magni corrupti quaerat numquam voluptatem ad iusto tenetur eligendi omnis dolorum molestias ipsum saepe perspiciatis! Repellendus.";
        
        $word = $_GET['word'];
        
        $pCensored = str_replace ($word, '***', $p);
    ?>
</head>
<body>
    <p>
        <?php 
            echo $p; 
        ?>
    </p>

    <p>
        <?php
            echo strlen($p);
        ?>
    </p>

    <p>
        <?php
            echo $pCensored;
        ?>
    </p>
</body>
</html>
