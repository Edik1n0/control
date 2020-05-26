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
            <img src="img/fondo-med.png" alt="Background Cuerpo">
        </div>
    </div>

    <div class="container">
        <div class="intro__bg" itemscope itemtype="http://schema.org/Organization">
            <div class="intro__img">
                <img itemprop="image" src="img/imagen-intro.jpg" alt="Imagen introducción">
            </div>
            <div class="intro__txt">
                <div class="header__intro--txt">
                    <h1 itemprop="name">Asesorías Jurídicas Medellín</h1>
                    <h2 itemprop="slogan">Abogados expertos en Medellín</h2>
                </div>
                <p><span itemprop="description">Conozca en Medellín los servicios jurídicos profesionales. Asesoramiento legal con <strong>Abogados expertos</strong> y con amplia experiencia en la ciudad.</span></p>
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