<?php
        $nom = isset($input_nom)?$input_nom:"";
        $prenom = isset($input_prenom)?$input_prenom:"";
        $email = isset($input_email)?$input_email:"";
        $message = isset($input_message)?$input_message:"";
        ?>
    <div class="row">
        <div class="container" id="contain_contact">
            <div class="col-xs-7 col-sm-7 col-lg-7 box_form_contact">
                <h1 class="contact_titre"><?php echo lang('contact_h2_form');?></h1>
                <form action="<?php echo base_url('user/contact_post'); ?>" method="POST" class="contact-form" role="form" id="contact-form">
                    <div class="form-group">
                        <input id="author" title="Votre nom" type="text" name="nom" value="<?php echo $nom ?>" id="name" placeholder="Votre nom" class="form-control">

                    </div>
                    <div class="form-group">
                        <input title="Votre prénom" type="text" name="prenom" value="<?php echo $prenom ?>" id="name" placeholder="Votre prénom" class="form-control">
                    </div>
                    <div class="form-group">
                        <input title="Votre email" type="text" name="email" value="<?php echo $email ?>" id="email" placeholder="Votre email" class="form-control">

                    </div>
                    <div class="form-group">
                        <textarea cols="70" id="message" name="message" value="<?php echo $message ?>" rows="3" title="Écrivez votre message" type="text" class="form-control" placeholder="Votre message"></textarea>
                    </div>
                    <button title="" type="submit" class="btn main-btn pull-right btn-primary" value="Envoyer"><?php echo lang('contact_envoie_message');?> </button>


                </form>
            </div>
 

            <?php echo validation_errors("<p class='alert alert-dissmissable alert-danger'>"); ?>


            <div class="contact">
                <div class="col-sm-4 col-xs-4 first-box" itemscope itemtype="http://schema.org/Person">


                    <div id="contact_box" class="box_phone">
                        <i class="contact_icon fa fa-phone" aria-hidden="true"></i>
                        <h3 class="inline_block contact_categorie">Phone</h3>
                        <p class="contact_categorie"><span itemprop="telephone"> +880-1700-987654</span></p><br>
                    </div>

                    <div id="contact_box" class="box_phone">
                        <i class="contact_icon fa fa-map" aria-hidden="true"></i>
                        <h3 class="inline_block contact_categorie">Location</h3>
                        <p class="contact_categorie"><span itemprop="adress">1036 Gulshan Road</span></p><br>
                    </div>

                    <div id="contact_box" class="box_phone">
                        <i class="contact_icon fa fa-envelope" aria-hidden="true"></i>
                        <h3 class="inline_block contact_categorie">E-mail</h3>
                        <p class="contact_categorie"><span itemprop="email">info@yourdomain.com</span></p><br>
                    </div>

                </div>
            </div>
        </div>
    </div>