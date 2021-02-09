<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>

    <link rel="stylesheet" href="<?= url('/theme/style.css'); ?>"/>
</head>
<body>
    <nav class="main_nav">
    <?php if($this->section('sidebar')): 
        echo $this->section('sidebar');
    else: ?>
        <a title="" href="<?= url(); ?>">Home</a>
        <a title="" href="<?= url('contato'); ?>">Contato</a>
        <a title="" href="<?= url('teste'); ?>">Teste</a>
    <?php endif; ?>
    </nav>

    <main class="main_content">
        <?= $this->section('content'); ?>
    </main>

    <footer class="main_footer">
        <?= SITE; ?> - Todos os direitos preservados.
    </footer>


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <?= $this->section('script'); ?>
</body>
</html>