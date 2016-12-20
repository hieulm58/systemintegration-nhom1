<?php

/**
 * This is the model class for table "hospitaldepartment".
 *
 * The followings are the available columns in table 'hospitaldepartment':
 * @property integer $hospitaldepartmentid
 * @property integer $hospitalregistrationid
 * @property integer $buildingfloorid
 * @property string $departmentname
 * @property string $headname
 * @property string $headaddress
 * @property integer $contactnumber
 *
 * The followings are the available model relations:
 * @property Buildingfloor $buildingfloor
 * @property Hospitalregistration $hospitalregistration
 * @property Staffregistration[] $staffregistrations
 */
class Hospitaldepartment extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'hospitaldepartment';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array(' departmentname,headname,headaddress,contactnumber,buildingfloorid', 'required'),
            array('hospitalregistrationid, buildingfloorid, contactnumber', 'numerical', 'integerOnly' => true,'message' => 'Enter valid phone number!'),
            array('contactnumber', 'match', 'pattern' => '/^([+]?[0-9 ]+)$/', 'message' => 'Enter valid mobile number.'),
            array('departmentname,contactnumber', 'filter', 'filter'=>'trim'),
            array('contactnumber', 'unique', 'message' => 'Contact number already exist!'),
             array('departmentname', 'unique', 'message' => 'Departmentname number already exist!'),
             array('departmentname', 'match', 'pattern' => '/^[A-Za-z0-9]+$/u', 'message' => 'Invalid department name.Avoid special characters($,@,_ etc..)'),
             array('headname', 'match', 'pattern' => '/^[A-Za-z0-9]+$/u', 'message' => 'Invalid  name.Avoid special characters($,@,_ etc..)'),
            array('contactnumber', 'length', 'max' => 13, 'min' => 10),
            array('departmentname, headname', 'length', 'max' => 35),
            array('headaddress', 'length', 'max' => 55),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('hospitaldepartmentid, hospitalregistrationid, buildingfloorid, departmentname, headname, headaddress, contactnumber', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'buildingfloor' => array(self::BELONGS_TO, 'Buildingfloor', 'buildingfloorid'),
            'hospitalregistration' => array(self::BELONGS_TO, 'Hospitalregistration', 'hospitalregistrationid'),
            'staffregistrations' => array(self::HAS_MANY, 'Staffregistration', 'hospitaldepartmentid'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'hospitaldepartmentid' => 'Hospitaldepartmentid',
            'hospitalregistrationid' => 'Hospitalregistrationid',
            'buildingfloorid' => 'Buildingfloorid',
            'departmentname' => 'Department name',
            'headname' => 'Head name',
            'headaddress' => 'Head address',
            'contactnumber' => 'Contact number',
            'buildingfloorid' => 'Floor name',
            
            
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
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('hospitaldepartmentid', $this->hospitaldepartmentid);
        $criteria->compare('hospitalregistrationid', $this->hospitalregistrationid);
        $criteria->compare('buildingfloorid', $this->buildingfloorid);
        $criteria->compare('departmentname', $this->departmentname, true);
        $criteria->compare('headname', $this->headname, true);
        $criteria->compare('headaddress', $this->headaddress, true);
        $criteria->compare('contactnumber', $this->contactnumber);
        $criteria->compare('contactnumber', $this->buildingfloorid);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Hospitaldepartment the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
