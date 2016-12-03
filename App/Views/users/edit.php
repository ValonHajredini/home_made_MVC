<?php
//print_r( $_SERVER['QUERY_STRING']);
echo "<br>";
echo \App\Models\User::getClassName('eko');
echo "<br>";
?>
<form action="<?php echo \Core\Controller::curPageURL("users/$user->id/update")?>" method="post">
    username: <input type="text" name="username" value="<?php echo $user->username?>">
    password: <input type="text" value="<?php echo $user->password?>" name="password">
    <input type="submit" value="Edit">
</form>
<a href="<?php echo \Core\Controller::curPageURL('users')?>">Back</a>