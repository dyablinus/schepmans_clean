<div id="footer_padding" class="container">

    <footer id="footerarnault">
        
        <div class="col-xs-4 col-sm-4 col-md-4 ">
            
        <ul class="nav navbar-nav navbar-left nav_footer">
            <li class=" col-xs-3 col-sm-3 facebook"><a href="#" title="Facebook"><i class="fa fa-facebook-official" aria-hidden="true"></i>
                <span></span></a></li>
            <li class="col-xs-3 col-sm-3 twitter"><a href="#" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i>
                <span></span></a></li>
            <li class="col-xs-3 col-sm-3 youtube"><a href="#" title="Youtube"><i class="fa fa-youtube" aria-hidden="true"></i>
                <span></span></a></li>
            <li class="col-xs-3 col-sm-3 actu_footer"><a href="#" title="Actu"><i class="fa fa-rss" aria-hidden="true"></i>
                <span></span></a></li>
        </ul>

      </div>

      
            <div class="col-xs-6 col-sm-6  col-md-4 " id="copyright" itemscope itemtype="http://schema.org/Person">
                <p><span itemprop="copyrightHolder">Copyright Molengeek 2017</span></p>
            </div>
            <div id="subscrite" class="pull-right col-xs-6 col-sm-6 col-md-4 ">
                <p><?php echo lang('footer_p_sub');?></p>
        <button type="button" class="btn btncontact" title="Suivre la newsletter" accesskey="n" id="buttonfoot" data-toggle="modal" data-target="#myModal"><?php echo lang('footer_inscris');?></button>
                
      
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
                            
                            <div style="margin-left:-15px;" class="col-md-6">
                                

                                 <form style="padding:3px;text-align:center;" action="https://tinyletter.com/Schepmans" method="post" target="popupwindow" onsubmit="window.open('https://tinyletter.com/Schepmans', 'popupwindow', 'scrollbars=yes,width=800,height=600');return true"><p><input type="text" style="width:50%" name="email" id="tlemail" /></p><input type="hidden" value="1" name="embed"/><input type="submit" value="S'abonner" /></form>

                            
                            
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