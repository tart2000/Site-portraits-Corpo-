<?php snippet('header') ?>

  <main class="container bmt" role="main">

    <div class="row bmt bmb center">
      <h2><?php echo $page->text()->kirbytext() ?></h2>
      <a href="mailto:corinne@corpoe.com" target="_blank" class="mt btn btn-default">Demandez votre portrait</a>
    </div>

    <hr>

    <?php snippet('livres') ?>

    <?php snippet('portrait_hasard') ?>

  </main>

<?php snippet('footer') ?>