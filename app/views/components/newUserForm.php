<?php
/**
 * Created by PhpStorm.
 * User: meinsusseichhornchen
 * Date: 20/03/19
 * Time: 14:20
 */

?>

<div class="register-form">
    <h1>CREA TU GARAJE</h1>
    <form action="../app/controllers/userRegister.php" method="POST">
        <label for="name">
            <span><input type="name" placeholder="Nombre"></span>
        </label>
        <label for="surname">
            <span><input type="surname" placeholder="Apellidos"></span>
        </label>
        <label for="email">
            <span><input type="email" placeholder="Correo electrónico"></span>
        </label>
        <label for="password">
            <span><input type="password" placeholder="Contraseña"></span>
        </label>
        <label for="password_repeat">
            <span><input type="password" placeholder="Repetir Contraseña"></span>
        </label>
        <button type="submit" class="entrar">Crear Garaje</button>
    </form>
</div>
