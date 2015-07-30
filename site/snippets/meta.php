<em>Date de parution : <?php echo $page->date('d/m/y','parution') ?> - <?php echo $page->children()->count() ?> portraits</em></br>
  <?php if ($page->design() != '') : ?>
    <em>Création graphique : 
      <?php if ($page->designLink() != '') : ?>
        <a href="<?php echo $page->designLink() ?>" target="_blank"><?php echo $page->design() ?></a></br>
      <?php else : ?>
        <?php echo $page->design() ?></br>
      <?php endif ?>
    </em>
  <?php endif ?>
  <?php if ($page->trad() != '') : ?>
    <em>Traduction anglaise : 
      <?php if ($page->tradLink() != '') : ?>
        <a href="<?php echo $page->tradLink() ?>" target="_blank"><?php echo $page->trad() ?></a>
      <?php else : ?>
        <?php echo $page->trad() ?>
      <?php endif ?>
    </em>
  <?php endif ?>