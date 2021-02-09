<?php $this->layout("_theme", ['title' => $title]); ?>
 
<div class="contact">
   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, dicta?</p>
   <form action="<?= url('contact'); ?>" method="post" enctype="multipart/form-data">
      <input type="text" name='name' placeholder="Seu Name">
      <input type="email" name='email' placeholder="Seu Email">
      <textarea name="message" rows="3" placeholder="Enviar Mensagem"></textarea>
      <button type="submit">Enviar Mensagem</button>
   
   </form>

</div>


<?php $this->start('script')?>
<script>
   $(function() {
      $('button').after('<button type="reset">Limpar</button>');
   });
</script>
<?php $this->end(); ?>

