
<div class="col-md-8 col-md-offset-2">

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th class="col-xs-3"><h3 class="text-center"><strong>Titres</strong></h3></th>
                <th class="col-xs-3"><h3 class="text-center"><strong>Textes</strong></h3></th>
                <th class="col-xs-3"><h3 class="text-center"><strong>Dates</strong></h3></th>
                <th class="col-xs-3"><h3 class="text-center"><strong>Actions</strong></h3></th>
            </tr>
        </thead>

        <tbody>
            <?php foreach($result->result() as $rows){ ?>
                <tr>
                    <td><h3 class="text-center"><a data-toggle="modal" data-target="#myModal<?php echo $rows->id?>"><?php echo $rows->title ?></a></h3></td>
                    <td>                            
                        <?php if (strlen(($rows->texte)) > 260 ){?>
                            <h4 class="colorpara text-center"><?php $t = substr($rows->texte, 0, 60)." ...";echo $t ?> </h4>
                        <?php }else{ ?>
                                <h4 class="colorpara text-center"><?php echo $rows->texte ?> </h4>
                        <?php }?>
                    </td>
                    <td style="padding-top:2%"><h4 class="text-center"><?php echo $rows->date; ?></h4></td>
                    <td class="text-center" scope="row" style="padding-top:2%">
                        <!-- Button trigger modal -->
                        <button class="btn  btn-success" data-toggle="modal" data-target="#myModal<?php echo $rows->id?>">Modifier </button>
                        <button class="btn  btn-warning" data-toggle="modal" data-target="#myModalDelete<?php echo $rows->id?>"> Delete</button>
                    </td>
                </tr>

                <!-- Modal -->
                <div class="modal fade" id="myModal<?php echo $rows->id?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Modifier l'article</h4>
                        </div>
                        <div class="modal-body" id="contentEdit">

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
                                $data_date = array(
                                        'date'  => 'date',
                                        'Class'   => 'form-control',
                                        'name'   => 'date'
                                );
                                $data_image = array(
                                        'type'  => 'file',
                                        'Size'   => '20',
                                        'name'   => 'userfile'
                                );
                                $data_link = array(
                                        'link'  => 'link',
                                        'Class'   => 'form-control',
                                        'name'   => 'link'
                                );
                                ?>
                                <?php echo form_hidden('id_post', $rows->id);?>
                                <?php echo form_label('What is your title', 'title'); ?>
                                <?= form_input($data_title); ?>
                                <?php echo form_label('What is your content', 'texte'); ?>
                                <?= form_textarea($data_texte); ?>
                                <?php echo form_label('Date de publication', 'date'); ?>
                                <?php echo form_input($data_date); ?>
                                <?php echo form_label('Lien vers le site de l\'article', 'link'); ?>
                                <?php echo form_input($data_link); ?>

                            </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <?php echo form_submit('mysubmit', 'Publish', array('class' => 'btn btn-primary')); ?>
                                <?= form_close() ?>
                        </div>
                        </div>
                    </div>
                </div>

                    <!-- Modal Delete-->
                <div class="modal fade" id="myModalDelete<?php echo $rows->id?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Supprimer l'article</h4>
                            </div>   
                            <div class="modal-body" id="contentEdit">
                            
                                <?= form_open('edit/updated_post/'); ?>
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

                                <?= form_close() ?>

                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <a href=" <?php echo base_url("edit/delete/".$rows->id); ?>"class="btn btn-lg btn-warning">Delete</a>
                            </div>
                        </div>
                    </div>
                </div>


            <?php } ?>
        </tbody>
    </table>

</div>


