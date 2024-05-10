<?php

/**
 * This is the model class for table "kehadiran".
 *
 * The followings are the available columns in table 'kehadiran':
 * @property integer $id
 * @property integer $id_peserta
 * @property string $status
 * @property string $tanggal
 * @property string $waktu
 *
 * The followings are the available model relations:
 * @property Peserta $idPeserta
 */
class Kehadiran extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'kehadiran';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_peserta, status, tanggal, waktu', 'required'),
			array('id_peserta', 'numerical', 'integerOnly'=>true),
			array('status', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_peserta, status, tanggal, waktu', 'safe', 'on'=>'search'),
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
			'idPeserta' => array(self::BELONGS_TO, 'Peserta', 'id_peserta'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'id_peserta' => 'Id Peserta',
			'status' => 'Status',
			'tanggal' => 'Tanggal',
			'waktu' => 'Waktu',
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
		$criteria->compare('id_peserta',$this->id_peserta);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('tanggal',$this->tanggal,true);
		$criteria->compare('waktu',$this->waktu,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Kehadiran the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
