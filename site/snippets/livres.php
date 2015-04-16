

<div class="container">
  <h2>Livres</h2>
  <div class="row">
      <?php foreach(page('livres')->children() as $livre): ?>
        <div class="col-md-3 col-sm-6">
            <h3><i class="fa fa-book"></i>  <a href="<?php echo $livre->url() ?>"><?php echo $livre->title()->html() ?></a></h3>
            <p><?php echo $livre->text() ?></p>
            <?php foreach ($livre->children() as $p) : ?>
                <p><?php echo $p->title() ?> <a href="<?php echo $p->url() ?>">></a></p>
            <?php endforeach ?>
        </div>
      <?php endforeach ?>
  </div>
</div>
