<html>
<body>
	<?php
  /* Sanitização - Filtros utilizados para limpar as variáveis
Funções (filter_input - filter_var)
FILTER_SANITIZE_ESPECIAL_CHARS
FILTER_SANITIZE_INT
FILTER_SANITIZE_EMAIL
FILTER_SANITIZE_URL
*/
?>
<?php
if(isset($_POST['enviar-formulario'])):
	//array erros
	$erros = array();
//sanitize
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
	if(filter_var($nome, FILTER_VALIDATE_INT)):
		$erros[] = "nome inválido";
	endif;
$idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
	if(filter_var($idade, FILTER_VALIDATE_INT)):
		$erros[] = "idade precisa ser um inteiro";
	endif;
   
	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
	if(filter_var($email, FILTER_VALIDATE_EMAIL)):
		$erros[] = "email incorreto";
	endif;

   $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL;
   if(filter_var($url, FILTER_VALIDATE_URL)):
   	$url[] = "dados incorretos";
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
		Nome: <input type="text" name="nome">
		idade: <input type="text" name="idade">
		email: <input type="email" name="email">
		URL: <input type="text" name="url">
		<button type="submit" name="enviar-formulario">Enviar</button>
	</form>

</body>   
</html>
