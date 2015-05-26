<?php snippet('header') ?>

  <main class="container bmt" role="main">

    <div class="row bmt bmb">
      <div class="col-sm-4 mt"><img src="<?php echo $page->images()->first()->url() ?>" class="img-responsive"></div>
      <div class="col-sm-8"><?php echo $page->text()->kirbytext() ?></div>
      <div class="col-sm-12 center">
        <a href="mailto:corinne@corpoe.com" target="_blank" class="mt btn btn-default">Demandez votre portrait</a>
      </div>
    </div>

    <hr>

    <?php snippet('livres') ?>

    <?php snippet('portrait_hasard') ?>

  </main>

<?php snippet('footer') ?>