<?php require_once("config.php"); ?>
<?php include("Includes/Front/header.php") ?>
    <!-- Page Content -->
    <div class="container">
        <!-- Jumbotron Header -->
        <header>
            <h1>Shop</h1>
        </header>
        <hr>
        <!-- /.row -->
        <!-- Page Features -->
        <div class="row text-center">

         <?php get_products_in_shop_page(); ?>

        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
<?php include("Includes/Front/footer.php") ?>
