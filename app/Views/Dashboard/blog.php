
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">BLOG SETTING</h3>
                  <h6 class="font-weight-normal mb-0">Edit,hapus & update konten blog pada website dilakukan di halaman ini <span class="text-primary">makasihh 😎</span></h6>
                </div>
                <div class="col-lg-12 stretch-card">
                <div class="card">
                <div class="card-body">
                    <a href="<?= site_url('/admin/create') ?>">
                        <button class="btn btn-primary" style="border-radius:5px;">Tambah Postingan</button>
                    </a>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            Image
                          </th>
                          <th>
                            title
                          </th>
                          <th>
                            Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>

                      <?php foreach ($posts as $post): ?>
                        <tr class="table-info">
                          <td>
                          <?php if (!empty($post['image'])): ?>
                              <img src="<?= base_url('blog/' . $post['image']) ?>" alt="<?= $post['title'] ?>" width="100">
                              <?php endif; ?>
                          </td>
                          <td>
                            <a href="<?= site_url('/admin/blog/show/' . $post['id']) ?>">
                              <?= $post['title'] ?>
                              </a>
                          </td>
                          <td>
                          <a class="btn btn-primary" href="<?= site_url('/admin/blog/edit/' . $post['id']) ?>">Edit</a>
                              <a class="btn btn-success" href="<?= site_url('/admin/blog/delete/' . $post['id']) ?>">Hapus</a>
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
          <div class="row">
          </div>
          </div>
        </div>