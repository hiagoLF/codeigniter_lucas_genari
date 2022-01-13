<div class='container'>

    <h1>Editar Produto</h1>

    <form action="salvar/<?= $produto['id'] ?>" method='POST'>

        <input type="text" class='hidden' name='id' value="<?= $produto['id']?>">

        <label for="nome">Nome</label>
        <input type="text" name="nome" class='form-control' value="<?= $produto['nome'] ?>">

        <label for="preco">Preço</label>
        <input type="text" name="preco" class='form-control' value="<?= $produto['preco'] ?>">

        <label for="descricao">Descrição</label>
        <textarea type="text" name="descricao" class="form-control"><?= $produto['descricao'] ?></textarea>

        <button class="btn btn-primary">Salvar</button>
        <?= 
            anchor(
                "produtos/index", 
                "Voltar", 
                array("class" => "btn btn-primary")
            ); 
        ?>

    </form>
</div>