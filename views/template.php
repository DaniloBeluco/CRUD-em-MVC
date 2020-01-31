<html>
    <head>
        <title>Meu site</title>
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/style.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/style.css"/>
        <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
    </head>
    <body>
        <div class="menu">
            <h2>Este é o topo</h2>
            <a href="<?php echo BASE_URL; ?>home">Home</a>
            <a href="<?php echo BASE_URL; ?>galeria">Galeria</a>
        </div>
        <hr/>
        <header><h3>Meu Sistema de Usuários</h3><br/>


            <?php $this->loadViewInTemplate($viewName, $viewData); ?>
        </header><br/>
        <footer>Todos os direitos reservados.</footer>
</html>

