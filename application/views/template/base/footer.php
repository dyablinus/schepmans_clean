<div id="footer_padding" class="container">

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


      
            <div id="copyright" itemscope itemtype="http://schema.org/Person">
                <p><span itemprop="copyrightHolder">Copyright Molengeek 2017</span></p>
            </div>
            <div id="subscrite" class="pull-right">
<<<<<<< HEAD
                <p>Subscribe to the Newsletter: </p>
        <button type="button" class="btn btncontact" title="Suivre la newsletter" accesskey="n" id="buttonfoot" data-toggle="modal" data-target="#myModal">Je m'inscris</button>
=======
                <p><?php echo lang('footer_p_sub');?></p>
        <button type="button" class="btn btncontact" id="buttonfoot" data-toggle="modal" data-target="#myModal"><?php echo lang('footer_inscris');?></button>
>>>>>>> e14c4c6cd869a5b647c4728679a9168aef12f0bb
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
<<<<<<< HEAD
                            
                            <div style="margin-left:-15px;" class="col-md-6">
                                

                                 <form style="border:1px solid #ccc;padding:3px;text-align:center;" action="https://tinyletter.com/Schepmans" method="post" target="popupwindow" onsubmit="window.open('https://tinyletter.com/Schepmans', 'popupwindow', 'scrollbars=yes,width=800,height=600');return true"><p><label for="tlemail">Inscrivez-vous à la newsletter</label></p><p><input type="text" style="width:140px" name="email" id="tlemail" /></p><input type="hidden" value="1" name="embed"/><input type="submit" value="S'abonner" /></form>

=======
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="" placeholder="<?php echo lang('footer_input_email');?>">
                                <input type="text" class="form-control" id="" placeholder="Prénom">
                                <input type="text" class="form-control" id="" placeholder="nom">
                            </div>
                            <div class="col-md-12">
                                <h6><small>* <?php echo lang('footer_h6_champ');?></small></h6>
>>>>>>> e14c4c6cd869a5b647c4728679a9168aef12f0bb
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div


        <br>
    </footer>
</div>