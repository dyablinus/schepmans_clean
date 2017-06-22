
        <!-- Left col -->
        <section class="col-lg-12 connectedSortable">
        
        <h1>user</h1>
     <?php foreach($result->result() as $rows){ ?>

        <div class="col-md-3">
          <a href=" <?= base_url('newsletter/show'.$rows->id) ?>">
           <ul class="list-group">
             <li class="list-group-item"><?= $rows->name; ?></li>
             <li class="list-group-item"><?= $rows->surname; ?></li>
             <li class="list-group-item"><?= $rows->email ?></li>
          </ul>
        </a>
      </div>
   <?php } ?>

        </section>

    <!-- /.content -->


