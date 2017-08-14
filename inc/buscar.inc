        <div class="row">
          <div class="col-lg-4">
							<form action="editarFicha.php" method="post">
							<div class="input-group margin">
			                <input type="text" maxlength="13" id="buscar" required="required" class="form-control" placeholder="No. Identidad">
			                    <span class="input-group-btn">
			                      <a class="btn btn-primary btn-flat" href="javascript:buscarFicha()">Buscar</a>
			                    </span>
			            </div>
						</form>
		</div>
          <div class="col-lg-12"><!--AQUI SE MUESTRA LA INFORMACION-->
          	<div class="registros" id="agrega-registros"></div>
			<center><ul class="pagination" id="pagination"></ul></center>
          </div>	
          </div>