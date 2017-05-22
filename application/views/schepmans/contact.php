<?php
        $nom = isset($input_nom)?$input_nom:"";
        $prenom = isset($input_prenom)?$input_prenom:"";
        $email = isset($input_email)?$input_email:"";
        $message = isset($input_message)?$input_message:"";
        ?>
    <div class="row">
        <div class="container" id="contain_contact">
            <div class="col-xs-7 col-sm-7 col-lg-7 box_form_contact">
                <h2>Formulaire de contact</h2>
                <form action="<?php echo base_url('user/contact_post'); ?>" method="POST" class="contact-form" role="form" id="contact-form">
                    <div class="form-group">
                        <input id="author" type="text" name="nom" value="<?php echo $nom ?>" id="name" placeholder="Votre nom" class="form-control">

                    </div>
                    <div class="form-group">
                        <input type="text" name="prenom" value="<?php echo $prenom ?>" id="name" placeholder="Votre prénom" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" name="email" value="<?php echo $email ?>" id="email" placeholder="Votre email" class="form-control">

                    </div>
                    <div class="form-group">

                        <textarea cols="70" id="message" name="message" value="<?php echo $message ?>" rows="3" type="text" class="form-control"
                            placeholder="Votre message"></textarea>
                    </div>
                    <button type="submit" class="btn main-btn pull-right btn-primary" value="Envoyer"> Envoyer un message </button>

           
    </form>
            </div>
        </div>
    
            <br>
        </div>
    

    <?php echo validation_errors("<p class='alert alert-dissmissable alert-danger'>"); ?>


        <div class="contact">
            <div class="col-sm-4 col-xs-4 first-box">


                <div id="contact_box" class="box_phone">
                    <i class="contact_icon fa fa-phone" aria-hidden="true"></i>
                    <h3 class="inline_block contact_categorie">Phone</h3>
                    <p class="contact_categorie">+880-1700-987654</p><br>
                </div>

                <div id="contact_box" class="box_phone">
                    <i class="contact_icon fa fa-map" aria-hidden="true"></i>
                    <h3 class="inline_block contact_categorie">Location</h3>
                    <p class="contact_categorie">1036 Gulshan Road</p><br>
                </div>

                <div id="contact_box" class="box_phone">
                    <i class="contact_icon fa fa-envelope" aria-hidden="true"></i>
                    <h3 class="inline_block contact_categorie">E-mail</h3>
                    <p class="contact_categorie">info@yourdomain.com</p><br>
                </div>

            </div>
        </div>
    </div>
</div>