<?php

/**
 * This is the model class for table "w_state".
 *
 * The followings are the available columns in table 'w_state':
 * @property integer $id
 * @property string $name
 * @property string $code
 * @property integer $country_id
 *
 * The followings are the available model relations:
 * @property Karyawan[] $karyawans
 * @property WCountry $country
 */
class WState extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return WState the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'w_state';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, country_id', 'required'),
			array('country_id', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>45),
			array('code', 'length', 'max'=>5),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, code, country_id', 'safe', 'on'=>'search'),
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
			'karyawans' => array(self::HAS_MANY, 'Karyawan', 'propinsi'),
			'country' => array(self::BELONGS_TO, 'WCountry', 'country_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'code' => 'Code',
			'country_id' => 'Country',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('code',$this->code,true);
		$criteria->compare('country_id',$this->country_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}