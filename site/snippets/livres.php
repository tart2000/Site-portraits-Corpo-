

<div class="container">
  <h2>Livres</h2>
  <div class="row">
      <?php foreach(page('livres')->children() as $livre): ?>
        <div class="col-md-12">
          <div class="row">
            <?php if ($livre->images() != '') : ?>
              <div class="col-sm-10 col-xs-9">
                <h2><i class="fa fa-book"></i>  <a href="<?php echo $livre->url() ?>"><?php echo $livre->title()->html() ?></a></h2>
                <em>Date de parution : <?php echo $livre->date('d/m/y','parution') ?> - <?php echo $livre->children()->count() ?> portraits</em>
              </div>
              <div class="col-sm-2 col-xs-3">
                <img src="<?php echo $livre->images()->first()->url() ?>" class="img-responsive">
              </div>
            <?php else : ?>
              <div class="col-md-12">
                <h2><i class="fa fa-book"></i>  <a href="<?php echo $livre->url() ?>"><?php echo $livre->title()->html() ?></a></h2>
                <em>Date de parution : <?php echo $livre->date('d/m/y','parution') ?> - <?php echo $livre->children()->count() ?> portraits</em>
              </div>
            <?php endif ?>
          </div>
          <hr>
          <div class="row">
            <?php foreach ($livre->children() as $p) : ?>
              <div class="col-md-4 col-sm-6 a-port">
                <p><a href="<?php echo $p->url() ?>"><strong><?php echo $p->title() ?></strong><br> <?php echo $p->company() ?></a></p>
              </div>
            <?php endforeach ?>
          </div>
        </div>
      <?php endforeach ?>
  </div>
</div>
