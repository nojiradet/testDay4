<?php

namespace app\controllers;

class ReportcomserviceController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $conn=\Yii::$app->db;
        $sql='SELECT
com.brand,
com_service.*
FROM
com_service
INNER JOIN com ON com_service.com_id = com.com_id
';
        $cmd=$conn->createCommand($sql);
        $data=$cmd->queryAll();
        return $this->render('index',['data_show'=>$data]);
    }

}
