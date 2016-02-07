<div class="page-header">
    <h1>Clientes
        <a class="btn btn-success pull-right" href="/client/create" role="button">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Adicionar Cliente
        </a>
    </h1>

</div>
<table class="table table-hover">
    <thead>
    <tr><th>Nome</th><th>E-Mail</th><th>Telefone</th><th></th></tr></thead>
    <?php foreach ($model->listAllClients() as $client):?>
        <tr>
            <th><?=$client["name"]?></th>
            <td><?=$client["email"]?></td>
            <td><?=$client["phone"]?></td>
            <td class="col-md-1 text-center">
                <a href="/client/edit?id=<?=$client['id']?>" data-toggle="tooltip" data-placement="top" title="Editar">
                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                </a>
                <a href="/controller/client/delete?id=<?=$client['id']?>" data-toggle="tooltip" data-placement="top" title="Excluir">
                    <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                </a>
                <a href="#?id=<?=$client['id']?>" data-toggle="tooltip" data-placement="top" title="Fazer Pedido">
                    <span class="glyphicon glyphicon-paste" aria-hidden="true"></span>
                </a>
            </td>
        </tr>
    <?php endforeach;?>
</table>