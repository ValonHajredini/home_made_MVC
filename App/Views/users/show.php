
<p>Username: <?php echo $user->username?></p>
<p>Password: <?php echo $user->password?></p>
<p>
    <a href="<?php echo \Core\Controller::curPageURL("users/".$user->id."/edit") ?>">Edit </a>
    <a href="<?php echo \Core\Controller::curPageURL('users')?>">| Back</a>
    <a href="<?php echo \Core\Controller::curPageURL("users/".$user->id."/delete") ?>">| Delete</a>
</p>
