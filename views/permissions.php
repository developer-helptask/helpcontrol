<div class="tabarea">
	<div class="tabitem activetab">Grupo de Permissões</div>
	<div class="tabitem">Permissões</div>
</div>

<div class="tabcontent">

<div class="tabbody">
		<div class="btn-add"><a href="<?php echo BASE_URL; ?>permission/add_group" title="Adicionar">ADICIONAR <i class="fas fa-plus"></i></a></div>
		<table id="grupo_permissoes" class="display tb">
        <thead>
            <tr>
                <th>Grupo de Permissões</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($permissions_groups_list as $p): ?>
            <tr>
                <td><?php echo $p['name']; ?></td>
                <td>
                    <a href="<?php echo BASE_URL; ?>permission/delete_group/<?php echo $p['id']; ?>" style="color:#232830" title="Excluir"onclick="return confirm('Deseja Reamente Excluir?')"><i class="far fa-trash-alt"></i></a>
                    <a href="<?php echo BASE_URL; ?>permission/edit_group/<?php echo $p['id']; ?>" style="color:#232830" title="Editar"><i class="far fa-edit"></i></a>
                    
                </td>
            </tr>
        <?php endforeach; ?>
            
        </tbody>
        
    </table>
	</div>

	<div class="tabbody">
		<div class="btn-add"><a href="<?php echo BASE_URL; ?>permission/add" title="Adicionar">ADICIONAR <i class="fas fa-plus"></i></a></div>
		<table id="permissoes" class="display tb">
        <thead>
            <tr>
                <th>Nome Permissões</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($permissions_list as $p): ?>
            <tr>
                <td><?php echo $p['name']; ?></td>
                <td>
                    <a href="<?php echo BASE_URL; ?>permission/delete/<?php echo $p['id']; ?>" style="color:#232830" title="Excluir"onclick="return confirm('Deseja Reamente Excluir?')"><i class="far fa-trash-alt"></i></a>
                    
                </td>
            </tr>
        <?php endforeach; ?>
            
        </tbody>
        
    </table>
	</div>
</div>