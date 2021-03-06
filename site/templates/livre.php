<?php snippet('header') ?>

  <main class="container bmt" role="main">

    <div class="row bmt">
        <div class="col-md-1 col-md-offset-1">
            <?php if($prev = $page->prevVisible()): ?>
              <a href="<?php echo $prev->url() ?>"><i class="fa fa-caret-left fa-4x bmt"></i></a>
            <?php endif ?>
        </div>
        <div class="col-md-8">
          <div class="bmb center">
            <i class="fa fa-book fa-4x"></i>
            <h1> <?php echo $page->title()->html() ?></h1>
            <h1>" <?php echo $page->baseline() ?> "</h1>
          </div>
          <div class="row">
            <?php if ($page->images() != '') : ?>
              <div class="col-xs-9">
                <?php echo $page->text()->kirbytext() ?>
              </div>
              <div class="col-xs-3">
                <img src="<?php echo $page->images()->first()->url() ?>" class="img-responsive">
              </div>
            <?php else : ?>
              <div class="col-md-12">
                <?php echo $page->text()->kirbytext() ?>
              </div>
            <?php endif ?>
            <div class="right mt mb">
              <?php snippet('meta') ?>
            </div>
          </div>
          <?php if ($page->documents() != '') : ?>
            <div class="row center mt mb">
              <a href="<?php echo $page->documents()->first()->url() ?>" download class="btn btn-default">Télécharger en format PDF <i class="fa fa-download"> </i></a>
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
    <!-- Portraits -->
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <?php foreach ($page->children() as $p) : ?>
              <div class="row">
                <div class="col-xs-11">
                  <?php if ($p->hasImages()) : ?>
                    <div class="thumb col-sm-4 mt">
                      <?php echo thumb($p->images()->first(), array('width' => 400, 'height' => 400, 'crop' => true)); ?>
                    </div>
                    <div class="col-sm-8">
                      <a href="<?php echo $p->url()  ?>"><h1><?php echo $p->title() ?></h1>
                      <h2><?php echo $p->company() ?></h2></a>
                      <h3><?php echo $p->baseline() ?></h3>
                    </div>
                  <?php else : ?>
                    <a href="<?php echo $p->url()  ?>"><h1><?php echo $p->title() ?></h1>
                    <h2><?php echo $p->company() ?></h2></a>
                    <h3><?php echo $p->baseline() ?></h3>
                  <?php endif ?>
                </div>
                <div class="col-xs-1">
                  <?php if ($p->children() != '') : ?>
                    <div class="flag">
                      <a href="<?php echo $p->children()->first()->url() ?>"><img src="/assets/images/flag_en.gif"></a>
                    </div>
                  <?php endif ?>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-12">
                  <p><?php echo $p->text()->excerpt(400) ?> </p>
                  <a href="<?php echo $p->url()  ?>">Lire <i class="fa fa-arrow-right"></i></a> 
                  <em class="reading">Lecture : <?php echo $p->text()->readingtime() ?></em>
                  <hr>
                </div>
              </div> <!-- end row -->
            <?php endforeach ?>
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