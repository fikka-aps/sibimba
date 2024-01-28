<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Bimbel List</h1>
    </div>

    <?= form_error('name', '<div class="alert alert-danger" role="alert">', '</div>') ?>
    <?= form_error('email', '<div class="alert alert-danger" role="alert">', '</div>') ?>
    <?= form_error('password', '<div class="alert alert-danger" role="alert">', '</div>') ?>

    <a href="" class="btn btn-dark mb-3" data-toggle="modal" data-target="#newBimbelModalCenter">Add New Bimbel</a>
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Bimbel Name</th>
                <th scope="col">Description</th>
                <th scope="col">Address</th>
                <th scope="col">Telepon</th>
                <th scope="col">Website</th>
                <th scope="col">Picture</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody class="bg-white">
            <?php $i = 1; ?>
            <?php foreach ($bimbel as $b) : ?>
                <tr>
                    <th scope="row"><?= $i; ?></th>
                    <td><?= $b['bimbel_name'] ?></td>
                    <td><?= $b['desc'] ?></td>
                    <td><?= $b['address'] ?></td>
                    <td><?= $b['telepon_num'] ?></td>
                    <td><?= $b['website'] ?></td>
                    <td><img src="<?= base_url('img/bimbel/') . $b['pict']; ?>" width="150" alt=""></td>
                    <td>
                        <a href="" class="badge badge-light" data-toggle="modal" data-target="#editBimbelModalCenter<?= $b['bimbel_id'] ?>">edit</a>
                        <a href="" class=" badge badge-dark" data-toggle="modal" data-target="#deleteBimbelModalCenter<?= $b['bimbel_id'] ?>">delete</a>
                        <a href="" class=" badge badge-info" data-toggle="modal" data-target="#newPromoModalCenter<?= $b['bimbel_id'] ?>">Add Promo</a>
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
<div class="modal fade" id="newBimbelModalCenter" tabindex="-1" role="dialog" aria-labelledby="newBimbelModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newBimbelModalLongTitle">New Bimbel</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <?= form_open_multipart('addBimbel'); ?>
            <div class="modal-body">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Bimbel Name">
                </div>
                <div class="form-group">
                    <label for="desc">Description</label>
                    <textarea type="text" class="form-control" id="desc" name="desc" placeholder="Bimbel Description"></textarea>
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="Bimbel Address">
                </div>
                <div class="form-group">
                    <label for="telepon">Telepon</label>
                    <input type="text" class="form-control" id="telepon" name="telepon" placeholder="Telepon">
                </div>
                <div class="form-group">
                    <label for="website">Website</label>
                    <input type="text" class="form-control" id="website" name="website" placeholder="Website">
                </div>
                <div class="form-group">
                    <label for="pict">Picture</label>
                    <input type="file" class="form-control" id="pict" name="pict" size="30">
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

<?php foreach ($bimbel as $b) :  ?>
    <div class="modal fade" id="editBimbelModalCenter<?= $b['bimbel_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="editBimbelModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editBimbelModalLongTitle">Edit Bimbel</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?= form_open_multipart('editBimbel'); ?>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="hidden" name="id" value=" <?= $b['bimbel_id'] ?>">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?= $b['bimbel_name'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="desc">Description</label>
                        <input type="text" class="form-control" id="desc" name="desc" value="<?= $b['desc'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address" value="<?= $b['address'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="telepon">Telepon</label>
                        <input type="text" class="form-control" id="telepon" name="telepon" value="<?= $b['telepon_num'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="website">Website</label>
                        <input type="text" class="form-control" id="website" name="website" value="<?= $b['website'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="pict">Picture</label>
                        <input type="file" class="form-control" id="pict" name="pict" size="30">
                        <img src="<?= base_url('img/bimbel/') . $b['pict']; ?>" width="100" class="mt-3" alt="">
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
<?php foreach ($bimbel as $b) :  ?>
    <div class="modal fade" id="deleteBimbelModalCenter<?= $b['bimbel_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="deleteBimbelModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteBimbelModalLongTitle">Delete Bimbel</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Are you sure delete this Bimbel?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                    <a href="<?= base_url('deleteBimbel/' . $b['bimbel_id']) ?>" class="btn btn-dark">Yes</a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<!-- Modal Add Promo -->
<?php foreach ($bimbel as $b) :  ?>
    <div class="modal fade" id="newPromoModalCenter<?= $b['bimbel_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="newPromoModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newPromoModalLongTitle">New Promo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <?= form_open_multipart('addPromo'); ?>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="promo">Promo</label>
                        <input type="text" class="form-control" id="promo" name="promo" placeholder="Promo Name">
                    </div>
                    <div class="form-group">
                        <label for="desc">Description</label>
                        <textarea type="text" class="form-control" id="desc" name="desc" placeholder="Promo Description"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="Bimbel" name="Bimbel" value="<?= $b['bimbel_id'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="pict">Poster</label>
                        <input type="file" class="form-control" id="pict" name="pict" size="30">
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
<?php endforeach; ?>