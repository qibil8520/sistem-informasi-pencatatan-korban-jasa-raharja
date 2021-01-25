<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM kecelakaan WHERE id='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Update Data Peminjaman Arsip</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="nope" class="col-sm-3 control-label">Nomor asuransi</label>
                             <div class="col-sm-9">
								<input type="text" name="no_asuransi" value="<?=$data['no_asuransi']?>"class="form-control" id="inputEmail3" placeholder="Nomor Perkara" readonly="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="peminjam" class="col-sm-3 control-label">Tempat</label>
                            <div class="col-sm-9">
                                <input type="text" name="tempat" value="<?=$data['tempat']?>"class="form-control" id="inputEmail3" placeholder="Nama Peminjam">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tglPinjam" class="col-sm-3 control-label">Tanggal kecelakaan</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_kecelakaan" class="form-control" id="inputEmail3" value="<?=$data['tgl_kecelakaan']?>" placeholder="Tanggal Pinjam">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="peminjam" class="col-sm-3 control-label">korban</label>
                            <div class="col-sm-9">
                                <input type="text" name="korban" value="<?=$data['korban']?>"class="form-control" id="inputEmail3" placeholder="Nama Peminjam">
                            </div>
                        </div>
						
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Pinjaman</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=kecelakaan&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Pinjaman
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
    $tempat=$_POST['tempat'];
    $tgl_kecelakaan=$_POST['tgl_kecelakaan'];
    $korban=$_POST['korban'];
    //buat sql
    $sql="UPDATE kecelakaan SET no_asuransi ='$no_asuransi', tempat='$tempat', tgl_kecelakaan='$tgl_kecelakaan',
	korban='$korban' WHERE id='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=kecelakaan&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



