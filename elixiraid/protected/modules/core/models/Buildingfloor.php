<?php

/**
 * This is the model class for table "buildingfloor".
 *
 * The followings are the available columns in table 'buildingfloor':
 * @property integer $buildingfloorid
 * @property integer $hospitalregistrationid
 * @property integer $hospitallocationid
 * @property string $floorccode
 * @property string $floorname
 *
 * The followings are the available model relations:
 * @property Bedavail[] $bedavails
 * @property Hospitallocation $hospitallocation
 * @property Hospitalregistration $hospitalregistration
 * @property Hospitaldepartment[] $hospitaldepartments
 * @property Icuotscheduling[] $icuotschedulings
 * @property Laboratorytest[] $laboratorytests
 */
class Buildingfloor extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'buildingfloor';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
                    array('floorccode,floorname,hospitallocationid', 'required'),
			array('hospitalregistrationid, hospitallocationid', 'numerical', 'integerOnly'=>true),
			array('floorccode', 'length', 'max'=>15),
			array('floorname', 'length', 'max'=>25),
                     array('floorname,floorccode', 'filter', 'filter'=>'trim'),
                     array('floorname', 'unique', 'message' => 'Floor name number already exist!'),
                    array('floorccode', 'unique', 'message' => 'Floor code number already exist!'),
                     array('floorname', 'match', 'pattern' => '/^[A-Za-z0-9]+$/u', 'message' => 'Invalid name.Avoid special characters($,@,_ etc..)'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('buildingfloorid, hospitalregistrationid, hospitallocationid, floorccode, floorname', 'safe', 'on'=>'search'),
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
			'bedavails' => array(self::HAS_MANY, 'Bedavail', 'buildingfloorid'),
			'hospitallocation' => array(self::BELONGS_TO, 'Hospitallocation', 'hospitallocationid'),
			'hospitalregistration' => array(self::BELONGS_TO, 'Hospitalregistration', 'hospitalregistrationid'),
			'hospitaldepartments' => array(self::HAS_MANY, 'Hospitaldepartment', 'buildingfloorid'),
			'icuotschedulings' => array(self::HAS_MANY, 'Icuotscheduling', 'buildingfloorid'),
			'laboratorytests' => array(self::HAS_MANY, 'Laboratorytest', 'buildingfloorid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'buildingfloorid' => 'Buildingfloorid',
			'hospitalregistrationid' => 'Hospitalregistrationid',
			'hospitallocationid' => 'Builging name',
			'floorccode' => 'Floor code',
			'floorname' => 'Floor name',
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

		$criteria->compare('buildingfloorid',$this->buildingfloorid);
		$criteria->compare('hospitalregistrationid',$this->hospitalregistrationid);
		$criteria->compare('hospitallocationid',$this->hospitallocationid);
		$criteria->compare('floorccode',$this->floorccode,true);
		$criteria->compare('floorname',$this->floorname,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Buildingfloor the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
