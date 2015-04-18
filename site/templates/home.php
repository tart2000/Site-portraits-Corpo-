<?php snippet('header') ?>

  <main class="container bmt" role="main">

    <div class="row bmt center">
      <h2><?php echo $page->text()->kirbytext() ?></h2>
    </div>

    <hr>

    <?php snippet('livres') ?>

  </main>

<?php snippet('footer') ?>