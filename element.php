<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
    <?php include './Template_2.css'; ?>
</style>

</head>
<body>

    <!-- the whole header with red background -->
    <?php include './top_header.php'  ?>

    <!-- dropdown menu -->
    <?php include './top_menu.php' ?>

    <!-- the whole news part of the page -->
    <?php include './container_news.php' ?>


    <!-- FOOTER -->
    <footer>
        <?php include './Footer/12-footer1.php' ?>
        
        <!-- the second part of the footer_brighter part -->
        <div class="footer_bottom">
            <?php include './Footer/13-footer_parent.php' ?>
            <?php include './Footer/14-social_media.php' ?>
            <?php include './Footer/15-copyright.php' ?>
            <?php include './Footer/16-aasaam_logo.php' ?>
        </div>
    </footer>

</body>
</html>
