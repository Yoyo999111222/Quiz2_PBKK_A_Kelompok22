<style>
        .seat {
            width: 40px;
            height: 40px;
            margin: 5px;
            border: 1px solid #ccc;
            background-color: #eee;
            cursor: pointer;
        }

        .seat-row {
            flex-wrap: wrap;
        }

        .seat-space {
            width: 20px; /* Adjust the width of the space */
        }

        .screen {
            width: 90%;
            height: 10px;
            margin-bottom: 20px;
            border-radius: 3px;
        }

        .seat.selected {
            background-color: #28a745;
            color: #fff;
        }
    </style>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <div class="btn btn-sm btn-success" style="background-color: pink; color: black;">
        <?php
        $grand_total = 0;
        if ($keranjang = $this->cart->contents()) {
          foreach ($keranjang as $item) {
            $grand_total = $grand_total + $item['subtotal'];
          }
          echo "<h4>Total Belanja Anda: Rp. " . number_format($grand_total, 0, ',', '.');
        ?>
      </div><br><br>
      <h3 class="text-white">Form Pembayaran</h3>
      <form method="post" action="<?php echo base_url() ?>dashboard/proses_pesanan">
        <div class="form-group text-warning">
          <label for="Nama Lengkap">Nama Lengkap</label>
          <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="form-group text-warning">
          <label for="Alamat Email">Alamat Email</label>
          <input type="email" name="alamat" class="form-control" required>
        </div>
        <div class="form-group text-warning">
          <label for="No. Telepon">No. Telepon</label>
          <input type="text" name="no_telp" class="form-control" required>
        </div>
        <div class="form-group text-warning">
            <label for="Pilih Seat" class="form-label">Pilih Seat</label>
            <br>
            <!-- <div class="row g-3 row-cols-2 align-items-center"> -->
                <div class="col align-items-center" id="seating"></div>
              <!-- </div>   -->
              <div class="row justify-content-center mt-3">
                <div class="screen bg-warning"></div>
              </div>
              <input type="text" name="pilih_seat" class="form-control" readonly required>
        </div>
        <script>
            const rows = 7;
            const seatsPerRow = 10;
            const spaceAfterSeat = 6;

            const seatingContainer = document.getElementById('seating');
            const seatInput = document.querySelector('input[name="pilih_seat"]');

            // Create seating grid
            for (let row = 1; row <= rows; row++) {
                const rowElement = document.createElement('div');
                rowElement.classList.add('seat-row', 'd-flex', 'justify-content-center', 'mb-2');

                  for (let seat = 1; seat <= seatsPerRow; seat++) {
                    const seatElement = document.createElement('button');
                    seatElement.classList.add('seat', 'mx-2');
                    seatElement.textContent = `${String.fromCharCode(64 + row)}${seat}`;
                    
                    // Add space after seat number 5
                    if (seat === spaceAfterSeat) {
                        const spaceElement = document.createElement('div');
                        spaceElement.classList.add('seat-space');
                        rowElement.appendChild(spaceElement);
                    }

                    seatElement.addEventListener('click', toggleSeat);
                    rowElement.appendChild(seatElement);
                }

                seatingContainer.appendChild(rowElement);
            }

            function toggleSeat() {
                this.classList.toggle('selected');
                updateSeatInput();
            }

            function updateSeatInput() {
                const selectedSeats = Array.from(document.querySelectorAll('.seat.selected'))
                    .map(seat => seat.textContent);
                seatInput.value = selectedSeats.join(', ');
            }
        </script>
        <div class="form-group text-warning">
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