<?php
	include 'inc/iniciolog.inc';
?>
	<div class="login-box">
      <div class="login-logo">
      <p>Clinica</p>
      <p>Virgen de Suyapa</p>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Iniciar Sesión</p>
        <form method="post" action="php/validar-usuario.php">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name="usuario" value="" required="required" maxlength="8" placeholder="Usuario"/>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="contrasena" value="" required="required" maxlength="8" placeholder="Clave"/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-12">
              <button type="submit" class="btn btn-warning btn-block btn-flat">Iniciar Sesión</button>
            </div><!-- /.col -->
          </div>
        </form>
		<br>
        <!-- <a href="#" class="text-orange">Olvide mi contraseña</a><br> -->
      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->
<?php
	include 'inc/scripts.inc';
  include 'inc/plugins.inc';
?>
