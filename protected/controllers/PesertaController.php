<?php

class PesertaController extends Controller {

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
                'actions' => array('create', 'update', 'bpjs', 'carinomorkartu', 'bpjss', 'createBPJS', 'printPDF'),
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
        $model = new Peserta;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Peserta'])) {
            $model->attributes = $_POST['Peserta'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    public function actionCreateBPJS() {
        $model = new Peserta;
        $modelProvUmum = new Provumum();
        $modelKelasTanggungan = new Kelastanggungan();
        $modelJenisPeserta = new Jenispeserta();

        
        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Peserta']) && isset($_POST['Provumum']) && isset($_POST['Kelastanggungan']) && isset($_POST['Jenispeserta'])) {
           
            $modelProvUmum->attributes = $_POST['Provumum'];
            $modelKelasTanggungan->attributes = $_POST['Kelastanggungan'];
            $modelJenisPeserta->attributes = $_POST['Jenispeserta'];
            if ($modelProvUmum->save() && $modelKelasTanggungan->save() && $modelJenisPeserta->save()) {
                $model->attributes = $_POST['Peserta'];
                $model->provUmum = $modelProvUmum->getPrimaryKey();
                $model->kelasTanggungan = $modelKelasTanggungan->getPrimaryKey();
                $model->jenisPeserta = $modelJenisPeserta->getPrimaryKey();
                if($model->save()){
                    $this->redirect(array('view', 'id' => $model->id));
                }
            }
            else{
                $this->render('bpjs', array(
                    'model' => $model,
                ));                
            }
        }

        $this->render('bpjs', array(
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
        // $this->performAjaxValidation($model);
        $string = "string";

        if (isset($_POST['Peserta'])) {
            $model->attributes = $_POST['Peserta'];


            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('update', array(
            'model' => $model,
            'string' => $string,
        ));
    }

//    public function actionBpjs($id) {
//
//        // die('masuk');
//        $model = new Peserta();
//
//        // Uncomment the following line if AJAX validation is needed
//        // $this->performAjaxValidation($model);
//
//        if (isset($_POST['Peserta'])) {
//            $model->attributes = $_POST['Peserta'];
////            die("kartuxxx: ".$model->noKartu);
//
//            $url = "http://localhost/hf_API/index.php/peserta/" . $model->noKartu;
//            $response = $this->get_web_page($url);
//
//            $resArr = array();
//            $resArr = json_decode($response);
//
//            echo "<pre>";
//            print_r($resArr);
//            echo "</pre>";
//                  var_dump($resArr->response->peserta->noKartu);
//
//            $this->render('view', array(
//                'model' => $this->loadModel($id),
//            ));
//        }
//
//        $this->render('update_bpjs', array(
//            'model' => $model,
//        ));
//    }

    public function actionBpjs() {
        $model = new Peserta();
        $modelProvUmum = new Provumum();
        $modelKelasTanggungan = new Kelastanggungan();
        $modelJenisPeserta = new Jenispeserta();
//
//        // Uncomment the following line if AJAX validation is needed
//        // $this->performAjaxValidation($model);
//
        if (isset($_POST['Peserta'])) {
//            die("id : ".$id);
            $model->attributes = $_POST['Peserta'];
            // die("kartuxxx: " . $model->noKartu);
            $data = "19157";
            // $secretKey = "7789";
            $secretKey = "8eY883B7AF"; //Ganti dengan consumerSecret dari BPJS
            $url = "http://dvlp.bpjs-kesehatan.go.id:8081/devWsLokalRest/Peserta/Peserta/" . $model->noKartu;
            // die($url);
            date_default_timezone_set('UTC');
            $tStamp = strval(time() - strtotime('1970-01-01 00:00:00'));
            $signature = hash_hmac('sha256', $data . "&" . $tStamp, $secretKey, true);
            $encodedSignature = base64_encode($signature);
            $urlencodedSignature = urlencode($encodedSignature);

            // echo "X-cons-id: " .$data ."";
            // echo "X-timestamp:" .$tStamp ."";
            // echo "X-signature: " .$encodedSignature."";

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                "X-cons-id: $data",
                "X-timestamp: $tStamp",
                "X-signature: $encodedSignature"
            ));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $url);

            // die("".$url);

            $send = curl_exec($ch);
            if ($send === false) {
                die('Error fetching data: ' . curl_error($ch));
            }

            // echo '';
            // echo htmlspecialchars("$send", ENT_QUOTES);

            $resArr = array();
            $resArr = json_decode($send);
            
            /*
            echo "<pre>";
            print_r($resArr);
            echo "</pre>";
            die();
            */
            $modelJenisPeserta->kdJenisPeserta= $resArr->response->peserta->jenisPeserta->kdJenisPeserta;
            $modelJenisPeserta->nmJenisPeserta= $resArr->response->peserta->jenisPeserta->nmJenisPeserta;
            $modelProvUmum->kdCabang = $resArr->response->peserta->provUmum->kdCabang;
            $modelProvUmum->kdProvider = $resArr->response->peserta->provUmum->kdProvider;
            $modelProvUmum->nmCabang = $resArr->response->peserta->provUmum->nmCabang;
            $modelProvUmum->nmProvider = $resArr->response->peserta->provUmum->nmProvider;
            $modelKelasTanggungan->kdKelas = $resArr->response->peserta->kelasTanggungan->kdKelas;
            $modelKelasTanggungan->nmKelas = $resArr->response->peserta->kelasTanggungan->nmKelas;
            $model->noKartu = $resArr->response->peserta->noKartu;
            $model->nik = $resArr->response->peserta->nik;
            $model->nama = $resArr->response->peserta->nama;
            $model->pisa = $resArr->response->peserta->pisa;
            $model->sex = $resArr->response->peserta->sex;
            $model->tglLahir = $resArr->response->peserta->tglLahir;
            $model->tglCetakKartu = $resArr->response->peserta->tglCetakKartu;
            //$model->sex = $resArr->response->peserta->sex;

        $this->render('create_bpjs', array(
            'model' => $model,
            'modelProvUmum' => $modelProvUmum,
            'modelKelasTanggungan' => $modelKelasTanggungan,
            'modelJenisPeserta' => $modelJenisPeserta,
        ));

      
                
        }
        else{
            $this->render('update_bpjs', array(
                'model' => $model,
            ));
        }
    }



