<?php namespace Jc91715\Demo\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Pops Back-end Controller
 */
class Pops extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Jc91715.Demo', 'demo', 'pops');
        $this->addJs('/plugins/jc91715/demo/assets/js/pop.js');

    }

    public function onCreateForm()
    {
        $this->asExtension('FormController')->create();

        return $this->makePartial('create_form');
    }

    public function onCreate()
    {
        $this->asExtension('FormController')->create_onSave();

        return $this->listRefresh();
    }

    public function onUpdateForm()
    {
        $this->asExtension('FormController')->update(post('record_id'));
        $this->vars['recordId'] = post('record_id');

        return $this->makePartial('update_form');
    }

    public function onUpdate()
    {
        $this->asExtension('FormController')->update_onSave(post('record_id'));

        return $this->listRefresh();
    }

    public function onDelete()
    {
        $this->asExtension('FormController')->update_onDelete(post('record_id'));

        return $this->listRefresh();
    }
}
