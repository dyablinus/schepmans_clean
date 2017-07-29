
<div id="carousel-id" class="carousel slide" data-ride="carousel">
    
    <div class="carousel-inner">
        <div class="item">
            <?php $query = $this->db->query("SELECT * FROM sliders ORDER BY id DESC LIMIT 1;");
                foreach($query->result() as $rows){ ?>
                
                <img class="img-responsive img_carousel" data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" alt="First slide" src="<?php echo base_url("uploads/schepmans/files/schepmans_/$rows->file_name")?>">
                <div class="container">
                    <div class="carousel-caption" id="captions">
                        <h2 class="carousel_titre"><?php echo $rows->title ?></h2>
                        <p><?php echo $rows->texte ?></p>
                    </div>
                </div>

            <?php } ?> 
        </div>
        <div class="item">
            <?php $query = $this->db->query("SELECT * FROM sliders ORDER BY id DESC LIMIT 1,1;");
                foreach($query->result() as $rows){ ?>

                <img class="img-responsive img_carousel" data-src="holder.js/900x500/auto/#666:#6a6a6a/text:Second slide" alt="Second slide" src="<?php echo base_url("uploads/schepmans/files/schepmans_/$rows->file_name")?>">
                <div class="container">
                    <div class="carousel-caption" id="captions">
                        <h2 class="carousel_titre"><?php echo $rows->title ?></h2>
                        <!-- <p><?php echo $rows->texte ?></p> -->
                    </div>
                </div>

            <?php } ?> 
        </div>

        <div class="item active">
            <?php $query = $this->db->query("SELECT * FROM sliders ORDER BY id DESC LIMIT 2,1;");
                foreach($query->result() as $rows){ ?>

                <img class="img-responsive img_carousel" data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Third slide" alt="Third slide" src="<?php echo base_url("uploads/schepmans/files/schepmans_/$rows->file_name")?>">
                <div class="container">
                    <div class="carousel-caption" id="captions">
                        <h2 class="carousel_titre"><?php echo $rows->title ?></h2>
                        <!-- <p><?php echo $rows->texte ?></p> -->
                    </div>
                </div>

            <?php } ?>    
        </div>

        <div class="item">
            <?php $query = $this->db->query("SELECT * FROM sliders ORDER BY id DESC LIMIT 3,1;");
                foreach($query->result() as $rows){ ?>

                <img class="img-responsive img_carousel" data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Fourth slide" alt="Fourth slide" src="<?php echo base_url("uploads/schepmans/files/schepmans_/$rows->file_name")?>">
                <div class="container">
                    <div class="carousel-caption" id="captions">
                        <h2 class="carousel_titre"><?php echo $rows->title ?></h2>
                        <!-- <p><?php echo $rows->texte ?></p>  -->
                    </div>
                </div>

            <?php } ?>   
        </div>

        <div class="item">
            <?php $query = $this->db->query("SELECT * FROM sliders ORDER BY id DESC LIMIT 4,1;");
                foreach($query->result() as $rows){ ?>

                <img class="img-responsive img_carousel" data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Fifth slide" alt="Fifth  slide" src="<?php echo base_url("uploads/schepmans/files/schepmans_/$rows->file_name")?>">
                <div class="container">
                    <div class="carousel-caption" id="captions">
                        <h2 class="carousel_titre"><?php echo $rows->title ?></h2>
                        <!-- <p><?php echo $rows->texte ?></p> -->
                    </div>
                </div>

            <?php } ?>    
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
        
                <h1 class="padactu">Festival Bruxellons à Karreveld</h1>
                
                <p class="timer"><i class="syl fa fa-clock-o" aria-hidden="true"></i> June 17, 2012 <i class="syl fa fa-info-circle" aria-hidden="true"></i> News.</p>

                <a  href="<?= base_url("/actualite") ?>" title="Plus d'information sur cet artcile de Françoise Schepmans'"><img src="<?= base_url ("assets/images/molenbeek/a.jpg") ?>" id="homeimg1" alt="Dernier article paru sur la Bourgmestre">
                </a>
                
                <p class="colorpara">Envie de fous rires ? Le festival Bruxellons joue la célèbre pièce « Bossemans et Coppenolle » au Château du Karreveld durant l’été. D’autres spectacles sont encore à l’affiche. Vous pouvez découvrir tout le programme sur le site <a target="_blank" href="www.bruxellons.be"></a>
                </p>

            </div>
            
        </div>
        <div class="row">

            <div class="col-md-6 textdeco">
                
                <h2 class="articlfont">Deux nouvelles écoles secondaires en 2017 !?</h2>
                
                <p class="timer"><i class="syl fa fa-clock-o" aria-hidden="true"></i> June 17, 2012 <i class="syl fa fa-info-circle" aria-hidden="true"></i>            
                </p>

                <a href="<?= base_url("/actualite") ?>" title="Plus d'information sur cet artcile de Françoise Schepmans'"><img class="taille img-responsive" src="<?= base_url ("/assets/images/molenbeek/b.jpg") ?>" alt="Relate les derniers évènements sur la vice députée"></a>
                
                <p class="colorpara">Pour le groupe libéral, l’éducation de nos jeunes est primordiale afin qu’ils puissent s’épanouir et se préparer à l’avenir avec les meilleurs atouts. Il faut répondre à cette priorité avec rapidité car le boom démographique...
                </p>

            </div>

            <div class="col-md-6 textdeco">
                
                <h2 class="articlfont">Aider les copropriétaires</h2>
                
                <p class="timer"><i class="syl fa fa-clock-o" aria-hidden="true"></i> June 17, 2012 <i class="syl fa fa-info-circle" aria-hidden="true"></i>            
                </p>
                
                <a href="<?= base_url("/actualite") ?>" title="Plus d'information sur cet artcile de Françoise Schepmans'"><img class="taille img-responsive" src="<?= base_url ("/assets/images/articles/1.jpg") ?>" alt="Présentation des actions en faveur de "></a>

                <p class="colorpara">La bonne gestion des copropriétés est une problématique très importante à Bruxelles (il y en a 33.600 !) et particulièrement dans les quartiers tels que le Machtens et le Mettewie. En effet...
                </p>

            </div>
        
        </div>

        <div class="row">
            <div class="col-md-6 textdeco">
                
                <h2 class="articlfont">Au service des habitants ! </h2>
                
                <p class="timer"><i class="fa fa-clock-o" aria-hidden="true"></i> June 17, 2012 <i class="syl fa fa-info-circle" aria-hidden="true"></i>           
                </p>
                
                <a href="<?= base_url("/actualite") ?>" title="Plus d'information sur cet artcile de Françoise Schepmans'"><img class="taille img-responsive" src="<?= base_url ("/assets/images/molenbeek/c.jpg") ?>" alt="L'avenir pour l'urbanisation de Molenbeek-saint-jean"></a>
                
                <p class="colorpara">Afin d’accueillir les citoyens dans de bonnes conditions, un nouveau bâtiment administratif a été construit rue Sainte-Marie, à proximité de la Maison communale et de la station Comte de Flandre. Impossible de le manquer...
                </p>

            </div>

            <div class="col-md-6 textdeco">
                
                <h2 class="articlfont">Plantu expose à Molenbeek</h2>
                
                <p class="timer"><i class="syl fa fa-clock-o" aria-hidden="true"></i> June 17, 2012 <i class="syl fa fa-info-circle" aria-hidden="true"></i>           
                </p>

                <a href="<?= base_url("/actualite") ?>" title="Plus d'information sur cet artcile de Françoise Schepmans'"><img class="taille img-responsive" src="<?= base_url ("/assets/images/molenbeek/d.jpg") ?>" alt="La bourgemestre à l'écoute des riverain'"></a>
                
                <p class="colorpara">Un bel événement en préparation: une exposition des dessins de Plantu, le célèbre caricaturiste français du journal Le Monde, se déroulera  au mois de novembre au Château du Karreveld. Ce sera l’occasion aussi d’initier les jeunes à la caricature. A lire dans le journal La Capitale.
                </p>

            </div>
        
        </div>
        
    </div>
<!-- main page end -->
</section>