<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h2>Un portrait au hasard :</h2>
        <?php foreach (page('livres')->children()->children()->shuffle()->limit(1) as $p) : ?>
            <h2><a href="<?php echo $p->url() ?>"><?php echo $p->title() ?> - <?php echo $p->company() ?></a></h2>
            <h3><?php echo $p->baseline() ?></h3>
            <hr>
            <div class="text">
                <p><?php echo $p->text()->excerpt(700) ?> </p> <a href="<?php echo $p->url() ?>">Lire <i class="fa fa-arrow-right"></i></a>
            </div>
        <?php endforeach ?>
    </div>
</div>