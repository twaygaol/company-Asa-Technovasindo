<!-- ==========Banner Section Starts Here========== -->
    <div class="banner banner--seven " id="home" style="height:100vh;background-color:gray; background-image: url('../img/industribg.jpg'); background-blend-mode:multiply; background-size:cover">
        <div class="container">
            <div class="banner__area">
                <div class="row align-items-center g-5 g-lg-4">
                    <div class="col-lg-7 col-12 wow fadeInUp" data-wow-delay=".5s">
                        <div class="banner__content" style="color:white;margin-top:-1px;">
                            <h3 style="font-size:15px;">PT.ASTHA BOITECH NUSANTARA</h3>
                            <h2 style="color:white;">Aktifitas <span style="font-size:55px;"> & Kinerja Perusahaan</span></h2>
                            <p>Berkontribusi Menjaga Stabilitas Ketahanan Pangan dan Kemandirian Pangan Nusantara</p>
                            <!-- <a href="" class="lab-btn" style="background-color:#C07F00; padding:10px; color:whihe;">Lear Now</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Banner Section Ends Here========== -->


    <!-- ============ card blog section =========== -->
    
   
    <div class="swiper-wrapper" style="margin-top:10px;">
        
    <?php 
    $counter = 0; // Inisialisasi variabel penghitung

    foreach ($posts as $post):
        $counter++; // Tambahkan nilai penghitung

        // Jika nilai penghitung habis dibagi 5 (setiap 5 blog), tutup baris sebelumnya dan mulai baris baru
        if ($counter % 4 == 1 && $counter > 1):
            echo '</div><div class="row">';
        endif;
    ?>
        <div class="col-md-3">
            <div class="card" style="width: 18rem; height:52vh; width: 350px; margin: 10px;">
                <img style="height: 25vh; width: %;" class="card-img-top" src="<?= base_url('blog/' . $post['image']) ?>" alt="Card image cap">
                <div class="card-body">
                    <p style="font-size: 10px;" class="card-text">Penulis: <strong><?= $post['author'] ?></strong></p>
                    <h5 class="card-title"><strong style="font-size: 20px;"><?= $post['title'] ?></strong></h5>
                    <a href="#" class="">Lihat selengkapnya</a>
                </div>
            </div>
        </div>
    <?php
    endforeach;
    if ($counter % 4 != 1):
        echo '</div>';
    endif;
    ?>
</div>



    <!-- ============ END card blog section =========== -->