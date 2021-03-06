

<div class="container">
  <h1><?php echo page('livres')->title() ?></h1>
  <div class="row">
      <?php foreach(page('livres')->children() as $livre): ?>
        <div class="col-md-12">
          <div class="row">
            <?php if ($livre->images() != '') : ?>
              <div class="col-sm-10 col-xs-9">
                <div class="mb">
                  <h2><i class="fa fa-book"></i>  <a href="<?php echo $livre->url() ?>"><?php echo $livre->title()->html() ?><?php if ($livre->baseline() != '') : ?> - <?php echo $livre->baseline() ?><?php endif ?></a></h2>
                  <em>Date de parution : <?php echo $livre->date('d/m/y','parution') ?> - <?php echo $livre->children()->count() ?> portraits</em>
                </div>
                <?php echo $livre->text()->kirbytext() ?>
              </div>
              <div class="col-sm-2 col-xs-3">
                <img src="<?php echo $livre->images()->first()->url() ?>" class="img-responsive">
              </div>
            <?php else : ?>
              <div class="col-md-12">
                <div class="mb">
                  <h2><i class="fa fa-book"></i>  <a href="<?php echo $livre->url() ?>"><?php echo $livre->title()->html() ?><?php if ($livre->baseline() != '') : ?> - <?php echo $livre->baseline() ?><?php endif ?></a></h2>
                  <em>Date de parution : <?php echo $livre->date('d/m/y','parution') ?> - <?php echo $livre->children()->count() ?> portraits</em>
                </div>
                <?php echo $livre->text()->kirbytext() ?>
              </div>
            <?php endif ?>
          </div>
          <div class="center row">
            <a class="" data-toggle="collapse" href="#collapse<?php echo $livre->dirname() ?>" aria-expanded="false" aria-controls="collapseExample">Liste des portraits<br><i class="fa fa-caret-down"></i></a>
          </div>
          <hr>

          <div class="row collapse" id="collapse<?php echo $livre->dirname() ?>">
            <?php foreach ($livre->children() as $p) : ?>
              <?php snippet('portraits-short', array('p' => $p)) ?>
            <?php endforeach ?>
            <div class="col-md-12">
              <hr>
            </div>
          </div>
        </div>
      <?php endforeach ?>
  </div>
</div>
