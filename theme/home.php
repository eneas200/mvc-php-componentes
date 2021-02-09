<?php $this->layout("_theme", ['title' => $title]); ?>
 
<div class="users">
    <?php if(isset($users)): ?>
        <?php foreach($users as $user):?>
        <article class="users_user">
            <h3><?= $user->name?> | <?= $user->email?></h3>
        </article>
        <?php endforeach; ?>
    <?php else: ?>
        <h4>Não há usuarios cadastrados</h4>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam, animi.</p>
    <?php endif; ?>

</div>
