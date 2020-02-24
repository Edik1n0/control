<?php include("../db.php") ?>
<?php include("includes/header.php") ?>

<?php if (isset($_SESSION['message'])) { ?>
    <div class="alert alert-dismissible alert-success">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <?= $_SESSION['message'] ?>
    </div>
<?php session_unset();
} ?>

<?php include("includes/nav.php") ?>
<?php include("includes/inner.php") ?>
<?php include("includes/wp.php") ?>
<!--Cuerpo-->

<div class="container">
    <div class="articulo">
        <div class="header__articulo">
            <h1>Artículo Testing</h1>
            <h2><em>Subtítulo artículo testing</em></h2>
        </div>
        <div class="articulo__intro">
            <div class="articulo__img">
                <img src="../img/art-test.jpg" alt="">
                <div class="articulo__txt">
                    <p><em>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit.</em></p>
                </div>
            </div>
        </div>
        <div class="articulo__body">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate porro laboriosam voluptates praesentium!
                Quia labore non amet, hic saepe adipisci necessitatibus perspiciatis voluptatum corporis, ipsam quis delectus
                consequuntur, qui iste.<br>

                <br>Sed quidem voluptatem, porro enim, tempora quae amet aperiam quia, consequatur maxime dolore perferendis
                debitis corrupti officiis ab eos repellat alias? Vitae, dolorum facere ratione magnam illum placeat autem rem!
                Rem voluptatem temporibus ratione repellendus dolorem. Doloremque commodi, aut provident optio magni fuga
                officia dicta temporibus magnam. Voluptates esse aperiam sint, architecto exercitationem veniam temporibus
                aut fugiat quo eum velit?<br>

                <br>Sed quidem voluptatem, porro enim, tempora quae amet aperiam quia, consequatur maxime dolore perferendis
                debitis corrupti officiis ab eos repellat alias? Vitae, dolorum facere ratione magnam illum placeat autem rem!
                Rem voluptatem temporibus ratione repellendus dolorem.
            </p>
        </div>
        <div class="articulo__footer">
            <div class="data">
                <p><strong>Publicado el: </strong><em>03/27/18</em></p>
                <p><strong>A las: </strong><em>10:37 a.m. en Medellín, Colombia</em></p>
                <p><strong>Autor: </strong><em>Asesorías Jurídicas Medellín</em></p>
            </div>
            <div class="share">
                <div class="share__text">
                    <h3>Caja de opiniones: </h3>
                </div>

                <div class="container">
                    <div class="comments__box">

                        <div class="comentarios__pub">
                            <?php

                            $query = "SELECT * FROM comments";
                            $result_user = mysqli_query($conn, $query);

                            while ($row = mysqli_fetch_array($result_user)) { ?>

                                <div class="nombre__usuario">
                                    <h4><?php echo $row['nombre'] ?>:</h4>
                                </div>
                                <div class="comentario__user">
                                    <p><?php echo $row['comentario'] ?></p>
                                </div>
                                <div class="timestamp">
                                    <p><?php echo $row['timestamp'] ?></p>
                                </div>
                            <?php } ?>
                        </div>

                        <div class="container">

                            <div class="share__social">
                                <div class="share__form">
                                    <form action="comentarios" method="POST">
                                        <div class="commment__header">
                                            <h4>Indícanos tus datos y deja tu comentario al final</h4>
                                            <p>Los campos marcados con (*) son obligatorios</p>
                                        </div>
                                        <div class="form__group">
                                            <div class="nombre">
                                                <p><em>Nombre completo (*):</em></p>
                                                <input type="text" placeholder="Juan Saldarriaga" name="nombre">
                                            </div>
                                            <div class="phone">
                                                <p><em>Nombre completo:</em></p>
                                                <input type="int" placeholder="(+44) 444-44-44" name="phone">
                                            </div>
                                            <div class="email">
                                                <p><em>Correo electrónico (*):</em></p>
                                                <input type="email" placeholder="juansal@gmail.com" name="email">
                                            </div>
                                            <div class="checks__comments">
                                                <div class="recibir__info">
                                                    <input type="checkbox" name="check_subscribe" id="check__rec">
                                                    <p><em>Deseo recibir actualizaciones de <a href="#">Actualidad Jurídica AJM</a> en mi correo.</em></p>
                                                </div>
                                                <div class="acepto__politica">
                                                    <input type="checkbox" name="check_privacy">
                                                    <p><em>Acepto la <a href="#">Política de privacidad (*)</a></em></p>
                                                </div>
                                            </div>
                                            <div class="comentario">
                                                <p><em>Comenta (*):</em></p>
                                                <textarea name="comentario" id="comentario" cols="30" rows="10" placeholder="Máx 500 caracteres"></textarea>
                                            </div>
                                            <div class="btn__comment">
                                                <input type="submit" class="btn__comm" value="Enviar" name="comentarios">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                        <div class="social__comments">
                            <div class="sc__header">
                                <h3>Comenta, comparte y reacciona: </h3>
                            </div>
                            <div class="sc__body">
                                <div class="fb__img">
                                    <a href="https://facebook.com">
                                        <img src="../img/art-face.png" alt="">
                                    </a>
                                </div>
                                <div class="twit__img">
                                    <a href="https://twitter.com">
                                        <img src="../img/art-twit.png" alt="">
                                    </a>
                                </div>
                                <div class="in__img">
                                    <a href="https://linkedin.com">
                                        <img src="../img/art-in.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!--Fin Cuerpo-->
<?php include("includes/footer.php") ?>