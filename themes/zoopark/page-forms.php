       <?php get_header();?>
       <!-- Page forms -->
<div class="ask section">
    <div class="container">
      <div class="row">
        <div class="header-forms col s12 center white-text">
          <i class="material-icons">contacts</i>
          <h3>
            Une demande particulière laissez-nous vos coordonnées.
          </h3>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <form class="col s12" method="get" action="form.php">
        <div class="row">
          <div class="input-field col s6">
            <input id="first_name" type="text" class="validate">
            <label for="first_name">Prénom</label>
          </div>
          <div class="input-field col s6">
            <input id="last_name" type="text" class="validate">
            <label for="last_name">Nom de famille</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6">
            <i class="material-icons grey-text">email</i>
            <input id="email" type="email" placeholder="email" class="validate">
          </div>
          <div class="input-field col s6">
            <i class="material-icons grey-text">today</i>
            <input type="date" class="datepicker">
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <textarea id="textarea1" class="materialize-textarea"></textarea>
            <label for="textarea1">Textarea</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6">
              <input type="checkbox" id="test5" />
              <label for="test5">Je souhaite être contacté par téléphone</label>
          </div>
          <div class="input-field col s6">
            <i class="material-icons prefix">phone</i>
            <input id="icon_telephone" disabled value="I am not editable" id="disabled" type="tel" class="validate">
            <label for="icon_telephone">Téléphone</label>
          </div>
        </div>
        <div class="row">
          <div>
              <input type="hidden" id="contact_form" name="contact_form">
              <button class="btn-large waves-effect waves-light brown lighten-1">Envoyer</button>
          </div>
        </div>
      </form>
    </div>
  </div><?php if($image = get_field('background')): ?>
  <div class="company section" style="
           background-image: url('<?php echo $image["url"]; ?>');">
       <?php endif;?>
      
    <div class="container">
      
      <div class="row">
        <div class="col s12">
          <h3 class="white-text">ZooPark</h3>
          <p class="grey-text text-lighten-4">Les ZooPark Adventure sont des complexes animalier spécialisés dans le respect et la protection des espèces qui opèrent aux quatres coins de l'Europe. Spécialisé dans l'accueil des familles et la prise en charge d'école, ils raviront également les amoureux d'escalade nature avec de nombreuses activités. Plus de 200 espèces par sites dont 800 animaux venant de tous les continents. On retrouve aussi de nombreux spectacles en fonction des saisons.</p>
        </div>
      </div>
    </div>
  </div>
          <?php get_footer();?>


