<?php get_header(); ?>
<main class="main default">
    <div class="container-fluid">
        <div class="row">
            <?php get_sidebar(); ?>
            <div class="col-12 col-lg-10 order-1 order-lg-2">
                <?php require ('main-slider.php') ?>
                <?php require ('baner-d-slider.php') ?>
                <?php require ('sample-project.php') ?>
                <?php require ('baner-foot.php') ?>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>