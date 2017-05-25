<div class="container">

    <footer id="footerarnault">
        <ul class="nav navbar-nav navbar-left nav_footer">
            <li class="facebook"><a href="#" title="Facebook"><i class="fa fa-facebook-official" aria-hidden="true"></i>
                <span></span></a></li>
            <li class="twitter"><a href="#" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i>
                <span></span></a></li>
            <li class="youtube"><a href="#" title="Youtube"><i class="fa fa-youtube" aria-hidden="true"></i>
                <span></span></a></li>
            <li class="actu_footer"><a href="#" title="Actu"><i class="fa fa-rss" aria-hidden="true"></i>
                <span></span></a></li>
        </ul>


      
            <div id="copyright">
                <p>Copyright Molengeek 2017</p>
            </div>
            <div id="subscrite" class="pull-right">
                <p><?php echo lang('footer_p_sub');?></p>
        <button type="button" class="btn btncontact" id="buttonfoot" data-toggle="modal" data-target="#myModal"><?php echo lang('footer_inscris');?></button>
            </div>


        <!-- Button trigger modal -->
        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel"><?php echo lang('footer_h4_actu');?></h4>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="" placeholder="<?php echo lang('footer_input_email');?>">
                                <input type="text" class="form-control" id="" placeholder="Prénom">
                                <input type="text" class="form-control" id="" placeholder="nom">
                            </div>
                            <div class="col-md-12">
                                <h6><small>* <?php echo lang('footer_h6_champ');?></small></h6>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary btncar">S'inscrire</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>



        <br>
    </footer>
</div>