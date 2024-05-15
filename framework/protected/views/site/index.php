<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name;
?>


<h1>Selamat Datang di Website Diklat
	<!-- <i><?php echo CHtml::encode(Yii::app()->name); ?></i> -->
</h1>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat sed explicabo corporis tempore! Inventore, eaque.
	Repudiandae, ab? Cumque quibusdam ex molestiae sunt est! Odio optio facilis accusamus delectus laboriosam tempore.
</p>
<p>lorem:</p>
<div class="container">
	<div class="row">
		<div class="col">
			<div class="card">
				<div class="card-body"
					style="background-color:#51FF45;">
					<!-- background-image: url('<?php echo $assetsUrl; ?>/shooting.png'); ?>/assset/image/shooting.png'); background-position: right; background-repeat: no-repeat; background-size: cover; -->
					Jumlah Peserta
					<h1><?php echo $countPeserta; ?>
					</h1>
				</div>
			</div>
		</div>
		<div class="col">
			<div class="card">
				<div class="card-body" style="background-color: #EDFF45">
					Jumlah Diklat
					<h1><?php echo $countDiklat; ?>
					</h1>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- <ul>
	<li>View file: <code><?php echo __FILE__; ?></code></li>
	<li>Layout file: <code><?php echo $this->getLayoutFile('main'); ?></code></li>
</ul> -->