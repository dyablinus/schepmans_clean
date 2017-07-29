
        <!-- Left col -->
<section class="col-lg-12 connectedSortable">
        
  <h1 class="text-center">Utilisateurs</h1>
   
  <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    
    <a href="<?php echo base_url('newsletter/csv') ?>" class="btn btn-primary btn-lg">Export CSV</a>

  </div>
   
  <table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>Email</th>
        <th>Nom</th>
        <th>Prénom</th>
      </tr>
    </thead>

    <tbody>
      <?php foreach($result->result() as $rows){ ?>
      <tr>
        <th scope="row"></th>
        <td><?php echo $rows->email ?></td>
        <td><?php echo $rows->name; ?></td>
        <td><?php echo $rows->surname; ?></td>
      </tr>
    <?php } ?>

    </tbody>
  </table>
   
   
   
   

</section>

    <!-- /.content -->

