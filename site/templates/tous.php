<?php snippet('header') ?>

  <main class="container bmt" role="main">

    <div class="row bmt bmb">
      <div class= "col-md-12 center bmb">
        <h2><?php echo $page->text() ?></h2>
      </div>
      <?php $stack = array(); ?>
      <?php foreach (page('livres')->children() as $livre) : ?>
        <?php foreach ($livre->children() as $p) : ?>
          <?php array_push($stack, $p) ?>
        <?php endforeach ?>
      <?php endforeach ?>
      <?php shuffle($stack) ?>
      <?php foreach ($stack as $p) : ?>
        <?php snippet('portraits-short', array('p' => $p)) ?>
      <?php endforeach ?>

    </div>

  </main>

<?php snippet('footer') ?>