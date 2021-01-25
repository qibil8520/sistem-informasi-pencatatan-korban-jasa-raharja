<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Asuransi</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM korban WHERE id_korban ='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">Nama</td> <td><?= $data['nama'] ?></td>
                        </tr>
                        <tr>
                            <td>alamat</td> <td><?= $data['alamat'] ?></td>
                        </tr>
                        <tr>
                            <td>Tempat/tgl lahir</td> <td><?= $data['tmpt_lhr'] ?><?= $data['tgl_lhr'] ?></td>
                        </tr>
						<tr>
                            <td>Cacar</td> <td><?= $data['cacat'] ?></td>
                        </tr>
                        <tr>
                            <td>Meninggal</td> <td><?= $data['meninggal'] ?></td>
                        </tr>
                        <tr>
                            <td>id kecelakaan</td> <td><?= $data['id_kecelakaan'] ?></td>
                        </tr>
                       <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM kecelakaan WHERE id ='" . $data['id_kecelakaan'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   
                        <tr>
                            <td>Nomor Asuransi</td> <td><?= $data['no_asuransi'] ?></td>
                        </tr>
                        <tr>
                            <td>tempat</td> <td><?= $data['tempat'] ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal kecelakaan</td> <td><?= $data['tgl_kecelakaan'] ?></td>
                        </tr>
                       

                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=kecelakaan&actions=detail&id=<?= $data['id'] ?>" class="btn btn-success btn-sm">
                        Kembali ke Data kecelakaan detail </a>
                    <a href="?page=asuransi&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data korban </a>


                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

