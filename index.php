<!-- Open Source Pastebin (1 arquivo) -->
<?php date_default_timezone_set('America/Sao_Paulo'); ?>
<?php if (isset($_POST['submit'])) : ?>
	<?php
		$dados = $_POST['codigo'];
		//
		$dados = str_replace('<', '&lt;', $dados);
		$dados = str_replace('>', '&gt;', $dados);
		$dados = str_replace('"', '&quot;', $dados);
		//
		$horario = date("i:s");
		$horario = str_replace(':','',$horario);
		//
		$nome = $horario.rand(0,9).rand(0,9).rand(0,9).rand(0,9);
		//
		$file = fopen("uploads/$nome.txt","w");
		echo fwrite($file,$dados);
		fclose($file);
		//
		header('Location: '.$nome.'');
		exit();
	?>
<?php endif; ?>
<html>
<head>
<title>Pastebin - RandusAPI ❤</title>
<style>
@import url('https://fonts.googleapis.com/css?family=Raleway');


body{
	background-color:#fff;
	margin:0;
	padding:0;
}

.container{
	width: 100%;
	display: flex;
	height: 93vh;
	justify-content: center;
}
.item{
   color: white;
   width: 1024px;
   height: 500px;
   font-weight: bold;
   align-self: center;
   background-color:transparent;
}
.textareacss{
	width:100%;
	height:100%;
	outline: none;
	padding:10px 10px;
	border:2px dashed #000;
	font-family: 'Raleway', sans-serif;
}

#submit {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
	background-color: white;
    color: black;
    border: 2px solid #555555;
	font-family: 'Raleway', sans-serif;
} 
#submit:hover {
    background-color: #555555;
    color: white;
}
</style>
</head>
<body>
<div class="container">
<div class="item"><center>
<form method="POST" action="#" id="formpost"> 
	<input type="submit" value="Buscar" id="submit" name="submit" />
</form>
<textarea class="textareacss" placeholder="RandusAPI ❤" name="codigo" form="formpost"></textarea>
</center></div>
</div>
</body>
</html>
