
<h3>Editar</h3>

<form method="POST" class="form-group">
    Nome<br/>
    <input class="" type="text" name="nome" value="<?php echo $user['nome']; ?>"><br/><br/>
    E-mail<br/>
    <input class="" type="email" name="email" value="<?php echo $user['email']; ?>"><br/><br/>
    <input class="btn btn-default" type="submit" value="Enviar"/>
</form>
<?php if (!empty($_GET['exist'])) : ?>

    <div class="alert-danger">E-mail já existente! Tente outro.</div>

<?php endif; ?>

