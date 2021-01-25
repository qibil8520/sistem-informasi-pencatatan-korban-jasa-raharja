

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Tambah Data Pinjaman Arsip</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="peminjam" class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" class="form-control" id="inputEmail3" placeholder="nama">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="peminjam" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" class="form-control" id="inputEmail3" placeholder="alamat">
                            </div>
                        </div>

						<div class="form-group">
                            <label for="tglPinjam" class="col-sm-3 control-label">Tanggal lahir</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_lhr" class="form-control" id="inputEmail3" placeholder="Tanggal lahir">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="peminjam" class="col-sm-3 control-label">Tempat lahir</label>
                            <div class="col-sm-9">
                                <input type="text" name="tmpt_lhr" class="form-control" id="inputEmail3" placeholder="tempat lahir">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="peminjam" class="col-sm-3 control-label">Cacat</label>
                            <div class="col-sm-9">
                                <input type="text" name="cacat" class="form-control" id="inputEmail3" placeholder="Cacat">
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="peminjam" class="col-sm-3 control-label">Meninggal</label>
                            <div class="col-sm-9">
                                <input type="text" name="meninggal" class="form-control" id="inputEmail3" placeholder="meninggal">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="no_perkara" class="col-sm-3 control-label">Nomor Kecelakaan</label>
                            <div class="col-sm-9">
								<input type="text" name="id_kecelakaan" value="<?=$_GET['id']?>" class="form-control" id="inputEmail3" placeholder="Nomor Asuransi" readonly="true">
                            </div>
                        </div>



						
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan data korban</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=asuransi&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Arsip
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
    $nama=$_POST['nama'];
	$alamat=$_POST['alamat'];
    $tgl_lhr=$_POST['tgl_lhr'];
    $tmpt_lhr =$_POST['tmpt_lhr'];
    $cacat = $_POST['cacat']; 
    $meninggal =$_POST['meninggal'];
    $id_kecelakaan=$_POST['id_kecelakaan'];
    //buat sql
    $sql="INSERT INTO korban VALUES ('', '$nama','$alamat','$tgl_lhr','$tmpt_lhr','$cacat' ,'$meninggal','$id_kecelakaan')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Peminjaman Error");
	
    if ($query){
        echo "<script>window.location.assign('?page=kecelakaan&actions=detail&id=".$id_kecelakaan."');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
