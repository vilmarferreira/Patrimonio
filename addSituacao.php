<?php
include "header.php"
?>
		<div class="row">
			<div class="col-md-10">
				<h1>Cadastro de situacao</h1>
			</div>	
			<div class="col-md-2 text-right">
				<h1><a href="telaSituacao.php" class="btn btn-primary"> <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Voltar</a></h1>
			</div>
		</div>
		<?php
		if(isset($_POST['submit'])){
			
			$st=$_POST['situacao'];
			
			$query=$mysqli->query("insert into situacao (Descricao) values ('$st')");
			if($query)
			{
				?>
				<div class="alert alert-success alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  <strong>Sucesso!</strong> Foi cadastrado com sucesso
				</div>
				<?php
			}else
			{
				?>
				<div class="alert alert-danger alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  <strong>Erro!</strong> Ocorreu um erro ao salvar.
			</div>
			
			
			
				<?php
			}
			
		}
		?>
		
		
		</br>	
			<form method="post">
				<div class="form-group">
					<label for="situacao">Situação</label>
					<input type="text" class="form-control" id="situacao" name="situacao" placeholder="situacao" requerid>
				</div>
										
	  <button type="submit" class="btn btn-primary" name="submit">Salvar</button>
	</form>
		
<?php
include "footer.php"
?>