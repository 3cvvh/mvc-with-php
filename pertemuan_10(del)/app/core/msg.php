<?php 
class msg{
    public static function setflash($pesan,$aksi,$tipes){
        $_SESSION["flash"] = [
            "pesan" => $pesan,
            "aksi" => $aksi,
            "tipes" => $tipes
        ];
    }
    public static function flash(){
        if(isset($_SESSION["flash"])){
            echo '<div class="alert alert-' . $_SESSION['flash']['tipes'] .' alert-dismissible fade show" role="alert">
            data mahasiswa
  <strong>'. $_SESSION['flash']['pesan']. '</strong> ' .$_SESSION['flash']['aksi'] . '
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
unset($_SESSION['flash']);
        }
    }
}