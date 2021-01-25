<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top">

    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="?page=utama">Sistem Informasi Pencatatan Korban Kecelakaan jasa raharja</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
               

                <?php if(isset($_SESSION['level']) && $_SESSION['level']==1) { ?>
                    <li ><a href="index_admin.php">Home</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Master Data <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="?page=asuransi&actions=tampil">Asuransi</a></li>
                        <li><a href="?page=kecelakaan&actions=tampil">Kecelakaan</a></li>
                        <li><a href="?page=korban&actions=tampil">Korban</a></li>    
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Reports <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="?page=asuransi&actions=report">Laporan Asuransi</a></li>
						<li><a href="?page=kecelakaan&actions=report">LAporan Kecelakaan</a></li>
                        <li><a href="?page=korban&actions=report">Laporan Korban</a></li>
                    </ul>
                </li>
                <li><a href="?page=user&actions=tampil">User</a></li>


                <?php }
                else{
                    ?>
                    <li ><a href="index.php">Home</a></li>
                    <?php
                }
                ?>


                <li><a href="?page=about&actions=tampil">About</a></li>
                <li><a href="?page=kontak&actions=tampil">Contact</a></li>

                    <?php if (isset($_SESSION['username'])) { ?>
                    <li><a href="logout.php">Logout</a></li>
                <?php } ?>

            </ul>
        </div>
    </div>
</nav>
