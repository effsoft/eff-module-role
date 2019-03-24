<?php
namespace effsoft\eff\module\role;

use effsoft\eff\EffModule;

class Module extends EffModule{
    public $module_name = 'role';
    public $dir = __DIR__;

    public function init()
    {
        parent::init();

        $this->registAlias();

        $this->registerThemes();

        $this->registTranslations();

        $this->registSubModules(
            [
                'admin' =>
                    [
                        'class' => 'effsoft\eff\module\role\modules\admin\Module',
                    ],
            ]
        );
    }
}