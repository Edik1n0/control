<?php include("db.php") ?>

<?php if (isset($_SESSION['message'])) { ?>
    <div class="alert alert-dismissible alert-secondary">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <?= $_SESSION['message'] ?>
    </div>
<?php session_unset(); } ?>

<?php include("includes/header.php") ?>
<?php include("includes/nav.php") ?>
<?php include("includes/banner.php") ?>
<?php include("includes/wp.php") ?>
<!--Cuerpo-->

<div class="intro">

    <div class="intro__background">
        <div class="bg__home">
            <img src="../img/fondo-med.png" alt="">
        </div>
    </div>

    <div class="container">
        <div class="intro__bg">
            <div class="intro__img">
                <img src="../img/imagen-intro.jpg" alt="">
            </div>
            <div class="intro__txt">
                <div class="header__intro--txt">
                    <h1>Asesorías Jurídicas Medellín</h1>
                    <h2>Professional lawyers in all areas of the law</h2>
                </div>
                <p>Meet in Medellín professional and specialized legal services in all areas of law,
                    with experienced lawyers and with extensive experience in the city.</p>
                <p class="separador__intro--txt">_________________________________________________</p>
                <p>Explore and know our services, means of contact and our team, which will provide legal services
                    in Colombia.</p>
            </div>
        </div>
    </div>
</div>

<?php include("includes/areas.php") ?>
<?php include("includes/claims.php") ?>
<?php include("includes/suscribe.php") ?>

<!--Fin Cuerpo-->
<?php include("includes/footer.php") ?>