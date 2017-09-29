<div class="col-md-8 col-md-offset-2">

    <h1>Modifier l'article</h1>

    <?php foreach($result->result() as $rows){ ?>
    <?= form_open('edit/update_post/'); ?>
    <?php

    $data_title = array(
            'title'  => 'title',
            'Class'   => 'form-control',
            'value'   => $rows->title,
            'name'   => 'title'
    );
    $data_texte = array(
            'texte'  => 'texte',
            'Class'   => 'form-control',
            'value'   => $rows->texte,
            'name'   => 'texte'
    );
    ?>
    <?php echo form_hidden('id_post', $rows->id);?>
    <?php echo form_label('What is your title', 'title'); ?>
    <?= form_input($data_title); ?>
    <?php echo form_label('What is your content', 'texte'); ?>
    <?= form_textarea($data_texte); ?>

    <?php } ?>
    <?php echo form_submit('mysubmit', 'Publish', array('class' => 'btn btn-primary')); ?>

    <?= form_close() ?>

</div>
