<?php snippet('header') ?>

  <main class="container bmt" role="main">

    <div class="row bmt">
        <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
          <h1><?php echo $page->title()->html() ?></h1>
          <?php echo $page->text()->kirbytext() ?>

	        <form class="bmb bmt" action="//formspree.io/corinne.lapras@corpoe.com" method="POST">
			  <div class="form-group">
			    <input type="text" class="form-control input-lg" name="name" placeholder="Prénom Nom">
			  </div>
			  <div class="form-group">
			    <input type="email" class="form-control" name="_replyto" placeholder="Adresse email">
			  </div>
 			  <div class="form-group">
			  	<input type="text" class="form-control" name="metier" placeholder="Métier">
			  </div>
			  <div class="form-group">
			    <input type="text" class="form-control" name="entreprise" placeholder="Entreprise">
			  </div>
			  <div class="form-group">
			    <input type="text" class="form-control" name="tel" placeholder="Numéro de téléphone">
			  </div>
			  <div class="form-group">
			  	<label for="">Votre demande</label>
				<textarea class="form-control" name="message" rows="6"></textarea>
			  </div>
			  <input type="hidden" name="_next" value="http://portraits.corpoe.com" />
			  <input type="hidden" name="_subject" value="Demande de portrait" />
			  <input type="text" name="_gotcha" style="display:none" />
			  <input type="submit" class="btn btn-default btn-lg" value="Envoyer"/>
			</form>
		</div>
    </div>

  </main>

<?php snippet('footer') ?>