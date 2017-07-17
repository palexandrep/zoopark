<?php

  //response generation function

  $response = "";

  //function to generate response
  function my_contact_form_generate_response($type, $message){

    global $response;

    if($type == "success") $response = "<div class='success'>{$message}</div>";
    else $response = "<div class='error'>{$message}</div>";

  }

  //response messages
  $not_human       = "Human verification incorrecte.";
  $missing_content = "Veuillez renseigner tous les champs.";
  $email_invalid   = "Adresse email invalide.";
  $message_unsent  = "Le message n'a pas été envoyé correctement, veuillez réessayer.";
  $message_sent    = "Merci, votre message à bien été envoyé.";

  //user posted variables
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $email = $_POST['email'];
  $date = $_POST['date'];
  
  if(empty($icon_telephone)){
          $icon_telephone = 'pas de numéro de téléphone à afficher.';
      }
  else{
    $icon_telephone = $_POST['icon_telephone'];
  }
  $human = $_POST['message_human'];
  $message = $_POST['textarea1'];;

  //php mailer variables
  $to = get_option('admin_email');
  $subject = "Vous avez reçu un message venant de ".get_bloginfo('name');
  $headers = 'From: '. $email . "\r\n" .
  'Reply-To: ' . $email . "\r\n";


  if(!$human == 0){
    if($human != 2) my_contact_form_generate_response("error", $not_human); //not human!
    else {

      //validate email
      if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        my_contact_form_generate_response("error", $email_invalid);
      else //email is valid
      {
        //validate presence of name and message
        if(empty($first_name) || empty($last_name) || empty($message)){
          my_contact_form_generate_response("error", $missing_content);
        }
        else //ready to go!
        {
          $sent = wp_mail($to, $subject, $message, $headers);
          if($sent) my_contact_form_generate_response("success", $message_sent); //message sent!
          else my_contact_form_generate_response("error", $message_unsent); //message wasn't sent
        }
      }
    }
  }
  else if ($_POST['submitted']) my_contact_form_generate_response("error", $missing_content);

?>
       
       <?php get_header();?>
       <!-- Page forms -->

       <style type="text/css">
                .error{
                  padding: 5px 9px;
                  border: 1px solid red;
                  color: red;
                  border-radius: 3px;
                }

                .success{
                  padding: 5px 9px;
                  border: 1px solid green;
                  color: green;
                  border-radius: 3px;
                }

                form span{
                  color: red;
                }
              </style>
<div class="ask section">
    <div class="container">
      <div class="row">
        <div class="header-forms col s12 center white-text">
          <i class="material-icons">contacts</i>
          <h3>
            <?php the_field('banniere_contact') ?>
          </h3>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
  
    <div class="row">
        <?php echo $response; ?>
    <div id="respond">


      <form class="col s12" method="post" action="<?php the_permalink(); ?>">
        <div class="row">
          <div class="input-field col s6">
            <input id="first_name" type="text" class="validate" name="first_name" value="<?php echo esc_attr($_POST['first_name']); ?>">
            <label for="first_name">Prénom</label>
          </div>
          <div class="input-field col s6">
            <input id="last_name" type="text" class="validate" name="last_name" value="<?php echo esc_attr($_POST['last_name']); ?>">
            <label for="last_name">Nom de famille</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6">
            <i class="material-icons grey-text">email</i>
            <input id="email" type="email" placeholder="email" class="validate" name="email" value="<?php echo esc_attr($_POST['email']); ?>">
          </div>
          <div class="input-field col s6">
            <i class="material-icons grey-text">today</i>
            <input type="date" class="datepicker" name="date" value="<?php echo esc_attr($_POST['date']); ?>">
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <textarea id="textarea1" class="materialize-textarea" name="textarea1" value="<?php echo esc_attr($_POST['textarea1']); ?>"></textarea>
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
            <input id="icon_telephone" disabled value="I am not editable" id="disabled" type="tel" class="validate" name="icon_telephone" value="<?php echo esc_attr($_POST['icon_telephone']); ?>">
            <label for="icon_telephone">Téléphone</label>
          </div>
        </div>
        <div class="row">
          <div>
              <input type="hidden" id="contact_form" name="submitted" value="1">
              <div class="input-field col s6"><label for="message_human">Je ne suis pas un robot: <br><input type="text" style="width: 60px;" name="message_human"> + 3 = 5</label></div>
              <input type="submit" class="btn-large waves-effect waves-light brown lighten-1"></input>
          </div>
        </div>
      </form>
      </div>
    </div>
  </div><?php if($image = get_field('background')): ?>
  <div class="company section" style="
           background-image: url('<?php echo $image["url"]; ?>')">
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


