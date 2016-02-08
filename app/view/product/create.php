<div class="page-header">
  <h1>Cadastrar um novo produto</h1>
</div>
<form class="form-horizontal" action="/<?=SITE_PATH?>controller/product/create" method="post">
  <div class="form-group">
    <label for="name" class="col-sm-2 control-label">Nome</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="name" id="name" placeholder="Nome" required />
    </div>
  </div>
  <div class="form-group">
    <label for="description" class="col-sm-2 control-label">Descrição</label>
    <div class="col-sm-8">
      <textarea class="form-control" rows="3" name="description" id="description" placeholder="Descrição" maxlength="200" required></textarea>
    </div>
  </div>
  <div class="form-group">
    <label for="price" class="col-sm-2 control-label">Preço</label>
    <div class="col-sm-8">
      <div class="input-group">
        <span class="input-group-addon">R$</span>
        <input type="number" min="0" step="0.01" class="form-control currency" name="price" id="price" placeholder="Preço" required />
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-8">
      <button type="submit" class="btn btn-success">Adicionar</button>
    </div>
  </div>
</form>