
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">PRODUK SETTING</h3>
                  <h6 class="font-weight-normal mb-0">Menambah, mengedit dan menghapus tampilan dari produk dan isi dari deckripsi dari tampilan produk <span class="text-primary">makasihh 😎</span></h6>
                </div>
                <div class="col-lg-12 stretch-card">
              <div class="card">
                <div class="card-body">
                    <a href="/admin/produk/tambah">
                        <button class="btn btn-primary">Tambah</button>
                    </a>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            Title
                          </th>
                          <th>
                            Images
                          </th>
                          <th>
                            Description
                          </th>
                          <th>
                            Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php foreach($produks as $slider): ?>
                        <tr class="table-info">
                          <td>
                            <?= $slider['title']; ?>
                          </td>
                          <td>
                            <img src="<?= base_url('produk/' . $slider['image']); ?>">
                          </td>
                          <td>
                          <?= $slider['keterangan']; ?>
                          </td>
                          <td>
                          <a href="#">
                              <button class="btn btn-primary">edit</button>
                          </a>
                          <a href="#">
                              <button class="btn btn-success">hapus</button>
                          </a>
                          </td>
                        </tr>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
              </div>
            </div>
          </div>
         
          </div>
          <div class="row">
          </div>
          </div>
        </div>