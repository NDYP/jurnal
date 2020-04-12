<section class="section-margin--small section-margin">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-lg-3 mb-4 mb-md-0">
                <?php foreach ($layanan as $x) { ?>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h3><?= $x['alamat']; ?></h3>
                            <p>Santa monica bullevard</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-headphone"></i></span>
                        <div class="media-body">
                            <h3><a href="tel:454545654"><?= $x['no_telepon']; ?></a></h3>
                            <p>Mon to Fri 9am to 6pm</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                            <h3><a href="mailto:support@colorlib.com"><?= $x['alamat']; ?></a></h3>
                            <p>Send us your query anytime!</p>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="col-md-8 col-lg-9">
                <form action="#/" class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <input class="form-control" name="name" id="name" type="text" placeholder="Enter your name">
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="email" id="email" type="email" placeholder="Enter email address">
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="subject" id="subject" type="text" placeholder="Enter Subject">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="form-group">
                                <textarea class="form-control different-control w-100" name="message" id="message" cols="30" rows="5" placeholder="Enter Message"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-center text-md-right mt-3">
                        <button type="submit" class="button button--active button-contactForm">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>