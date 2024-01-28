<div class="site-section">
    <div class="container ">
        <div class="row ">
            <div class="col-lg-8">
                <div class="section-title">
                    <span class="caption d-block small">List</span>
                    <h2>Bimbel</h2>
                </div>
                <?php foreach ($bimbel as $b) :  ?>
                    <div class="post-entry-2 d-flex">
                        <div class="thumbnail order-md-2" style="background-image: url('<?= base_url('img/bimbel/') . $b['pict']; ?>')"></div>
                        <div class="contents order-md-1 pl-0">
                            <h4><a style="color: black;" href=""><?= $b['bimbel_name'] ?></a></h4>
                            <p class="mb-3"><?= $b['desc'] ?></p>
                            <a href="<?= base_url('detail/') . $b['bimbel_id']; ?>">Detail >></a>
                        </div>
                    </div>
                <?php endforeach; ?>


            </div>

            <!-- Popular post -->
            <div class="col-lg-3 ml-auto">
                <div class="section-title">
                    <h2>Recomendation</h2>
                </div>
                <?php $i = 1; ?>
                <?php foreach ($bimbel as $b) :  ?>
                    <div class="trend-entry d-flex">
                        <div class="number align-self-start">0<?= $i; ?></div>
                        <div class="trend-contents">
                            <h2><a href="<?= base_url('detail/') . $b['bimbel_id']; ?>"><?= $b['bimbel_name'] ?></a></h2>
                            <div class="post-meta">
                                <span class="date-read">Recomendation by SiBimba <span class="mx-1">&bullet;</span>
                            </div>
                        </div>
                    </div>
                    <?php $i++; ?>
                <?php endforeach; ?>

                <p>
                    <a href="#" class="more">See All Popular <span class="icon-keyboard_arrow_right"></span></a>
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <ul class="custom-pagination list-unstyled">
                    <li><a href="#">1</a></li>
                    <li class="active">2</li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="site-section subscribe bg-light">
    <div class="container">
        <form action="#" class="row align-items-center">
            <div class="col-md-5 mr-auto">
                <h2>Newsletter Subcribe</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis aspernatur ut at quae omnis pariatur obcaecati possimus nisi ea iste!</p>
            </div>
            <div class="col-md-6 ml-auto">
                <div class="d-flex">
                    <input type="email" class="form-control" placeholder="Enter your email">
                    <button type="submit" class="btn btn-secondary"><span class="icon-paper-plane"></span></button>
                </div>
            </div>
        </form>
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