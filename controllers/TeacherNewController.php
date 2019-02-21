<?php


namespace app\controllers;


use yii\web\Controller;

class TeacherNewController extends Controller
{
    public function actionStudentNew()
    {
        return $this->render('student-new');
    }
}