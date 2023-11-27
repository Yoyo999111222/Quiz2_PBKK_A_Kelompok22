<div class="container-fluid">
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <div class="btn btn-sm btn-success">
        <?php
        $grand_total = 0;
        if ($keranjang = $this->cart->contents()) {
          foreach ($keranjang as $item) {
            $grand_total = $grand_total + $item['subtotal'];
          }
          echo "<h4>Total Belanja Anda: Rp. " . number_format($grand_total, 0, ',', '.');
        ?>
      </div><br><br>
      <h3>Form Pembayaran</h3>
      <form method="post" action="<?php echo base_url() ?>dashboard/proses_pesanan">
        <div class="form-group">
          <label for="Nama Lengkap">Nama Lengkap</label>
          <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="Alamat Email">Alamat Email</label>
          <input type="email" name="alamat" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="No. Telepon">No. Telepon</label>
          <input type="text" name="no_telp" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="Pilih Seat" class="form-label">Pilih Seat</label>
          <br>
          <div class="row g-3 align-items-center">
            <div class="col">
              <img src="<?php echo base_url() ?>assets/img/seat.svg" class="img-responsive">
            </div>
            <div class="col">
              <input type="text" name="pilih_seat" class="form-control" required placeholder="Masukkan seat*">
              <small>*) pisahkan masing-masing seat dengan koma (,) jika menonton lebih dari 1 film</small>
            </div>
          </div>  
        </div>
        <div class="form-group">
          <label for="Pilih Bank">Pilih Metode Pembayaran</label>
          <select name="bank" id="" class="form-control" required>
            <option value="">Pilih Metode Pembayaran</option>
            <option value="">Transfer Bank</option>
            <option value="">GoPay</option>
            <option value="">OVO</option>
            <option value="">DANA</option>
            <option value="">ShopeePay</option>
          </select>
        </div>
        <button type="submit" class="btn btn-sm btn-primary mb-3">Bayar</button>
      </form>
    <?php
        } else {
          echo "<h4>Keranjang Belanja Anda masih kosong";
        }
    ?>
    </div>
    <div class="col-md-2"></div>
  </div>
</div>