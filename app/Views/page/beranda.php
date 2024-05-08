 <!-- ==========Banner Section Starts Here========== -->
 <!-- <div class="banner banner--one position-relative" id="home">
        <div class="shape">
            <div class="shape__item wow fadeInDown" data-wow-delay=".5s">
                <img src="../images/banner/shape/01.png" alt="rajibraj">
            </div>
            <div class="shape__item wow fadeInRight" data-wow-delay=".5s">
                <img src="../images/banner/shape/02.png" alt="rajibraj">
            </div>
            <div class="shape__item wow fadeInLeft" data-wow-delay=".5s">
                <img src="../images/banner/shape/03.png" alt="rajibraj">
            </div>
            <div class="shape__item wow fadeInUp" data-wow-delay=".5s">
                <img src="../images/banner/shape/04.png" alt="rajibraj">
            </div>
        </div>
        <div class="container">
            <div class="banner__area">
                <div class="row align-items-center g-4">
                    <div class="col-lg-6 col-12">
                        <div class="banner__content wow fadeInUp" data-wow-delay=".6s">
                            <h3>Natural & Organic</h3>
                            <h2>Skin <span>Care Product For</span> Health</h2>
                            <p>Conveniently customize proactive web services for leveraged without continualliery aggregate fricctionle ou wellies richard.and very customize  continually.</p>
                            <a href="shop.html" class="lab-btn">Shop Now</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="banner__thumb wow fadeInUp" data-wow-delay=".7s">
                            <img src="../img/background.jpg" alt="rajibraj">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- ==========Banner Section Ends Here========== -->

        
    <!-- ==========Banner Section Starts Here========== -->
    <!-- <div class="banner banner--seven " id="home" style="height:100vh;background-color:gray; background-blend-mode:multiply; background-size:cover">
        <div class="container">
            <div class="banner__area">
                <div class="row align-items-center g-5 g-lg-4">
                    <div class="col-lg-7 col-12 wow fadeInUp" data-wow-delay=".5s">
                        <div class="banner__content" style="color:white;margin-top:-1px;">
                            <h3 style="font-size:15px;">PT.ASTHA BOITECH NUSANTARA</h3>
                            <h2 style="color:white;">Industri <span style="font-size:55px;">Pengolahan & Produksi Makanan</span></h2>
                            <p>Berkontribusi Menjaga Stabilitas Ketahanan Pangan dan Kemandirian Pangan Nusantara</p>
                            <a href="" class="lab-btn" style="background-color:#C07F00; padding:10px; color:whihe;">Lear Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="../img/background.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="..." alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="..." alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div> -->

    <!-- ==========Banner Section Ends Here========== -->
    <!-- Carousel wrapper -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <!-- ========== slider 1 ================= -->
  <?php foreach($sliders as $row): ?>
    <div class="carousel-item active" style="background-image: url(<?= base_url('uploads/' . $row['image']); ?>); background-size:cover; background-color:gray;background-blend-mode:multiply;opacity:1;">
        <!-- <img src="../img/background.jpg" style="background-blend-mode:multiply;background-color:gray;" class="d-block w-100" alt="..."> -->
        <div class="carousel-caption d-none d-md-block display-4">
            <div class="" style="margin-top:-100px;">
            <h3 style="font-size:15px;color:gray;margin-top:-250px;float:left;">PT.ASTHA BOITECH NUSANTARA</h3>
                <h2 style="color:white;margin-top:-220px;float:left;"><?php echo $row['title']?> <span style="font-size:55px;"><?php echo $row['description']?></span></h2>
                <p style="color:white;margin-top:-150px;float:left;">Berkontribusi Menjaga Stabilitas Ketahanan Pangan dan Kemandirian Pangan Nusantara</p>
                <a href="#" class="lab-btn" style="background-color:#C07F00;margin-top:-100px;float:left; padding:10px; color:white;">Learn Now</a>
            </div>
        </div>
    </div>
    <?php endforeach;?>

    <!-- ========== slider 2 ================= -->
    <?php foreach($sliders2 as $row): ?>
        <div class="carousel-item active" style="background-image: url(<?= base_url('uploads/' . $row['image']); ?>); background-size:cover; background-color:gray;background-blend-mode:multiply;opacity:1;">
      <!-- <img src="../img/background1.jpg" class="d-block w-100" alt="..."> -->
      <div class="carousel-caption d-none d-md-block display-4">
            <div class="" style="margin-top:-100px;">
            <h3 style="font-size:15px;color:gray;margin-top:-250px;float:left;">PT.ASTHA BOITECH NUSANTARA</h3>
                <h2 style="color:white;margin-top:-220px;float:left;"><?php echo $row['title']?> <span style="font-size:45px;"><?php echo $row['description']?></span></h2>
                <p style="color:white;margin-top:-150px;float:left;">Berkontribusi Menjaga Stabilitas Ketahanan Pangan dan Kemandirian Pangan Nusantara</p>
                <a href="#" class="lab-btn" style="background-color:#C07F00;margin-top:-100px;float:left; padding:10px; color:white;">Learn Now</a>
            </div>
        </div>
    </div>
    <?php endforeach;?>

    <!-- ================ slider 3 ================= -->
    <?php foreach($sliders3 as $row): ?>
    <div class="carousel-item"  style="background-image: url(<?= base_url('uploads/' . $row['image']); ?>); background-size:cover; background-color:gray;background-blend-mode:multiply;opacity:1;">
      <!-- <img src="../img/background2.jpeg" class="d-block w-100" alt="..."> -->
      <div class="carousel-caption d-none d-md-block display-4">
            <div class="" style="margin-top:-100px;">
                <h3 style="font-size:15px;color:gray;margin-top:-250px;float:left;">PT.ASTHA BOITECH NUSANTARA</h3>
                <h2 style="color:white;margin-top:-220px;float:left;"><?php echo $row['title']?> <span style="font-size:55px;"><?php echo $row['description']?></span></h2>
                <p style="color:white;margin-top:-150px;float:left;">Berkontribusi Menjaga Stabilitas Ketahanan Pangan dan Kemandirian Pangan Nusantara</p>
                <a href="#" class="lab-btn" style="background-color:#C07F00;margin-top:-100px;float:left; padding:10px; color:white;">Learn Now</a>
            </div>
        </div>
    </div>
    <?php endforeach;?>
  </div>
  <button   class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span  class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

    <!-- Carousel wrapper -->

    <!-- ==========Feature Section Starts Here========== -->
    <div class="feature padding-tb">
        <div class="container" >
        <!-- feature__area -->
            <div class="  wow fadeInUp" data-wow-delay=".5s">
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="feature__item">
                            <div class="feature__thumb">
                                <img src="../img/original.png" width="80" height="80" alt="rajibraj">
                            </div>
                            <div class="feature__content">
                                <h5><strong>Original</strong></h5><br><p style="font-size:15px;">Mengandung kadar serat yang bermanfaat dan rendah lemak.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="feature__item">
                            <div class="feature__thumb">
                                <img src="../img/optimization.png"  width="80" height="80" alt="rajibraj">
                            </div>
                            <div class="feature__content">
                                <h5><strong>Optimal</strong></h5><br><p style="font-size:15px;">Sangat mirip dengan struktur, tekstur, dan rasa produk berbahan dasar gandum.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="feature__item">
                            <div class="feature__thumb">
                                <img src="../img/farmer.png"  width="80" height="80" alt="rajibraj">
                            </div>
                            <div class="feature__content">
                                <h5><strong>Dari Petani Langsung</strong></h5><br><p style="font-size:15px;">Karena gelatinisasi parsial, tepung memiliki kapasitas pengikatan air yang tinggi.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="feature__item">
                            <div class="feature__thumb">
                                <img src="../img/production.png" width="80" height="80" alt="rajibraj">
                            </div>
                            <div class="feature__content">
                                <h5><strong>Produksi</strong> </h5><br><p style="font-size:15px;">Pengental yang baik karena kandungan pati yang tinggi.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Feature Section Ends Here========== -->



    <!-- ==========About Section Starts Here========== -->
    <div id="tentang" class="about about--one bg-img" style="background-image: url(../img/background.jpg);background-color:gray;background-blend-mode:multiply;opacity:1;">
        <div class="container">
            <div class="row g-5 justify-content-center align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="about__content wow fadeInLeft" data-wow-delay=".5s">
                        <h3 style="color:white">PT. <span>ASTHA BIOTECH</span> NUSANTARA</h3>
                        <p style="color:white">PT.Astha Buitech Nusantara Merupakan persahaan yang bergerak di sektor industri pengolahan dan produksi bahan makanan dan minuman.</p>
                        <p style="color:#F5F4F4">PT.Astha Biotech Nusantara meiliki kantor operasional yang terletak di kota medan dan memiliki pabrik yang terlektak kebupaten deli serdang.Perusahaan kami serta produk-produk lainnya.</p>
                        <!-- <a href="shop.html" class="lab-btn">Shop Now</a> -->
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="about__thumb text-center text-lg-end wow fadeInUp" data-wow-delay=".5s">
                        <img src="../img/logo.png" style="margin-top:-90px;opacity:0.7;padding:100px;" alt="rajibraj">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========About Section Ends Here========== -->

    <!-- benner start -->
        <div class="container" style="margin-top:50px;">
            <div class="section__wrapper">
                <div class="testimonial__slider wow fadeInUp" data-wow-delay=".5s">
                    <div class="swiper-wrapper" >
                        <div class="swiper-slide">
                        <img style="border-radius:10px;" src="../img/produk4.jpeg"  alt="rajib raj">
                        </div>
                        <div class="swiper-slide">
                        <img style="border-radius:10px;" src="../img/produk5.jpeg"  alt="rajib raj">
                        </div>
                       
                    </div>
                    <div class="testimonial__pagination"></div>
                </div>
            </div>
        </div>
   
    <!-- benner end -->

    <!-- ==========Care Section Starts Here========== -->
    <div class="care padding-tb" id="benefit">
        <div class="container">
            <div class="section__header text-center wow fadeInUp" data-wow-delay=".5s">
                <h3>Fokus Industri Kami  <span>Meliputi Beberapa Aspek </span></h3>
                <p>Sesuaikan layanan proaktif dengan mudah dengan memanfaatkan tanpa gangguan agregat yang berkelanjutan</p>
            </div>
            <div class="section__wrapper">
                <div class="row g-4">
                    <div class="col-xl-4 col-sm-6 col-12">
                        <ul>
                            <li class=" wow fadeInLeft" data-wow-delay=".5s">
                                <div style="background:none;" class="care__icon">
                                    <img src="../img/ubi.jpg" alt="rajibraj">
                                </div>
                                <div class="care__content">
                                    <h5>Olahan</h5>
                                    <p>Industri Makanan dan Minuman Olahan</p>
                                </div>
                            </li>
                            <li class=" wow fadeInLeft" data-wow-delay=".6s">
                                <div style="background:white;" class="care__icon">
                                    <img src="../img/ubi2.jpg" alt="rajibraj">
                                </div>
                                <div class="care__content">
                                    <h5>Produk Pati</h5>
                                    <p>Industri Pati dan Produk Pati Lainnya</p>
                                </div>
                            </li>
                            <li class=" wow fadeInLeft" data-wow-delay=".7s">
                                <div style="background:white;" class="care__icon">
                                    <img src="../img/potoubi1.jpg" alt="rajibraj">
                                </div>
                                <div class="care__content">
                                    <h5>Ubi Kayu</h5>
                                    <p>Industri Pati Ubi Kayu</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xl-4 d-none d-xl-block">
                        <div style="background:white;" class="care__thumb text-center wow fadeInUp" data-wow-delay=".5s">
                            <img src="../img/tepung2.jpg" style="width:70vh; height:60vh;" alt="rajibraj">
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-6 col-12">
                        <ul>
                            <li  class=" wow fadeInRight" data-wow-delay=".5s">
                                <div style="background:white;" class="care__icon">
                                    <img src="../img/potoubi2.jpg" alt="rajibraj">
                                </div>
                                <div  class="care__content">
                                    <h5>Aneka Ubi</h5>
                                    <p>Industri Penggilingan Aneka Umbi dan Sayuran(termasuk rhizoma)</p>
                                </div>
                            </li>
                            <li class=" wow fadeInRight" data-wow-delay=".6s">
                                <div style="background:white;" class="care__icon">
                                    <img src="../img/poto ubi.jpg" alt="rajibraj">
                                </div>
                                <div class="care__content">
                                    <h5>Bahan Makanan</h5>
                                    <p>Perdagangan Besar Bahan Makanan dan Minuman</p>
                                </div>
                            </li>
                            <li class=" wow fadeInRight" data-wow-delay=".7s">
                                <div style="background:white;" class="care__icon">
                                    <img src="../img/tepung.jpg" alt="rajibraj">
                                </div>
                                <div class="care__content">
                                    <h5>Perdagangan</h5>
                                    <p>Perdagangan Besar Makanan dan Minuman Lainnya</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Care Section Ends Here========== -->


    <!-- ==========How to use Section Starts Here========== -->
    <div class="htu padding-tb bg-img" style="background-image: url(../img/tepung2.jpg); background-color:gray;background-blend-mode:multiply;opacity:1;"  id="htu">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6 col-12 offset-lg-6">
                    <div class="htu__content w-100 wow fadeInUp" data-wow-delay=".5s">
                        <h3><span style="color:white">VISI & MISI</span></h3>
                        <p style="color:white;">Memperkuat daya saing dengan menerapkan teknologi yang tepat dan proses yang efektif</p>
                    </div>
                    <?php foreach ($Profile as $post): ?>
                    <div class="htu__lists">
                        <ul>
                            <li class=" wow fadeInLeft" data-wow-delay=".5s">
                                <div class="htu__icon" style="background-color:orange;">
                                    <img src="../images/htu/icon/01.png" alt="rajibraj">
                                </div>
                                <div class="htu__content">
                                    <h5 style="color:white;" >Visi Perusahaan</h5>
                                    <ul>
                                    <li><p style="color:white;"><?= $post['visi'] ?></p></li>
                                    </ul>
                                </div>
                            </li>
                            <li class=" wow fadeInLeft" data-wow-delay=".6s">
                                <div class="htu__icon" style="background-color:orange;">
                                    <img src="../images/htu/icon/02.png" alt="rajibraj">
                                </div>
                                <div class="htu__content">
                                    <h5 style="color:white;">Misi Perusahaan</h5>
                                    <ul>
                                    <li><p style="color:white;"><?= $post['misi'] ?></p></li>
                                    <!-- <li><p>Menciptakan Produk-produk yang bermanfaat bagi masyarakat</p></li>
                                    <li><p>Menghasilkan produk berkualitas tinggi untuk memenuhi Kebutuhanpelanggan</p></li> -->
                                    </ul>
                                </div>
                            </li>
                           
                        </ul>
                    </div>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========How to use Section Ends Here========== -->



    <!-- ==========Product Section Starts Here========== -->
    <div id="produk" class="product padding-tb" id="product">
        <div class="">
            <div class="section__header text-center wow fadeInUp" data-wow-delay=".5s">
                <p>Discover our products</p>
                <h3> <span>Produk yang kami pasarkan</span></h3>
            </div>
            
            <div class="section__wrapper">
                <div class="row g-4 justify-content-center">
                <?php foreach ($produks as $post): ?>
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay=".5s" >
                        <div class="" style="text-align:center;">
                            <div class="product__thumb">
                                <a href="#"><img style="width:70%" src="<?= base_url('produk/' . $post['image']) ?>" alt="rajibraj"></a>
                            </div>
                            <div class="product__content">
                                <!-- <div class="product__rating">
                                    <ul>
                                        <li><i class="icofont-ui-rating"></i></li>
                                        <li><i class="icofont-ui-rating"></i></li>
                                        <li><i class="icofont-ui-rating"></i></li>
                                        <li><i class="icofont-ui-rating"></i></li>
                                        <li><i class="icofont-ui-rating"></i></li>
                                        <li><span>( 5 reviews )</span></li>
                                    </ul>
                                </div> -->
                                <h5><a href="#"><strong style=""><?= $post['title'] ?></strong></a></h5>
                                <p style="font-size:15px;"><?= $post['keterangan'] ?></p>
                                
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Selengkapnya
                                </button>

                                <!-- Modal -->
                                <div  class="modal fade" id="exampleModal" style="margin-top:10%;" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <button style="padding:15px;" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                
                                    <div class="modal-body" style="margin:0 auto;">
                                    <div class="" style="width:200px; height:200px;">
                                       <img src="<?= base_url('produk/' . $post['image']) ?>" alt="rajibraj">
                                       <div style="float:left;margin:0 50px;">
                                     
                                       </div>
                                        <h5><strong style=""><?= $post['title'] ?></strong></h5>
                                    </div>  
                                    </div>
                                    <div class="" style="padding: 40px; margin:0 -90px;">
                                    <p>Silakan lakukan pembelian via whatshapp atau dari beberapa <br> e-commerce di bawah ini</p>
                                    <div class="header__btn">
                                    <a href="https://www.lazada.co.id/">
                                        <img src="<?php echo"../img/laza.png"?>" style="width:30px; height:30px;"  alt="">
                                    </a>
                                    <a href="https://www.tokopedia.com/">
                                        <img src="<?php echo"../img/toko.png"?>" style="width:30px; height:30px;"  alt="">
                                    </a>
                                    <a href="https://www.shopee.co.id/">
                                        <img src="<?php echo"../img/shop.png"?>" style="width:30px; height:30px;"  alt="">
                                    </a>
                                    <a href="whatsapp://send?text=Hello..👋 Saya ingin Memesan Tepung ini&phone=+6281370104212">
                                        <img src="<?php echo"../img/wa.png"?>" style="width:30px; height:30px;"  alt="">
                                    </a>
                                    </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <!-- button trigger end -->
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Product Section Ends Here========== -->




    <!-- ==========Testimonial Section Start Here========== -->
    <div id="team" class="testimonial testimonial--one padding-tb bg-img" style="background-image: url(../img/background.jpg); background-color:gray;background-blend-mode:multiply;opacity:1;" id="review">
        <div class="container">
            <div class="section__header text-center wow fadeInUp" data-wow-delay=".5s">
                <h3 style="color:gray;"><strong>KAMI SANGAT PROFESIONAL</strong></h3>
                <p style="font-size:15px;color:white;">Kami percaya bahwa presentasi yang bagus akan membangkitkan minat dan mendorong hasil bisnis jauh lebih baik daripada ucapan apa pun.</p>
            </div>
            <div class="section__wrapper">
                <div class="testimonial__slider wow fadeInUp" data-wow-delay=".5s">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class=""style="background-color:white;padding:20px; border-radius:10px;">
                                <div class="testimonial__inner">
                                    <div class="testimonial__thumb" style="width:90px;height:100px;">
                                        <img src="../img/ceo.jpg"  alt="rajib raj">
                                    </div>
                                    <div class="testimonial__content">
                                        <h5>Kristin Watson</h5>
                                        <span>CEO of Founder</span>
                                        <p>Big advsed her notto do so becau the were housand of bad comma deviou semikol bes blind the little and listen</p>
                                        <div class="testimonial__content testimonial__content--rating">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="" style="background-color:white; padding:20px; border-radius:10px;">
                                <div class="testimonial__inner">
                                    <div class="testimonial__thumb" style="width:90px;height:100px;">
                                        <img src="../img/manager.jpeg"  alt="rajib raj">
                                    </div>
                                    <div class="testimonial__content">
                                        <h5>Kristin Watson</h5>
                                        <span>CEO of Founder</span>
                                        <p>Big advsed her notto do so becau the were housand of bad comma deviou semikol bes blind the little and listen</p>
                                        <div class="testimonial__content testimonial__content--rating">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                    <div class="testimonial__pagination"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Testimonial Section Ends Here========== -->



    <!-- ==========Offer Section Start Here========== -->
    <div class="offer offer--one padding-tb">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6 col-12 offset-lg-6">
                    <div style="font-size:40px;" class="offer__content wow fadeInUp" data-wow-delay=".5s">
                        <h2 style="font-size:40px;">Beli Sekarang Dan<span> <br>Rasakan <br> Kenikmatannya</span> </h2>
                        <p >Mengembangkan potensi sumber daya manusia</p>
                        <a href="#produk"  class="lab-btn" style="background-color:orange;">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Offer Section Ends Here========== -->



    <!-- ==========Newsletters Section Start Here========== -->
    <div class="newsletter newsletter--one padding-tb bg-img" style="background-image: url(../img/ubi.jpg); background-color:gray;background-blend-mode:multiply;opacity:1;">
        <div class="container">
        <div class="section__header text-center wow fadeInUp" data-wow-delay=".5s">
                <h3 style="color:white;"><strong>SERTIFIKAT PENJAMIN <br> KEMUTUAN KAMI</strong></h3>
                <p style="font-size:15px;color:white;">Kami percaya bahwa presentasi yang bagus akan membangkitkan minat dan mendorong hasil bisnis jauh lebih baik daripada ucapan apa pun.</p>
            </div><br><br>
        <div class="container">
            <div class="section__wrapper">
                <div class="testimonial__slider wow fadeInUp" data-wow-delay=".5s">
                    <div class="swiper-wrapper" >
                        <div class="swiper-slide">
                        <img style="border-radius:10px;" src="../img/b1.png"  alt="rajib raj">
                        </div>
                        <div class="swiper-slide">
                        <img style="border-radius:10px;" src="../img/b2.png"  alt="rajib raj">
                        </div>
                        <div class="swiper-slide">
                        <img style="border-radius:10px;" src="../img/b3.png"  alt="rajib raj">
                        </div>
                        <div class="swiper-slide">
                        <img style="border-radius:10px;" src="../img/b4.png"  alt="rajib raj">
                        </div>
                        
                       
                    </div>
                    <div class="testimonial__pagination"></div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <!-- ==========Newsletters Section Ends Here========== -->

    

    
    