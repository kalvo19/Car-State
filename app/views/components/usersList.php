<?php
/**
 * Created by PhpStorm.
 * User: meinsusseichhornchen
 * Date: 18/03/19
 * Time: 22:33
 */
?>

<div class="user-list">
    <?php
        foreach ($data['usuarios'][0] as $usuario) {
    ?>
            <div class="list-item">
                <h5><?php echo $usuario->nombre ?></h5>
            </div>
    <?php
        }
    ?>
</div>
