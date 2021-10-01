<?php

class About
{
  public function page()
  {
    echo 'About/page';
  }

  public function index($nama = 'Alief Fathurrohman', $pekerjaan = 'mahasiswa', $umur = 19)
  {
    echo "Halo, nama saya $nama, saya adalah seorang $pekerjaan. Saya berumur $umur tahun.";
  }
}
