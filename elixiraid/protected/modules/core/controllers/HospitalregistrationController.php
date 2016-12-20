<?php

class HospitalregistrationController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('index', 'view'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'update'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'delete'),
                'users' => array('admin'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new Hospitalregistration;

        // Uncomment the following line if AJAX validation is needed
        $this->performAjaxValidation($model);

        if (isset($_POST['Hospitalregistration'])) {
            $hospital = Hospitalregistration::model()->findAll();
            if (count($hospital) === 0) {
            $model->attributes = $_POST['Hospitalregistration'];
            
            if ($model->validate()) {
                if (isset($_POST['hospitalname'])) {
                
                  } 
                $uploadedFile = CUploadedFile::getInstance($model, 'logo');

                if (isset($uploadedFile)) {

                    $date = new DateTime();

                    $date = $date->format('dmYhis');

                    $ext = end((explode(".", $uploadedFile)));
                    $fileName = "{$date}.{$ext}";
                    $model->logo = $fileName;
                }
                if ($model->save()) {
                  $insert_id = Yii::app()->db->getLastInsertID();
                  $insert_id = $model->hospitalregistrationid;
                     
                $username =  $model->hospitalname;
                $email = $model->email;
                $rtn = User::model()->hospitalsignup($username,$insert_id,$email);
                    if (isset($uploadedFile)) {
                        $uploadedFile->saveAs(Yii::app()->basePath . '/../logos/' . $fileName);
                    }

                    Yii::app()->user->setFlash('success', 'Succesfully Registered.');
                    $this->redirect(array('create'));
                }
            }
           
            } else {
                Yii::app()->user->setFlash('error', 'Hospital details already exist.');
            }
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        $this->performAjaxValidation($model);
        $oldFileName = $model->logo;
        if (isset($_POST['Hospitalregistration'])) {
            $model->attributes = $_POST['Hospitalregistration'];
             $uploadedFile = CUploadedFile::getInstance($model, 'logo');
            if (isset($uploadedFile)) {
                // $timezone = new DateTimeZone(Yii::app()->params['timezone']);
                $date = new DateTime();
                // $date->setTimezone($timezone);
                $date = $date->format('dmYhis');

                $ext = end((explode(".", $uploadedFile)));
                $fileName = "$date.$ext";
                $model->logo = $fileName;
            } else {
                $model->logo = $oldFileName;
            }

            if ($model->save(false)) {
                if (isset($uploadedFile)) {
                    $uploadedFile->saveAs(Yii::app()->basePath . '/../logos/' . $fileName);
                }

                Yii::app()->user->setFlash('success', 'Succesfully Updated.');
                $this->redirect(array('create'));
            }
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('Hospitalregistration');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new Hospitalregistration('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Hospitalregistration']))
            $model->attributes = $_GET['Hospitalregistration'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Hospitalregistration the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = Hospitalregistration::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Hospitalregistration $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'hospitalregistration-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
