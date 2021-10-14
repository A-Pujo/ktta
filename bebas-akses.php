<?php
    include'header.php';
?>
<section class="section-info">
  <div class="container">
    <div class="card p-3">
      <div class="card-body">
        <h5 class="card-title text-center">Bebas Akses</h5>
        <h6 class="card-subtitle mb-2 text-muted text-center">Bebas Akses adalah fasilitas yang diberikan oleh tiramisu adhirayakta kepada seluruh mahasiswa yang membutuhkan akses jurnal atau karya tulis ilmiah online dalam rangka penyusunan Karya Tulis Tugas Akhir.</h6>
        <!-- form -->
        <form method="post" class="mt-5" id="form-ba">
          <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" name="email" autocomplete="off" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Number</label>
            <input type="number" class="form-control" name="npm" autocomplete="off" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" name="nama_lengkap" autocomplete="off" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Pilihan</label>
            <select class="form-select" name="pilihan_akses" required>
              <option value="scribd" selected>Scribd</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
          <div class="form-check mb-3" data-bs-toggle="modal" data-bs-target="#sk-bebas">
            <input class="form-check-input" type="checkbox" id="sk" name="sk" disabled>
            <label class="form-check-label">
              Saya menyetujui S&K yang berlaku.
            </label>
          </div>
          <button class="btn btn-primary" id="sk-button" name="submit" disabled>Ajukan</button>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- modal s&k -->
<div class="modal fade" id="sk-bebas" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Syarat dan Ketentuan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <ol class="list-group list-group-flush list-group-numbered">
          <li class="list-group-item">Dianjurkan penuh peminjaman bebas akses adalah untuk mengakses tautan karya tulis ilmiah yang sebelumnya sudah ditemukan terlebih dahulu.</li>
          <li class="list-group-item">Peminjam bebas akses hanya dapat menggunakan selama maksimal 1,5 jam untuk setiap kali peminjaman.</li>
          <li class="list-group-item">Peminjam terakhir bertanggung jawab atas segala bentuk eror pada akun yang dipinjamkan.</li>
          <li class="list-group-item">Setelah mengisi form, silahkan melakukan konfirmasi ke Riska Valentini (085737760935).</li>
          <li class="list-group-item">Tidak diperkenankan untuk menyebarkan dan mengubah data terkait akun yang dipinjamkan (email, password dan lainnya).</li>
          <li class="list-group-item">Tidak diperbolehkan mengakses menggunakan perantara.</li>
        </ol>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary" id="terima-sk" data-bs-dismiss="modal">Terima</button>
      </div>
    </div>
  </div>
</div>

<?php
    include'footer.php';
?>