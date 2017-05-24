<?php

/**
 * This is the model class for table "peserta".
 *
 * The followings are the available columns in table 'peserta':
 * @property string $id
 * @property integer $noKartu
 * @property integer $nik
 * @property string $nama
 * @property integer $pisa
 * @property string $sex
 * @property string $tglLahir
 * @property string $tglCetakKartu
 * @property string $provUmum
 * @property string $jenisPeserta
 * @property string $kelasTanggungan
 *
 * The followings are the available model relations:
 * @property Jenispeserta $jenisPeserta0
 * @property Kelastanggungan $kelasTanggungan0
 * @property Provumum $provUmum0
 */
class Peserta extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'peserta';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('noKartu, nik, nama, pisa, sex, tglLahir, tglCetakKartu, provUmum, jenisPeserta, kelasTanggungan', 'required'),
			array('noKartu, nik, pisa', 'numerical', 'integerOnly'=>true),
			array('nama', 'length', 'max'=>40),
			array('sex', 'length', 'max'=>10),
			array('provUmum, jenisPeserta, kelasTanggungan', 'length', 'max'=>11),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, noKartu, nik, nama, pisa, sex, tglLahir, tglCetakKartu, provUmum, jenisPeserta, kelasTanggungan', 'safe', 'on'=>'search'),
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
			'jenisPeserta0' => array(self::BELONGS_TO, 'Jenispeserta', 'jenisPeserta'),
			'kelasTanggungan0' => array(self::BELONGS_TO, 'Kelastanggungan', 'kelasTanggungan'),
			'provUmum0' => array(self::BELONGS_TO, 'Provumum', 'provUmum'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'noKartu' => 'No Kartu',
			'nik' => 'Nik',
			'nama' => 'Nama',
			'pisa' => 'Pisa',
			'sex' => 'Sex',
			'tglLahir' => 'Tgl Lahir',
			'tglCetakKartu' => 'Tgl Cetak Kartu',
			'provUmum' => 'Prov Umum',
			'jenisPeserta' => 'Jenis Peserta',
			'kelasTanggungan' => 'Kelas Tanggungan',
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
		$criteria->compare('noKartu',$this->noKartu);
		$criteria->compare('nik',$this->nik);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('pisa',$this->pisa);
		$criteria->compare('sex',$this->sex,true);
		$criteria->compare('tglLahir',$this->tglLahir,true);
		$criteria->compare('tglCetakKartu',$this->tglCetakKartu,true);
		$criteria->compare('provUmum',$this->provUmum,true);
		$criteria->compare('jenisPeserta',$this->jenisPeserta,true);
		$criteria->compare('kelasTanggungan',$this->kelasTanggungan,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Peserta the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
