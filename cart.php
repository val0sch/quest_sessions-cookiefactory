<?php session_start(); ?>
<?php require 'inc/head.php'; ?>
<?php require 'inc/data/products.php'; ?>

<section class="cookies container-fluid">
    <div class="row">
        TODO : Display shopping cart items from $_SESSION here.

        <?php foreach ($_SESSION['cart'] as $id) { ?>
            <ul>
                <li>
                    <?= $catalog[$id]['name'] ?>
                </li>
            </ul>
        <?php   }
        ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>