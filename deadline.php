<?php
    include 'header.php';
?>

<?php
    # set timezone
    date_default_timezone_set('Asia/Jakarta');

    # Format Y: Tahun, m: bulan, d: hari, H: jam (24), h: jam (12), i: menit, s: detik, a: ket PM/AM
    $sekarang = date('H:i:s');

    # jadwal kegiatan
    $jadwal_kegiatan = [
        [
            'waktu_mulai' => date('D M d Y H:i:s O', strtotime('2021-10-25 00:00:00')),
            'waktu_selesai' => date('D M d Y H:i:s O', strtotime('2021-10-30 23:59:59')),
            'mulai' => '2021-10-25 00:00:00',
            'selesai' => '2021-10-31 23:59:59',
            'capaian' => [
                'Halaman Judul:::100',
                'Halaman Persetujuan:::100',
                'Daftar Isi:::100',
                'Latar Belakang:::30',
            ],
        ],
        [
            'waktu_mulai' => date('D M d Y H:i:s O', strtotime('2021-11-01 00:00:00')),
            'waktu_selesai' => date('D M d Y H:i:s O', strtotime('2021-11-06 23:59:59')),
            'mulai' => '2021-11-01 00:00:00',
            'selesai' => '2021-11-07 23:59:59',
            'capaian' => [
                'Latar Belakang:::55',
                'Bimbingan Ke-1:::100'
            ],
        ],
        [
            'waktu_mulai' => date('D M d Y H:i:s O', strtotime('2021-11-08 00:00:00')),
            'waktu_selesai' => date('D M d Y H:i:s O', strtotime('2021-11-13 23:59:59')),
            'mulai' => '2021-11-08 00:00:00',
            'selesai' => '2021-11-28 23:59:59',
            'capaian' => [
                'Latar Belakang:::85',
                'Rumusan Masalah:::60'
            ],
        ],
        [
            'waktu_mulai' => date('D M d Y H:i:s O', strtotime('2021-11-29 00:00:00')),
            'waktu_selesai' => date('D M d Y H:i:s O', strtotime('2021-12-04 23:59:59')),
            'mulai' => '2021-11-29 00:00:00',
            'selesai' => '2021-12-05 23:59:59',
            'capaian' => [
                'Latar Belakang:::100',
                'Rumusan Masalah:::100',
                'Tujuan:::100',
                'Bimbingan Ke-2:::100',
            ],
        ],
        [
            'waktu_mulai' => date('D M d Y H:i:s O', strtotime('2021-12-06 00:00:00')),
            'waktu_selesai' => date('D M d Y H:i:s O', strtotime('2021-12-11 23:59:59')),
            'mulai' => '2021-12-06 00:00:00',
            'selesai' => '2021-12-12 23:59:59',
            'capaian' => [
                'Ruang Lingkup Penulisan:::80',
                'Manfaat Penulisan:::80'
            ],
        ],
        [
            'waktu_mulai' => date('D M d Y H:i:s O', strtotime('2021-12-13 00:00:00')),
            'waktu_selesai' => date('D M d Y H:i:s O', strtotime('2021-12-18 23:59:59')),
            'mulai' => '2021-12-13 00:00:00',
            'selesai' => '2021-12-19 23:59:59',
            'capaian' => [
                'Metode Pengumpulan Data:::80',
                'Sistematika Penulisan KTTA:::80'
            ],
        ],
        [
            'waktu_mulai' => date('D M d Y H:i:s O', strtotime('2021-12-20 00:00:00')),
            'waktu_selesai' => date('D M d Y H:i:s O', strtotime('2021-12-25 23:59:59')),
            'mulai' => '2021-12-20 00:00:00',
            'selesai' => '2021-12-26 23:59:59',
            'capaian' => [
                'Daftar Pustaka:::80',
                'jadwal Pelaksanaan Kegiatan:::80',
                'Kontingensi:::80',
                'Lampiran:::80'
            ],
        ],
        [
            'waktu_mulai' => date('D M d Y H:i:s O', strtotime('2021-12-27 00:00:00')),
            'waktu_selesai' => date('D M d Y H:i:s O', strtotime('2022-01-01 23:59:59')),
            'mulai' => '2021-12-27 00:00:00',
            'selesai' => '2022-01-31 23:59:59',
            'capaian' => [
                'Halaman Judul:::100',
                'Halaman Persetujuan:::100',
                'Daftar Isi:::100',
                'Bagian Utama Proposal:::100',
                'Daftar Pustaka:::100',
                'jadwal Pelaksanaan Kegiatan:::100',
                'Kontingensi:::100',
                'Lampiran:::100'
            ],
        ],
    ];

    # kondisi waktu sekarang dan ambil kegiatan
    # kegiatan dummy
    $kegiatan = [
        'waktu_mulai' => date('D M d Y H:i:s O', strtotime('2001-10-24 00:00:00')),
        'waktu_selesai' => date('D M d Y H:i:s O', strtotime('2001-10-25 17:57:49')),
        'capaian' => [
            'Tidak ada:::100',
        ],
    ];
    
    # ambil kegiatan asli
    foreach($jadwal_kegiatan as $index => $k){
        if(date('Y-m-d H:i:s') >= $k['mulai'] and date('Y-m-d H:i:s') <= $k['selesai']){
            $k = $jadwal_kegiatan[$index];
            # keluar dari loop
            break;
        }
    }

    # note #
    /* 
        <?= $variable ?> sama dengan <?php echo $variable ?>
    */
