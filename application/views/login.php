<div class="container mt-5">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class=" col-lg-4">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Login!</h1>
                                </div>
                                <form class="user" method="POST" action="<?= base_url('login') ?>">

                                    <div class="form-group">
                                        <input type="text" name="email" class="form-control form-control-user" id="email" aria-describedby="emailHelp" placeholder="Enter Email Address..." value="<?= set_value('email'); ?>">
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control form-control-user" id="password" placeholder="Password">
                                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <button class="btn btn-dark btn-user btn-block mt-2" type="submit">
                                        Login
                                    </button>
                                </form>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>