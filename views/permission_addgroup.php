<h2>Permissões - Adicionar Grupo de Permissões</h2><br/>
<form method="POST">
	<input type="text" name="name" placeholder="Nome do Grupo">
<br/>
<br/>
<label>Permissões</label>
<?php foreach ($permissions_list as $p) : ?>
	<div class="p_item">
	<input type="checkbox" name="permissions[]" value="<?php echo $p['name']; ?>" id="p_<?php echo $p['id']; ?>">
	<label for="p_<?php echo $p['id']; ?>"><?php echo $p['name']; ?></label>
</div>
<?php endforeach; ?>
	<input type="submit" value="Adicionar">
</form>