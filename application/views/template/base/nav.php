<nav class="navbar navbar-default" id="background-blank" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
  
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 schep">
            <div id="logo_schep">  
            <img src="<?= base_url("/assets/images/schepmans_logo.jpg ")?>" id="scheplogo" title="Logo">
            </div> 
        </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 sociaux">
        <!-- réseaux sociaux -->
        <ul class="nav navbar-nav navbar-right" id="nav_icontop">
            <li id="nav_icontope" class="hovernav" class="facebook_navtop">
                <a href="#" title="Facebook">
                    <i class="icon_top fa fa-facebook-official" id="fb" aria-hidden="true"></i>
                </a>
            </li>
            <li class="hovernav" class="twitter_navtop">
                <a href="#" title="Twitter">
                    <i class="icon_top fa fa-twitter" id="twit" aria-hidden="true"></i>
                </a>
            </li>
            <li class="youtube_navtop">
                <a href="#" title="Youtube">
                    <i class="icon_top fa fa-youtube" aria-hidden="true"></i>
                </a>
            </li>
            <li class="actu_navtop">
                <a href="#" title="Actu">
                    <i class="icon_top fa fa-rss" aria-hidden="true"></i>
                </a>
            </li>
        </ul>
    </div>
<div class="lang_fr">

<a class="btn_nav_lang_fr" href="http://localhost/schepmans/langchange/change/fr">FR</a>
</div>
<div class="lang_en">

<a class="btn_nav_lang_en" href="http://localhost/schepmans/langchange/change/en">EN</a>
</div>
<div class="lang_nl">
<a class="btn_nav_lang_nl"
href="http://localhost/schepmans/langchange/change/nl">NL</a>
</div>

</nav>


<nav class="navbar navbar-default navbar_top" role="navigation">

    <ul id="nav_j" class="nav navbar-nav nav_haut">
        
  
        <li class="hovernav">
            <a class="a_nav_top" href="<?= base_url("/index") ?>">HOME</a>
        </li>
        <li class="hovernav">
            <a class="a_nav_top" href="<?= base_url("/about") ?>"><?php echo lang('nav_a_href_whoim');?></a>
        </li>
        <li class="hovernav">
            <a class="a_nav_top" href="<?= base_url("/actualite") ?>"><?php echo lang('nav_a_href_actu');?></a>
        </li>
        <li class="hovernav">
            <a class="a_nav_top" href="<?= base_url("/molenbeek") ?>">MOLENBEEK</a>
        </li>
        <li class="hovernav">
            <a class="a_nav_top" href="<?= base_url("/contact") ?>"><?php echo lang('nav_a_href_contact');?></a>
        </li>
      
    </ul>
</nav>