<style>
  .card {
    background: transparent; /* Set latar belakang card menjadi transparan */
    border: 1px solid white; /* Atur border card menjadi putih */
  }

  .card-header {
    background-color: #001f3f; /* Warna header card */
    color: white; /* Warna teks header card */
  }

  .card-body {
    background: linear-gradient(to right, #001f3f, #8e44ad);
  }
</style>

<div class="container-fluid">
  <div class="card">
    <h5 class="card-header">
      Detail Film
    </h5>
    <div class="card-body">
      <?php foreach ($barang as $brg) : ?>
        <?php if ($brg->id_brg < 13) : ?>
        <div class="row">
          <div class="col-md-4">
            <img src="<?php echo base_url() . '/uploads/' . $brg->gambar ?>" class="card-img-top">
          </div>
          <div class="col-md-8">
            <table class="table text-white">
              <tr>
                <td>Title</td>
                <td><strong><?php echo $brg->nama_brg ?></strong></td>
              </tr>
              <tr>
                <td>Description</td>
                <td><strong><?php echo $brg->keterangan ?></strong></td>
              </tr>
              <tr>
                <td>Synopsis</td>
                <td><strong><?php echo $brg->kategori ?></strong></td>
              </tr>
              <tr>
                <td>Available Seats</td>
                <td><strong><?php echo $brg->stok ?></strong></td>
              </tr>
              <tr>
                <td>Price</td>
                <td>
                  <strong>
                    <div class="btn btn-sm btn-success" style="background-color: #ffa500; color: black;">Rp. <?php echo number_format($brg->harga, 0, ',', '.') ?></div>
                  </strong>
                </td>
              </tr>
            </table>
            <?php echo anchor('dashboard/tambah_ke_keranjang/' . $brg->id_brg, '<div class="btn btn-sm btn-primary">Tambah ke Keranjang</div>') ?>
            <?php echo anchor('welcome/index/', '<div class="btn btn-sm btn-danger">Kembali</div>') ?>
          </div>
        </div>

        <?php else : ?>
          <div class="row">
          <div class="col-md-4">
            <img src="<?php echo base_url() . '/uploads/' . $brg->gambar ?>" class="card-img-top">
          </div>
          <div class="col-md-8">
            <table class="table">
              <tr>
                <td>Title</td>
                <td><strong><?php echo $brg->nama_brg ?></strong></td>
              </tr>
              <tr>
                <td>Description</td>
                <td><strong><?php echo $brg->keterangan ?></strong></td>
              </tr>
              <tr>
                <td>Synopsis</td>
                <td><strong><?php echo $brg->kategori ?></strong></td>
              </tr>
            </table>
            <?php echo anchor('kategori/comingsoon', '<div class="btn btn-sm btn-danger">Kembali</div>') ?>
          </div>
        </div>
        <?php endif; ?>

      <?php endforeach; ?>
    </div>
  </div>
</div>