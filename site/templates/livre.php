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
          <p><strong>Date de parution : <?php echo $page->date('d/m/y','parution') ?></strong></p>
          <?php echo $page->text()->kirbytext() ?>
        </div>
        <div class="col-md-1">
            <?php if($next = $page->nextVisible()): ?>
              <a href="<?php echo $next->url() ?>" class="right"><i class="fa fa-caret-right fa-4x bmt"></i></a>
              <?php endif ?>
        </div>

    </div>
<hr>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <?php foreach ($page->children() as $p) : ?>
                <a href="<?php echo $p->url()  ?>"><h3><?php echo $p->title() ?></h3></a>
                <p><?php echo $p->text()->excerpt(400) ?> </p>
                <a href="<?php echo $p->url()  ?>">Lire <i class="fa fa-arrow-right"></i></a> 
                <em class="reading">Lecture : <?php echo $p->text()->readingtime() ?></em>
                <hr>
            <?php endforeach ?>
        </div>
    </div>

    <!-- Navigation -->
    <div class="row mt">
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