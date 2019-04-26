<?php
namespace effsoft\eff\module\role\models;

use effsoft\eff\EffModel;

class PermissionForm extends EffModel{

    public $name;
    public $description;

    public function rules()
    {
        return [
            [['name', 'description'], 'trim'],
            ['name', 'required'],
            ['description','safe'],
            ['name', 'match', 'pattern' => '/^[\x{4e00}-\x{9fa5}A-Za-z0-9_]+$/u'],
            ['name', 'string', 'max' => 20],
            ['description', 'string', 'max' => 200],
        ];
    }
}