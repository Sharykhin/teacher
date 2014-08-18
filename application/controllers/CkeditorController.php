<?php
class CkeditorController extends Controller
{
    public function actionCkupload()
    {

        $callback = $_GET['CKEditorFuncNum'];
        $file_name = mt_rand(1000,9999).'_'.time().'_'.$_FILES['upload']['name'];
        $file_name_tmp = $_FILES['upload']['tmp_name'];
        $uploadDir = Yii::app()->basePath.'/../public/web/upload/ckeditor_images/';
        if(!is_dir($uploadDir)) {
            mkdir($uploadDir,0777);
        }
        $full_path = $uploadDir.$file_name;
        if(move_uploaded_file($file_name_tmp, $full_path)) {
            $http_path =  Yii::app()->request->baseUrl.'/web/upload/ckeditor_images/'.$file_name;
        }
        echo "<script type=\"text/javascript\">window.parent.CKEDITOR.tools.callFunction(".$callback.",  \"".$http_path."\");</script>";
    }
}