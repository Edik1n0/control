<?php include("db.php") ?>

<?php if (isset($_SESSION['message'])) { ?>
    <div class="alert alert-dismissible alert-secondary">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <?= $_SESSION['message'] ?>
    </div>
<?php session_unset();
} ?>

<?php include("includes/header.php") ?>
<?php include("includes/nav.php") ?>
<?php include("includes/banner.php") ?>
<?php include("includes/wp.php") ?>
<!--Cuerpo-->

<div class="intro">

    <div class="intro__background">
        <div class="bg__home">
            <img src="../img/fondo-med.png" alt="Background Cuerpo">
        </div>
    </div>

    <div class="container">
        <div class="intro__bg" itemscope itemtype="http://schema.org/Organization">
            <div class="intro__img">
                <img itemprop="image" src="../img/imagen-intro.jpg" alt="Imagen introducción">
            </div>
            <div class="intro__txt">
                <div class="header__intro--txt">
                    <h1 itemprop="name">Asesorías Jurídicas Medellín</h1>
                    <h2 itemprop="slogan">Professional lawyers in all areas of the law</h2>
                </div>
                <p><span itemprop="description">Know more about the legal services we can provide you, by consulting with <strong> expert lawyers </strong> and with extensive experience.</span></p>
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