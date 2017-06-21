<div id="footer_padding" class="container">

    <footer id="footerarnault">

        <div class="col-xs-4 col-sm-4 col-md-4 ">

            <ul class="nav navbar-nav navbar-left nav_footer">
                <li class=" col-xs-3 col-sm-3 facebook"><a href="https://www.facebook.com/schepmansfrancoise/" title="Facebook"><i class="fa fa-facebook-official" aria-hidden="true"></i>
                <span></span></a></li>
                <li class="col-xs-3 col-sm-3 twitter"><a href="https://twitter.com/fschepmans?lang=fr" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i>
                <span></span></a></li>
                <li class="col-xs-3 col-sm-3 youtube"><a href="#" title="Linkedin"><i class="fa fa-linkedin-square" id="link" aria-hidden="true"></i>
                <span></span></a></li>
                <li class="col-xs-3 col-sm-3 actu_footer"><a href="#" title="Actu"><i class="fa fa-rss" aria-hidden="true"></i>
                <span></span></a></li>
            </ul>

        </div>


        <div class="col-xs-6 col-sm-6  col-md-4 " id="copyright" itemscope itemtype="http://schema.org/Person">
            <p><span itemprop="copyrightHolder">Copyright Molengeek 2017</span></p>
        </div>
        <div id="subscrite" class="pull-right col-xs-6 col-sm-6 col-md-4 ">
            <p>
                <?php echo lang('footer_p_sub');?>
            </p>
            <button type="button" class="btn btncontact" title="Suivre la newsletter" accesskey="n" id="buttonfoot" data-toggle="modal"
                data-target="#myModal"><?php echo lang('footer_inscris');?></button>


        </div>


        <!-- Button trigger modal -->
        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">
                            <?php echo lang('footer_h4_actu');?>
                        </h4>
                    </div>
                    <div class="modal-body">
                        <div class="container">

                            <div style="margin-left:-15px;" class="col-md-6">
                                <?php echo validation_errors(); ?>
                                <?= form_open('index/news'); ?>
                                    <?php

                                        $data_name = array(
                                         'name'  => 'name',
                                         'Class'   => 'form-control',
                                         'value' => set_value("name"),
                                         'placeholder' => "Votre nom"

                                        );
                                       $data_surname = array(
                                        'name'  => 'surname',
                                        'Class'   => 'form-control',
                                        'value' => set_value("surname"),
                                        'placeholder' => "Votre prénom"
        
                                        );

                                       $data_email = array(
                                       'name'  => 'email',
                                       'Class'   => 'form-control',
                                       'value' => set_value("email"),
                                       'placeholder' => "Votre e-mail"

                                        );
                                      ?>

                                        <?= form_input($data_name); ?>

                                         <?= form_input($data_surname); ?>

                                        <?= form_input($data_email); ?>

                                        <?php echo form_submit('mysubmit', 'Submit', array('class' => 'btn btn-primary')); ?>

                                         <?= form_close() ?>


                            </div>
                        </div>
                        <div class="modal-footer">

                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div <br>
    </footer>
    </div>