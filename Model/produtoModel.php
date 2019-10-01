<?php
	
	require_once $_SERVER["DOCUMENT_ROOT"] . "/FrontEnd-Buscap/dbConfig.php";


	class ProdutoModel{

		private $bd;

		 function __construct(){
			 $this->bd = BancoDados::obterConexao();
		 }

		 public function inserir($nome, $preco, $descricao, $imagem){
            try{
		 	    $insereProduto = $this->bd->prepare("INSERT INTO produto(nome, preco, descricao, imagem) 
			    VALUES (:nome, :preco, :descricao, :imagem)");

			    $insereProduto->bindParam(":nome", $nome);
			    $insereProduto->bindParam(":preco", $preco, PDO::PARAM_INT);
				$insereProduto->bindParam(":descricao", $descricao);
				$insereProduto->bindParam(":imagem", $imagem);

				$insereProduto->execute();
				
			  } catch(Exception $e){
				  throw $e;
			  }

		 }

		 public function getAllProdutos(){
			$getAll = $this->bd->prepare("SELECT p.idProduto, p.nome, p.descricao, p.preco FROM produto as p");
			$getAll->execute();
		
			return $getAll->fetchAll(PDO::FETCH_ASSOC);

		 }

		 public function getImagem($idProduto){
            $foto = $this->bd->prepare("SELECT imagem FROM produto where idProduto = :idProduto LIMIT 1");
            $foto->bindParam(":idProduto", $idProduto);
            $foto->execute();

            $array = array();
            while ($res = $foto->fetch(PDO::FETCH_ASSOC)){
                array_push($array, $res['imagem']);
            }        
            return $array;
		}
		public function getProdutoById($idProduto){
			
			$getProduto = $this->bd->prepare("SELECT p.idProduto, p.nome, p.preco FROM produto as p where idProduto = :idProduto");
			$getProduto->bindParam(":idProduto", $idProduto);
			$getProduto->execute();
		
			return $getProduto->fetchAll(PDO::FETCH_ASSOC);

		 }
		 public function getImagens(){
            $foto = $this->bd->prepare("SELECT imagem FROM produto");
            $foto->execute();

            $array = array();
            while ($res = $foto->fetch(PDO::FETCH_ASSOC)){
                array_push($array, $res['imagem']);
            }        
            return $array;
		}
		


	}
?>