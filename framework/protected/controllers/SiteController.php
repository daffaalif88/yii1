<?php

class SiteController extends Controller
{
	// public function filters()
    // {
    //     return array(
    //         'accessControl', // Mengaktifkan kontrol akses
    //     );
    // }

	// public function accessRules()
    // {
    //     return array(
    //         // Mengizinkan admin mengakses semua aksi
    //         array('allow', 
    //             'actions' => array('index', 'create', 'update', 'view', 'delete', 'admin','login','logout'),
    //             'users' => array('admin'), // Peran admin
    //         ),
    //         // Mengizinkan user hanya mengakses aksi index
    //         array('allow', 
    //             'actions' => array('index','logout','login'),
    //             'users' => array('user'), // Peran user
    //         ),
    //         // Menolak semua pengguna lainnya
    //         // array('deny',  
    //         //     'users' => array('user'),
    //         // ),
    //     );
    // }

	/**
	 * Declares class-based actions.
	 */


	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		 // Publikasikan folder assets/images
		$assetsUrl = Yii::app()->assetManager->publish(Yii::getPathOfAlias('application.assets.images'));

		$countPeserta = Peserta::model()->count();
		$countDiklat = JadwalDiklat::model()->count();
        $this->render('index', array('countPeserta' => $countPeserta,'countDiklat'=>$countDiklat, 'assetsUrl' => $assetsUrl));
		// $this->render('index');
	}

	public function actionLaporan()
    {
        // Ambil data pendaftaran peserta untuk 3 bulan terakhir
        $data = $this->getPendaftaranData();
		$data2 = $this->getDiklatData();

        // Render view dengan data
        $this->render('laporan', [
            'data' => $data,
			'data2' => $data2,
        ]);
    }


	private function getPendaftaranData()
    {
        $currentMonth = date('Y-m-01');
        $data = [];
        for ($i = 11; $i >= 0; $i--) {
            $month = (new DateTime($currentMonth))->modify("-{$i} months");
            $startOfMonth = $month->format('Y-m-01');
            $endOfMonth = $month->format('Y-m-t');

            $count = Yii::app()->db->createCommand()
                ->select('COUNT(*)')
                ->from('peserta')
                ->where('tanggal_pendaftaran BETWEEN :start AND :end', [
                    ':start' => $startOfMonth,
                    ':end' => $endOfMonth,
                ])
                ->queryScalar();

            $data[] = [
                'month' => Yii::app()->dateFormatter->format('MMM yyyy', $startOfMonth),
                'count' => $count,
            ];
        }

        return $data;
    }


	private function getDiklatData()
    {
        $currentMonth = date('Y-m-01');
        $data = [];
        for ($i = 11; $i >= 0; $i--) {
            $month = (new DateTime($currentMonth))->modify("-{$i} months");
            $startOfMonth = $month->format('Y-m-01');
            $endOfMonth = $month->format('Y-m-t');

            $count = Yii::app()->db->createCommand()
                ->select('COUNT(*)')
                ->from('kehadiran')
                ->where('tanggal BETWEEN :start AND :end AND status = :status', [
                    ':start' => $startOfMonth,
                    ':end' => $endOfMonth,
                    ':status' => 'Masuk',
                ])
                ->queryScalar();

            $data[] = [
                'month' => Yii::app()->dateFormatter->format('MMM yyyy', $startOfMonth),
                'count' => $count,
            ];
        }

        return $data;
    }
	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	
	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}