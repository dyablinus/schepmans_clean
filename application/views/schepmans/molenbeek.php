<div class="col-md-8 molenbeek_col">
    
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"  id="barre_molen">
            
        <div class="logo_molen col-xs-3 col-sm-3 no_padding">
            <img class="img_logo_molenbeek img-responsive" src="<?= base_url("assets/images/logo_molenbeek.png ")?>" alt="">
        </div>

        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9" id="molenbeek">
            <h1 class="title_molen">Molenbeek</h1>
        </div>

    </div>
    <?php $query = $this->db->query("SELECT * FROM posts ORDER BY id DESC LIMIT 10;");
        foreach($query->result() as $rows){ ?>
            
            <h2 class="molenbeek_title"><?php echo $rows->title ?></h2>
            
            <p class="p_molenbeek">
                <?php echo $rows->texte ?>
                <a href="<?php echo $rows->link ?>">Info</a>
            </p>
            <?php if ($rows->file_name): ?>
            <img class="img_molenbeek img-responsive" src="<?php echo base_url("uploads/schepmans/files/schepmans_/$rows->file_name")?>" alt="">
            <?php endif;?>
            
            <div id="barre_molen"></div>

   
    <?php } ?>

    
</div>