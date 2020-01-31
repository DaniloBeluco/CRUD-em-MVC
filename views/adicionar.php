<h3>Adicionar</h3>



<form method="POST" action="<?php echo BASE_URL; ?>/adicionar/add_save" class="form-group">

    Nome:<br/>
    <input class="" type="text" name="nome"/><br/><br/>

    E-mail:<br/>
    <input class="" type="email" name="email"/><br/><br/>
    <input class="btn btn-default" type="submit" value="Adicionar"/>

</form>
<?php if ($error == 'exist'): ?>
<div class="alert-danger">E-mail já existente! Tente outro.</div>
<?php endif; ?>

