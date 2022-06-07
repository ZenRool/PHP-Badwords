<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php bad words</title>
</head>
<body style="text-align: center;">
    <h1>Bad words</h1>
    <p>
    <?php
        $text = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus doloribus odit, maxime a corporis iste tenetur minima illo eius nostrum ex non. Impedit quam distinctio velit accusamus libero, dolorem minus! Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius est incidunt doloribus tempore quo blanditiis ad corrupti corporis quae dolores unde debitis, officia natus dolore aspernatur libero explicabo. Aliquam, is. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam lorem.";
        $word = "";
        if($_GET){
            $word = $_GET["word"];
        }
        echo str_replace($word, "***", $text);
    ?>
    </p>
</body>
</html>