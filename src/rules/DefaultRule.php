<?php

namespace effsoft\eff\module\role\rules;

use effsoft\eff\module\passport\models\UserModel;
use yii\rbac\Rule;

class DefaultRule extends Rule
{
    public $name = 'default_rule';

    public function execute($uid, $item, $params)
    {
        if (\Yii::$app->user->isGuest){
            return false;
        }

        $uid = strval($uid);
        $user = \Yii::$app->user->identity;

        if ($user->email === \Yii::$app->params['admin_email']){
            return true;
        }

        return \Yii::$app->authManager->checkAccess($uid,$item,$params);
    }
}