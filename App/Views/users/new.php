<form action="<?php echo \Core\Controller::curPageURL('users/create')?>" method="post">

    Username: <input type="text" name="username" id="username">

    <br>
    password: <input type="password" name="password" id="password">

    <br>
    <input type="submit" value="Save" name="submit" id="submit">

</form>
<a href="<?php echo \Core\Controller::curPageURL('users')?>">Back</a>