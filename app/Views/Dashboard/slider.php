
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">SLIDER SETTING</h3>
                  <h6 class="font-weight-normal mb-0">Mengubah tampilan slider website dan penjelasan slider <span class="text-primary">makasihh 😎</span></h6>
                </div>
                <div class="col-lg-12 stretch-card">
              <div class="card">
                <div class="card-body">
                    <!-- <a href="/admin/tambah">
                        <button class="btn btn-primary">Tambah</button>
                    </a> -->
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

                     <?php foreach($sliders as $slider): ?>
                        <tr class="table-info">
                          <td>
                            <?= $slider['title']; ?>
                          </td>
                          <td>
                            <img src="<?= base_url('uploads/' . $slider['image']); ?>">
                          </td>
                          <td>
                          <?= $slider['description']; ?>
                          </td>
                          <td>
                          <a href="/admin/ubah/<?= $slider['id']; ?>">
                              <button class="btn btn-primary">edit</button>
                          </a>
                          <a href="/admin/hapus/<?= $slider['id']; ?>">
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