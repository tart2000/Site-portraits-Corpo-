

<div class="container">
  <h2>Livres</h2>
  <div class="row">
      <?php foreach(page('livres')->children() as $livre): ?>
        <div class="col-md-4 col-sm-6">
            <h2><i class="fa fa-book"></i>  <a href="<?php echo $livre->url() ?>"><?php echo $livre->title()->html() ?></a></h2>
            <hr>
            <?php foreach ($livre->children() as $p) : ?>
                <p><a href="<?php echo $p->url() ?>"><?php echo $p->title() ?></a></p>
            <?php endforeach ?>
        </div>
      <?php endforeach ?>
  </div>
</div>
