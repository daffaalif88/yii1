<div id="header">
			<div id="logo">
				<!-- <?php echo CHtml::encode(Yii::app()->name); ?> -->
				Daffaalif WengDev
			</div>
		</div><!-- header -->

		<div id="mainmenu">
			<?php $this->widget('zii.widgets.CMenu', array(
				'items' => array(
					array('label' => 'Home', 'url' => array('/site/index')),
					array('label' => 'About', 'url' => array('/site/page', 'view' => 'about')),
					array('label' => 'Contact', 'url' => array('/site/contact')),
					array('label' => 'Peserta', 'url' => array('/peserta/index')),
					array('label' => 'Jadwal Diklat (i)', 'url' => array('/jadwalDiklat/index')),
					array('label' => 'Kehadiran (i)', 'url' => array('/kehadiran/index')),
					// array('label' => 'Informasi Jadwal Diklat', 'url' => array('/jadwalDiklat/informasi')),
					array('label' => 'Laporan Diklat', 'url' => array('/laporanDiklat/index')),
					array('label' => 'Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
					array('label' => 'Logout (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)
				),

			)); ?>
		</div><!-- mainmenu -->