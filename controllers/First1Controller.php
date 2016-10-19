<?php

namespace app\controllers;

class First1Controller extends \yii\web\Controller {

    public function actionIndex() {
        $title = 'ระบบรายงาน';

        $person= [
            ['fname' => 'สมชาย', 'lname' => 'ใจดี', 'email' => 'som@hotmail.com'],
            ['fname' => 'สมหญิง', 'lname' => 'ใจงาม', 'email' => 'ying@hotmail.com'],
            ['fname' => 'ชาติชาย', 'lname' => 'รักชาติ', 'email' => 'chatchai@hotmail.com']
        ];

        return $this->render('index', ['title' => $title,'person'=>$person]);
    }

}
