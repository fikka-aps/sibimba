<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Bimbel List</h1>
    </div>

    <?= form_error('name', '<div class="alert alert-danger" role="alert">', '</div>') ?>
    <?= form_error('email', '<div class="alert alert-danger" role="alert">', '</div>') ?>
    <?= form_error('password', '<div class="alert alert-danger" role="alert">', '</div>') ?>


    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Promo</th>
                <th scope="col">Description</th>
                <th scope="col">Bimbel</th>
                <th scope="col">Picture</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody class="bg-white">
            <?php $i = 1; ?>
            <?php foreach ($promo as $p) : ?>
                <tr>
                    <th scope="row"><?= $i; ?></th>
                    <td><?= $p['promo'] ?></td>
                    <td><?= $p['description'] ?></td>
                    <td><?= $p['bimbel_name'] ?></td>
                    <td><img src="<?= base_url('img/promo/') . $p['image']; ?>" width="150" alt=""></td>
                    <td>
                        <a href="" class="badge badge-light" data-toggle="modal" data-target="#editPromoModalCenter<?= $p['id_promo'] ?>">edit</a>
                        <a href="" class=" badge badge-dark" data-toggle="modal" data-target="#deletePromoModalCenter<?= $p['id_promo'] ?>">delete</a>
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
<div class="modal fade" id="newPromoModalCenter" tabindex="-1" role="dialog" aria-labelledby="newPromoModalCenterTitle" aria-hidden="true">
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
                    <label for="Bimbel">Bimbel</label>
                    <input type="Bimbel" class="form-control" id="Bimbel" name="Bimbel" placeholder="Promo Bimbel">
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

<?php foreach ($promo as $p) :  ?>
    <div class="modal fade" id="editPromoModalCenter<?= $p['id_promo'] ?>" tabindex="-1" role="dialog" aria-labelledby="editPromoModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editPromoModalLongTitle">Edit Bimbel</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?= form_open_multipart('editPromo'); ?>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="hidden" name="id" value=" <?= $p['id_promo'] ?>">
                        <label for="promo">Promo</label>
                        <input type="text" class="form-control" id="promo" name="promo" value="<?= $p['promo'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="desc">Description</label>
                        <input type="textarea" class="form-control" id="desc" name="desc" value="<?= $p['description'] ?>">
                    </div>
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="id_bimbel" name="id_bimbel" value="<?= $p['id_bimbel'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="pict">Poster</label>
                        <input type="file" class="form-control" id="pict" name="pict" size="30">
                        <img src="<?= base_url('img/promo/') . $p['image']; ?>" width="100" class="mt-3" alt="">
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
<?php foreach ($promo as $p) :  ?>
    <div class="modal fade" id="deletePromoModalCenter<?= $p['id_promo'] ?>" tabindex="-1" role="dialog" aria-labelledby="deletePromoModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deletePromoModalLongTitle">Delete Promo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Are you sure delete this Promo?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                    <a href="<?= base_url('deletePromo/' . $p['id_promo']) ?>" class="btn btn-dark">Yes</a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>