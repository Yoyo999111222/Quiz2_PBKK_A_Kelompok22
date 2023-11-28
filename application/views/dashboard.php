<body class="" style="background-color: linear-gradient(to bottom, #000000, #5200FF)">

<style>
  .btn-cyan {
    background-color: #00FFFF; /* Cyan color */
    color: #000000; /* Text color, adjust as needed */
    border-color: #00FFFF; /* Border color, adjust as needed */
  }

  .btn-cyan:hover {
      background-color: #008080; /* Adjust the hover color as needed */
      border-color: #008080;
      color: #FFFFFF; /* Text color on hover, adjust as needed */
  }

  .btn-primary{
    color: black;
  }

  .btn-primary:hover {
    color: white;
  }

  .badge-light-purple {
    background-color: #B19CD9; /* Light purple color */
    color: black; /* Text color, adjust as needed */
  }

  .badge-light-purple:hover {
      background-color: #8A63A4; /* Adjust the hover color as needed */
      color: black; /* Text color on hover, adjust as needed */
  }

</style>

<div class="container-fluid">
  <div class="row text-center" id="filmGrid">
    <?php foreach ($barang as $brg) : ?>
      <?php if ($brg->id_brg < 13) : ?>
      <div class="card ml-3 mb-3 film-card mr-auto ml-auto" style="width: 16rem;">
        <img src="<?php echo base_url() . '/uploads/' . $brg->gambar ?>" class="card-img-top film-image" alt="..." style="height: 400px; object-fit: cover;">
        <div class="card-body" style="background: linear-gradient(to right, #000000, #333333); color: white;">
          <h5 class="card-title mb-1"><?php echo $brg->nama_brg ?></h5>
          <small><?php echo $brg->keterangan ?></small>
          <br>
          <span class="badge badge-pill badge-light-purple mb-3">Rp<?php echo number_format($brg->harga, 0, ',', '.') ?></span>
          <?php echo anchor('dashboard/tambah_ke_keranjang/' . $brg->id_brg, '<div class="btn btn-sm btn-primary add-to-cart">Tambah ke Keranjang</div>') ?>
          <?php echo anchor('dashboard/detail/' . $brg->id_brg, '<div class="btn btn-sm btn-cyan view-details">Detail</div>') ?>
        </div>
      </div>
      <?php endif; ?>
    <?php endforeach; ?>
  </div>
</div>

<script>
  // Tambahkan script animasi di sini
  const filmCards = document.querySelectorAll('.film-card');

  filmCards.forEach(card => {
    card.addEventListener('mouseenter', function () {
      this.classList.add('animate__animated', 'animate__pulse');
    });

    card.addEventListener('mouseleave', function () {
      this.classList.remove('animate__animated', 'animate__pulse');
    });
  });

  const addToCartButtons = document.querySelectorAll('.add-to-cart');
  addToCartButtons.forEach(button => {
    button.addEventListener('click', function () {
      const filmId = this.getAttribute('data-id');
      // Tambahkan logika untuk menambahkan ke keranjang
      console.log('Menambahkan film dengan ID', filmId, 'ke keranjang.');
    });
  });

  const viewDetailsButtons = document.querySelectorAll('.view-details');
  viewDetailsButtons.forEach(button => {
    button.addEventListener('click', function () {
      const filmId = this.getAttribute('data-id');
      // Tambahkan logika untuk menampilkan detail film
      console.log('Menampilkan detail film dengan ID', filmId);
    });
  });
</script>

<style>
  /* Tambahkan gaya animasi di sini */
  .animate__animated {
    animation-duration: 0.5s;
  }

  .animate__pulse {
    animation-name: pulse;
  }

  @keyframes pulse {
    0% {
      transform: scale(1);
    }

    50% {
      transform: scale(1.05);
    }

    100% {
      transform: scale(1);
    }
  }
</style>
