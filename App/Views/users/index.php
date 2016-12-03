<!--{% extends "Layoutes/main.html" %}-->
<!--{% block title%}Home{% endblock %}-->
<!--{% block body%}-->
<!--<h1>Output Escaping {{ name }} name</h1>-->
<!--<ul>-->
<!--    {% for user in users %}-->
<!--    <li>username: {{ user.usernam }} | password:  {{user.password}}</li>-->
<!--    {% endfor %}-->
<!--</ul>-->

<?php foreach ($users as $user){
    ?>
    <p>Username: <b><?php echo $user->username?></b>,
        Password: <b><?php echo $user->password?></b>
        <a href="<?php echo \Core\Controller::curPageURL("users/".$user->id."/edit") ?>">Edit</a>
        <a href="<?php echo \Core\Controller::curPageURL("users/".$user->id."/show") ?>">| Show</a>
        <a href="<?php echo \Core\Controller::curPageURL("users/".$user->id."/delete") ?>">| Delete</a>
    </p>
    <?php
}?>
<a href="<?php echo \Core\Controller::curPageURL("users/new")?>">New</a>
<!--{% endblock %}-->





