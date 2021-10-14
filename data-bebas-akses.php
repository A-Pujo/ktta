<?php
  include'header.php';
  // Create connection
  $conn = new mysqli('localhost', 'root', '', 'ktta_adhi');
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT * FROM bebas_akses";
  $result = $conn->query($sql);
  $conn->close();
?>
<section class="section-info">

  <div class="container">
  <div class="card rounded p-3">
      <div class="card-body">
        <h5 class="card-title text-center">Bebas Akses</h5>
        <?php if($result->num_rows > 0) : ?>
          <table class="table mt-3" id="tabel-data">
            <thead>
              <th>Id</th>
              <th>Email</th>
              <th>NPM</th>
              <th>Nama</th>
              <th>Kelas</th>
              <th>Pilihan</th>
              <th>Waktu Pengajuan</th>
            </thead>
            <tbody>
              <?php while($baris = $result->fetch_assoc()) : ?>
              <tr>
                <td><?= $baris['id'] ?></td>
                <td><?= $baris['email'] ?></td>
                <td><?= $baris['npm'] ?></td>
                <td><?= $baris['nama_lengkap'] ?></td>
                <td><?= $baris['kelas'] ?></td>
                <td><?= $baris['pilihan_akses'] ?></td>
                <td><?= $baris['waktu_pengajuan'] ?></td>
              </tr>
              <?php endwhile; ?>
            </tbody>
          </table>
        <?php else: ?>
          <h4>Tidak ada data nih.</h4>
        <?php endif; ?>
      </div>
    </div>
  </div>

    
</section>
<?php
    include'footer.php';
?>