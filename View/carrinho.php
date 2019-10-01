<?php 
    include 'header.php'; 
    require_once $_SERVER["DOCUMENT_ROOT"] . "/FrontEnd-Buscap/dbConfig.php";
    require_once $_SERVER["DOCUMENT_ROOT"] . "/FrontEnd-Buscap/Model/produtoModel.php";

    session_start();

    if(!isset($_SESSION['itens']))
    {
        $_SESSION['itens'] = array();
        
    }

    if(isset($_GET['add']) && $_GET['add'] == "carrinho")
    {

        $idProduto = $_GET['id']; 

        if(!isset($_SESSION['itens'][$idProduto])){
            $_SESSION['itens'][$idProduto] = 1;   
        }else{
            $_SESSION['itens'][$idProduto] += 1; 
        }
    } 
    ?>
    <div class="container-fluid">
    <div class="container-fluid"> 
        <h1>Carrinho</h1>
     </div>
<?php 
    if(count( $_SESSION['itens']) == 0){ 
        echo "Vazio";
?>

<?php 
    }else{    
        foreach($_SESSION['itens'] as $idProduto => $quantidade)
        {
            
            $sql = "SELECT p.idProduto, p.nome, p.preco FROM produto as p where idProduto = :idProduto";
            $bd = BancoDados::obterConexao();
            $stmt = $bd->prepare($sql);
			$stmt->bindParam(":idProduto", $idProduto);
            $stmt->execute();
            $produtos = $stmt->fetchAll();

            $total = $quantidade * $produtos[0]['preco'];
?>  
            <div class="col-md-6">
                <p><b>Nome do produto:</b>      
                <?php echo $produtos[0]['nome'];?></p>

                <p><b>Preço: </b>      
                <?php echo 'R$' . number_format($produtos[0]['preco'],2,",","."); ?></p>

                <p><b>Quantidade: </b>      
                <?php echo $quantidade; ?></p>

                <p><b>Total: </b>      
                <?php echo 'R$' . number_format($total,2,",","."); ?></p>

                <button type="button" class="btn btn-warning" 
                    onclick="window.location.href='/FrontEnd-Buscap/View/remover.php?remover=carrinho&id=<?php echo $produtos[0]['idProduto'];?>'">
                    <i class="fa fa-arrow-right"></i> Remover do Carrinho
                </button>
            </div>
        <hr>
<?php
        }
    }
?>
</div>
    <?php include "footer.php"; ?>
