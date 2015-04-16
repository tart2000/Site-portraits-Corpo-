<?php snippet('header') ?>

  <main class="container bmt" role="main">

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h1><?php echo $page->title()->html() ?></h1>
          <?php echo $page->text()->kirbytext() ?>
        </div>
    </div>

  </main>

<?php snippet('footer') ?>