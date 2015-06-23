<?php snippet('header') ?>

  <main class="container bmt" role="main">
    <div class="row bmt center">
      <a href="<?php echo $page->parent()->url() ?>">Retour</a>
    </div>
    <div class="row mt">
      <div class="col-md-8 col-md-offset-2">
        <h1><?php echo $page->parent()->title()->html() ?></h1>
        <hr>
        <?php if ($page->parent()->companyLink() != '') : ?>
          <a href="<?php echo $page->companyLink() ?>" target="_blank"><i class="fa fa-external-link company right"></i></a><h2><?php echo $page->company() ?></h2> 
        <?php endif ?>
        <h3><?php echo $page->baseline() ?>.</h3>
        <em class="right"><?php if ($page->trad() != '') : ?>
          <?php echo 'Traduction : '?>
          <?php echo $page->trad() ?>
          <?php endif ?>
        </em>
      </div>

    </div>
    <hr>
    <div class="row bmb">
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