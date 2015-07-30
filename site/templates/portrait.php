<?php snippet('header') ?>

  <main class="container bmt" role="main">
    <div class="row bmt center">
      <a href="<?php echo $page->parent()->url() ?>"><?php echo $page->parent()->title() ?></a>
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
          <?php snippet('portrait_header') ?>
        </div>
      <?php else : ?>
        <div class="col-md-8">
          <?php snippet('portrait_header') ?>
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
          <?php if ($page->parent()->trad() != '') : ?>
            <em>Traduction anglaise : 
              <?php if ($page->parent()->tradLink() != '') : ?>
                <a href="<?php echo $page->parent()->tradLink() ?>" target="_blank"><?php echo $page->parent()->trad() ?></a></br>
              <?php else : ?>
                <?php echo $page->parent()->trad() ?></br>
              <?php endif ?>
            </em>
          <?php endif ?>
          <?php if ($page->credit() != '') : ?>
            <em>Crédit photo : <?php echo $page->credit() ?></em></br>
          <?php endif ?>
          <em>Date de parution : <?php echo $page->parent()->date('d/m/y','parution') ?></em>
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