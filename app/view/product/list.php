<div class="page-header">
    <h1>Produtos
        <a class="btn btn-success pull-right" href="/product/create" role="button">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Adicionar Produto
        </a>
    </h1>

</div>
<table class="table table-hover">
    <thead>
    <tr><th>Nome</th><th>Descrição</th><th>Preço</th><th></th></tr></thead>
    <?php foreach ($model->listAllProducts() as $product):?>
        <tr>
            <th><?=$product["name"]?></th>
            <td><?=$product["description"]?></td>
            <td><?=$product["price"]?></td>
            <td class="col-md-1 text-center">
                <a href="/product/edit?id=<?=$product['id']?>" data-toggle="tooltip" data-placement="top" title="Editar">
                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                </a>
                <a href="/controller/product/delete?id=<?=$product['id']?>" data-toggle="tooltip" data-placement="top" title="Excluir">
                    <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                </a>
                <a href="#?id=<?=$product['id']?>" data-toggle="tooltip" data-placement="top" title="Fazer Pedido">
                    <span class="glyphicon glyphicon-paste" aria-hidden="true"></span>
                </a>
            </td>
        </tr>
    <?php endforeach;?>
</table>