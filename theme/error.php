<?php $this->layout("_theme", ['title' => $title]); ?>
 
<div class="error">
     <h2>Oooooops erro <?= $error?></h2>
     <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur doloremque, explicabo reprehenderit aliquam perspiciatis hic.</p>

</div>
<?php $this->start('sidebar'); ?>

<a title="Voltar ao inicio" href="<?= url()?>">Voltar</a>

<?php $this->end(); ?>