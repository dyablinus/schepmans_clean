<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 actu">

<div id="titre_actu" class="text-center">
   <i class="fa fa-rss fa-rss-actu" aria-hidden="true"></i>
   <h6 class="titre text-center"><?php echo $this->lang->line('actu_h6');?></h6>
</div>

<div id="barre_actu"></div>

<?php foreach($result->result() as $rows){ ?>
    <div class="row">   
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <img class="img_actu img-responsive" src="<?php echo $rows->file_name ?>" alt="">
            </div>
                
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 box_actu">  
                <a href="<?php echo $rows->link ?>" type="button"target="_blank">
                    <h4 class="title_article"><?php echo $rows->title ?></h4> 
                    <div class="date hidden_actu">
                        <i class="fa fa-calendar-o" aria-hidden="true"></i>
                        <h6><?php echo $rows->date ?></h6>
                    </div>
                    <p class="hidden_actu"><?php echo $rows->texte ?>.</p>
                </a>
            </div>

        <!--FIN COL 12 ACTU -->
        </div>
    </div>
<?php } ?> 



<!--end col8 actu-->
</div>
