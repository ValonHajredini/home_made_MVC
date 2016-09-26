<?php ?>
/**
 * Created by PhpStorm.
 * User: hajre
 * Date: 9/26/2016
 * Time: 5:15 PM
 */
<!DOCTYPE html>
<html>
<head>
    <title>Output Escaping</title>
    <meta charset="UTF-8">
</head>
<body>
<h1>Output Escaping <?php echo $name?></h1>

<form method="post">
    <div>
        <label for="name">Your name</label>
        <input type="text" name="name" autofocus>
    </div>
    <div>
        <input type="submit" value="submit">
    </div>
</form>

<ul>
    <?php foreach ($Colors as $color):?>
    <li><?php echo $color ?></li>
    <?php endforeach;?>
</ul>
</body>
</html>

