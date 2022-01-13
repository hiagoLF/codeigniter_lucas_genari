
Nome: <?= $produto['nome'] ?> <br/>
Preço: <?= $produto['preco'] ?> <br/>
Descrição: <?= $produto['descricao'] ?> <br/>

<?= anchor("produtos/index", "Voltar", array("class" => "btn btn-primary")); ?>
<?= anchor(
    "produtos/delete/{$produto['id']}", 
    "Deletar Produto", 
    array("class" => "btn btn-danger")
    ); 
?>
<?= anchor(
    "produtos/editar?id={$produto['id']}", 
    "Editar", 
    array("class" => "btn btn-primary")
    ); 
?>
