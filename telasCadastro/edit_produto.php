<?php
session_start();
include_once("conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_produto = "SELECT * FROM produtos WHERE id = '$id'";
$resultado_produto = mysqli_query($conn, $result_produto);
$row_produto = mysqli_fetch_assoc($resultado_produto);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>CRUD - Editar</title>		
	</head>
	<body>
	<div id="divFundao">
	    <div id="divFundao2">
		<a href="cad_produto.php">Cadastrar</a><br>
		<a href="index.php">Listar</a><br>

		<center>
			<div id="divFundao3">
		<h1>Editar Produto</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="proc_edit_produto.php">
			<input type="hidden" name="id" value="<?php echo $row_produto['id']; ?>">
			
			<label>Nome: </label>
			<input type="text" name="nome" placeholder="Digite o novo nome" value="<?php echo $row_produto['nome']; ?>"><br><br>
			
			<label>Cor: </label>
			<input type="text" name="cor" placeholder="Digite a nova cor" value="<?php echo $row_produto['cor']; ?>"><br><br>
			
			<label>Código: </label>
			<input type="text" name="codigo" placeholder="Digite o novo código" value="<?php echo $row_produto['codigo']; ?>"><br><br>
			
			<label>Data de Vencimento: </label>
			<input type="text" name="data_de_vencimento" placeholder="Digite a nova validade" value="<?php echo $row_produto['data_de_vencimento']; ?>"><br><br>
			
			<input type="submit" value="Editar">
 </center>
		</form>
		<style>
			#divFundao3{ 
				
 width: 500px; height: 300px;
background-color: #CFCFCF;      
             position: absolute;
  left: 650px;
  top: 150px;
}

			#divFundao2{ 
 width: auto; height: 55px;
background-color: #CFCFCF;      
              
}

#divFundao{ 
 width: auto; height: 950px;
 background-image: linear-gradient(to top, gray, white);     
              
}

		</style>
	</body>
</html>