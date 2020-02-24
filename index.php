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
            <img src="img/fondo-med.png" alt="">
        </div>
    </div>

    <div class="container">
        <div class="intro__bg">
            <div class="intro__img">
                <img src="img/imagen-intro.jpg" alt="">
            </div>
            <div class="intro__txt">
                <div class="header__intro--txt">
                    <h1>Asesorías Jurídicas Medellín</h1>
                    <h2>Abogados profesionales en todas las áreas del derecho</h2>
                </div>
                <p>Conozca en Medellín los servicios jurídicos profesionales y especializados en todas las áreas del derecho, con Abogados expertos y con amplia experiencia en la ciudad.</p>
                <p class="separador__intro--txt">_________________________________________________</p>
                <p>Navegue y conozca nuestros servicios, medios de contacto y nuestro equipo, que le brindará servicios a nivel nacional.</p>
            </div>
        </div>
    </div>
</div>

<?php include("includes/areas.php") ?>
<?php include("includes/claims.php") ?>
<?php include("includes/suscribe.php") ?>

<!--Fin Cuerpo-->
<?php include("includes/footer.php") ?>