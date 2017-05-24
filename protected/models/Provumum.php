<?php

/**
 * This is the model class for table "provumum".
 *
 * The followings are the available columns in table 'provumum':
 * @property string $id
 * @property string $kdProvider
 * @property string $nmProvider
 * @property string $kdCabang
 * @property string $nmCabang
 *
 * The followings are the available model relations:
 * @property Peserta[] $pesertas
 */
class Provumum extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'provumum';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kdProvider, nmProvider', 'required'),
			array('kdProvider, kdCabang, nmCabang', 'length', 'max'=>50),
			array('nmProvider', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, kdProvider, nmProvider, kdCabang, nmCabang', 'safe', 'on'=>'search'),
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
			'pesertas' => array(self::HAS_MANY, 'Peserta', 'provUmum'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'kdProvider' => 'Kd Provider',
			'nmProvider' => 'Nm Provider',
			'kdCabang' => 'Kd Cabang',
			'nmCabang' => 'Nm Cabang',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('kdProvider',$this->kdProvider,true);
		$criteria->compare('nmProvider',$this->nmProvider,true);
		$criteria->compare('kdCabang',$this->kdCabang,true);
		$criteria->compare('nmCabang',$this->nmCabang,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Provumum the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
