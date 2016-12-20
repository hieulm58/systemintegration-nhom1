<?php

/**
 * This is the model class for table "doctordetails".
 *
 * The followings are the available columns in table 'doctordetails':
 * @property integer $doctordetailsid
 * @property integer $hospitalregistrationid
 * @property integer $doctordesignationid
 * @property integer $doctorspecializationid
 * @property integer $drshiftid
 * @property integer $doctorcode
 * @property string $doctorname
 * @property string $address
 * @property integer $contactno
 * @property integer $consultantfee
 *
 * The followings are the available model relations:
 * @property Doctordesignation $doctordesignation
 * @property Doctorspecialization $doctorspecialization
 * @property Drshift $drshift
 * @property Hospitalregistration $hospitalregistration
 * @property Icuotscheduling[] $icuotschedulings
 * @property Inpatientdetails[] $inpatientdetails
 * @property Labtestresult[] $labtestresults
 * @property Leavemanagement[] $leavemanagements
 * @property Outpatientbiling[] $outpatientbilings
 * @property Outpatientdetails[] $outpatientdetails
 * @property Outsideconsultation[] $outsideconsultations
 * @property Stockbill[] $stockbills
 * @property Treatmentunitscheduling[] $treatmentunitschedulings
 */
class Doctordetails extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'doctordetails';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('hospitalregistrationid, doctordesignationid, doctorspecializationid, contactno, consultantfee', 'numerical', 'integerOnly' => true),
            array('doctorname, address, contactno, consultantfee,drshift,hospitalregistrationid,doctorspecializationid,doctordesignationid,doctorcode,dateofjoin,email,dateofjoin,', 'required'),
            array('contactno', 'match', 'pattern' => '/^([+]?[0-9 ]+)$/', 'message' => 'Enter valid mobile number.'),
            array('contactno', 'unique', 'message' => 'Phone number already exist!'),
            array('contactno', 'length', 'max' => 13, 'min' => 10),
            array('drshift', 'length', 'max' => 20),
            array('doctorname', 'length', 'max' => 30),
            array('address', 'length', 'max' => 45),
            array('email', 'unique', 'message' => 'Email  already exists'),
            array('doctorcode', 'unique', 'message' => 'doctor code already exists'),
            array('doctorname', 'match', 'pattern' => '/^[A-Za-z0-9]+$/u', 'message' => 'Invalid name.Avoid special characters($,@,_ etc..)'),
		
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('doctordetailsid, hospitalregistrationid, doctordesignationid, doctorspecializationid, drshift, doctorcode, doctorname, address, contactno, consultantfee,dateofjoin', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'doctordesignation' => array(self::BELONGS_TO, 'Doctordesignation', 'doctordesignationid'),
            'doctorspecialization' => array(self::BELONGS_TO, 'Doctorspecialization', 'doctorspecializationid'),
            //'drshift' => array(self::BELONGS_TO, 'Drshift', 'drshiftid'),
            'hospitalregistration' => array(self::BELONGS_TO, 'Hospitalregistration', 'hospitalregistrationid'),
            'icuotschedulings' => array(self::HAS_MANY, 'Icuotscheduling', 'doctordetailsid'),
            'inpatientdetails' => array(self::HAS_MANY, 'Inpatientdetails', 'doctordetailsid'),
            'labtestresults' => array(self::HAS_MANY, 'Labtestresult', 'doctordetailsid'),
            'leavemanagements' => array(self::HAS_MANY, 'Leavemanagement', 'doctordetailsid'),
            'outpatientbilings' => array(self::HAS_MANY, 'Outpatientbiling', 'doctordetailsid'),
            'outpatientdetails' => array(self::HAS_MANY, 'Outpatientdetails', 'doctordetailsid'),
            'outsideconsultations' => array(self::HAS_MANY, 'Outsideconsultation', 'doctordetailsid'),
            'stockbills' => array(self::HAS_MANY, 'Stockbill', 'doctordetailsid'),
            'treatmentunitschedulings' => array(self::HAS_MANY, 'Treatmentunitscheduling', 'doctordetailsid'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'doctordetailsid' => 'Doctordetailsid',
            'hospitalregistrationid' => 'Hospital name',
            'doctordesignationid' => 'Designation',
            'doctorspecializationid' => 'Specialization',
            'drshift' => 'Shift',
            'doctorcode' => 'Doctor code',
            'doctorname' => ' Name',
            'address' => 'Address',
            'contactno' => 'Contact number',
            'consultantfee' => 'Consultant fee',
            'dateofjoin' => 'Joining Date',
            'photo' => 'Photo',
            'email' => 'Email',
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

        $criteria->compare('doctordetailsid', $this->doctordetailsid);
        $criteria->compare('hospitalregistrationid', $this->hospitalregistrationid);
        $criteria->compare('doctordesignationid', $this->doctordesignationid);
        $criteria->compare('doctorspecializationid', $this->doctorspecializationid);
        $criteria->compare('drshift', $this->drshift);
        $criteria->compare('doctorcode', $this->doctorcode);
        $criteria->compare('doctorname', $this->doctorname, true);
        $criteria->compare('address', $this->address, true);
        $criteria->compare('contactno', $this->contactno);
        $criteria->compare('consultantfee', $this->consultantfee);
        $criteria->compare('dateofjoin', $this->dateofjoin);
        $criteria->compare('photo', $this->photo);
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

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Doctordetails the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
