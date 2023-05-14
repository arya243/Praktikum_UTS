  <?php
    require_once 'header.php';
    ?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">
      <div class="container position-relative">
          <div class="row gy-5" data-aos="fade-in">
              <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
                  <h2>Welcome to <span>Aleps</span></h2>
                  <p>Berbagai Macam Jenis Barang</p>
                  <div class="d-flex justify-content-center justify-content-lg-start">
                      <a href="#pesanan" class="btn-get-started">Produk</a>
                  </div>
              </div>
              <div class="col-lg-6 order-1 order-lg-2">
                  <img src="assets/img/hero-img.svg" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
              </div>
          </div>
      </div>


      </div><!--End Icon Box -->

      </div>
      </div>
      </div>

      </div>
  </section>
  <!-- End Hero Section -->

  <main id="main">



      <!-- ======= Our Services Section ======= -->
      <section id="pesanan" class="services sections-bg">
          <div class="container" data-aos="fade-up">

              <div class="section-header">
                  <h2>PRODUK</h2>
                  <p>Pilih Produk Anda</p>
              </div>

              <?php
                require_once "dbkoneksi.php";
                $sql = "SELECT produk.*, kategori_produk.nama AS kategori FROM produk
          INNER JOIN kategori_produk ON kategori_produk.id = produk.kategori_produk_id";
                $st = $dbh->query($sql);
                $st->execute();
                $row = $st->fetchAll();

                ?>
              <div class="row gy-4">
                  <?php foreach ($row as $prod) : ?>
                      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">

                          <div class="online shop">
                              <i class="shop"></i>
                              <h3><?= $prod['nama'];  ?></h3>
                              <p><?= $prod['kategori'];  ?></p>
                              <a href="detail_produk.php?id=<?= $prod['id'] ?>" class="read-more"><span>Detail</span> <i class="bi bi-arrow-right"></i></a>
                          </div>
                      </div>
                  <?php endforeach; ?>
                  
              </div>
          </div><!-- End Service Item -->


          </div>

          </div>
      </section><!-- End Our Services Section -->

  </main><!-- End #main -->

  <?php
    require_once 'footer.php';
    ?>