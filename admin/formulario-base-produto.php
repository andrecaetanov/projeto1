<div class="row row1">
  <div class="form-group col-sm-6">
    <label>Nome</label>
    <input type="text" name="nome" class="form-control" required value="<?= $produto['nome']?>">
  </div>
  <div class="form-group col-sm-2">
    <label>Preco</label>
    <input type="text" name="preco" class="form-control" required value="<?= $produto['preco']?>">
  </div>
  <div class="form-group col-sm-4">
    <label>Data de lançamento</label>
    <input type="text" name="data_lancamento" class="form-control data_lancamento" value="<?= $produto['data_lancamento']?>">
  </div>
</div>
<div class="row row2">
  <div class="form-group descricao">
    <label>Descricao</label>
    <textarea name="descricao" class="form-control desc" rows="6"><?= $produto['descricao']?></textarea>
  </div>
  
</div>
<div class="row row3">
  <div class="row listagem">
    <div class="form-group form-select">
      <label>Plataforma</label>
      <select name="plataforma" class="form-control select-plataforma">
        <?php 
                  foreach ($plataformas as $plataforma) : 
                  $plataformaSelecionada = $produto['plataforma_id'] == $plataforma['id']; 
                  $selected = $plataformaSelecionada ? "selected='selected'" : ""; ?>
        <option value="<?= $plataforma['id']?>" <?=$selected?> ><?= $plataforma['nome'] ?></option>
        <?php endforeach ?>
      </select>
    </div>

    <div class="form-group form-select">
      <label>Tipo</label>
      <select name="tipo" class="form-control select-tipo">
        <?php 
                  foreach ($tipos as $tipo) : 
                  $tipoSelected = $produto['tipo_id'] == $tipo['id']; 
                  $selected = $tipoSelected ? "selected='selected'" : ""; ?>
        <option value="<?= $tipo['id']?>" <?=$selected?> ><?= $tipo['nome'] ?></option>
        <?php endforeach ?>
      </select>
    </div>
  </div>
  <div class="row form-checkbox">
    <div class="form-group form-check form-check-inline">
      <label>Usado</label>
      <input type="checkbox" name="usado" class="checkbox" <?=$usado?>>
    </div>
    <div class="form-group">
      <label>Disponível</label>
      <input type="checkbox" name="disponivel" class="checkbox" <?=$disponivel?>>
    </div>
  </div>
  <div class="row form-imagem">
    <input type="file" name="pic" accept="image/*">
  </div>
</div>
