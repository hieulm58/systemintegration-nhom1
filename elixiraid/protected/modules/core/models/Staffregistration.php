<?php

/**
 * This is the model class for table "staffregistration".
 *
 * The followings are the available columns in table 'staffregistration':
 * @property integer $staffregistrationid
 * @property integer $hospitalregistrationid
 * @property integer $employeetypeid
 * @property integer $hospitaldepartmentid
 * @property string $firstname
 * @property string $lastname
 * @property string $address
 * @property string $gender
 * @property string $dob
 * @property string $dateofjoining
 * @property string $dateofretiremnent
 * @property integer $phone
 * @property string $refereceperson
 * @property integer $referencecontact
 * @property string $qualification
 */
class Staffregistration extends CActiveRecord {

    public $gender;

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'staffregistration';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array(' employeetypeid,hospitaldepartmentid,phone, referencecontact,firstname,lastname,address,gender,employeecode,dateofjoining,refereceperson,qualification,age,email', 'required'),
            array('hospitalregistrationid, employeetypeid, hospitaldepartmentid, phone, referencecontact', 'numerical', 'integerOnly' => true),
            array('firstname, lastname', 'length', 'max' => 20),
            array('address, refereceperson', 'length', 'max' => 45),
            array('gender', 'length', 'max' => 15),
            array('qualification', 'length', 'max' => 30),
            array('employeecode, dateofjoining, dateofretiremnent', 'safe'),
             array('address,phone,referencecontact', 'filter', 'filter'=>'trim'),
             array('phone,referencecontact', 'match', 'pattern' => '/^([+]?[0-9 ]+)$/', 'message' => 'Enter valid mobile number.'),
            array('phone,referencecontact', 'unique', 'message' => 'Phone number already exist!','on'=>'insert'),
            array('phone,referencecontact', 'length', 'max' => 13, 'min' => 10),
             array('photo', 'file', 'types' => 'jpg, gif, png,gif', 'allowEmpty' => true, 'on' => 'insert', 'on' => 'update'),
            array('photo', 'file', 'safe' => true, 'allowEmpty' => true, 'types' => 'jpg, jpeg, png,gif', 'maxSize' => (1024 * 200), 'message' => 'The file was larger than 24kb. Please upload a smaller file.'),
            array('photo', 'validateImage'),
             array('employeecode', 'unique', 'message' => 'Employee code already exists'),
            array('firstname', 'match', 'pattern' => '/^[A-Za-z0-9]+$/u', 'message' => 'Invalid name.Avoid special characters($,@,_ etc..)'),
array('lastname', 'match', 'pattern' => '/^[A-Za-z0-9]+$/u', 'message' => 'Invalid name.Avoid special characters($,@,_ etc..)'),
array('qualification', 'match', 'pattern' => '/^[A-Za-z0-9]+$/u', 'message' => 'Invalid qualification.Avoid special characters($,@,_ etc..)'),
  array('refereceperson', 'match', 'pattern' => '/^[A-Za-z0-9]+$/u', 'message' => 'Invalid name.Avoid special characters($,@,_ etc..)'),
                       
// The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('staffregistrationid, hospitalregistrationid, employeetypeid, hospitaldepartmentid, firstname, lastname, address, gender, age, dateofjoining, dateofretiremnent, phone, refereceperson, referencecontact, qualification,photo', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {

        return array(
            'employeetype' => array(self::BELONGS_TO, 'Employeetype', 'employeetypeid'),
            'departmentname' => array(self::BELONGS_TO, 'Hospitaldepartment', 'hospitaldepartmentid'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'staffregistrationid' => 'Staffregistrationid',
            'hospitalregistrationid' => 'Hospitalregistrationid',
            'employeetypeid' => 'Employee type',
            'hospitaldepartmentid' => 'Hospital department',
            'firstname' => 'First name',
            'lastname' => 'Last name',
            'address' => 'Address',
            'gender' => 'Gender',
            'employeecode' => 'Employee code',
            'age' => 'Age',
            'email' => 'Email',
            'dateofjoining' => 'Date of joining',
            'dateofretiremnent' => 'Date of retiremnent',
            'phone' => 'Phone number',
            'refereceperson' => 'Referece person',
            'referencecontact' => 'Reference contact',
            'photo' => 'Photo',
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

        $criteria->compare('staffregistrationid', $this->staffregistrationid);
        $criteria->compare('hospitalregistrationid', $this->hospitalregistrationid);
        $criteria->compare('employeetypeid', $this->employeetypeid);
        $criteria->compare('hospitaldepartmentid', $this->hospitaldepartmentid);
        $criteria->compare('firstname', $this->firstname, true);
        $criteria->compare('lastname', $this->lastname, true);
        $criteria->compare('address', $this->address, true);
        $criteria->compare('gender', $this->gender, true);
        $criteria->compare('employeecode', $this->employeecode, true);
        $criteria->compare('dateofjoining', $this->dateofjoining, true);
        $criteria->compare('dateofretiremnent', $this->dateofretiremnent, true);
        $criteria->compare('phone', $this->phone);
        $criteria->compare('refereceperson', $this->refereceperson, true);
        $criteria->compare('referencecontact', $this->referencecontact);
        $criteria->compare('qualification', $this->qualification, true);
        $criteria->compare('photo', $this->photo);
        $criteria->compare('age', $this->age);
        $criteria->compare('email', $this->email);



        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }
public function validateImage($attribute) {
        $file = CUploadedFile::getInstance($this, $attribute);
        if (!$file) {
            return;
        }
        // http://php.net/manual/en/function.imagecreatefromstring.php
        // These types will be automatically detected if your build of PHP supports them: JPEG, PNG, GIF, WBMP, and GD2
        $gd = @imagecreatefromstring(file_get_contents($file->getTempName()));
        if ($gd === false) {
            $this->addError($attribute, 'Image is corrupted');
        }
    }
    public function getGenderOptions() {
        return array(
            'male' => 'Male',
            'female' => 'Female',
        );
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Staffregistration the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
