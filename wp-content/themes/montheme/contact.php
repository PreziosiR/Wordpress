<?php /*Template Name: contact.php*/?>
<!-- Form register -->
<?php get_header(); ?>
<div class="container">
  <div class="row">
    <div class="col-6" style="display: block; margin: auto">
      <form>
        <p class="h5 text-center mb-4">Contact</p>

        <div class="md-form">
            <i class="fa fa-user prefix grey-text"></i>
            <input type="text" id="orangeForm-name" class="form-control">
            <label for="orangeForm-name">Votre nom</label>
        </div>
        <div class="md-form">
            <i class="fa fa-envelope prefix grey-text"></i>
            <input type="text" id="orangeForm-email" class="form-control">
            <label for="orangeForm-email">Votre email</label>
        </div>
        <div class="md-form">
         <i class="fa fa-pencil prefix grey-text"></i>
         <textarea type="text" id="form8" class="md-textarea" style="height: 100px"></textarea>
         <label for="form8">Votre message</label>
        </div>
        <div class="text-center">
            <button class="btn btn-deep-orange">Envoyer</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php get_footer(); ?>
<!-- Form register -->
