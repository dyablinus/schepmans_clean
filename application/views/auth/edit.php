
        <section class="col-lg-4 col-lg-offset-4 connectedSortable">

                <h1>Nouvel article</h1>

                <!-- defini vers quel metjode envoyer le form -->
               <?= form_open('edit/create_post'); ?>
               <?php

               $data_title = array(
               'title'  => 'title',
               'Class'   => 'form-control',
               'name'   => 'title'
               );

               $data_date = array(
               'date'  => 'date',
               'Class'   => 'form-control',
               'name'   => 'date'
               );

               $data_texte = array(
               'texte'  => 'texte',
               'Class'   => 'form-control',
               'name'   => 'texte'
               );

               $data_image = array(
               'image'  => 'image',
               'Class'   => 'form-control',
               'name'   => 'image',
               'size' => 20,
               'type' => 'file'
               );

               $data_link = array(
               'link'  => 'link',
               'Class'   => 'form-control',
               'name'   => 'link'
               );
               
               ?>

                <?php echo form_label('Titre de l\'article', 'title'); ?>
                <?= form_input($data_title); ?>
                
                <?php echo form_label('Date de publication', 'date'); ?>
                <?= form_input($data_date); ?>
                
                <?php echo form_label('Texte d\'introduction de l\'article', 'texte'); ?>
                <?= form_textarea($data_texte); ?>
                
                                <?php echo form_label('Image d\'illustration', 'image'); ?>
                <!--<?php echo form_multipart('edit/do_upload');?>-->
                <?= form_input($data_image); ?>


                <?php echo form_label('Lien vers le site de l\'article', 'link'); ?>
                <?= form_input($data_link); ?>
                
                
                
                <?php echo form_submit('mysubmit', 'Publish', array('class' => 'btn btn-primary')); ?>

                <?= form_close() ?>


              


  

        </section>

 