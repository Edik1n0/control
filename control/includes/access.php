<div class="container">
    <div class="access">
        <div class="card border-primary mb-3 mx-auto" style="max-width: 20rem;">
            <div class="card-header">Ingresa tus datos para continuar</div>
            <div class="card-body">
                <form action="login.php" method="POST">
                    <div class="form-group">
                        <label class="control-label" for="readOnlyInput">Usuario</label>
                        <input type="text" class="form-control" name="user">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="readOnlyInput">Contraseña</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Acceder" name="submit" class="btn btn-danger">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>