<script type="text/javascript">
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-7174574-22']);
	_gaq.push(['_trackPageview']);

	(function () {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();

</script>
<script>
	(function (d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));

</script>

<div id="carousel-id" class="carousel slide" data-ride="carousel">
    
    <div class="carousel-inner">
        <div class="item">
            <img data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" alt="First slide" src="http://r2.llb.be/image/41/582767f8cd70958a9d605d41.jpg">
            <div class="container">
                <div class="carousel-caption" id="captions">
                    <h1>Example headline.</h1>
                    <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
                 
                </div>
            </div>
        </div>
        <div class="item">
            <img data-src="holder.js/900x500/auto/#666:#6a6a6a/text:Second slide" alt="Second slide" src="http://r2.ldh.be/image/57/58b99385cd704dd7c0b61357.jpg">
            <div class="container">
                <div class="carousel-caption" id="captions">
                    <h1>Another example headline.</h1>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                 
                </div>
            </div>
        </div>
        <div class="item active">
            <img data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Third slide" alt="Third slide" src="http://r2.llb.be/image/41/582767f8cd70958a9d605d41.jpg">
            <div class="container">
                <div class="carousel-caption" id="captions">
                    <h1>One more for good measure.</h1>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                   
                </div>
            </div>
        </div>
    </div>
    <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
    <a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
</div>
    


<!--/ #slider-->
<div style="margin-left: -15px; margin-right: -15px; border-radius: 0; background-color: rgb(25, 80, 119);
"class="jumbotron">
    <div class="container">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="row fafa">

        <div class="col-xs-4 col-sm-4 col-md-4 "> 

            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"><i class="syl fa fa-users" style="color:white";  aria-hidden="true"></i>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 padding_left_10">
                <a target="_blank" title="Liste des membres constituant l\'équipe" accesskey="e" href="<?= base_url("/equipe") ?>"><h3 class="jumbofont" style="color:white";><?php echo lang('index_h3_equipe');?></h3></a>
                
                <p class="jumbopara hidden_actu" style="color:white";>Apendum pupum</p>
            </div>
        
        </div>

        <div class="col-xs-4 col-sm-4 col-md-4 col-xs-push-4 col-sm-push-4">

            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"><i class="syl fa fa-thumbs-up" style="color:white"; aria-hidden="true"></i>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 padding_left_10 ">
                <a title="partie politique du mr" accesskey="p" href="http://www.mr.be/" target="_blank"><h3 class="jumbofont" style="color:white";><?php echo lang('index_h3_partie_poli');?></h3></a>
                <p class="jumbopara hidden_actu" style="color:white";>Apendum pupum</p>
            </div>

        </div>

            <div class="col-xs-4 col-sm-4 col-md-4 col-xs-pull-4 col-sm-pull-4">

              <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"><i class="syl fa fa-calendar" style="color:white"; aria-hidden="true"></i>
              </div>
              <div class="col-xs-10 col-sm-10 col-md-10 padding_left_10">
                <a target="_blank" title="retrouvez la liste des évènements" accesskey="s" href="<?= base_url("/calendrier") ?>"><h3 class="jumbofont" style="color:white";><?php echo lang('index_h3_calendrier');?></h3></a> 
                <p class="jumbopara hidden_actu" style="color:white";>Apendum pupum</p>
              </div>

            </div>
  </div>
        </div>
    </div>
</div>



<div class="col-xs-12 col-sm-12 col-md-8" id="marginpourfooter">
<div class="row">
    <div class="col-md-12 textdeco">
 
        <h1 class="padactu"><?php echo lang('index_h2_padactu');?>
        </h1>
        <p class="timer"><i class="syl fa fa-clock-o" aria-hidden="true"></i> June 17, 2012 <i class="syl fa fa-info-circle" aria-hidden="true"></i> News.</p>

        <img src="<?= base_url ("assets/images/schep2.jpg") ?>" id="homeimg1" alt="Dernier article paru sur la Bourgmestre">
        <p class="colorpara"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque quis sapiente minima voluptatem fuga aliquam et accusamus
            labore, mollitia pariatur nulla provident officiis ut eveniet dolorem velit, inventore magni quasi?</p>

        <a class="border button gray" href="<?= base_url("/actualite") ?>" title="Plus d'information sur cet artcile de Françoise Schepmans'"><?php echo lang('index_a_voir_plus');?></a>

    
    </div>
    
</div>
<div class="row">
    <div class="col-md-6 textdeco">
        <h2 class="articlfont"><?php echo lang('index_h2_articlfont_pierre');?></h2>
        <p class="timer"><i class="syl fa fa-clock-o" aria-hidden="true"></i> June 17, 2012 <i class="syl fa fa-info-circle" aria-hidden="true"></i>            
        </p>
        <img class="taille img-responsive" src="<?= base_url ("/assets/images/schep4.jpg") ?>" alt="Relate les derniers évènements sur la vice députée">
        <p class="colorpara">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed ab adipisci at magnam excepturi totam nemo repellat
            facilis provident aut possimus iste nihil dolore delectus, esse nisi cum, numquam. Dolores.</p>

        <a class="border button gray" href="<?= base_url("/actualite") ?>" title="Plus d'information sur cet artcile de Françoise Schepmans'"><?php echo lang('index_a_voir_plus');?> </a>

    
    </div>
    <div class="col-md-6 textdeco">
        <h2 class="articlfont"><?php echo lang('index_h2_articlfont_michel');?></h2>
        <p class="timer"><i class="syl fa fa-clock-o" aria-hidden="true"></i> June 17, 2012 <i class="syl fa fa-info-circle" aria-hidden="true"></i>            
        </p>
        <img class="taille img-responsive" src="<?= base_url ("/assets/images/schep5.jpg") ?>" alt="Présentation des actions en faveur de ">
        <p class="colorpara">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed ab adipisci at magnam excepturi totam nemo repellat
            facilis provident aut possimus iste nihil dolore delectus, esse nisi cum, numquam. Dolores.</p>

        <a class="border button gray" href="<?= base_url("/actualite") ?>" title="Plus d'information sur cet artcile de Françoise Schepmans'"><?php echo lang('index_a_voir_plus');?></a>

    
    </div>
   
</div>
<div class="row">
    <div class="col-md-6 textdeco">
        <h2 class="articlfont"><?php echo lang('index_h2_articlfont_aimarre');?></h2>
        <p class="timer"><i class="fa fa-clock-o" aria-hidden="true"></i> June 17, 2012 <i class="syl fa fa-info-circle" aria-hidden="true"></i>           
        </p>
        <img class="taille img-responsive" src="<?= base_url ("/assets/images/schep3.jpg") ?>" alt="L'avenir pour l'urbanisation de Molenbeek-saint-jean">
        <p class="colorpara">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed ab adipisci at magnam excepturi totam nemo repellat
            facilis provident aut possimus iste nihil dolore delectus, esse nisi cum, numquam. Dolores.</p>

        <a class="border button gray" href="<?= base_url("/actualite") ?>" title="Plus d'information sur cet artcile de Françoise Schepmans'"><?php echo lang('index_a_voir_plus');?></a>

    </div>
    <div class="col-md-6 textdeco">
        <h2 class="articlfont"><?php echo lang('index_h2_articlfont_relou');?></h2>
        <p class="timer"><i class="syl fa fa-clock-o" aria-hidden="true"></i> June 17, 2012 <i class="syl fa fa-info-circle" aria-hidden="true"></i>           
        </p>
        <img class="taille img-responsive" src="<?= base_url ("/assets/images/schep7.jpg") ?>" alt="La bourgemestre à l'écoute des riverain'">
        <p class="colorpara">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed ab adipisci at magnam excepturi totam nemo repellat
            facilis provident aut possimus iste nihil dolore delectus, esse nisi cum, numquam. Dolores.</p>

        <a class="border button gray" href="<?= base_url("/actualite") ?>" title="Plus d'information sur cet artcile de Françoise Schepmans'"><?php echo lang('index_a_voir_plus');?></a>

    </div>
    
    
</div>
</div>
<!-- main page end -->