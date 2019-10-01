<?php include 'View/header.php'; 
    require_once $_SERVER["DOCUMENT_ROOT"] . "/FrontEnd-Buscap/Model/produtoModel.php";

    $produtoModel = new produtoModel();
    $produtos = $produtoModel->getAllProdutos();
?>

<div class="container">

    <h1 class="my-4">Produtos Cadastrados:</h1>

        <?php foreach($produtos as $produto){?>

            <div class="row">
                <div class="col-md-6">
                
                        <?php
                            $idProduto = $produto['idProduto'];
                            $imagens = $produtoModel->getImagem($idProduto);

                        foreach($imagens as $imagem){
                            if(empty($imagem)){
                        ?>
                                <img class="img-fluid" style="width:100%;height:100%;" src="imagens/no_image.png">
                        <?php } else { ?>

                                <img class="img-fluid" style="width:85%;height:85%;" src="imagens/<?php echo $imagem;?>" >
                        <?php } } ?>  
                </div>
                
                <div class="col-md-6">

                        <p><b>Nome do produto:</b>      
                        <?php echo $produto['nome'];?></p>

                        <p><b>Preço: </b>      
                        <?php echo 'R$' . number_format($produto['preco'],2,",","."); ?></p>
                        
                        <p><b>Descrição: </b>      
                        <?php echo $produto['descricao'];?></p>

                        <button type="button" class="btn btn-success" 
                            onclick="window.location.href='/FrontEnd-Buscap/View/carrinho.php?add=carrinho&id=<?php echo $produto['idProduto'];?>'">
                            <i class="fa fa-arrow-right"></i> Adicionar No Carrinho
                        </button>

                </div>
            </div>
                <hr>
        <?php } ?>

</div>

<?php include "View/footer.php"; ?>