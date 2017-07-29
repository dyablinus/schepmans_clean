
        <section class="col-lg-4 col-lg-offset-4 connectedSortable">

                <h1>Éditer le slider de la page d'accueil</h1>

              
                <!-- defini vers quelle methode envoyer le form -->
               <?php 
               $link=base_url('edit/create');
               echo form_open_multipart($link); ?>
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

               

               $data_link = array(
               'link'  => 'link',
               'Class'   => 'form-control',
               'name'   => 'link'
               );

                $data_image = array(
               'type'  => 'file',
               'Size'   => '20',
               'name'   => 'userfile'
               );
               
               ?>
                
                <?php echo form_error('title'); ?>
                <?php echo form_label('Titre de l\'article', 'title'); ?>
                <?= form_input($data_title); ?>
                
                <?php echo form_error('date'); ?>
                <?php echo form_label('Date de publication', 'date'); ?>
                <?= form_input($data_date); ?>
                
                <?php echo form_error('texte'); ?>
                <?php echo form_label('Texte d\'introduction de l\'article', 'texte'); ?>
                <?= form_textarea($data_texte); ?>
                
                <?php echo form_error('link'); ?>
                
                <?php echo form_label('Lien vers le site de l\'article', 'link'); ?>
                <?= form_input($data_link); ?>
                
                <?php echo form_error('file'); ?>
                
                <?php echo form_label('Image de l\'article', 'userfile'); ?>
                <?= form_upload($data_image); ?>
                
                <?php echo form_submit('mysubmit', 'Publish', array('class' => 'btn btn-primary')); ?>

                <?php echo form_close() ?> 
  

        </section>

 