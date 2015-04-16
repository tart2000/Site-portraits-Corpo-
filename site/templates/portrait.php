<?php snippet('header') ?>

  <main class="container bmt" role="main">

    <div class="col-md-10 col-md-offset-1">
      <h1><?php echo $page->title()->html() ?></h1>

      <div class="text">
        <?php echo $page->text()->kirbytext() ?>

        <?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
        <figure>
          <img src="<?php echo $image->url() ?>" alt="<?php echo $page->title()->html() ?>">
        </figure>
        <?php endforeach ?>
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