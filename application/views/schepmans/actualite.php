<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 actu">

    <div id="titre_actu" class="text-center">
        <i class="fa fa-rss fa-rss-actu" aria-hidden="true"></i>
        <h6 class="titre text-center"><?php echo $this->lang->line('actu_h6');?></h6>
    </div>

    <div id="barre_actu"></div>

    <?php $query = $this->db->query("SELECT * FROM posts WHERE valeur='Actualite' ORDER BY id DESC LIMIT 10;");
          foreach($query->result() as $rows){ ?>
        <div class="row">   
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <?php if ($rows->file_name): ?>
                    <img class="img_actu img-responsive" src="<?php echo base_url("uploads/schepmans/files/schepmans_/$rows->file_name")?>" alt="">
                    <?php endif;?>
                </div>
                    
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 box_actu">  
                    <a href="<?php echo $rows->link ?>" type="button" target="_blank"> 
                        <div id="actu_margin_titre" class="hidden_actu"><h4><?php echo $rows->title ?></h4>
                            <div class="date hidden_actu">
                                <i class="fa fa-calendar-o" aria-hidden="true"></i><?php echo $rows->date ?>
                            </div>
                            <p><?php echo $rows->texte ?></p>
                        </div>
                    </a>
                </div>
            <!--FIN COL 12 ACTU -->
            </div>
        </div>
    
        <div id="barre_molen"></div>
   
    <?php } ?>     
<!--end col8 actu-->
</div>


