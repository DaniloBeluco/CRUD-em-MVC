
<a style="margin-right: 90%; margin-bottom: 8px;" href="<?php echo BASE_URL; ?>adicionar/adicionar" class="btn btn-success"><strong>ADICIONAR USUÁRIO</strong></a>
<table  class="table-bordered">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>EMAIL</th>
        <th>AÇÕES</th>
    </tr>

    <?php foreach ($lista as $item): ?>
        <tr>
            <td><?php echo $item['id']; ?></td>
            <td><?php echo $item['nome']; ?></td>
            <td><?php echo $item['email']; ?></td>
            <td><a href="<?php echo BASE_URL; ?>editar/editar/<?php echo $item['id']; ?>" class="btn btn-default">Editar</a><a href="<?php echo BASE_URL; ?>editar/deletar/<?php echo $item['id']; ?>" style="margin-left: 10px;" class="btn btn-danger">Excluir</a></td>

        </tr>
    <?php endforeach; ?>

</table>


