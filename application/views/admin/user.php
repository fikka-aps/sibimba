<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Admin</h1>
    </div>

    <?= form_error('name', '<div class="alert alert-danger" role="alert">', '</div>') ?>
    <?= form_error('email', '<div class="alert alert-danger" role="alert">', '</div>') ?>
    <?= form_error('password', '<div class="alert alert-danger" role="alert">', '</div>') ?>

    <a href="" class="btn btn-success " data-toggle="modal" data-target="#newAdminModalCenter">Add New Admin</a>

    <table class="table table-bordered mt-3">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody class="bg-white">
            <?php $i = 1; ?>
            <?php foreach ($user as $u) : ?>
                <tr>
                    <th scope="row"><?= $i; ?></th>
                    <td><?= $u['name'] ?></td>
                    <td><?= $u['email'] ?></td>
                    <td>
                        <a href="" class="badge badge-light" data-toggle="modal" data-target="#editAdminModalCenter<?= $u['id_user'] ?>">edit</a>
                        <a href="" class="badge badge-danger" data-toggle="modal" data-target="#deleteAdminModalCenter<?= $u['id_user'] ?>">delete</a>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<!-- Modal Add -->
<div class="modal fade" id="newAdminModalCenter" tabindex="-1" role="dialog" aria-labelledby="newAdminModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newAdminModalLongTitle">New Admin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('user') ?>" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Admin Name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Admin Email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-dark">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Edit -->

<?php foreach ($users as $u) :  ?>
    <div class="modal fade" id="editAdminModalCenter<?= $u['id_user'] ?>" tabindex="-1" role="dialog" aria-labelledby="editAdminModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editAdminModalLongTitle">Edit Admin</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('editUser') ?>" method="POST">
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="hidden" name="id" value=" <?= $u['id_user'] ?>">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="<?= $u['name'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" value="<?= $u['email'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" value="<?= $u['password'] ?>">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-dark">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<!-- Modal Delete -->
<?php foreach ($user as $u) :  ?>
    <div class="modal fade" id="deleteAdminModalCenter<?= $u['id_user'] ?>" tabindex="-1" role="dialog" aria-labelledby="deleteAdminModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteAdminModalLongTitle">Delete Admin</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Are you sure delete this Admin?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                    <a href="<?= base_url('deleteUser/' . $u['id_user']) ?>" class="btn btn-dark">Yes</a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>