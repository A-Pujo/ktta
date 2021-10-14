<?php
    include 'header.php';
?>

<?php
    # set timezone
    date_default_timezone_set('Asia/Jakarta');

    # Format Y: Tahun, m: bulan, d: hari, H: jam (24), h: jam (12), i: menit, s: detik, a: ket PM/AM
    $sekarang = date('H:i:s');

    # kondisi waktu sekarang dan waktu target serta penyesuaian nilai gradient
    if($sekarang >= '00:00:00' and $sekarang <= '10:59:59'){
        # jika waktu pagi
        $acara = 'pagi';
        $gradient = 'rgba(39, 70, 133, 0.8) 0%, rgba(61, 179, 197, 0.8) 100%';
    } else if ($sekarang >= '11:00:00' and $sekarang <= '15:59:59'){
        # jika sore
        $acara = 'sore';
        $gradient = 'rgba(61,179,197,0.8) 0%, rgba(153,137,31,0.8) 60%';
    } else {
        # malam
        $acara = 'malam';
        $gradient = 'rgba(153,137,31,0.8) 0%, rgba(31,68,153,0.8) 63%';
    }

    # note #
    /* 
        <?= $variable ?> sama dengan <?php echo $variable ?>
    */
?>

<style>
    .section-bg{
        background: linear-gradient(to right, <?= $gradient ?>);
    }
</style>

<section class="section section-bg">

    <div class="container">
        <div class="row text-center mb-5 py-2" data-aos="fade">
            <div class="col-md-6 mb-3 justify-content-center align-self-center">
                <h5><?= $acara ?></h5>
                <h6><?= $sekarang ?></h6>
            </div>
            <div class="col-md-6">
                <img src="assets/img/undraw_svg_1.svg" alt="Image" class="img-fluid">
            </div>
        </div>
    </div>

        
</section>

<?php
    include 'footer.php';
?>