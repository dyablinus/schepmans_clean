<div class="col-md-8 molenbeek_col">
    
    <?php foreach($result->result() as $rows){ ?>
       
       <section>
            
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"  id="barre_molen">

                    <h1 class="title_article text-center"><?php echo $rows->title ?></h1>

            </div>

            <p class="p_molenbeek">
                <?php echo $rows->texte ?>
                <a href="<?php echo $rows->link ?>">Info</a>
            </p>
            <?php if ($rows->file_name): ?>
            <img class="img_molenbeek img-responsive" src="<?php echo base_url("uploads/schepmans/files/schepmans_/$rows->file_name")?>" alt="">
            <?php endif;?>
                
        </section>

    <?php } ?>

</div>