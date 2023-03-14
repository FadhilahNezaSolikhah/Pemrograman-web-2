<?php 
require_once "layouts/header.php";
require_once "layouts/menu.php";
?>
<?php
$mhs1 = ['id'=>1, 'NIM'=>'0110222060', 'UTS'=>90, 'UAS'=>95, 'TUGAS'=>90, 'nilai_akhir'=>0];
$mhs2 = ['id'=>2, 'NIM'=>'0110222061', 'UTS'=>76, 'UAS'=>90, 'TUGAS'=>95, 'nilai_akhir'=>0];
$mhs3 = ['id'=>3, 'NIM'=>'0110222062', 'UTS'=>80, 'UAS'=>85, 'TUGAS'=>94, 'nilai_akhir'=>0];

$ar_nilai = [$mhs1, $mhs2, $mhs3];
?>


<div class="container">
        <h2>Data Mahasiswa STT NF</h2>
        <table class="table table-striped-columns">
            <tr>
                <th>Nomor</th>
                <th>NIM</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>TUGAS</th>
                <th>NILAI AKHIR</th>
            </tr>
            <?php
                foreach($ar_nilai as $nilai){
                    $nilai_akhir = ($nilai['UTS'] + $nilai['UAS'] + $nilai['TUGAS']) / 3;
                ?>
            <tr>
                <td><?= $nilai['id']; ?></td>
                <td><?= $nilai['NIM']; ?></td>
                <td><?= $nilai['UTS']; ?></td>
                <td><?= $nilai['UAS']; ?></td>
                <td><?= $nilai['TUGAS']; ?></td>
                <td><?= number_format($nilai_akhir, 1, '.', ',');?></td>
            </tr>
            <?php
                }
            ?>
        </table>
    </div>
<?php require_once "layouts/footer.php"; ?>