    public function actionPrintPDF($id){
        $model = $this->loadModel($id);
        $pdf = new SEPHeader();
        $html2pdf = Yii::app()->ePdf->HTML2PDF('L','A4','en');
        $html2pdf->pdf->SetDisplayMode("fullpage");
        ob_start();
        echo $this->renderPartial('sepprint',array('model'=>$model, 'pdf'=>$pdf,true));
        $content = ob_get_clean();
        $html2pdf->WriteHTML($content,false);
        $html2pdf->Output();
    }

    public function get_web_page($url) {
        $options = array(
            CURLOPT_RETURNTRANSFER => true, // return web page
            CURLOPT_HEADER => false, // don't return headers
            CURLOPT_FOLLOWLOCATION => true, // follow redirects
            CURLOPT_MAXREDIRS => 10, // stop after 10 redirects
            CURLOPT_ENCODING => "", // handle compressed
            CURLOPT_USERAGENT => "test", // name of client
            CURLOPT_AUTOREFERER => true, // set referrer on redirect
            CURLOPT_CONNECTTIMEOUT => 120, // time-out on connect
            CURLOPT_TIMEOUT => 120, // time-out on response
        );

        $ch = curl_init($url);
        curl_setopt_array($ch, $options);

        $content = curl_exec($ch);

        curl_close($ch);

        return $content;
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
        $dataProvider = new CActiveDataProvider('Peserta');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new Peserta('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Peserta']))
            $model->attributes = $_GET['Peserta'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Peserta the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = Peserta::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Peserta $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'peserta-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
