<?php snippet('header') ?>

  <main class="container bmt" role="main">
    <div class="row bmt center">
      <a href="<?php echo $page->parent()->url() ?>">Retour</a>
    </div>
    <div class="row mt">
      <div class="col-md-1 col-md-offset-1">
        <?php if($prev = $page->prevVisible()): ?>
          <a href="<?php echo $prev->url() ?>"><i class="fa fa-caret-left fa-4x bmt"></i></a>
        <?php endif ?>
      </div>
      <?php if ($page->hasImages()) : ?>
        <div class="col-md-2 mt">
          <!-- make thumb and circle -->
          <div class="thumb">
            <?php echo thumb($page->images()->first(), array('width' => 400, 'height' => 400, 'crop' => true)); ?>
          </div>
        </div>
        <div class="col-md-6">
          <h1><?php echo $page->title()->html() ?></h1>
          <hr>
          <?php if ($page->companyLink() != '') : ?>
            <a href="<?php echo $page->companyLink() ?>" target="_blank"><i class="fa fa-external-link company right"></i></a><h2><?php echo $page->company() ?></h2> 
          <?php else : ?>
            <h2><?php echo $page->company() ?></h2>
          <?php endif ?>
          <h3><?php echo $page->baseline() ?>.</h3>
          <?php if ($page->children() != '') : ?>
            <div class="flag">
              <a href="<?php echo $page->children()->first()->url() ?>"><img src="/assets/images/flag_en.gif"></a>
            </div>
          <?php endif ?>
        </div>
      <?php else : ?>
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
      <?php endif ?>
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
          <hr>
          <?php if ($page->programme() != '') : ?>
            <em>EM Lyon : <?php echo $page->programme() ?></em></br>
          <?php endif ?>
          <?php if ($page->credit() != '') : ?>
            <em>Crédit photo : <?php echo $page->credit() ?></em>
          <?php endif ?>
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