?>

<style>
    .section-bg{
        background: linear-gradient(to right, rgba(231,62,33,1) 0%, rgba(231,186,33,1) 0%, rgba(85,194,72,1) 100%);
    }

    .bg-glass{
        background: rgba( 255, 255, 255, 0.3 );
        backdrop-filter: blur( 5px );
        -webkit-backdrop-filter: blur( 5px );
        border-radius: 16px;
        border: 1px solid rgba( 255, 255, 255, 0.18 );
    }
</style>

<section class="section" id="section-bg">

    <div class="container">
        <div class="row text-center mb-5 py-2" data-aos="fade">
            <div class="col-md-6 mb-3 justify-content-center align-self-center">
                <div class="rounded bg-glass text-white shadow p-5 text-center mb-5">
                    <p class="mb-0 font-weight-bold text-uppercase">Halo!</p>
                    <div id="clock-c" class="countdown py-4">
                        <span class="h1 font-weight-bold">14</span> Hari
                        <span class="h1 font-weight-bold">23</span> Jam
                        <span class="h1 font-weight-bold">59</span> Mnt
                        <span class="h1 font-weight-bold">21</span> Dtk
                    </div>
                    <hr>
                    <div class="container text-start mt-2 px-3">
                        <h5 class="text-light text-center">Capaian Minimum</h5>
                    <?php foreach($kegiatan['capaian'] as $capaian): ?>
                        <?php $c = explode(':::', $capaian) ?>
                        <small class="text-start"><?= $c[0] ?></small>
                        <div class="progress">
                            <div class="progress-bar bg-info" role="progressbar" style="width: <?= $c[1] ?>%;" aria-valuenow="<?= $c[1] ?>" aria-valuemin="0" aria-valuemax="100"><?= $c[1] ?>%</div>
                        </div>
                    <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <img src="assets/img/undraw_svg_1.svg" alt="Image" class="img-fluid">
            </div>
        </div>
    </div>

        
</section>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.2.0/jquery.countdown.min.js"></script>
<script>
    // gradient dl
    $('#section-bg').css('background', 'linear-gradient(to right, rgba(231,62,33,1) 0%, rgba(231,186,33,1) 0%, rgba(85,194,72,1) 100%)');

    // konversi dari tanggal ke nilai
    var val_mulai = new Date('<?= $kegiatan['waktu_mulai'] ?>').valueOf()
    var val_selesai = new Date('<?= $kegiatan['waktu_selesai'] ?>').valueOf()
    var selisih_dasar = val_selesai - val_mulai;

    var val_sekarang;
    var selisih_sekarang = 0;
    var persentase = 0;

    // fungsi berulang untuk timer
    $('#clock-c').countdown(new Date(val_selesai), function(event) {
        // nilai waktu sekarang dan selisihnya
        val_sekarang = event.timeStamp;
        selisih_sekarang = ((val_selesai - val_sekarang < 0) ? 0 : val_selesai - val_sekarang);
        persentase = (1 - selisih_sekarang/selisih_dasar) * 100;

        // set gradient
        if(persentase < 34){
            $('#section-bg').css('background', 'linear-gradient(to right, rgba(231,186,33,1) '+ persentase*3 +'%, rgba(85,194,72,1) ' + (100 + persentase*3) + '%)');
        } else if(persentase < 67) {
            $('#section-bg').css('background', 'linear-gradient(to right, rgba(231,62,33,1) 0%, rgba(231,186,33,1) '+ (persentase-34)*3 +'%)');
        } else {
            $('#section-bg').css('background', 'linear-gradient(to right, rgba(231,62,33,1) '+ (persentase-67)*3 +'%, rgba(231,186,33,1) '+ (100 + (persentase-67)*3) +'%)');

        }

        // set text waktu
      var $this = $(this).html(event.strftime(''
        + '<span class="h1 font-weight-bold">%D</span> Hari'
        + '<span class="h1 font-weight-bold">%H</span> Jam'
        + '<span class="h1 font-weight-bold">%M</span> Mnt'
        + '<span class="h1 font-weight-bold">%S</span> Dtk'));

        // debug persentase gradien
        console.log(persentase)
    });

</script>
<?php
    include 'footer.php';
?>