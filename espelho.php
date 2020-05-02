<!DOCTYPE html>
<html>
<head>
	<title>Espelho do currículo</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/espelho.css">
</head>
<body>
	<div class="dadosPessoais">
		<label name="nome"><?php echo $_POST["nome"]; ?></label><br>
		<label name="idade"><?php echo $_POST["idade"]; ?> anos</label><br>
		<label name="sexo"><?php echo $_POST["sexo"]; ?></label><br>
		<label name="telefone"><?php echo $_POST["telefone"]; ?></label><br>
		<label name="email"><?php echo $_POST["email"]; ?></label><br>
		<label name="logradouro"><?php echo $_POST["logradouro"]; ?></label><br>
		<label name="cidade"><?php echo $_POST["cidade"]; ?> - </label>
		<label name="estado"><?php echo $_POST["estado"]; ?></label>		
	</div>
	<br>

	<h1>Experiências Profissionais:</h1>
	<div class="profissional">
		<h3><?php echo $_POST["empresa"]; ?></h3>
		<p><?php echo $_POST["funcoesDesempenhadas"]; ?></p>
	</div>
	<h1>História Acadêmica:</h1>
	<p><?php echo $_POST["histAcad"]; ?></p>


	<h1>Informações Adicionais:</h1>
	<p><?php echo $_POST["infoComp"]; ?></p>

<br>
<br>
<br>
	<button onclick="myFunction()">Imprimir</button>

<script>
function myFunction() {
  window.print();
}
</script>
</body>
</html>
