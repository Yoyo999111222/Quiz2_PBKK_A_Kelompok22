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

    /* Custom CSS to remove white lines above and below the video */
    #videoModal .modal-content {
        border: none;
        box-shadow: none;
    }

    #videoModal .modal-header,
    #videoModal .modal-footer {
        border: none;
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
            <div class="btn btn-sm btn-success" data-toggle="modal" data-target="#videoModal">Watch Trailer</div>
    
            <!-- Modal -->
          <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="true">

              <div class="modal-dialog modal-xl" role="document" style="border: none; box-shadow: none">

                  <div class="modal-content" style="background-color: transparent; border: none;">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                      <div class="modal-body">
                          <!-- Embed YouTube video container -->
                          <div id="youtubeVideo"></div>
                      </div>
                  </div>
              </div>
          </div>

          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

          <script>
              var youtubePlayer; // Declare a variable to hold the YouTube player instance

              $(document).ready(function () {
                  // Load YouTube API script dynamically
                  var tag = document.createElement('script');
                  tag.src = 'https://www.youtube.com/iframe_api';
                  var firstScriptTag = document.getElementsByTagName('script')[0];
                  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

                  // Define the onYouTubeIframeAPIReady function
                  window.onYouTubeIframeAPIReady = function () {
                      // Create a new YouTube player
                      youtubePlayer = new YT.Player('youtubeVideo', {
                          width: '100%',
                          height: '580',
                          videoId: '<?php echo $brg->link; ?>',

                          playerVars: {
                              'autoplay': 0,
                              'controls': 1,
                              'showinfo': 0,
                              'rel': 0,
                              'modestbranding': 1
                          }
                      });
                  };

                  // Attach a function to the modal's hidden event
                  $('#videoModal').on('hidden.bs.modal', function () {
                      // Stop the YouTube video when the modal is hidden
                      if (youtubePlayer) {
                          youtubePlayer.stopVideo();
                      }
                  });
              });

          </script>
    
          </div>
        </div>

        <?php else : ?>
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
            </table>
            <?php echo anchor('kategori/comingsoon', '<div class="btn btn-sm btn-danger">Kembali</div>') ?>
            <div class="btn btn-sm btn-success" data-toggle="modal" data-target="#videoModal">Watch Trailer</div>

                        <!-- Modal -->
          <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="true">

              <div class="modal-dialog modal-xl" role="document" style="border: none; box-shadow: none">

                  <div class="modal-content" style="background-color: transparent; border: none;">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                      <div class="modal-body">
                          <!-- Embed YouTube video container -->
                          <div id="youtubeVideo"></div>
                      </div>
                  </div>
              </div>
          </div>

          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

          <script>
              var youtubePlayer; // Declare a variable to hold the YouTube player instance

              $(document).ready(function () {
                  // Load YouTube API script dynamically
                  var tag = document.createElement('script');
                  tag.src = 'https://www.youtube.com/iframe_api';
                  var firstScriptTag = document.getElementsByTagName('script')[0];
                  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

                  // Define the onYouTubeIframeAPIReady function
                  window.onYouTubeIframeAPIReady = function () {
                      // Create a new YouTube player
                      youtubePlayer = new YT.Player('youtubeVideo', {
                          width: '100%',
                          height: '580',
                          videoId: '<?php echo $brg->link; ?>',

                          playerVars: {
                              'autoplay': 0,
                              'controls': 1,
                              'showinfo': 0,
                              'rel': 0,
                              'modestbranding': 1
                          }
                      });
                  };

                  // Attach a function to the modal's hidden event
                  $('#videoModal').on('hidden.bs.modal', function () {
                      // Stop the YouTube video when the modal is hidden
                      if (youtubePlayer) {
                          youtubePlayer.stopVideo();
                      }
                  });
              });

          </script>
            
          </div>
        </div>
        <?php endif; ?>

      <?php endforeach; ?>
    </div>
  </div>
</div>