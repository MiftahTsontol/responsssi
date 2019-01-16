<?php
$koneksi = mysqli_connect("localhost","root","") or die(mysqli_error($koneksi));
  $dbkonek = mysqli_select_db($koneksi,"responsiPPTCC") or die(mysqli_error($koneksi));
  

  //show saldo
  $qsaldo=mysqli_query($koneksi,"SELECT * FROM tabungan")or die(mysqli_error($koneksi));
  $saldo=mysqli_fetch_array($qsaldo);

  $qsaldopakai=mysqli_query($koneksi,"SELECT * FROM uang_ph_dipakai") or die(mysqli_error($koneksi));
  $saldopakai=mysqli_fetch_array($qsaldopakai);

  //show saldo ph
  $qsaldoph=mysqli_query($koneksi,"SELECT * FROM tabungan_PH");
  if ($qsaldoph) {
    $totSaldoPh=0;
    while ($saldoph=mysqli_fetch_array($qsaldoph)) {
      $totSaldoPh=$totSaldoPh+$saldoph[1];
    }
  }else {
    echo "string";
  }
 ?>
