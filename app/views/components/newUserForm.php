<?php
/**
 * Created by PhpStorm.
 * User: meinsusseichhornchen
 * Date: 20/03/19
 * Time: 14:20
 */

?>

<div class="register-form">
    <h1 class="register">CREA TU GARAJE</h1>
    <form action="users" method="post">
        <label for="nombre">
            <span><input name="nombre" type="text" placeholder="Nombre"></span>
        </label>
        <label for="apellidos">
            <span><input name="apellidos" type="text" placeholder="Apellidos"></span>
        </label>
        <label for="email">
            <span><input name="email" type="email" placeholder="Correo electrónico"></span>
        </label>
        <label for="contraseña">
            <span><input name="contraseña" type="password" placeholder="Contraseña"></span>
        </label>
        <label for="contraseña_repetida">
            <span><input name="contraseña_repetida" type="password" placeholder="Repetir Contraseña"></span>
        </label>
        <button type="submit" class="entrar">Crear Garaje</button>
    </form>
</div>
