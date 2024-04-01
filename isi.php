<div style="height:550px">
        <!-- Halaman Depan -->
   <?php
    //index.php?hal=produk
    $hal=$_GET['hal'];
    if(!empty($hal)){
        include_once $menu_bawah[$hal];
    }
    else {
        include 'home.php';
    }   
    ?>
</div>