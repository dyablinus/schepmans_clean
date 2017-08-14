
<div class="col-md-8 col-md-offset-2">

    <table class="table table-striped">
            <thead>
            <tr>
                <th><h3>#</h3></th>
                <th><h3>Titre</h3></th>
                <th><h3>Texte</h3></th>
                <th><h3>Date</h3></th>
            </tr>
            </thead>

            <tbody>
            <?php foreach($result->result() as $rows){ ?>
            <tr>
                <th scope="row">
                    <a href=" <?php echo base_url('edit/update/'.$rows->id); ?>"class="btn btn-success">Modifier</a>
                    <a href=" <?php echo base_url("edit/delete/".$rows->id); ?>"class="btn btn-warning">Delete</a>
                </th>
                <td><h3><?php echo $rows->title ?></h3></td>
                <td>                            
                    <?php if (strlen(($rows->texte)) > 260 ){?>
                        <h4 class="colorpara"><?php $t = substr($rows->texte, 0, 260)." ...";echo $t ?> </h4>
                    <?php }else{ ?>
                            <h4 class="colorpara"><?php echo $rows->texte ?> </h4>
                    <?php }?>
                </td>
                <td><h4><?php echo $rows->date; ?></h4></td>
            </tr>
            <?php } ?>

            </tbody>
    </table>

</div>

