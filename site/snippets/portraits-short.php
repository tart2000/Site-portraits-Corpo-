<div class="col-md-4 col-sm-6 a-port">
  <?php if ($p->hasImages()) :?>
    <div class="col-xs-3 thumb mt">
      <?php echo thumb($p->images()->first(), array('width' => 100, 'height' => 100, 'crop' => true)); ?>
    </div>
    <div class="col-xs-9 po">
      <a href="<?php echo $p->url() ?>"><strong><?php echo $p->title() ?></strong><br> <?php echo $p->company() ?></a>
    </div>
    <div class="clearfix"></div>
  <?php else : ?>
    <div class="po">
      <a href="<?php echo $p->url() ?>"><strong><?php echo $p->title() ?></strong><br> <?php echo $p->company() ?></a>
    </div>
  <?php endif ?>
</div>