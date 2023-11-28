<div class="container-fluid">
  <h4 class="text-white">Invoice Pemesanan Tiket</h4>
  <table class="table table-bordered table-hover table-striped text-white">
    <tr class="text-center" style="background: linear-gradient(to right, #FF6B6B, #FFD966); color: black;">
      <th>ID</th>
      <th>Nama Pemesan</th>
      <th>Alamat Email</th>
      <th>Tanggal Pemesanan</th>
      <th>Batas Pembayaran</th>
      <th>Aksi</th>
    </tr>
    <?php foreach ($invoice as $inv) : ?>
      <tr>
        <td><?php echo $inv->id ?></td>
        <td><?php echo $inv->nama ?></td>
        <td><?php echo $inv->alamat ?></td>
        <td><?php echo $inv->tgl_pesan ?></td>
        <td><?php echo $inv->batas_bayar ?></td>
        <td><?php echo anchor('admin/invoice/detail/' . $inv->id, '<div class="btn btn-sm btn-primary">Detail</div>') ?></td>
      </tr>
    <?php endforeach; ?>
  </table>
</div>