<div class="page-header">
    <h1>Pedidos
        <a class="btn btn-success pull-right" href="/order/create" role="button">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Adicionar Pedido
        </a>
    </h1>

</div>
<table class="table table-hover">
    <thead>
    <tr><th>Produto</th><th>Cliente</th><th></th></tr></thead>
    <?php foreach ($model->listAllOrders() as $order):?>
        <tr>
            <th><?=$model->selectProduct($order["id_product"])->fetch()["name"]?></th>
            <th><?=$model->selectClient($order["id_client"])->fetch()["name"]?></th>
            <td class="col-md-1 text-center">
                <a href="/order/edit?id=<?=$order['id']?>" data-toggle="tooltip" data-placement="top" title="Editar">
                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                </a>
                <a href="/controller/order/delete?id=<?=$order['id']?>" data-toggle="tooltip" data-placement="top" title="Excluir">
                    <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                </a>
            </td>
        </tr>
    <?php endforeach;?>
</table>