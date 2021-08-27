
<?= $this->extend('layouts/frontend.php') ?>

<?= $this->section('content') ?>
    
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    <h4>Employee Data</h4>
              
                    <div class="card-body">
                    <a href="<?= base_url('employee/create1') ?>"  class="btn btn-info btn-sm float-end">Add</a>
                  <br>
                  <br>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Designation</th>
                                    <th>Created Time</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($employee as $row):?>
                                <tr>
                                    <td><?=$row['Id']?></td>
                                    <td><?=$row['first_name']?></td>
                                    <td><?=$row['last_name']?></td>
                                    <td><?=$row['phone']?></td>
                                    <td><?=$row['email']?></td>
                                    <td><?=$row['designation']?></td>
                                    <td><?=$row['created_at']?></td>
                                    <td>
                                        <a href="" class="btn btn-success btn-sm">Edit</a>
                                        <a href="" class="btn btn-danger btn-sm">Delete</a>

                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>











    