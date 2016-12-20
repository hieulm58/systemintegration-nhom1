<?php

/**
 * This is the model class for table "employeetype".
 *
 * The followings are the available columns in table 'employeetype':
 * @property integer $employeetypeid
 * @property string $employeetypename
 *
 * The followings are the available model relations:
 * @property Staffregistration[] $staffregistrations
 * @property Staffscheduling[] $staffschedulings
 */
class Employeetype extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'employeetype';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
                     array('employeetypename', 'required'),
			array('employeetypename', 'length', 'max'=>45),
                        array('employeetypename', 'filter', 'filter'=>'trim'),
                       array('employeetypename', 'unique', 'message' => 'employee type already exist!'),
                        array('employeetypename', 'match', 'pattern' => '/^[A-Za-z0-9]+$/u', 'message' => 'Invalid type.Avoid special characters($,@,_ etc..)'),
                        
			array('employeetypeid, employeetypename', 'safe', 'on'=>'search'),
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
			'staffregistrations' => array(self::HAS_MANY, 'Staffregistration', 'employeetypeid'),
			'staffschedulings' => array(self::HAS_MANY, 'Staffscheduling', 'employeetypeid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'employeetypeid' => 'Employeetypeid',
			'employeetypename' => 'Employee type',
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

		$criteria->compare('employeetypeid',$this->employeetypeid);
		$criteria->compare('employeetypename',$this->employeetypename,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Employeetype the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
