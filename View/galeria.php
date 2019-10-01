<?php include 'header.php'; 
    require_once $_SERVER["DOCUMENT_ROOT"] . "/FrontEnd-Buscap/Model/produtoModel.php";

    $produtoModel = new produtoModel();
    $imagens = $produtoModel->getImagens();
?>
    <div class="container">

        <div class="col-md-6 offset-md-1">
        <h1> Todas as imagens cadastradas no banco: </h1> 
        </div>  
            <hr>
            <?php foreach($imagens as $imagem){?>
                <div class="col-md-9 offset-md-1"> 
                    <?php 
                    if(empty($imagem)){
                    ?>
                            <img class="img-fluid" style="width:60%;height:60%;" src="../imagens/no_image.png">
                    <?php } else { ?>
                            <img class="img-fluid" style="width:60%;height:60%;" src="../imagens/<?php echo $imagem;?>" >
                            
                    <?php } ?>
                </div>  
                <hr>
            <?php } ?>
    </div>

<?php include "footer.php"; ?>'