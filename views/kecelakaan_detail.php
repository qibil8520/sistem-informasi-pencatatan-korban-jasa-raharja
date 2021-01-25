<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail kecelakaan</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM kecelakaan WHERE id='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error " );
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    $id = $data['id'];
                    $jumlah_korban =  $data['korban'];
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">Nomor Asuransi</td> <td><?= $data['no_asuransi'] ?></td>
                        </tr>
                        <tr>
                            <td>tempat</td> <td><?= $data['tempat'] ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal kecelakaan</td> <td><?= $data['tgl_kecelakaan'] ?></td>
                        </tr>
                        <tr>
                            <td>korban</td> <td><?= $data['korban'] ?></td>
                        </tr>

                    </table>
				
                </div> <!--end panel-body-->

                <div class="panel-body">
                    <table id="dtskripsi" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No.</th><th>Nama</th><th>Alamat</th><th>Tempat Tanggal lahir</th><th>Cacat</th><th>Meninggal</th><th>Id kecelakaan</th><th>ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM korban WHERE id_kecelakaan='" . $_GET ['id'] . "'";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                    <td><?= $nomor ?></td>
									<td><?= $data['nama'] ?></td>
                                    <td><?= $data['alamat'] ?></td>
									<td><?= $data['tmpt_lhr']?> <p></p> <?= $data['tgl_lhr'] ?>   </td>
                                    <td><?= $data['cacat'] ?></td>
                                    <td><?= $data['meninggal'] ?></td>
                                    <td><?= $data['id_kecelakaan'] ?></td>
                                    <td>
                                        <a href="?page=korban&actions=detail&id=<?= $data['id_korban'] ?>" class="btn btn-info btn-xs">
                                            <span class="fa fa-eye"></span>
                                        </a>
                                        <a href="?page=korban&actions=edit&id=<?= $data['id_korban'] ?>" class="btn btn-warning btn-xs">
                                            <span class="fa fa-edit"></span>
                                        </a>
                                        <a href="?page=kecelakaankorban&actions=delete&id=<?= $data['id_korban']?>&idk=<?=$_GET['id'] ?>" class="btn btn-danger btn-xs">
                                            <span class="fa fa-remove"></span>
                                        </a>
                                    </td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="7">
                                    <?php if($nomor<$jumlah_korban){ 
                                        echo "<a href='?page=korban&actions=tambah&id=".$_GET['id']."' class='btn btn-info btn-sm'>
                                        Tambah data korban   </a>";} ?>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>

                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=kecelakaan&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data kecelakaan </a>
                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

