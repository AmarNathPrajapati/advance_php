<?php
    session_start();
?>
<h2>Welcome</h2><?php
                echo $_SESSION['name'];
                ?>
<h3>You are </h3><?php
                    echo $_SESSION['age']
                    ?>years old;