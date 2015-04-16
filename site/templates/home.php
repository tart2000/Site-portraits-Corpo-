<?php snippet('header') ?>

  <main class="container bmt" role="main">

    <div class="row bmt">
      <?php echo $page->text()->kirbytext() ?>
    </div>

    <hr>

    <?php snippet('livres') ?>

  </main>

<?php snippet('footer') ?>