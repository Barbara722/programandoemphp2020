<html>
<body>
	<?php
      /*Validações
      trabalahando com filtros de validações
      fun~ções (filter_input - filter_vara)a
      FILTER_VALIDATE_INT
      FILTER_VALIDATE_EMAIL
      FILTER_VALIDATE_FLOAT
      FILTER_VALIDATE_IP
      FILTER_VALIDATE_URL
      o restante se encontra no manual do php
      */
?>
<?php
if(isset($_POST['enviar-formulario'])):
	$erros = array();

	if(!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)):
		$erros[] = "idade precisa ser um inteiro";
endif;

if(!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)):
		$erros[] = "Email inválido";
endif;

if(!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)):
		$erros[] = "Email inválido";
endif;

if(!$ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)):
		$erros[] = "Email inválido";
endif;

if(!$URL = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)):
		$erros[] = "Email inválido";
endif;


if(!empty($erros)):
	foreach($erros as $erro):
		echo "<li> $erro </li>";
	endforeach;
else:
	echo "Dados corretos";
endif;
endif;
?>

	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
		idade: <input type="text" name="idade">
		email: <input type="email" name="email">
		Peso: <input type="text" name="peso">
		IP: <input type="text" name="ip">
		URL: <input type="text" name="url">
		<button type="submit" name="enviar-formulario">Enviar</button>
	</form>

</body>   
</html>

