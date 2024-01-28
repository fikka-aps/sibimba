<div class="site-section bg-light">
    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                <div class="section-title mb-5">
                    <h2>Contact Us</h2>
                </div>

                <form method="post" action="<?= base_url('contact') ?>">

                    <div class="row">
                        <div class="col-md form-group">
                            <label for="name">Full Name</label>
                            <input type="text" id="name" name="name" class="form-control form-control-lg">
                            <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="eaddress">Email Address</label>
                            <input type="text" id="email" name="email" class="form-control form-control-lg">
                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="telepon">Tel. Number</label>
                            <input type="text" id="telepon" name="telepon" class="form-control form-control-lg">
                            <?= form_error('telepon', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md form-group">
                            <label for="message">Message</label>
                            <textarea type="text" id="message" name="message" cols="30" rows="5" class="form-control form-control-lg"></textarea>
                            <?= form_error('messsage', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>


                    <div class="row mt-3">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary py-3 px-5">Send Message</button>
                        </div>
                    </div>

                </form>
            </div>

        </div>


    </div>
</div>



<div class="footer">
    <div class="container">


        <div class="row">
            <div class="col-12">
                <div class="copyright">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>