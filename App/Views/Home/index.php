<!DOCTYPE html>
<html>
<head>
    <title>Output Escaping</title>
    <meta charset="UTF-8">
</head>
<body>
<h1>Output Escaping<?php echo $name?></h1>
<?php
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $name = htmlspecialchars($_POST['name']);
        echo "Hello,". $name."";
        ?>
        <?php
    }
?>

<form method="post">
    <div>
        <label for="name">Your name</label>
        <input type="text" name="name" autofocus>
    </div>
    <div>
        <input type="submit" value="submit">
    </div>
</form>
<?php
    foreach ($Colors as $color):
        echo 'The color is> '.$color.'<br>';
    endforeach;
?>
</body>
</html>

