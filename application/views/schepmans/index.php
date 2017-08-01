
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
                <?php $query = $this->db->query("SELECT * FROM posts WHERE valeur='Molenbeek' ORDER BY id DESC LIMIT 1;");
                foreach($query->result() as $rows){ ?>

                    <?php if (strlen(($rows->title)) > 36 ){?>
                        <h1 class="padactu"><?php $t = substr($rows->title, 0, 36)." ...";echo $t ?> </h1>
                    <?php }else{ ?>
                        <h1 class="padactu"><?php echo $rows->title ?> </h1>
                    <?php }?>
                    
                    <p class="timer"><i class="syl fa fa-clock-o" aria-hidden="true"></i><?php echo $rows->date ?><i class="syl fa fa-info-circle" aria-hidden="true"></i> News.</p>

                    <a  href="<?php echo base_url("/actualite") ?>" title="Plus d'information sur cet artcile de Françoise Schepmans'"><img src="<?php echo base_url("uploads/schepmans/files/schepmans_/$rows->file_name")?>" id="homeimg1" alt="Dernier article paru sur la Bourgmestre">
                    </a>
                    
                    <?php if (strlen(($rows->texte)) > 255 ){?>
                        <p class="colorpara"><?php $t = substr($rows->texte, 0, 255)." ...";echo $t ?> </p>
                    <?php }else{ ?>
                        <p class="colorpara"><?php echo $rows->texte ?> </p>
                    <?php }?>
                <?php } ?>
            </div>
            
        </div>
        <div class="row">
            <?php $query = $this->db->query("SELECT * FROM posts WHERE valeur='Molenbeek' ORDER BY id DESC LIMIT 1,2;");
            foreach($query->result() as $rows){ ?>
                <div class="col-md-6 textdeco">
                    
                    <a href="<?php echo base_url("/actualite") ?>" title="Plus d'information sur cet artcile de Françoise Schepmans'">
                    <?php if (strlen(($rows->title)) > 36 ){?>
                        <h2 class="articlfont"><?php $t = substr($rows->title, 0, 36)." ...";echo $t ?> </h2>
                    <?php }else{ ?>
                        <h2 class="articlfont"><?php echo $rows->title ?> </h2>
                    <?php }?>
                    </a>

                    <p class="timer"><i class="syl fa fa-clock-o" aria-hidden="true"></i><?php echo $rows->date ?>           
                    </p>

                    <a href="<?php echo base_url("/actualite") ?>" title="Plus d'information sur cet artcile de Françoise Schepmans'">
                    <?php if ($rows->file_name): ?>
                    <img class="taille img-responsive" src="<?php echo base_url("uploads/schepmans/files/schepmans_/$rows->file_name")?>" alt="Relate les derniers évènements sur la vice députée">
                    <?php endif;?>
                    </a>
                    
                    <?php if (strlen(($rows->texte)) > 255 ){?>
                        <p class="colorpara"><?php $t = substr($rows->texte, 0, 255)." ...";echo $t ?> </p>
                    <?php }else{ ?>
                        <p class="colorpara"><?php echo $rows->texte ?> </p>
                    <?php }?>

                </div>
            <?php } ?>
        
        </div>

        <div class="row">
            <?php $query = $this->db->query("SELECT * FROM posts WHERE valeur='Molenbeek' ORDER BY id DESC LIMIT 3,2;");
            foreach($query->result() as $rows){ ?>
                <div class="col-md-6 textdeco">
                    
                    <a href="<?php echo base_url("/actualite") ?>" title="Plus d'information sur cet artcile de Françoise Schepmans'">
                    <?php if (strlen(($rows->title)) > 36 ){?>
                        <h2 class="articlfont"><?php $t = substr($rows->title, 0, 36)." ...";echo $t ?> </h2>
                    <?php }else{ ?>
                        <h2 class="articlfont"><?php echo $rows->title ?> </h2>
                    <?php }?>
                    </a>

                    <p class="timer"><i class="syl fa fa-clock-o" aria-hidden="true"></i><?php echo $rows->date ?>            
                    </p>

                    <a href="<?php echo base_url("/actualite") ?>" title="Plus d'information sur cet artcile de Françoise Schepmans'">
                    <?php if ($rows->file_name): ?>
                    <img class="taille img-responsive" src="<?php echo base_url("uploads/schepmans/files/schepmans_/$rows->file_name")?>" alt="Relate les derniers évènements sur la vice députée">
                    <?php endif;?>
                    </a>
                    
                    <?php if (strlen(($rows->texte)) > 255 ){?>
                        <p class="colorpara"><?php $t = substr($rows->texte, 0, 255)." ...";echo $t ?> </p>
                    <?php }else{ ?>
                        <p class="colorpara"><?php echo $rows->texte ?> </p>
                    <?php }?>

                </div>
            <?php } ?>
        
        </div>
        
    </div>
<!-- main page end -->
</section>