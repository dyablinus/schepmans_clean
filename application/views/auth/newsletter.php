
        <!-- Left col -->
        <section class="col-lg-12 connectedSortable">
        
        <h1>Utilisateurs</h1>
   
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
      <td><?= $rows->email ?></td>
      <td><?= $rows->name; ?></td>
      <td><?= $rows->surname; ?></td>
    </tr>
   <?php } ?>

  </tbody>
</table>
   
   
   
   

        </section>

    <!-- /.content -->

