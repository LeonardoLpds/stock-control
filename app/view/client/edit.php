<?php
$client = $model->selectClient($param[1])->fetch();
?>
<div class="page-header">
  <h1>Editar um cliente</h1>
</div>
<form class="form-horizontal" action="/<?=SITE_PATH?>controller/client/edit?id=<?=$param[1]?>" method="post">
  <div class="form-group">
    <label for="name" class="col-sm-2 control-label">Nome</label>
    <div class="col-sm-8">
      <input type="text" value="<?=$client['name']?>" class="form-control" name="name" id="name" placeholder="Nome" required>
    </div>
  </div>
  <div class="form-group">
    <label for="email" class="col-sm-2 control-label">E-Mail</label>
    <div class="col-sm-8">
      <input type="text" value="<?=$client['email']?>" class="form-control" name="email" id="email" placeholder="Email" required>
    </div>
  </div>
  <div class="form-group">
    <label for="phone" class="col-sm-2 control-label">Telefone</label>
    <div class="col-sm-8">
      <input type="text" value="<?=$client['phone']?>" class="form-control" name="phone" id="phone" placeholder="Telefone" required>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-8">
      <button type="submit" class="btn btn-success">Editar</button>
    </div>
  </div>
</form>