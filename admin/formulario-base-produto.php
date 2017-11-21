<table class="table table-responsive-sm">
  <tr>
    <td colspan="2">
      <label>Nome</label>
      <input class="form-control" type="text" name="nome" required value="<?= $produto['nome']?>">
    </td>
  </tr>
  <tr>
    <td>
      <label>Preço</label>
      <input class="form-control" type="text" name="preco" required value="<?= $produto['preco']?>">
    </td>
    <td>
      <label>Data de Lançamento</label>
      <input type="text" name="data_lancamento" class="form-control" value="<?= $produto['data_lancamento']?>">
    </td>
  </tr>
  <tr>
    <td colspan="2">
      <label>Descrição</label>
      <textarea name="descricao" class="form-control desc" rows="6"><?= $produto['descricao']?></textarea>
    </td>
  </tr>
  <tr>
    <td>
      <label>Plataforma</label>
      <select name="plataforma" class="form-control select-plataforma">
        <?php 
                  foreach ($plataformas as $plataforma) : 
                  $plataformaSelecionada = $produto['plataforma_id'] == $plataforma['id']; 
                  $selected = $plataformaSelecionada ? "selected='selected'" : ""; ?>
        <option value="<?= $plataforma['id']?>" <?=$selected?> ><?= $plataforma['nome'] ?></option>
        <?php endforeach ?>
      </select>
    </td>
    <td>
      <label>Tipo</label>
      <select name="tipo" class="form-control select-tipo">
        <?php 
                  foreach ($tipos as $tipo) : 
                  $tipoSelected = $produto['tipo_id'] == $tipo['id']; 
                  $selected = $tipoSelected ? "selected='selected'" : ""; ?>
        <option value="<?= $tipo['id']?>" <?=$selected?> ><?= $tipo['nome'] ?></option>
        <?php endforeach ?>
      </select>
      
    </td>
  </tr>
  <tr>
    <td>
      <label>Usado</label>
      <input type="checkbox" name="usado" class="checkbox" <?=$usado?>>
    </td>
    <td>
      <label>Disponível</label>
      <input type="checkbox" name="disponivel" class="checkbox" <?=$disponivel?>>
    </td>
  </tr>
  <tr>
    <td colspan="2">
      <input type="file" name="pic" accept="image/*" class="input-imagem">
    </td>
  </tr>
</table>
