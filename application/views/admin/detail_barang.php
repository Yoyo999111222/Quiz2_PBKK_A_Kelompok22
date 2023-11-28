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
        <div class="row">
          <div class="col-md-4">
            <img src="<?php echo base_url() . '/uploads/' . $brg->gambar ?>" class="card-img-top">
          </div>
          <div class="col-md-8">
            <table class="table table-strip table-bordered table-hover text-white">
              <tr class="text-center bg-gradient-warning text-dark">
                <td class="" style="background: linear-gradient(to right, #FF6B6B, #FFD966); color: black;">Judul Film</td>
                <td><strong><?php echo $brg->nama_brg ?></strong></td>
              </tr>
              <tr>
                <td>Keterangan</td>
                <td><strong><?php echo $brg->keterangan ?></strong></td>
              </tr>
              <tr>
                <td>Sinopsis</td>
                <td><strong><?php echo $brg->kategori ?></strong></td>
              </tr>
              <tr>
                <td>Jumlah Seat Tersedia</td>
                <td><strong><?php echo $brg->stok ?></strong></td>
              </tr>
              <tr>
                <td>Harga</td>
                <td>
                  <strong>
                    <div class="btn btn-sm btn-success" style="color: black;">Rp. <?php echo number_format($brg->harga, 0, ',', '.') ?></div>
                  </strong>
                </td>
              </tr>
            </table>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>