<?php
namespace effsoft\eff\module\role\modules\admin\controllers;

use effsoft\eff\EffController;

class ManageController extends EffController{

    public function actionIndex(){

        return $this->render('//role/admin/manage/index');
    }
}