<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
        $x = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente, laudantium? Adipisci nihil debitis, at magni corrupti quaerat numquam voluptatem ad iusto tenetur eligendi omnis dolorum molestias ipsum saepe perspiciatis! Repellendus.";
    ?>
</head>
<body>
    <p>
        <?php 
            echo $x; 
        ?>
    </p>

    <p>
        <?php
        echo strlen($x);
        ?>
    </p>
</body>
</html>
