<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM asuransi WHERE id ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Asuransi</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        
                        <div class="form-group">
                            <label for="no_asuransi" class="col-sm-3 control-label">Nomor Asuransi</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_asuransi" value="<?=$data['no_asuransi']?>"class="form-control" id="inputEmail3" placeholder="Nomor Arusansi">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" value="<?=$data['nama']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Nama" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" value="<?=$data['alamat']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Alamat" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="no_kendaraan" class="col-sm-3 control-label">Nomor kendaraan</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_kendaraan" value="<?=$data['no_kendaraan']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Nomor kendaraan" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="no_ktp" class="col-sm-3 control-label">Nomor ktp</label>
                            <div class="col-sm-9">
                                <input type="text" value="<?=$data['no_ktp']?>" name="no_ktp"class="form-control" id="inputEmail3" placeholder="Inputkan Nomor KTP" required>
                            </div>
                        </div>
						
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Asuransi</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=asuransi&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Asuransi
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
    $no_asuransi=$_POST['no_asuransi'];
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $no_kendaraan=$_POST['no_kendaraan'];
    $no_ktp=$_POST['no_ktp'];
    //buat sql
    $sql="UPDATE asuransi SET no_asuransi='$no_asuransi',nama='$nama',alamat='$alamat',no_kendaraan='$no_kendaraan', no_ktp='$no_ktp'
	 WHERE id ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=asuransi&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



