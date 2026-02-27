<?php
    /* 
     Template Name: login 
    */     
     get_header();      
?>
    <h1>Iniciar sesión</h1>
    <label for="user">Usuario:</label>
    <input type="text" id="user" name="user">
    <label for="pass">Contraseña</label>
    <input type="password" id="pass" name="pass">
    <input type="checkbox" id="recordar" name="recordar"><label for="recordar"> Recordarme</label>
    <button>Entrar</button>

    <img src="img/naves.png" alt="Error">
    <?php get_footer();?>