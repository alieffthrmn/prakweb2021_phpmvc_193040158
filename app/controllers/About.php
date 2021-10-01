<?php

class About extends Controller
{

  public function index($nama = 'Alief Fathurrohman', $pekerjaan = 'mahasiswa', $umur = 19)
  {
    $this->view('about/index');
  }

  public function page()
  {
    $this->view('about/page');
  }
}
