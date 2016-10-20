<?php

namespace app\controllers;

class ChartcomController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $connection = \Yii::$app->db;
$sql = 'SELECT
        COUNT(*) AS cdata,
        com_type.com_type_name
        FROM
        com
        INNER JOIN com_type ON com.com_type_id = com_type.com_type_id
        GROUP BY
        com.com_type_id';
$model = $connection->createCommand($sql);
$data = $model->queryAll();
        return $this->render('index',['data'=>$data]);
    }

}
