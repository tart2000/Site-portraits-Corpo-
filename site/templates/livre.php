<?php snippet('header') ?>

  <main class="container bmt" role="main">

    <div class="row bmt">
        <div class="col-md-1 col-md-offset-1">
            <?php if($prev = $page->prevVisible()): ?>
              <a href="<?php echo $prev->url() ?>"><i class="fa fa-caret-left fa-4x bmt"></i></a>
            <?php endif ?>
        </div>
        <div class="col-md-8">
          <h1><i class="fa fa-book"></i>  <?php echo $page->title()->html() ?></h1>
          <em>Date de parution : <?php echo $page->date('d/m/y','parution') ?> - <?php echo $page->children()->count() ?> portraits</em>
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
          </div>
          <?php if ($page->documents() != '') : ?>
            <div class="row center">
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
                  <h2><a href="<?php echo $p->url()  ?>"><?php echo $p->title() ?> - <?php echo $p->company() ?></a></h2>
                </div>
                <div class="col-xs-1">
                  <?php if ($p->children() != '') : ?>
                    <div class="flag">
                      <a href="<?php echo $p->children()->first()->url() ?>"><img src="/assets/images/flag_en.gif"></a>
                    </div>
                  <?php endif ?>
                </div>
                <div class="col-md-12">
                  <p><strong><?php echo $p->baseline() ?></strong></p>
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