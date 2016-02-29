<?php if(!defined("__XE__")) exit();
$info = new stdClass;
$info->default_index_act = '';
$info->setup_index_act='';
$info->simple_setup_index_act='';
$info->admin_index_act = 'dispKrzipAdminConfig';
$info->menu = new stdClass;
$info->menu->krzip = new stdClass;
$info->menu->krzip->title='한국 우편번호';
$info->menu->krzip->type='all';
$info->action = new stdClass;
$info->menu->krzip->index='dispKrzipAdminConfig';
$info->menu->krzip->acts[0]='dispKrzipAdminConfig';
$info->action->dispKrzipAdminConfig = new stdClass;
$info->action->dispKrzipAdminConfig->type='view';
$info->action->dispKrzipAdminConfig->grant='guest';
$info->action->dispKrzipAdminConfig->standalone='true';
$info->action->dispKrzipAdminConfig->ruleset='';
$info->action->dispKrzipAdminConfig->method='';
$info->action->procKrzipAdminInsertConfig = new stdClass;
$info->action->procKrzipAdminInsertConfig->type='controller';
$info->action->procKrzipAdminInsertConfig->grant='guest';
$info->action->procKrzipAdminInsertConfig->standalone='true';
$info->action->procKrzipAdminInsertConfig->ruleset='krzipConfig';
$info->action->procKrzipAdminInsertConfig->method='';
$info->action->dispKrzipSearchForm = new stdClass;
$info->action->dispKrzipSearchForm->type='view';
$info->action->dispKrzipSearchForm->grant='guest';
$info->action->dispKrzipSearchForm->standalone='true';
$info->action->dispKrzipSearchForm->ruleset='';
$info->action->dispKrzipSearchForm->method='';
$info->action->getKrzipCodeList = new stdClass;
$info->action->getKrzipCodeList->type='model';
$info->action->getKrzipCodeList->grant='guest';
$info->action->getKrzipCodeList->standalone='true';
$info->action->getKrzipCodeList->ruleset='';
$info->action->getKrzipCodeList->method='';
return $info;