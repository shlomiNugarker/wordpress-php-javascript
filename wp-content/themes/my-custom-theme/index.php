<?php
    function greet($name){
        echo "<p>Hey $name<p/>";
    }
    
    greet('John');
    greet('Jane');
    ?>

<h1><?php bloginfo('name'); ?></h1>
<p><?php bloginfo('description'); ?></p>
