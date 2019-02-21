<?php


namespace app\controllers;


use yii\web\Controller;

class TeacherController extends Controller
{
    public function actionStudent()
    {
        $comment_view = "Test Yii2 Framework param controller view";
        return $this->render('student', ['test_controller_view' => $comment_view]);
    }
}