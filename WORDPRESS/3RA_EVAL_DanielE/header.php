<!DOCTYPE html>
<html>
    <head>
        <?php wp_head()?>
    </head>
    <body>
        <header>
            <div>
                <h1>3ra evaluación 2026</h1>
                <img src="img/logo.png" alt="Error logo">
            </div>
            <?php
            $args = array(
                "theme_location" => "menu-principal"
            );
            wp_nav_menu($args);
            ?>
        </header>