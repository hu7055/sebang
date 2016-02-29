<?php if(!defined("__XE__")) exit();
$info = new stdClass;
$info->default_index_act = 'dispInstallIntroduce';
$info->setup_index_act='';
$info->simple_setup_index_act='';
$info->admin_index_act = '';
$info->action = new stdClass;
$info->action->dispInstallIntroduce = new stdClass;
$info->action->dispInstallIntroduce->type='view';
$info->action->dispInstallIntroduce->grant='guest';
$info->action->dispInstallIntroduce->standalone='true';
$info->action->dispInstallIntroduce->ruleset='';
$info->action->dispInstallIntroduce->method='';
$info->action->dispInstallLicenseAgreement = new stdClass;
$info->action->dispInstallLicenseAgreement->type='view';
$info->action->dispInstallLicenseAgreement->grant='guest';
$info->action->dispInstallLicenseAgreement->standalone='true';
$info->action->dispInstallLicenseAgreement->ruleset='';
$info->action->dispInstallLicenseAgreement->method='';
$info->action->dispInstallCheckEnv = new stdClass;
$info->action->dispInstallCheckEnv->type='view';
$info->action->dispInstallCheckEnv->grant='guest';
$info->action->dispInstallCheckEnv->standalone='true';
$info->action->dispInstallCheckEnv->ruleset='';
$info->action->dispInstallCheckEnv->method='';
$info->action->dispInstallSelectDB = new stdClass;
$info->action->dispInstallSelectDB->type='view';
$info->action->dispInstallSelectDB->grant='guest';
$info->action->dispInstallSelectDB->standalone='true';
$info->action->dispInstallSelectDB->ruleset='';
$info->action->dispInstallSelectDB->method='';
$info->action->dispInstallDBForm = new stdClass;
$info->action->dispInstallDBForm->type='view';
$info->action->dispInstallDBForm->grant='guest';
$info->action->dispInstallDBForm->standalone='true';
$info->action->dispInstallDBForm->ruleset='';
$info->action->dispInstallDBForm->method='';
$info->action->dispInstallConfigForm = new stdClass;
$info->action->dispInstallConfigForm->type='view';
$info->action->dispInstallConfigForm->grant='guest';
$info->action->dispInstallConfigForm->standalone='true';
$info->action->dispInstallConfigForm->ruleset='';
$info->action->dispInstallConfigForm->method='';
$info->action->dispInstallManagerForm = new stdClass;
$info->action->dispInstallManagerForm->type='view';
$info->action->dispInstallManagerForm->grant='guest';
$info->action->dispInstallManagerForm->standalone='true';
$info->action->dispInstallManagerForm->ruleset='';
$info->action->dispInstallManagerForm->method='';
$info->action->procCubridDBSetting = new stdClass;
$info->action->procCubridDBSetting->type='controller';
$info->action->procCubridDBSetting->grant='guest';
$info->action->procCubridDBSetting->standalone='true';
$info->action->procCubridDBSetting->ruleset='cubrid';
$info->action->procCubridDBSetting->method='';
$info->action->procFirebirdDBSetting = new stdClass;
$info->action->procFirebirdDBSetting->type='controller';
$info->action->procFirebirdDBSetting->grant='guest';
$info->action->procFirebirdDBSetting->standalone='true';
$info->action->procFirebirdDBSetting->ruleset='firebird';
$info->action->procFirebirdDBSetting->method='';
$info->action->procMssqlDBSetting = new stdClass;
$info->action->procMssqlDBSetting->type='controller';
$info->action->procMssqlDBSetting->grant='guest';
$info->action->procMssqlDBSetting->standalone='true';
$info->action->procMssqlDBSetting->ruleset='mssql';
$info->action->procMssqlDBSetting->method='';
$info->action->procMysqlDBSetting = new stdClass;
$info->action->procMysqlDBSetting->type='controller';
$info->action->procMysqlDBSetting->grant='guest';
$info->action->procMysqlDBSetting->standalone='true';
$info->action->procMysqlDBSetting->ruleset='mysql';
$info->action->procMysqlDBSetting->method='';
$info->action->procPostgresqlDBSetting = new stdClass;
$info->action->procPostgresqlDBSetting->type='controller';
$info->action->procPostgresqlDBSetting->grant='guest';
$info->action->procPostgresqlDBSetting->standalone='true';
$info->action->procPostgresqlDBSetting->ruleset='postgresql';
$info->action->procPostgresqlDBSetting->method='';
$info->action->procSqliteDBSetting = new stdClass;
$info->action->procSqliteDBSetting->type='controller';
$info->action->procSqliteDBSetting->grant='guest';
$info->action->procSqliteDBSetting->standalone='true';
$info->action->procSqliteDBSetting->ruleset='sqlite';
$info->action->procSqliteDBSetting->method='';
$info->action->procConfigSetting = new stdClass;
$info->action->procConfigSetting->type='controller';
$info->action->procConfigSetting->grant='guest';
$info->action->procConfigSetting->standalone='true';
$info->action->procConfigSetting->ruleset='config';
$info->action->procConfigSetting->method='';
$info->action->procInstall = new stdClass;
$info->action->procInstall->type='controller';
$info->action->procInstall->grant='guest';
$info->action->procInstall->standalone='true';
$info->action->procInstall->ruleset='install';
$info->action->procInstall->method='';
$info->action->procInstallLicenseAggrement = new stdClass;
$info->action->procInstallLicenseAggrement->type='controller';
$info->action->procInstallLicenseAggrement->grant='guest';
$info->action->procInstallLicenseAggrement->standalone='true';
$info->action->procInstallLicenseAggrement->ruleset='';
$info->action->procInstallLicenseAggrement->method='';
$info->action->procInstallFTP = new stdClass;
$info->action->procInstallFTP->type='controller';
$info->action->procInstallFTP->grant='guest';
$info->action->procInstallFTP->standalone='true';
$info->action->procInstallFTP->ruleset='';
$info->action->procInstallFTP->method='';
$info->action->procInstallCheckFTP = new stdClass;
$info->action->procInstallCheckFTP->type='controller';
$info->action->procInstallCheckFTP->grant='guest';
$info->action->procInstallCheckFTP->standalone='true';
$info->action->procInstallCheckFTP->ruleset='';
$info->action->procInstallCheckFTP->method='';
$info->action->procInstallAdminInstall = new stdClass;
$info->action->procInstallAdminInstall->type='controller';
$info->action->procInstallAdminInstall->grant='guest';
$info->action->procInstallAdminInstall->standalone='true';
$info->action->procInstallAdminInstall->ruleset='';
$info->action->procInstallAdminInstall->method='';
$info->action->procInstallAdminUpdate = new stdClass;
$info->action->procInstallAdminUpdate->type='controller';
$info->action->procInstallAdminUpdate->grant='guest';
$info->action->procInstallAdminUpdate->standalone='true';
$info->action->procInstallAdminUpdate->ruleset='';
$info->action->procInstallAdminUpdate->method='';
$info->action->procInstallAdminSaveTimeZone = new stdClass;
$info->action->procInstallAdminSaveTimeZone->type='controller';
$info->action->procInstallAdminSaveTimeZone->grant='guest';
$info->action->procInstallAdminSaveTimeZone->standalone='true';
$info->action->procInstallAdminSaveTimeZone->ruleset='';
$info->action->procInstallAdminSaveTimeZone->method='';
$info->action->procInstallAdminUpdateIndexModule = new stdClass;
$info->action->procInstallAdminUpdateIndexModule->type='controller';
$info->action->procInstallAdminUpdateIndexModule->grant='guest';
$info->action->procInstallAdminUpdateIndexModule->standalone='true';
$info->action->procInstallAdminUpdateIndexModule->ruleset='';
$info->action->procInstallAdminUpdateIndexModule->method='';
$info->action->procInstallAdminSaveFTPInfo = new stdClass;
$info->action->procInstallAdminSaveFTPInfo->type='controller';
$info->action->procInstallAdminSaveFTPInfo->grant='guest';
$info->action->procInstallAdminSaveFTPInfo->standalone='true';
$info->action->procInstallAdminSaveFTPInfo->ruleset='installFtpInfo';
$info->action->procInstallAdminSaveFTPInfo->method='';
$info->action->procInstallAdminRemoveFTPInfo = new stdClass;
$info->action->procInstallAdminRemoveFTPInfo->type='controller';
$info->action->procInstallAdminRemoveFTPInfo->grant='guest';
$info->action->procInstallAdminRemoveFTPInfo->standalone='true';
$info->action->procInstallAdminRemoveFTPInfo->ruleset='';
$info->action->procInstallAdminRemoveFTPInfo->method='';
$info->action->procInstallAdminConfig = new stdClass;
$info->action->procInstallAdminConfig->type='controller';
$info->action->procInstallAdminConfig->grant='guest';
$info->action->procInstallAdminConfig->standalone='true';
$info->action->procInstallAdminConfig->ruleset='';
$info->action->procInstallAdminConfig->method='';
$info->action->procInstallAdminConfigIconUpload = new stdClass;
$info->action->procInstallAdminConfigIconUpload->type='controller';
$info->action->procInstallAdminConfigIconUpload->grant='guest';
$info->action->procInstallAdminConfigIconUpload->standalone='true';
$info->action->procInstallAdminConfigIconUpload->ruleset='';
$info->action->procInstallAdminConfigIconUpload->method='';
$info->action->getInstallFTPList = new stdClass;
$info->action->getInstallFTPList->type='model';
$info->action->getInstallFTPList->grant='guest';
$info->action->getInstallFTPList->standalone='true';
$info->action->getInstallFTPList->ruleset='';
$info->action->getInstallFTPList->method='';
return $info;