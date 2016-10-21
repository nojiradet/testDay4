<?php
namespace app\controllers;
use kartik\mpdf\Pdf;

class PdftestController extends \yii\web\Controller
{
      public function actionIndex() {
        
$conn=\Yii::$app->db;
$sql='SELECT
com.brand,com.asset_code,
com_service.*
FROM
com_service
INNER JOIN com ON com_service.com_id = com.com_id
';
        $cmd=$conn->createCommand($sql);
        $data=$cmd->queryAll();
        $content = $this->renderPartial('index',['data_show'=>$data]); 
        $pdf = new Pdf([
            // set to use core fonts only 
            'mode' => Pdf::MODE_UTF8, 
// A4 paper format 
            'format' => Pdf::FORMAT_A4, 
// portrait orientation 
            'orientation' => Pdf::ORIENT_PORTRAIT, 
// stream to browser inline 
            'destination' => Pdf::DEST_BROWSER, 
// your html content input 
            'content' => $content,
            'cssFile' => '@vendor/kartik-v/yii2-mpdf/assets/kv-mpdf-bootstrap.min.css',
// any css to be embedded if required 
            'cssInline' => 'body{font-family: "Garuda";font-size: 12pt;}', 
// set mPDF properties on the fly 
            'options' => ['title' => 'บันทึกข้อความ'],
// call mPDF methods on the fly 
            'methods' => [ 
            'SetHeader' => ['HPC 5 Ratchaburi'],
            'SetFooter' => ['{PAGENO}'], 
            ]
           ]); 
// return the pdf output as per the destination setting 
            return $pdf->render(); }
    }