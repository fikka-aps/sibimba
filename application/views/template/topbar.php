<div class="header-top">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6 d-flex">
                <a href="<?= base_url('login') ?>" class="site-logo font-weight-bold" style="color:black;">
                    SiBimba
                </a>

                <a href="#" class="ml-auto d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a>

            </div>
            <div class="col-12 col-lg-6 ml-auto d-flex">
                <div class="ml-md-auto top-social d-none d-lg-inline-block">
                    <a href="#" class="d-inline-block p-3"><span class="icon-facebook"></span></a>
                    <a href="#" class="d-inline-block p-3"><span class="icon-twitter"></span></a>
                    <a href="#" class="d-inline-block p-3"><span class="icon-instagram"></span></a>
                </div>
                <form action="<?= base_url('bimbel_search') ?>" class="search-form d-inline-block" method="POST">
                    <div class="d-flex">
                        <input type="text" name="keyword" class="form-control" placeholder="Search...">
                        <input type="submit" name="search" class="btn btn-secondary"></span>
                    </div>
                </form>


            </div>
            <div class="col-6 d-block d-lg-none text-right">

            </div>
        </div>
    </div>




    <div class="site-navbar py-2 js-sticky-header site-navbar-target d-none pl-0 d-lg-block" role="banner">

        <div class="container">
            <div class="d-flex align-items-center">

                <div class="mr-auto">
                    <nav class="site-navigation position-relative text-right" role="navigation">
                        <ul class="site-menu main-menu js-clone-nav mr-auto d-none pl-0 d-lg-block">
                            <li class="active">
                                <a href="<?= base_url('auth') ?>" class="nav-link text-left">Home</a>
                            </li>
                            <li>
                                <a href="<?= base_url('bimbel') ?>" class="nav-link text-left">Bimbel</a>
                            </li>
                            <li><a href="<?= base_url('contact') ?>" class="nav-link text-left">Contact</a></li>
                        </ul>
                    </nav>

                </div>

            </div>
        </div>

    </div>

</div>