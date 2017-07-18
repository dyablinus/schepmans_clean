
<div id="carousel-id" class="carousel slide" data-ride="carousel">
    
    <div class="carousel-inner">
        <div class="item">
            <img class="img-responsive img_carousel" data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" alt="First slide" src="<?= base_url ("/assets/images/slider/a.jpg") ?>">
            <div class="container">
                <div class="carousel-caption" id="captions">
                    <h2 class="carousel_titre">Françoise Schepmans</h2>
                    <p>Françoise Schepmans est une femme politique belge, députée mr. Elle actuellement bourgemestre de Molenbeek-Saint-Jean </p>
                 
                </div>
            </div>
        </div>
        <div class="item">
            <img class="img-responsive img_carousel" data-src="holder.js/900x500/auto/#666:#6a6a6a/text:Second slide" alt="Second slide" src="<?= base_url ("/assets/images/slider/b.jpg") ?>">
            <div class="container">
                <div class="carousel-caption" id="captions">
                    <h2 class="carousel_titre">Françoise Schepmans</h2>
                    <!-- <p>Durant les prochaines élections à Bruxelles, Françoise Schepmans sera opposée à Joelle Milquet, Yvan Mayeur et Catherine Moureaux la fille
                    de l'ancine bourgmestre Philippe Moureaux.</p> -->
                 
                </div>
            </div>
        </div>
        <div class="item active">
            <img class="img-responsive img_carousel" data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Third slide" alt="Third slide" src="<?= base_url ("/assets/images/slider/c.jpg") ?>">
            <div class="container">
                <div class="carousel-caption" id="captions">
                    <h2 class="carousel_titre">Françoise Schepmans</h2>
                    <!-- <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p> -->
                   
                </div>
            </div>
        </div>
        <div class="item">
            <img class="img-responsive img_carousel" data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Fourth slide" alt="Third slide" src="<?= base_url ("/assets/images/slider/d.jpg") ?>">
            <div class="container">
                <div class="carousel-caption" id="captions">
                    <h2 class="carousel_titre">Françoise Schepmans</h2>
                    <!-- <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p> -->
                   
                </div>
            </div>
        </div>
        <div class="item">
            <img class="img-responsive img_carousel" data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Fifth slide" alt="Third slide" src="<?= base_url ("/assets/images/slider/e.jpg") ?>">
            <div class="container">
                <div class="carousel-caption" id="captions">
                    <h2 class="carousel_titre">Françoise Schepmans</h2>
                    <!-- <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p> -->
                   
                </div>
            </div>
        </div>
    </div>
    <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
    <a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
</div>
    
<!--/ #slider-->

<!-- DEBUT BANDROLE -->
<section>

    <div id="ban_undercarousel">
        <div class="container">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="row fafa">

                    <div class="col-xs-4 col-sm-4 col-md-4 "> 

                        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"><i class="syl fa fa-users" style="color:white";  aria-hidden="true"></i>
                        </div>
                        <div class="col-xs-10 col-sm-10 col-md-10 padding_left_10">
                            <a target="_blank" title="Liste des membres constituant l\'équipe" accesskey="e" href="<?= base_url("/equipe") ?>"><h3 class="jumbofont">L'ÉQUIPE</h3></a>
                        </div>
                    
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-4 col-xs-push-4 col-sm-push-4">

                        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"><i class="syl fa fa-thumbs-up" style="color:white"; aria-hidden="true"></i>
                        </div>
                        <div class="col-xs-10 col-sm-10 col-md-10 padding_left_10 ">
                            <a title="partie politique du mr" accesskey="p" href="http://www.mr.be/" target="_blank"><h3 class="jumbofont" ><?php echo lang('index_h3_partie_poli');?></h3></a>
                        </div>

                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-4 col-xs-pull-4 col-sm-pull-4">

                        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"><i class="syl fa fa-calendar" style="color:white"; aria-hidden="true"></i>
                        </div>
                        <div class="col-xs-10 col-sm-10 col-md-10 padding_left_10">
                            <a target="_blank" title="retrouvez la liste des évènements" accesskey="s" href="<?= base_url("/evenement") ?>"><h3 class="jumbofont"><?php echo lang('index_h3_calendrier');?></h3></a> 
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    
</section>
<!-- FIN BANDROLE  -->

<!-- DEBUT SECTION ARTICLE -->

