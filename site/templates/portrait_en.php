<?php snippet('header') ?>

  <main class="container bmt" role="main">
    <div class="row bmt center">
      <a href="<?php echo $page->parent()->parent()->url() ?>"><?php echo $page->parent()->parent()->title() ?></a> | <a href="<?php echo $page->parent()->url() ?>"> Version française</a>
    </div>
    <div class="row mt">
      <div class="col-md-8 col-md-offset-2">
        <?php if ($page->parent()->hasImages()) : ?>
        <div class="row">
          <div class="col-md-3 mt">
            <div class="thumb">
              <?php echo thumb($page->parent()->images()->first(), array('width' => 400, 'height' => 400, 'crop' => true)); ?>
            </div>
          </div>
          <div class="col-md-9">
            <h1><?php echo $page->parent()->title()->html() ?></h1>
            <hr>
            <?php if ($page->parent()->companyLink() != '') : ?>
              <a href="<?php echo $page->parent()->companyLink() ?>" target="_blank"><i class="fa fa-external-link company right"></i></a><h2><?php echo $page->company() ?></h2> 
            <?php endif ?>
            <h3><?php echo $page->baseline() ?>.</h3>
          </div>
        </div>
        <?php else : ?>
          <h1><?php echo $page->parent()->title()->html() ?></h1>
          <hr>
          <?php if ($page->parent()->companyLink() != '') : ?>
            <a href="<?php echo $page->parent()->companyLink() ?>" target="_blank"><i class="fa fa-external-link company right"></i></a><h2><?php echo $page->company() ?></h2> 
          <?php endif ?>
          <h3><?php echo $page->baseline() ?>.</h3>
        <?php endif ?>

      </div>

    </div>
    <hr>
    <div class="row bmb">
      <div class="col-md-8 col-md-offset-2">
        <div class="text">
          <?php echo $page->text()->kirbytext() ?>
          <hr>
          <?php if ($page->parent()->programme() != '') : ?>
            <em>EM Lyon: <?php echo $page->parent()->programme() ?></em></br>
          <?php endif ?>
          <?php if ($page->parent()->credit() != '') : ?>
            <em>Photo credit: <?php echo $page->parent()->credit() ?></em></br>
          <?php endif ?>
          <?php if ($page->parent()->parent()->trad() != '') : ?>
            <em>Translation : 
              <?php if ($page->parent()->parent()->tradLink() != '') : ?>
                <a href="<?php echo $page->parent()->parent()->tradLink() ?>" target="_blank"><?php echo $page->parent()->parent()->trad() ?></a></br>
              <?php else : ?>
                <?php echo $page->parent()->parent()->trad() ?></br>
              <?php endif ?>
            </em>
          <?php endif ?>
          <em>Date de parution : <?php echo $page->parent()->parent()->date('d/m/y','parution') ?></em>
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