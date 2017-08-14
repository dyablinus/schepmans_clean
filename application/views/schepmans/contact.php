    <div class="container" id="contain_contact">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-lg-7 box_form_contact">
                <?php
                    $prenom = isset($_GET['n'])?$_GET['n']:"";
                    $nom = isset($_GET['c'])?$_GET['c']:"";
                    $email = isset($_GET['email'])?$_GET['email']:"";
                    $message = isset($_GET['message'])?$_GET['message']:"";
                ?>
                        <?php 
                            if(isset($_GET["mail"])){
                                if($_GET["mail"] == 1){
                        ?>
                                    <div class="alert alert-success text-center" role="alert">
                                    Your email has been send, we'll contact you as soon as possible.
                                    </div>
                            <?php
                                }else{
                            ?>
                                    <div class="alert alert-danger text-center" role="alert">
                                    Oups, something wrong happend, try again.
                                    </div>
                        <?php
                                }
                            }
                        ?>
                        <?php 
                            if(isset($_GET["validation"])){
                                if($_GET["validation"] == 0){
                        ?>
                                    <div class="alert alert-danger text-center" role="alert">
                                    Please fill all the info.
                                    </div>
                        <?php
                                }
                            }
                        ?>
                <h1 class="contact_titre"><?php echo lang('contact_h2_form');?></h1>
                <form action="<?php echo base_url('contact/contact_post'); ?>" method="POST" class="contact-form" role="form" id="contact-form">
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
                <div class="col-xs-12 col-sm-12 col-md-4  first-box" itemscope itemtype="http://schema.org/Person">


                    <div id="contact_box" class="box_phone col-xs-12 col-sm-12">
                        <i class="contact_icon fa fa-phone" aria-hidden="true"></i>
                        <h3 class="inline_block contact_categorie">Phone</h3>
                        <p class="contact_categorie"><span itemprop="telephone"> 02 / 412 37 40 - 02</span></p><br>
                    </div>

                    <div id="contact_box" class="box_phone col-xs-12 col-sm-12">
                        <i class="contact_icon fa fa-map" aria-hidden="true"></i>
                        <h3 class="inline_block contact_categorie">Location</h3>
                        <p class="contact_categorie"><span itemprop="adress">Rue du Comte de Flandre, 20 - 1080 Bxl</span></p><br>
                    </div>

                    <div id="contact_box" class="box_phone col-xs-12 col-sm-12">
                        <i class="contact_icon fa fa-envelope" aria-hidden="true"></i>
                        <h3 class="inline_block contact_categorie">E-mail</h3>
                        <p class="contact_categorie"><span itemprop="email">fschepmans@molenbeek.irisnet.be</span></p><br>
                    </div>

                </div>
            </div>
        </div>
    </div>