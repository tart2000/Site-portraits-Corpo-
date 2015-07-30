<?php snippet('header') ?>

  <main class="container bmt" role="main">

    <div class="row bmt bmb">
      <div class= "col-md-12 center bmb">
        <h2><?php echo $page->text() ?></h2>
      </div>
      <?php foreach (page('livres')->children() as $livre) : ?>
        <h1><?php echo $livre->title() ?> - <?php echo $livre->baseline() ?></h1>
        <hr>
        <?php foreach ($livre->children() as $p) : ?>
          <?php snippet('portraits-short', array('p' => $p)) ?>
        <?php endforeach ?>
        <div class="clearfix"></div>
      <?php endforeach ?>

    </div>

  </main>

<?php snippet('footer') ?>