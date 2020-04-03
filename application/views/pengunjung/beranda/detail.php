    <!--================ Start Blog Post Area =================-->
    <main class="site-main">
        <section class="blog-post-area section-margin mt-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="main_blog_details">
                            <h4 align="center"><?= $jurnal['judul']; ?></h4>
                            <div class="user_details">
                                <div class="float-left">
                                    <a href="<?= site_url('assets/jurnal/' . $jurnal['file']) ?>">PDF</a>
                                </div>
                                <div class="float-right mt-sm-0 mt-3">
                                    <div class="media">
                                        <div class="media-body">
                                            <h5><?= $jurnal['nama']; ?></h5>
                                            <p><?= date('d F Y, H:i:s', strtotime($jurnal['tgl_upload'])); ?></p>
                                        </div>
                                        <div class="d-flex">
                                            <img width="42" height="42" src="<?= base_url('assets/foto/mhs/' . $jurnal['foto']) ?>" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p align="justify"><?= $jurnal['abstrak']; ?></p>
                        </div>
                        <hr>
                        <div class="comments-area">
                            <h4>05 Komentar Penguji</h4>
                            <?php foreach ($komentar as $row) { ?>
                                <div class="comment-list">
                                    <div class="single-comment justify-content-between d-flex">
                                        <div class="user justify-content-between d-flex">
                                            <div class="col-md-3">
                                                <div class="thumb">
                                                    <?php if ($row['foto'] !== NULL) { ?>
                                                        <img width="42" height="42" src="<?= base_url('assets/foto/mhs/' . $row['foto']) ?>" alt="user image" class="offline">
                                                    <?php } ?>
                                                    <?php if ($row['foto'] == NULL) { ?>
                                                        <img width="42" height="42" src="<?= base_url('assets/') ?>foto/default.png" alt="user image" class="offline">
                                                    <?php } ?>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="desc">
                                                    <h5><a href="#"><?= $row['nama']; ?></a></h5>
                                                    <p class="date"><?= date('d F Y, H:i:s', strtotime($row['tanggal'])); ?></p>
                                                    <p class="comment" align="justify">
                                                        <?= $row['komentar']; ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="comment-form">
                            <h4>Berikan Komentar</h4>
                            <form>
                                <div class="form-group form-inline">
                                    <div class="form-group col-lg-6 col-md-6 name">
                                        <input type="text" class="form-control" id="name" placeholder="Enter Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Name'">
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 email">
                                        <input type="email" class="form-control" id="email" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Subject'">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control mb-10" rows="5" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
                                </div>
                                <a href="#" class="button submit_btn">Post Comment</a>
                            </form>
                        </div>
                    </div>

                    <!-- Start Blog Post Siddebar -->
                    <div class="col-lg-4 sidebar-widgets">
                        <div class="widget-wrap">
                            <div class="single-sidebar-widget newsletter-widget">
                                <h4 class="single-sidebar-widget__title">Newsletter</h4>
                                <div class="form-group mt-30">
                                    <div class="col-autos">
                                        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Enter email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'">
                                    </div>
                                </div>
                                <button class="bbtns d-block mt-20 w-100">Subcribe</button>
                            </div>


                            <div class="single-sidebar-widget post-category-widget">
                                <h4 class="single-sidebar-widget__title">Catgory</h4>
                                <ul class="cat-list mt-20">
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p>Technology</p>
                                            <p>(03)</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p>Software</p>
                                            <p>(09)</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p>Lifestyle</p>
                                            <p>(12)</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p>Shopping</p>
                                            <p>(02)</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p>Food</p>
                                            <p>(10)</p>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="single-sidebar-widget popular-post-widget">
                                <h4 class="single-sidebar-widget__title">Popular Post</h4>
                                <div class="popular-post-list">
                                    <div class="single-post-list">
                                        <div class="thumb">
                                            <img class="card-img rounded-0" src="img/blog/thumb/thumb1.png" alt="">
                                            <ul class="thumb-info">
                                                <li><a href="#">Adam Colinge</a></li>
                                                <li><a href="#">Dec 15</a></li>
                                            </ul>
                                        </div>
                                        <div class="details mt-20">
                                            <a href="blog-single.html">
                                                <h6>Accused of assaulting flight attendant miktake alaways</h6>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="single-post-list">
                                        <div class="thumb">
                                            <img class="card-img rounded-0" src="img/blog/thumb/thumb2.png" alt="">
                                            <ul class="thumb-info">
                                                <li><a href="#">Adam Colinge</a></li>
                                                <li><a href="#">Dec 15</a></li>
                                            </ul>
                                        </div>
                                        <div class="details mt-20">
                                            <a href="blog-single.html">
                                                <h6>Tennessee outback steakhouse the
                                                    worker diagnosed</h6>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="single-post-list">
                                        <div class="thumb">
                                            <img class="card-img rounded-0" src="img/blog/thumb/thumb3.png" alt="">
                                            <ul class="thumb-info">
                                                <li><a href="#">Adam Colinge</a></li>
                                                <li><a href="#">Dec 15</a></li>
                                            </ul>
                                        </div>
                                        <div class="details mt-20">
                                            <a href="blog-single.html">
                                                <h6>Tennessee outback steakhouse the
                                                    worker diagnosed</h6>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="single-sidebar-widget tag_cloud_widget">
                                <h4 class="single-sidebar-widget__title">Popular Post</h4>
                                <ul class="list">
                                    <li>
                                        <a href="#">project</a>
                                    </li>
                                    <li>
                                        <a href="#">love</a>
                                    </li>
                                    <li>
                                        <a href="#">technology</a>
                                    </li>
                                    <li>
                                        <a href="#">travel</a>
                                    </li>
                                    <li>
                                        <a href="#">software</a>
                                    </li>
                                    <li>
                                        <a href="#">life style</a>
                                    </li>
                                    <li>
                                        <a href="#">design</a>
                                    </li>
                                    <li>
                                        <a href="#">illustration</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Blog Post Siddebar -->
            </div>
        </section>
    </main>
    <!--================ End Blog Post Area =================-->