<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name;
?>



<div class="jumbotron">
	<div class="container">
		<h1 class="display-3">Selamat Datang di Website Diklat!</h1>
		<p>Website yang digunakan untuk daftar diklat. Marilah kita berdiklat untuk kemjuan hidup yang lebih baik</p>
		<p><?php echo CHtml::link('Daftar Menjadi Peserta', array('/peserta/create'), array('class' => 'btn btn-outline-primary '));?>
		</p>
	</div>
</div>
<hr>
<div class="container">
	<!-- Example row of columns -->
	<div class="row">
		<div class="col-md-6">
			<h2>Jumlah Peserta Yang Mendaftar</h2>
			<p>Berikut adalah jumlah peserta yang mendaftar diklat pada website ini </p>
			<div class="card">
				<div class="card-body" style="background-color:#EEEEEE;">
					<!-- background-image: url('<?php echo $assetsUrl; ?>/shooting.png'); ?>/assset/image/shooting.png'); background-position: right; background-repeat: no-repeat; background-size: cover; -->
					Jumlah Peserta
					<h1><?php echo $countPeserta; ?>
					</h1>
				</div>
			</div>
			<br>
			<p><?php echo CHtml::link('View Detail', array('/peserta/index'), array('class' => 'btn btn-secondary '));?>
			</p>
		</div>
		<div class="col-md-6">
			<h2>Jumlah Diklat Yang Tersedia </h2>

			<p>Berikut adalah jumlah diklat peserta yang terdapat pada website ini </p>
			<div class="card">
				<div class="card-body" style="background-color: #EEEEEE;">
					Jumlah Diklat
					<h1><?php echo $countDiklat; ?>
					</h1>
				</div>
			</div>
			<br>
			<p><?php echo CHtml::link('View Detail', array('/jadwalDiklat/index'), array('class' => 'btn btn-secondary '));?>
		</div>
	</div>

	<hr>

</div>
<!-- <p>Informasi:</p>
<div class="container">
	<div class="row">
		<div class="col">
			<div class="card">
				<div class="card-body" style="background-color:#03AED2;">
					
					Jumlah Peserta
					<h1>
					</h1>
				</div>
			</div>
		</div>
		<div class="col">
			<div class="card">
				<div class="card-body" style="background-color: #68D2E8">
					Jumlah Diklat
					<h1>
					</h1>
				</div>
			</div>
		</div>
	</div>
</div> -->
<!-- <ul>
	<li>View file: <code><?php echo __FILE__; ?></code></li>
	<li>Layout file: <code><?php echo $this->getLayoutFile('main'); ?></code></li>
</ul> -->