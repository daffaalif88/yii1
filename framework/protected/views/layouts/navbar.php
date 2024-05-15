<nav class="navbar navbar-expand-lg sticky-top" style="background-color: #e3f2fd;">
    <div class="container-fluid">
        <a class="navbar-brand" href="'/site/index'">Daffaalif WengDev</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <!-- <a class="nav-link active" aria-current="page" href="'/site/index'">Home</a> -->
                    <?php echo CHtml::link('Home', array('/site/index'), array('class' => 'nav-link active '));?>
                </li>
                <li class="nav-item">
                    <!-- <a class="nav-link active" aria-current="page" href="'/site/index'">Home</a> -->
                    <?php echo CHtml::link('About', array('/site/page', 'view' => 'about'), array('class' => 'nav-link active')); ?>
                </li>
                <li class="nav-item">
                    <!-- <a class="nav-link active" aria-current="page" href="'/site/about'">About</a> -->
                    <?php echo CHtml::link('Contact', array('/site/contact'), array('class' => 'nav-link active '));?>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Master
                    </a>
                    <ul class="dropdown-menu">
                        <!-- <li><a class="dropdown-item" href="#">Peserta</a></li> -->
                        <?php echo CHtml::link('Peserta', array('/peserta/index'), array('class' => 'nav-link active '));?>
                        <!-- <li><a class="dropdown-item" href="#">Jadwal Diklat</a></li> -->
                        <?php echo CHtml::link('Jadwal Diklat', array('/jadwalDiklat/admin'), array('class' => 'nav-link active '));?>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Transaksi
                    </a>
                    <ul class="dropdown-menu">
                        <!-- <li><a class="dropdown-item" href="#">Peserta</a></li>
                        <li><a class="dropdown-item" href="#">Jadwal Diklat</a></li> -->
                        <?php echo CHtml::link('Kehadiran', array('/kehadiran/admin'), array('class' => 'nav-link active '));?>
                        <?php echo CHtml::link('Laporan Diklat', array('/laporanDiklat/index'), array('class' => 'nav-link active '));?>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Informasi
                    </a>
                    <ul class="dropdown-menu">
                        <!-- <li><a class="dropdown-item" href="#">Peserta</a></li>
                        <li><a class="dropdown-item" href="#">Jadwal Diklat</a></li> -->
                        <?php echo CHtml::link('Informasi Jadwal Diklat', array('/jadwalDiklat/index'), array('class' => 'nav-link active '));?>
                        <?php echo CHtml::link('Informasi Kehadiran', array('/kehadiran/index'), array('class' => 'nav-link active '));?>
                    </ul>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <?php if (Yii::app()->user->isGuest): ?>
                <a href="<?php echo Yii::app()->createUrl('/site/login'); ?>" class="btn btn-outline-primary">
                    Login
                </a>
                <?php else: ?>
                <a href="<?php echo Yii::app()->createUrl('/site/logout'); ?>" class="btn btn-outline-danger">
                    Logout (<?php echo Yii::app()->user->name; ?>)
                </a>
                <?php endif; ?>

            </form>
        </div>
    </div>
</nav>