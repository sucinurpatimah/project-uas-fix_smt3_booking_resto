 <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center section-bg">
        <div class="container">
            <div class="row justify-content-between gy-5">
                <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
                    <h2 data-aos="fade-up">ALL YOU CAN EAT & ALL YOU CAN DRINK<br>Hanya<span> 109K/org!</span></h2>
                    <p data-aos="fade-up" data-aos-delay="100">Makan dan minum sepuasnya, hanya di Resto Suka Makan.
                        <br><b>Noted : Durasi waktu 1jam.</b>
                    </p>
                    <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                        <a href="index_cus.php?page=reservasi" class="btn-book-a-table">Lakukan Reservasi</a>
                    </div>
                </div>
                <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
                    <img src="../Seller/Gambar/gambar4.jpg" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
                </div>
            </div>
        </div>
    </section><!-- End Hero Section -->
    
     <main id="main">
        <!-- ======= Menu Section ======= -->
        <section id="menu" class="menu">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Daftar Menu</h2>
                    <p>Check Menu <span>Resto Suka Makan</span></p>
                </div>

                <div class="tab-content" data-aos="fade-up" data-aos-delay="300">
                    <div class="tab-pane fade active show" id="menu-starters">


                        <div class="row">
                            <div class="tab-header text-center">
                                <h3>Makanan</h3>
                                <h6>Beberapa pilihan daging yang tersedia.</h6>
                            </div>

                            <?php
                            include "../koneksi.php";
                            $produk = mysqli_query($con, "select * from tb_produk");
                            while ($rp = mysqli_fetch_array($produk)) {
                            ?>

                                <div class="col-lg-4 menu-item">
                                    <a href="assets/img/menu/menu-item-1.png" class="glightbox">
                                        <img src="<?php echo "../Seller/Gambar/$rp[gambar]";  ?>" width="300" height="250" alt="" />
                                        <p><b><?php echo "$rp[nm_produk]" ?></b></p>
                                    </a>
                                </div><!-- Menu Item -->
                            <?php } ?>
                        </div>


                        <div class="row">
                            <div class="tab-header text-center">
                                <p>
                                <h3>Minuman</h3>
                                </p>
                            </div>

                            <div class="col-lg-4 menu-item"></div>

                            <div class="col-lg-4 menu-item">
                                <center>
                                    <a href="assets/img/menu/menu-item-5.png" class="glightbox"><img src="../Seller/Gambar/minum1.jpg" class="menu-img img-fluid" alt=""></a>
                                    <h4>Refil minum <br>sepuasnya</h4>
                                </center>
                            </div>
                            <div class="col-lg-4 menu-item"></div><!-- Menu Item -->
                        </div>


                    </div><!-- End Starter Menu Content -->
                </div>
            </div>

            </div>
        </section><!-- End Menu Section -->

   <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Testimonials</h2>
                    <p><span>Apa Kata Mereka?</span></p>
                </div>

                <div class="slides-1 swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="row gy-4 justify-content-center">
                                    <div class="col-lg-6">
                                        <div class="testimonial-content">
                                            <p>
                                                <i class="bi bi-quote quote-icon-left"></i>
                                                Tempat sudah pasti nyaman dan luas, good service, makanannya cukup lengkap dan dagingnya masih fresh. Pokoknya All You Can Eat ter-worth it di Cirebon.
                                                <i class="bi bi-quote quote-icon-right"></i>
                                            </p>
                                            <h3>Adya Amalia</h3>
                                            <h4>Customer</h4>
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 text-center">
                                        <img src="../Seller/Gambar/gambar2.jpg" class="img-fluid testimonial-img" alt="">
                                    </div>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Tempatnya nyaman dan cukup luas dengan 2 lantai, pilihan dagingnya banyak dan enak. Kalo makan disini wajib dalam keadaan perut kosong biar kenyang dan puas. Pelayanan baik dan ramah.
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Sara Wilsson</h3>
                      <h4>Customer</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="../Seller/Gambar/gambar5.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Tempat sudah pasti nyaman dan luas, good service, makanannya cukup lengkap dan dagingnya masih fresh. Pokoknya All You Can Eat ter-worth it di Cirebon.
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Jena Karlis</h3>
                      <h4>Customer</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="../Seller/Gambar/gambar2.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Tempatnya nyaman dan cukup luas dengan 2 lantai, pilihan dagingnya banyak dan enak. Kalo makan disini wajib dalam keadaan perut kosong biar kenyang dan puas. Pelayanan baik dan ramah.
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Jenny Blackpink</h3>
                      <h4>Customer</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="../Seller/Gambar/gambar5.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->


    <!-- ======= Chefs Section ======= -->
        <section id="chefs" class="chefs section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Chefs</h2>
                    <p>Chef <span>Profesional</span> Kami</p>
                </div>

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="chef-member">
                            <div class="member-img">
                                <img src="assets/img/chefs/chefs-1.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Walter White</h4>
                                <span>Master Chef</span>
                                <p>Velit aut quia fugit et et. Dolorum ea voluptate vel tempore tenetur ipsa quae aut. Ipsum exercitationem iure minima enim corporis et voluptate.</p>
                            </div>
                        </div>
                    </div><!-- End Chefs Member -->

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="chef-member">
                            <div class="member-img">
                                <img src="assets/img/chefs/chefs-2.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Sarah Jhonson</h4>
                                <span>Patissier</span>
                                <p>Quo esse repellendus quia id. Est eum et accusantium pariatur fugit nihil minima suscipit corporis. Voluptate sed quas reiciendis animi neque sapiente.</p>
                            </div>
                        </div>
                    </div><!-- End Chefs Member -->

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                        <div class="chef-member">
                            <div class="member-img">
                                <img src="assets/img/chefs/chefs-3.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>William Anderson</h4>
                                <span>Cook</span>
                                <p>Vero omnis enim consequatur. Voluptas consectetur unde qui molestiae deserunt. Voluptates enim aut architecto porro aspernatur molestiae modi.</p>
                            </div>
                        </div>
                    </div><!-- End Chefs Member -->

                </div>

            </div>
        </section><!-- End Chefs Section -->

   <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Contact</h2>
                    <p>Butuh Bantuan? <span>Hubungi Kami!</span></p>
                </div>

                <div class="mb-3">
                    <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
                </div><!-- End Google Maps -->
            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

  <div class="container">
            <div class="row gy-3">
                <div class="col-lg-3 col-md-6 d-flex">
                    <i class="bi bi-geo-alt icon"></i>
                    <div>
                        <h4>Alamat</h4>
                        <p>
                            Jl. Pekalangan No. 107 <br>
                            Cirebon, Jawa Barat, Indonesia.<br>
                        </p>
                    </div>

                </div>

                <div class="col-lg-3 col-md-6 footer-links d-flex">
                    <i class="bi bi-telephone icon"></i>
                    <div>
                        <h4>Reservasi</h4>
                        <p>
                            <strong>Phone :</strong> 0895346047189<br>
                            <strong>Email :</strong> sukamakann@gmail.com<br>
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 footer-links d-flex">
                    <i class="bi bi-clock icon"></i>
                    <div>
                        <h4>Buka</h4>
                        <p>
                            <strong>Senin - Jumat</strong> 10.00 - 23.00<br>
                            <strong>Sabtu - Minggu</strong> 10.00 - 24.00<br>
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Follow Kami</h4>
                    <div class="social-links d-flex">
                        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

            </div>
        </div>