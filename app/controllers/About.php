<?php

class About
{
  public function page()
  {
    echo 'About/page';
  }

  public function index($nama = 'Alief Fathurrohman', $pekerjaan = 'mahasiswa')
  {
    echo "Halo, nama saya $nama, saya adalah seorang $pekerjaan";
  }
}
