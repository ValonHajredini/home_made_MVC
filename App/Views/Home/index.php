{% extends "Layoutes/main.html" %}
{% block title%}Home{% endblock %}
{% block body%}
<h1>Output Escaping {{ name }} name</h1>
<ul>
    {% for color in Colors %}
    {% if color == 'green' %}


    <li>{{color}}</li>
    {% endif %}
    {% endfor %}
</ul>
{% endblock %}


