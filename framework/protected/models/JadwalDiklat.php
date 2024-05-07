<?php

/**
 * This is the model class for table "jadwal_diklat".
 *
 * The followings are the available columns in table 'jadwal_diklat':
 * @property integer $id
 * @property string $nama_diklat
 * @property string $tanggal_mulai
 * @property string $tangga_selesai
 * @property string $jam_mulai
 * @property string $jam_selesai
 * @property string $tempat
 * @property string $instruktur
 * @property string $keterangan
 * @property string $kategori
 * @property integer $kuota_peserta
 * @property string $status
 */
class JadwalDiklat extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'jadwal_diklat';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama_diklat, tanggal_mulai, tangga_selesai, jam_mulai, jam_selesai, tempat, instruktur, keterangan, kategori, kuota_peserta, status', 'required'),
			array('kuota_peserta', 'numerical', 'integerOnly'=>true),
			array('nama_diklat, tempat, instruktur, kategori, status', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nama_diklat, tanggal_mulai, tangga_selesai, jam_mulai, jam_selesai, tempat, instruktur, keterangan, kategori, kuota_peserta, status', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nama_diklat' => 'Nama Diklat',
			'tanggal_mulai' => 'Tanggal Mulai',
			'tangga_selesai' => 'Tangga Selesai',
			'jam_mulai' => 'Jam Mulai',
			'jam_selesai' => 'Jam Selesai',
			'tempat' => 'Tempat',
			'instruktur' => 'Instruktur',
			'keterangan' => 'Keterangan',
			'kategori' => 'Kategori',
			'kuota_peserta' => 'Kuota Peserta',
			'status' => 'Status',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('nama_diklat',$this->nama_diklat,true);
		$criteria->compare('tanggal_mulai',$this->tanggal_mulai,true);
		$criteria->compare('tangga_selesai',$this->tangga_selesai,true);
		$criteria->compare('jam_mulai',$this->jam_mulai,true);
		$criteria->compare('jam_selesai',$this->jam_selesai,true);
		$criteria->compare('tempat',$this->tempat,true);
		$criteria->compare('instruktur',$this->instruktur,true);
		$criteria->compare('keterangan',$this->keterangan,true);
		$criteria->compare('kategori',$this->kategori,true);
		$criteria->compare('kuota_peserta',$this->kuota_peserta);
		$criteria->compare('status',$this->status,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return JadwalDiklat the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
