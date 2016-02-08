<?php
$order = $model->selectOrder($param[1])->fetch();
?>
<div class="page-header">
  <h1>Editar um pedido</h1>
</div>
<form class="form-horizontal" action="/<?=SITE_PATH?>controller/order/edit?id=<?=$param[1]?>" method="post">
  <div class="form-group">
    <label for="id_product" class="col-sm-2 control-label">Produto</label>
    <div class="col-sm-8">
      <select class="form-control" name="id_product" id="id_product" required>
        <option value="">--</option>
        <?php foreach($model->getAllProducts() as $product): ?>
          <option value="<?=$product['id']?>" <?=$product["id"] == $order["id_product"] ? "selected='true'":""?>><?=$product['name']?></option>
        <?php endforeach; ?>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label for="id_client" class="col-sm-2 control-label">Cliente</label>
    <div class="col-sm-8">
      <select class="form-control" name="id_client" id="id_client" required>
        <option value="">--</option>
        <?php foreach($model->getAllClients() as $client): ?>
          <option value="<?=$client['id']?>" <?=$client["id"] == $order["id_client"] ? "selected='true'":""?>><?=$client['name']?></option>
        <?php endforeach; ?>
      </select>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-8">
      <button type="submit" class="btn btn-success">Editar</button>
    </div>
  </div>
</form>