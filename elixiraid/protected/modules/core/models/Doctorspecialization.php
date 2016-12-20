<?php

/**
 * This is the model class for table "doctorspecialization".
 *
 * The followings are the available columns in table 'doctorspecialization':
 * @property integer $doctorspecializationid
 * @property string $specialization
 *
 * The followings are the available model relations:
 * @property Doctordetails[] $doctordetails
 */
class Doctorspecialization extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'doctorspecialization';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
                        array('specialization','required'),
			array('specialization', 'length', 'max'=>45),
                      
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('doctorspecializationid, specialization', 'safe', 'on'=>'search'),
                         array('specialization', 'unique', 'message' => 'specialization already exists!'),
                      array('specialization', 'match', 'pattern' => '/^[A-Za-z0-9]+$/u', 'message' => 'Invalid.Avoid special characters($,@,_ etc..)'),
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
			'doctordetails' => array(self::HAS_MANY, 'Doctordetails', 'doctorspecializationid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'doctorspecializationid' => 'Doctorspecializationid',
			'specialization' => 'Specialization',
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

		$criteria->compare('doctorspecializationid',$this->doctorspecializationid);
		$criteria->compare('specialization',$this->specialization,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Doctorspecialization the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
