<?php snippet('header') ?>

  <main class="container bmt" role="main">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <h1><?php echo $page->parent()->title()->html() ?></h1>
        <hr>
        <h2><?php echo $page->company() ?></h2>
        <h3><?php echo $page->baseline() ?>.</h3>

          <div class="flag">
            <a href="<?php echo $page->parent()->url() ?>"><i class="fa fa-arrow-left"></i> Retour</a>
          </div>


      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="text">
          <?php echo $page->text()->kirbytext() ?>
        </div>
      </div>
    </div>
    <!-- Navigation -->
    <div class="row mt">
        <div class="col-md-10 col-md-offset-1"
          <nav class="" role="navigation">
            <ul class="pager">
              <?php if($prev = $page->prevVisible()): ?>
              <li class="previous"><a href="<?php echo $prev->url() ?>">&larr; previous</a></li>
              <?php endif ?>
              <?php if($next = $page->nextVisible()): ?>
              <li class="next"><a href="<?php echo $next->url() ?>">next &rarr;</a></li>
              <?php endif ?>
            </ul>
          </nav>
        </div>
      </div>
  </main>

<?php snippet('footer') ?>