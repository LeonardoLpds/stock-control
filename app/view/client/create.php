<div class="page-header">
  <h1>Cadastrar um novo cliente</h1>
</div>
<form class="form-horizontal" action="/controller/client/create" method="post">
  <div class="form-group">
    <label for="name" class="col-sm-2 control-label">Nome</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="name" id="name" placeholder="Nome" required />
    </div>
  </div>
  <div class="form-group">
    <label for="email" class="col-sm-2 control-label">E-Mail</label>
    <div class="col-sm-8">
      <input type="email" class="form-control" name="email" id="email" placeholder="E-Mail" required />
    </div>
  </div>
  <div class="form-group">
    <label for="phone" class="col-sm-2 control-label">Telefone</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="phone" id="phone" placeholder="Telefone" required />
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-8">
      <button type="submit" class="btn btn-success">Adicionar</button>
    </div>
  </div>
</form>