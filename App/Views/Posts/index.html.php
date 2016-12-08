{% extends "Layoutes/main.html" %}
{% block title%}Home{% endblock %}
{% block body%}

<?php $username = "ekolonii"?>
<?php if($username == "ekoloni"){?>

ekolomio
<?php }?>

<h1>All posts {{"Ekoloni"}}</h1>
<ul>
    {% for post in posts%}
    <li><p>post {{post.id}}</p>
        <h2>{{post.title}}</h2>
        <p>{{post.content }}</p>

    </li>
    {% endfor%}
</ul>
<?php echo $username ?>

<br>
{% endblock %}