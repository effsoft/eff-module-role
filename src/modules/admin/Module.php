<?php
namespace effsoft\eff\module\role\modules\admin;

use effsoft\eff\EffModule;

class Module extends EffModule {

    public $module_name = 'eff-module-role-admin';
    public $dir = __DIR__;

    public function init(){
        parent::init();

        $this->registAlias();

        $this->registerThemes();

        $this->registTranslations();
    }
}