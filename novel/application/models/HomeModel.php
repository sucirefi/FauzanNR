<?php
  class HomeModel extends CI_Model{
    function getData(){
      $data = array(
        "nama" => "Fauzan",
        "kelas" => "XI RPL 1",
        "website" => "youtube.com"
      );
      return $data;
    }
  }
 ?>
