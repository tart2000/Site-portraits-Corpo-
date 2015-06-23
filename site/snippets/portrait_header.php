<h1><?php echo $page->title()->html() ?></h1>
<hr>
<?php if ($page->companyLink() != '') : ?>
  <a href="<?php echo $page->companyLink() ?>" target="_blank"><i class="fa fa-external-link company right"></i></a><h2><?php echo $page->company() ?></h2> 
<?php else : ?>
  <h2><?php echo $page->company() ?></h2>
<?php endif ?>

<h3><?php echo $page->baseline() ?>.</h3>
<?php if ($page->children() != '') : ?>
  <div class="flag">
    <a href="<?php echo $page->children()->first()->url() ?>"><img src="/assets/images/flag_en.gif"></a>
  </div>
<?php endif ?>