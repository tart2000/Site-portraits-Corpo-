<?php snippet('header') ?>

  <main class="container bmt" role="main">
    <div class="row bmt">
      <div class="col-md-1 col-md-offset-1">
        <?php if($prev = $page->prevVisible()): ?>
          <a href="<?php echo $prev->url() ?>"><i class="fa fa-caret-left fa-4x bmt"></i></a>
        <?php endif ?>
      </div>
      <div class="col-md-8">
        <h1><?php echo $page->title()->html() ?></h1>
        <hr>
        <?php if ($page->companyLink() != '') : ?>
          <a href="<?php echo $page->companyLink() ?>" target="_blank"><i class="fa fa-external-link company right"></i></a><h2><?php echo $page->company() ?></h2> 
        <?php endif ?>
        <h3><?php echo $page->baseline() ?>.</h3>
        <?php if ($page->children() != '') : ?>
          <div class="flag">
            <a href="<?php echo $page->children()->first()->url() ?>"><img src="/assets/images/flag_en.gif"></a>
          </div>
        <?php endif ?>
      </div>
      <div class="col-md-1">
        <?php if($next = $page->nextVisible()): ?>
          <a href="<?php echo $next->url() ?>" class="right"><i class="fa fa-caret-right fa-4x bmt"></i></a>
        <?php endif ?>
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
    <div class="row bmt">
        <div class="col-md-10 col-md-offset-1">
              <?php if($prev = $page->prevVisible()): ?>
                <a href="<?php echo $prev->url() ?>" class="left"><i class="fa fa-caret-left fa-4x"></i></a>
              <?php endif ?>
              <?php if($next = $page->nextVisible()): ?>
                <a href="<?php echo $next->url() ?>" class="right"><i class="fa fa-caret-right fa-4x"></i></a>
              <?php endif ?>
        </div>
      </div>
  </main>

<?php snippet('footer') ?>