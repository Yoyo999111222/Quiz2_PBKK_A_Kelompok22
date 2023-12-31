<div class="container-fluid">
  <h4 class="text-white">Detail Pesanan <div class="btn btn-sm btn-success" style="color: black;">No. Invoice: <?php echo $invoice->id ?></div>
  </h4>
  <table class="table table-bordered table-hover table-striped text-white">
    <tr class="text-center" style="background: linear-gradient(to right, #FF6B6B, #FFD966); color: black;">
      <th>ID</th>
      <th>Nama Film</th>
      <th>Jumlah Tiket</th>
      <th>Harga Satuan</th>
      <th>Sub-Total</th>
    </tr>
    <?php
    $total = 0;
    foreach ($pesanan as $psn) :
      $subtotal = $psn->jumlah * $psn->harga;
      $total += $subtotal;
    ?>
      <tr class="text-center">
        <td><?php echo $psn->id_brg ?></td>
        <td><?php echo $psn->nama_brg ?></td>
        <td><?php echo $psn->jumlah ?></td>
        <td align="right">Rp. <?php echo number_format($psn->harga, 0, ',', '.') ?></td>
        <td align="right">Rp. <?php echo number_format($subtotal, 0, ',', '.') ?></td>
      </tr>
    <?php endforeach; ?>
    <tr>
      <td colspan="4" align="right">Grand Total</td>
      <td align="right">Rp. <?php echo number_format($total, 0, ',', '.') ?></td>
    </tr>
  </table>

  <a href="<?php echo base_url('admin/invoice/index') ?>">
    <div class="btn btn-sm btn-primary">Kembali</div>
  </a>
</div>