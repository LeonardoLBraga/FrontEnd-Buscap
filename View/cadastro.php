<?php include 'header.php';
    $acao = "create";
?>
    <div class="form-group col-md-6">
        <b><h1>Cadastro do Produto:</h1></b> 
    </div>

<div class="container-fluid">
    <div class="row">

        <div class="col-md-6">
    <form method="post" enctype="multipart/form-data" id="formProduto" method="POST" action="../Controller/produtoController.php?acao=<?=$acao?>">
                
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" id="nome" placeholder="Produto" name="nome" required>
                </div>
                <div class="form-group">
                    <label for="preco">Preço (R$):</label>
                    <input type="text" class="form-control" id="preco" placeholder="0000" name="preco" required>
                </div>

                <div class="form-group">
                    <label for="imagem">Imagem:</label>
                    <input type="file" class="form-control" id="imagem" name="imagem">
                </div>

        </div>
        <div class="col-md-6">
        
            <div class="form-group col-md-6">
                <label for="descricao">Descrição:</label>
            </div>
            <div class="form-group col-md-6">
                <textarea name="descricao" id="descricao" cols="50" rows="10" require></textarea>
            </div>

        </div>
        <div class="row container-fluid">                        
                <div class="form-group">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-check-circle"></i> Salvar</button>
                </div>
        </div>

    </form>
    </div>
</div>
<?php include "footer.php"; ?>