<section>

    <div class="col-xs-12 col-sm-12 col-md-8" id="marginpourfooter">

        <div class="row">
            <div class="col-md-12 textdeco">
        
                <h1 class="padactu"><?php echo lang('index_h2_padactu');?></h1>
                
                <p class="timer"><i class="syl fa fa-clock-o" aria-hidden="true"></i> June 17, 2012 <i class="syl fa fa-info-circle" aria-hidden="true"></i> News.</p>

                <a  href="<?= base_url("/actualite") ?>" title="Plus d'information sur cet artcile de Françoise Schepmans'"><img src="<?= base_url ("assets/images/schep2.jpg") ?>" id="homeimg1" alt="Dernier article paru sur la Bourgmestre">
                </a>
                
                <p class="colorpara"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque quis sapiente minima voluptatem fuga aliquam et accusamus
                labore, mollitia pariatur nulla provident officiis ut eveniet dolorem velit, inventore magni quasi?
                </p>

            </div>
            
        </div>
        <div class="row">

            <div class="col-md-6 textdeco">
                
                <h2 class="articlfont"><?php echo lang('index_h2_articlfont_pierre');?></h2>
                
                <p class="timer"><i class="syl fa fa-clock-o" aria-hidden="true"></i> June 17, 2012 <i class="syl fa fa-info-circle" aria-hidden="true"></i>            
                </p>

                <a href="<?= base_url("/actualite") ?>" title="Plus d'information sur cet artcile de Françoise Schepmans'"><img class="taille img-responsive" src="<?= base_url ("/assets/images/art1.jpg") ?>" alt="Relate les derniers évènements sur la vice députée"></a>
                
                <p class="colorpara">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed ab adipisci at magnam excepturi totam nemo repellat
                facilis provident aut possimus iste nihil dolore delectus, esse nisi cum, numquam. Dolores.
                </p>

            </div>

            <div class="col-md-6 textdeco">
                
                <h2 class="articlfont"><?php echo lang('index_h2_articlfont_michel');?></h2>
                
                <p class="timer"><i class="syl fa fa-clock-o" aria-hidden="true"></i> June 17, 2012 <i class="syl fa fa-info-circle" aria-hidden="true"></i>            
                </p>
                
                <a href="<?= base_url("/actualite") ?>" title="Plus d'information sur cet artcile de Françoise Schepmans'"><img class="taille img-responsive" src="<?= base_url ("/assets/images/art2.jpg") ?>" alt="Présentation des actions en faveur de "></a>

                <p class="colorpara">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed ab adipisci at magnam excepturi totam nemo repellat
                facilis provident aut possimus iste nihil dolore delectus, esse nisi cum, numquam. Dolores.
                </p>

            </div>
        
        </div>

        <div class="row">
            <div class="col-md-6 textdeco">
                
                <h2 class="articlfont"><?php echo lang('index_h2_articlfont_aimarre');?></h2>
                
                <p class="timer"><i class="fa fa-clock-o" aria-hidden="true"></i> June 17, 2012 <i class="syl fa fa-info-circle" aria-hidden="true"></i>           
                </p>
                
                <a href="<?= base_url("/actualite") ?>" title="Plus d'information sur cet artcile de Françoise Schepmans'"><img class="taille img-responsive" src="<?= base_url ("/assets/images/schep5.jpg") ?>" alt="L'avenir pour l'urbanisation de Molenbeek-saint-jean"></a>
                
                <p class="colorpara">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed ab adipisci at magnam excepturi totam nemo repellat
                facilis provident aut possimus iste nihil dolore delectus, esse nisi cum, numquam. Dolores.
                </p>

            </div>

            <div class="col-md-6 textdeco">
                
                <h2 class="articlfont"><?php echo lang('index_h2_articlfont_relou');?></h2>
                
                <p class="timer"><i class="syl fa fa-clock-o" aria-hidden="true"></i> June 17, 2012 <i class="syl fa fa-info-circle" aria-hidden="true"></i>           
                </p>

                <a href="<?= base_url("/actualite") ?>" title="Plus d'information sur cet artcile de Françoise Schepmans'"><img class="taille img-responsive" src="<?= base_url ("/assets/images/art3.jpg") ?>" alt="La bourgemestre à l'écoute des riverain'"></a>
                
                <p class="colorpara">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed ab adipisci at magnam excepturi totam nemo repellat
                    facilis provident aut possimus iste nihil dolore delectus, esse nisi cum, numquam. Dolores.
                </p>

            </div>
        
        </div>
        
    </div>
<!-- main page end -->
</section>