<?php
	
    require_once $_SERVER["DOCUMENT_ROOT"] . "/FrontEnd-Buscap/dbConfig.php";
	require_once $_SERVER["DOCUMENT_ROOT"] . "/FrontEnd-Buscap/Model/produtoModel.php";

    $produtoModel = new produtoModel();

	$acao = $_GET['acao'];

	if($acao == "create"){

		$nome = $_POST["nome"];
		$preco = $_POST["preco"];
		$descricao = $_POST["descricao"];

		//directório onde será gravado a imagem
		$diretorio = '../imagens/'; 
		
		if (isset($_FILES['imagem'])) {
			$name = $_FILES['imagem']['name'];
			$tmp_name = $_FILES['imagem']['tmp_name'];
		
			$error = $_FILES['imagem']['error'];
			if ($error !== UPLOAD_ERR_OK) {
				echo "<script>alert('Sem imagem cadastrada ou erro na imagem');
				location.href='../index.php';</script>";

			} elseif (move_uploaded_file($tmp_name, $diretorio . $name)) {
				 
			}
		} else {
			echo "<script>alert('Falha ao upar imagem ');
					location.href='../View/cadastro.php';</script>";
		}
		$produtoModel->inserir($nome, $preco, $descricao, $name);
		echo 	"<script>alert('Produto cadastrado com sucesso');
				location.href='../index.php';</script>";
	}
	
?>