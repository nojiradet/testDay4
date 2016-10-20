<?php

namespace app\controllers;

class Report_com_detailController extends \yii\web\Controller
{
    public function actionIndex($id)
    {
        $conn=\Yii::$app->db;
        $sql='select * from com where com_type_id = :id';
        $cmd=$conn->createCommand($sql);
        $cmd->bindValue(':id',$id);
        $data=$cmd->queryAll();
        return $this->render('index',['data_show'=>$data]);
    }

}
