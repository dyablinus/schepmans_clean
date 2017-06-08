<nav class="navbar navbar-default" id="background-blank" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
  
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 schep">
            <div id="logo_schep">  
            <img class="img-responsive" src="<?= base_url("/assets/images/schepmans_logo.jpg ")?>" id="scheplogo" title="Logo">
            </div> 
        </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 sociaux">
        <!-- réseaux sociaux -->
        <ul class="nav navbar-nav " id="nav_icontop">
            <li id="nav_icontope" class="hovernav col-xs-3 col-sm-3 facebook_navtop">
                <a href="#" accesskey="f" title="Facebook">
                    <i class="icon_top fa fa-facebook-official" id="fb" aria-hidden="true"></i>
                </a>
            </li>
            <li class="hovernav twitter_navtop col-xs-3 col-sm-3">
                <a href="#" accesskey="t" title="Twitter">
                    <i class="icon_top fa fa-twitter" id="twit" aria-hidden="true"></i>
                </a>
            </li>
            <li class="youtube_navtop col-xs-3 col-sm-3">
                <a href="#" accesskey="y" title="Youtube">
                    <i class="icon_top fa fa-youtube" aria-hidden="true"></i>
                </a>
            </li>
            <li class="actu_navtop col-xs-3 col-sm-3">
                <a href="#" accesskey="a" title="Actualité">
                    <i class="icon_top fa fa-rss" aria-hidden="true"></i>
                </a>
            </li>
        </ul>
    </div>



<!--<div id="menu_langue">

  <div class="lang_fr">
     <a class="btn_nav_lang_fr" href="http://localhost/schepmans/langchange/change/fr">FR</a>
  </div>

  <div class="lang_en">
    <a class="btn_nav_lang_en" href="http://localhost/schepmans/langchange/change/en">EN</a>
  </div>

  <div class="lang_nl">
     <a class="btn_nav_lang_nl"href="http://localhost/schepmans/langchange/change/nl">NL</a>
   </div>

</div>-->

</nav>
<nav class="navbar navbar-default navbar_top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <!--<a title="Aller vers la page d'accueil" accesskey="h" class="a_nav_top" href="<?= base_url("/index") ?>">HOME</a>-->
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul id="nav_j" class="nav navbar-nav nav_haut">
           <li class="hovernav">
            <a title="Aller vers la page d'accueil" accesskey="h" class="a_nav_top" href="<?= base_url("/index") ?>">HOME</a>
           </li>
            <li class="hovernav">
            <a title="En savoir d\'avantage sur Françoise Schepmans" accesskey="q" class="a_nav_top" href="<?= base_url("/about") ?>"><?php echo lang('nav_a_href_whoim');?></a>
            </li>
            <li class="hovernav">
            <a title="Découvrir oute les actualités de la bourgmestre" accesskey="a" class="a_nav_top" href="<?= base_url("/actualite") ?>"><?php echo lang('nav_a_href_actu');?></a>
            </li>
            <li class="hovernav">
            <a title="Actions en faveur de Molenbeek-Sain-Jean" accesskey="m" class="a_nav_top" href="<?= base_url("/molenbeek") ?>">MOLENBEEK</a>
            </li>
           <li class="hovernav">
           <a title="Contacter Françoise Schepmans" accesskey="c" class="a_nav_top" href="<?= base_url("/contact") ?>"><?php echo lang('nav_a_href_contact');?></a>
           </li>
        </ul>
    </div><!-- /.navbar-collapse -->
</nav>


