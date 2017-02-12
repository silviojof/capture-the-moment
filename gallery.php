<?php $name="gallery"; include "partials/header.php"; ?>

                <!-- Start of Gallery Banner -->
                <div class="gallery-banner-wrapper">
                    <div class="gallery-banner row">
                        <div class="gallery-banner-img small-12 large-6 column">
                            <img src="img/gallery5.jpg" alt="Main Image"/>
                        </div>
                        <div class="gallery-banner-hero small-12 large-6 column">
                            <h2>Get Inspired</h2>
                            <hr class="bar">
                            <h6>Sed vitae magna pellentesque, aliquam neque ac, blandit ligula. Duis lacinia molestie sapien sit amet iaculis.</h6>
                            <a href="#gallery-block" class="btn-signup">View our work<i class="fa fa-long-arrow-down" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <!-- End of Gallery Banner -->

                <!-- Start of Gallery -->

                <!-- Gallery (visible) -->
                <div class="gallery-wrapper" id="gallery-block">
                    <div class="row">
                        <div class="gallery-img small-12 medium-6 large-4 column">
                            <img src="img/thumbnail1.jpg" onclick="openModal(1);" alt="One of Gallery Images"/>
                        </div>
                        <div class="gallery-img small-12 medium-6 large-4 column">
                            <img src="img/thumbnail2.jpg" onclick="openModal(2);" alt="One of Gallery Images"/>
                        </div>
                        <div class="gallery-img small-12 medium-6 large-4 column">
                            <img src="img/thumbnail3.jpg" onclick="openModal(3);" alt="One of Gallery Images"/>
                        </div>
                        <div class="gallery-img small-12 medium-6 large-4 column">
                            <img src="img/thumbnail4.jpg" onclick="openModal(4);" alt="One of Gallery Images"/>
                        </div>
                        <div class="gallery-img small-12 medium-6 large-4 column">
                            <img src="img/thumbnail5.jpg" onclick="openModal(5);" alt="One of Gallery Images"/>
                        </div>
                        <div class="gallery-img small-12 medium-6 large-4 column">
                            <img src="img/thumbnail6.jpg" onclick="openModal(6);" alt="One of Gallery Images"/>
                        </div>
                        <div class="gallery-img small-12 medium-6 large-4 column">
                            <img src="img/thumbnail7.jpg" onclick="openModal(7);" alt="One of Gallery Images"/>
                        </div>
                        <div class="gallery-img small-12 medium-6 large-4 column">
                            <img src="img/thumbnail8.jpg" onclick="openModal(8);" alt="One of Gallery Images"/>
                        </div>
                        <div class="gallery-img small-12 medium-6 large-4 column">
                            <img src="img/thumbnail9.jpg" onclick="openModal(9);" alt="One of Gallery Images"/>
                        </div>
                        <div class="gallery-img small-12 medium-6 large-4 column">
                            <img src="img/thumbnail10.jpg" onclick="openModal(10);" alt="One of Gallery Images"/>
                        </div>
                        <div class="gallery-img small-12 medium-6 large-4 column">
                            <img src="img/thumbnail11.jpg" onclick="openModal(11);" alt="One of Gallery Images"/>
                        </div>
                        <div class="gallery-img small-12 medium-6 large-4 column">
                            <img src="img/thumbnail12.jpg" onclick="openModal(12);" alt="One of Gallery Images"/>
                        </div>
                    </div>
                </div>

                <!--Modal (visible only after function openModal executes-->
                <div class="modal">
                    <a class="close-modal" onclick="closeModal()"><i class="fa fa-times" aria-hidden="true"></i></a>
                    <div class="modal-container" onclick="closeModal()">
                        <div class="modal-slide">
                            <img src="img/gallery1.jpg" alt="Modal Image"/>
                        </div>
                        <div class="modal-slide">
                            <img src="img/gallery2.jpg" alt="Modal Image"/>
                        </div>
                        <div class="modal-slide">
                            <img src="img/gallery3.jpg" alt="Modal Image"/>
                        </div>
                        <div class="modal-slide">
                            <img src="img/gallery4.jpg" alt="Modal Image"/>
                        </div>
                        <div class="modal-slide">
                            <img src="img/gallery5.jpg" alt="Modal Image"/>
                        </div>
                        <div class="modal-slide">
                            <img src="img/gallery6.jpg" alt="Modal Image"/>
                        </div>
                        <div class="modal-slide">
                            <img src="img/gallery7.jpg" alt="Modal Image"/>
                        </div>
                        <div class="modal-slide">
                            <img src="img/gallery8.jpg" alt="Modal Image"/>
                        </div>
                        <div class="modal-slide">
                            <img src="img/gallery9.jpg" alt="Modal Image"/>
                        </div>
                        <div class="modal-slide">
                            <img src="img/gallery10.jpg" alt="Modal Image"/>
                        </div>
                        <div class="modal-slide">
                            <img src="img/gallery11.jpg" alt="Modal Image"/>
                        </div>
                        <div class="modal-slide">
                            <img src="img/gallery12.jpg" alt="Modal Image"/>
                        </div>
                    </div>
                    <a class="prev arrow" onclick="moveModal(-1)"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                    <a class="next arrow" onclick="moveModal(1)"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                </div>

                <!-- End of Gallery -->
            
<?php include "partials/contact.php"; ?>

<?php include "partials/footer.php"; ?>