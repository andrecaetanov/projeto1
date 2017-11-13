<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" type="text/css" href="assets/css/cadastra-produto.css">
  <link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.7-dist/css/bootstrap.css">
</head>
<body>

<div class="container">
<form>
  <div class="form-row ">
    <div class="form-group col-sm-3">
      <label for="inputEmail4">Nome</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col-sm-3">
      <label for="inputPassword4">Preço</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
    </div>
    <div class="form-group col-sm-2">
      <label for="inputAddress2">Data de lançamento</label>
      <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="exampleFormControlTextarea1">Descrição</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <div class="form-group col-md-2">
      <label for="inputState">Plataforma</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputState1">Tipo</label>
      <select id="inputState1" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox"> Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
</div>