<?php
namespace effsoft\eff\module\role\rules;

use yii\rbac\Rule;

class SystemAdminRule extends Rule{

    public $name = 'system_admin';

    public function execute($user, $item, $params){
        return $user->email === \Yii::$app->params['admin-email'];
    }
}