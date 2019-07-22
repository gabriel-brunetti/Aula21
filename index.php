<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Formulário de Inscrição</title>
	
	<!-- CSS Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
</head>
<body>
	<form action="realiza_inscricao.php" method="POST" class="container">
		<h1>Formulário de Inscrição</h1>
		<div class="row">
			<div class="form-group col-xs-12 col-md-5">
				<label for="login">Login</label>
				<input  class="form-control" name="login" id="login" type="text" placeholder="Digite o login">
			</div>

			<div class="form-group col-xs-12 col-md-5">
				<label for="email">E-mail</label>
				<input class="form-control" id="email" name="email" type="email" placeholder="Digite o email">
			</div>

			<div class="form-group col-xs-12 col-md-2">
				<label for="idade">Idade</label>
				<input class="form-control" id="idade" name="idade" type="number" placeholder="Idade">
			</div>
		</div>

		<div class="row">
			<div class="form-group col-xs-12 col-md-6">
				<label for="senha">Senha</label>
				<input class="form-control" id="senha" name="senha" type="password" placeholder="Digite a Senha">
			</div>

			<div class="form-group col-xs-12 col-md-6">
				<label for="confirmacao">Confirme a senha</label>
				<input class="form-control" id="confirmacao" name="confirmacao" type="password" placeholder="Digite a senha novamente">
			</div>
		</div>

		<div class="row">
			<fieldset class="form-group col-xs-12 col-md-4">
				<legend>Interesses</legend>
				<div class="form-check">
					<input type="checkbox" class="form-check-input" name="chkRPG" id="chkRPG">
					<label class="form-check-label" for="chkRPG">RPG</label>
				</div>
				<div class="form-check">
					<input type="checkbox" class="form-check-input" name="chkJRD" id="chkJRD">
					<label class="form-check-label" for="chkJRD">Jardinagem</label>
				</div>
				<div class="form-check">
					<input type="checkbox" class="form-check-input" name="chkMUS" id="chkMUS">
					<label class="form-check-label" for="chkMUS">Música</label>
				</div>
			</fieldset>

			<fieldset class="form-group col-xs-12 col-md-4">
				<legend>Estado Civil</legend>
				<div class="form-check">
					<input type="radio" class="form-check-input" checked name="estado_civil" id="radioSolteiro" value="0">
					<label  class="form-check-label" for="radioSolteiro">Solteiro</label>
				</div>
				<div class="form-check">
					<input type="radio" class="form-check-input" name="estado_civil" id="radioCasado" value="1">
					<label class="form-check-label" for="radioCasado">Casado</label>
				</div>
				<div class="form-check">
					<input type="radio" class="form-check-input" name="estado_civil" id="radioUE" value="2">
					<label class="form-check-label" for="radioUE">União Estável</label>
				</div>
			</fieldset>

			<div class="form-group col-xs-12 col-md-4">
				<label for="pais">País</label>
				<select class="form-control" id="pais" name="pais">
					<optgroup label="América do Sul">
						<option value="ar">Argentina</option>
						<option selected value="br">Brasil</option>
						<option value="co">Colômbia</option>
					</optgroup>
					<optgroup label="Asia">
						<option value="jp">Japão</option>
						<option value="ch">China</option>
						<option value="in">Índia</option>
					</optgroup>	
				</select>
			</div>
		</div>


		<!-- <div class="form-group">
			<label for="mensagem">Mensagem</label><br>
			<textarea class="form-control" name="mensagem" id="mensagem" cols="30" rows="10"></textarea>
		</div> -->
		<button class="btn btn-primary" type="submit" target=_blank>Enviar</button>

	</form>

	<!-- JS para Bootstrap -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>