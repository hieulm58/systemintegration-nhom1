<?php

/**
 * This is the model class for table "hospitalregistration".
 *
 * The followings are the available columns in table 'hospitalregistration':
 * @property integer $hospitalregistrationid
 * @property string $hospitalname
 * @property string $yearofestablishment
 * @property string $state
 * @property string $country
 * @property string $address
 * @property string $fax
 * @property integer $phone
 * @property integer $noofbuildings
 * @property string $contactperson
 * @property string $promotedby
 */
class Hospitalregistration extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'hospitalregistration';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('hospitalname, address, phone, noofbuildings, contactperson,state,country,yearofestablishment,email', 'required',),
            array('phone, noofbuildings', 'numerical', 'integerOnly' => true),
            array('hospitalname,address,phone,email,fax', 'filter', 'filter'=>'trim'),
            array('phone', 'match', 'pattern' => '/^([+]?[0-9 ]+)$/', 'message' => 'Enter valid mobile number.'),
            array('phone', 'unique', 'message' => 'Phone number already exist!'),
            array('phone', 'length', 'max' => 13, 'min' => 10),
            array('hospitalname', 'length', 'max' => 50),
            array('hospitalname', 'unique', 'message' => 'Hospital already registered!'),
             array('address', 'unique', 'message' => 'Address is already registered!'),
            array('state, country', 'length', 'max' => 20),
            array('address, fax, contactperson, promotedby', 'length', 'max' => 45),
            array('fax', 'unique', 'message' => 'Fax already exist!'),
            array('yearofestablishment', 'safe'),
            array('hospitalregistrationid, hospitalname, yearofestablishment, state, country, address, fax, phone, noofbuildings, contactperson, promotedby', 'safe', 'on' => 'search'),
            array('logo', 'file', 'types' => 'jpg, gif, png,gif', 'allowEmpty' => true, 'on' => 'insert', 'on' => 'update'),
            array('logo', 'file', 'safe' => true, 'allowEmpty' => true, 'types' => 'jpg, jpeg, png,gif', 'maxSize' => (1024 * 200), 'message' => 'The file was larger than 24kb. Please upload a smaller file.'),
            array('logo', 'validateImage'),
            array('email', 'email', 'message' => "Enter Valid email Address"),
            array('email', 'unique', 'message' => 'Email already exists!'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'hospitalregistrationid' => 'Hospitalregistrationid',
            'hospitalname' => 'Hospital name',
            'yearofestablishment' => 'Year of establishment',
            'state' => 'State',
            'country' => 'Country',
            'address' => 'Address',
            'fax' => 'Fax',
            'phone' => 'Phone number',
            'email' => 'email',
            'noofbuildings' => 'No of buildings',
            'contactperson' => 'Contact person',
            'promotedby' => 'Promotedby',
            'logo' => 'logo',
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

        $criteria->compare('hospitalregistrationid', $this->hospitalregistrationid);
        $criteria->compare('hospitalname', $this->hospitalname, true);
        $criteria->compare('yearofestablishment', $this->yearofestablishment, true);
        $criteria->compare('state', $this->state, true);
        $criteria->compare('country', $this->country, true);
        $criteria->compare('address', $this->address, true);
        $criteria->compare('fax', $this->fax, true);
        $criteria->compare('phone', $this->phone);
        $criteria->compare('email', $this->email);
        $criteria->compare('noofbuildings', $this->noofbuildings);
        $criteria->compare('contactperson', $this->contactperson, true);
        $criteria->compare('promotedby', $this->promotedby, true);
        $criteria->compare('logo', $this->logo, true);

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
    public function getYearsList() {
    $currentYear = date('Y');
    $yearFrom = 1900;
    $yearsRange = range($yearFrom, $currentYear);
    return array_combine($yearsRange, $yearsRange);
}

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Hospitalregistration the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
