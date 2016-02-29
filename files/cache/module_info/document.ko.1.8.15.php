<?php if(!defined("__XE__")) exit();
$info = new stdClass;
$info->default_index_act = '';
$info->setup_index_act='';
$info->simple_setup_index_act='';
$info->admin_index_act = 'dispDocumentAdminList';
$info->permission = new stdClass;
$info->permission->dispDocumentAdminList = 'manager';
$info->permission->dispDocumentManageDocument = 'member';
$info->permission->getDocumentCategories = 'member';
$info->permission->getDocumentCategoryTplInfo = 'member';
$info->permission->procDocumentAddCart = 'member';
$info->permission->procDocumentInsertCategory = 'member';
$info->permission->procDocumentManageCheckedDocument = 'member';
$info->permission->procDocumentMoveCategory = 'member';
$info->permission->procDocumentDeleteCategory = 'member';
$info->permission->procDocumentMakeXmlFile = 'member';
$info->permission->procDocumentAdminMoveToTrash = 'member';
$info->permission->procDocumentAdminInsertExtraVar = 'manager';
$info->permission->procDocumentAdminDeleteExtraVar = 'manager';
$info->menu = new stdClass;
$info->menu->document = new stdClass;
$info->menu->document->title='문서';
$info->menu->document->type='';
$info->action = new stdClass;
$info->action->dispDocumentPrint = new stdClass;
$info->action->dispDocumentPrint->type='view';
$info->action->dispDocumentPrint->grant='guest';
$info->action->dispDocumentPrint->standalone='true';
$info->action->dispDocumentPrint->ruleset='';
$info->action->dispDocumentPrint->method='';
$info->action->dispDocumentPreview = new stdClass;
$info->action->dispDocumentPreview->type='view';
$info->action->dispDocumentPreview->grant='guest';
$info->action->dispDocumentPreview->standalone='true';
$info->action->dispDocumentPreview->ruleset='';
$info->action->dispDocumentPreview->method='';
$info->action->dispDocumentManageDocument = new stdClass;
$info->action->dispDocumentManageDocument->type='view';
$info->action->dispDocumentManageDocument->grant='guest';
$info->action->dispDocumentManageDocument->standalone='true';
$info->action->dispDocumentManageDocument->ruleset='';
$info->action->dispDocumentManageDocument->method='';
$info->action->dispTempSavedList = new stdClass;
$info->action->dispTempSavedList->type='view';
$info->action->dispTempSavedList->grant='guest';
$info->action->dispTempSavedList->standalone='true';
$info->action->dispTempSavedList->ruleset='';
$info->action->dispTempSavedList->method='';
$info->action->getDocumentCategories = new stdClass;
$info->action->getDocumentCategories->type='model';
$info->action->getDocumentCategories->grant='guest';
$info->action->getDocumentCategories->standalone='true';
$info->action->getDocumentCategories->ruleset='';
$info->action->getDocumentCategories->method='';
$info->action->getDocumentMenu = new stdClass;
$info->action->getDocumentMenu->type='model';
$info->action->getDocumentMenu->grant='guest';
$info->action->getDocumentMenu->standalone='true';
$info->action->getDocumentMenu->ruleset='';
$info->action->getDocumentMenu->method='';
$info->action->procDocumentVoteUp = new stdClass;
$info->action->procDocumentVoteUp->type='controller';
$info->action->procDocumentVoteUp->grant='guest';
$info->action->procDocumentVoteUp->standalone='true';
$info->action->procDocumentVoteUp->ruleset='';
$info->action->procDocumentVoteUp->method='';
$info->action->procDocumentVoteDown = new stdClass;
$info->action->procDocumentVoteDown->type='controller';
$info->action->procDocumentVoteDown->grant='guest';
$info->action->procDocumentVoteDown->standalone='true';
$info->action->procDocumentVoteDown->ruleset='';
$info->action->procDocumentVoteDown->method='';
$info->action->procDocumentDeclare = new stdClass;
$info->action->procDocumentDeclare->type='controller';
$info->action->procDocumentDeclare->grant='guest';
$info->action->procDocumentDeclare->standalone='true';
$info->action->procDocumentDeclare->ruleset='';
$info->action->procDocumentDeclare->method='';
$info->action->procDocumentAddCart = new stdClass;
$info->action->procDocumentAddCart->type='controller';
$info->action->procDocumentAddCart->grant='guest';
$info->action->procDocumentAddCart->standalone='true';
$info->action->procDocumentAddCart->ruleset='';
$info->action->procDocumentAddCart->method='';
$info->action->procDocumentManageCheckedDocument = new stdClass;
$info->action->procDocumentManageCheckedDocument->type='controller';
$info->action->procDocumentManageCheckedDocument->grant='guest';
$info->action->procDocumentManageCheckedDocument->standalone='true';
$info->action->procDocumentManageCheckedDocument->ruleset='';
$info->action->procDocumentManageCheckedDocument->method='';
$info->action->procDocumentInsertModuleConfig = new stdClass;
$info->action->procDocumentInsertModuleConfig->type='controller';
$info->action->procDocumentInsertModuleConfig->grant='guest';
$info->action->procDocumentInsertModuleConfig->standalone='true';
$info->action->procDocumentInsertModuleConfig->ruleset='';
$info->action->procDocumentInsertModuleConfig->method='';
$info->menu->document->index='dispDocumentAdminList';
$info->menu->document->acts[0]='dispDocumentAdminList';
$info->action->dispDocumentAdminList = new stdClass;
$info->action->dispDocumentAdminList->type='view';
$info->action->dispDocumentAdminList->grant='guest';
$info->action->dispDocumentAdminList->standalone='true';
$info->action->dispDocumentAdminList->ruleset='';
$info->action->dispDocumentAdminList->method='';
$info->action->dispDocumentAdminConfig = new stdClass;
$info->action->dispDocumentAdminConfig->type='view';
$info->action->dispDocumentAdminConfig->grant='guest';
$info->action->dispDocumentAdminConfig->standalone='true';
$info->action->dispDocumentAdminConfig->ruleset='';
$info->action->dispDocumentAdminConfig->method='';
$info->menu->document->acts[1]='dispDocumentAdminAlias';
$info->action->dispDocumentAdminAlias = new stdClass;
$info->action->dispDocumentAdminAlias->type='view';
$info->action->dispDocumentAdminAlias->grant='guest';
$info->action->dispDocumentAdminAlias->standalone='true';
$info->action->dispDocumentAdminAlias->ruleset='';
$info->action->dispDocumentAdminAlias->method='';
$info->menu->document->acts[2]='dispDocumentAdminDeclared';
$info->action->dispDocumentAdminDeclared = new stdClass;
$info->action->dispDocumentAdminDeclared->type='view';
$info->action->dispDocumentAdminDeclared->grant='guest';
$info->action->dispDocumentAdminDeclared->standalone='true';
$info->action->dispDocumentAdminDeclared->ruleset='';
$info->action->dispDocumentAdminDeclared->method='';
$info->menu->document->acts[3]='dispDocumentAdminTrashList';
$info->action->dispDocumentAdminTrashList = new stdClass;
$info->action->dispDocumentAdminTrashList->type='view';
$info->action->dispDocumentAdminTrashList->grant='guest';
$info->action->dispDocumentAdminTrashList->standalone='true';
$info->action->dispDocumentAdminTrashList->ruleset='';
$info->action->dispDocumentAdminTrashList->method='';
$info->action->getDocumentCategoryTplInfo = new stdClass;
$info->action->getDocumentCategoryTplInfo->type='model';
$info->action->getDocumentCategoryTplInfo->grant='guest';
$info->action->getDocumentCategoryTplInfo->standalone='true';
$info->action->getDocumentCategoryTplInfo->ruleset='';
$info->action->getDocumentCategoryTplInfo->method='';
$info->action->getDocumentVotedMemberList = new stdClass;
$info->action->getDocumentVotedMemberList->type='model';
$info->action->getDocumentVotedMemberList->grant='guest';
$info->action->getDocumentVotedMemberList->standalone='true';
$info->action->getDocumentVotedMemberList->ruleset='';
$info->action->getDocumentVotedMemberList->method='';
$info->action->procDocumentInsertCategory = new stdClass;
$info->action->procDocumentInsertCategory->type='controller';
$info->action->procDocumentInsertCategory->grant='guest';
$info->action->procDocumentInsertCategory->standalone='true';
$info->action->procDocumentInsertCategory->ruleset='insertCategory';
$info->action->procDocumentInsertCategory->method='';
$info->action->procDocumentDeleteCategory = new stdClass;
$info->action->procDocumentDeleteCategory->type='controller';
$info->action->procDocumentDeleteCategory->grant='guest';
$info->action->procDocumentDeleteCategory->standalone='true';
$info->action->procDocumentDeleteCategory->ruleset='';
$info->action->procDocumentDeleteCategory->method='';
$info->action->procDocumentMoveCategory = new stdClass;
$info->action->procDocumentMoveCategory->type='controller';
$info->action->procDocumentMoveCategory->grant='guest';
$info->action->procDocumentMoveCategory->standalone='true';
$info->action->procDocumentMoveCategory->ruleset='';
$info->action->procDocumentMoveCategory->method='';
$info->action->procDocumentMakeXmlFile = new stdClass;
$info->action->procDocumentMakeXmlFile->type='controller';
$info->action->procDocumentMakeXmlFile->grant='guest';
$info->action->procDocumentMakeXmlFile->standalone='true';
$info->action->procDocumentMakeXmlFile->ruleset='';
$info->action->procDocumentMakeXmlFile->method='';
$info->action->procDocumentTempSave = new stdClass;
$info->action->procDocumentTempSave->type='controller';
$info->action->procDocumentTempSave->grant='guest';
$info->action->procDocumentTempSave->standalone='true';
$info->action->procDocumentTempSave->ruleset='';
$info->action->procDocumentTempSave->method='';
$info->action->procDocumentGetList = new stdClass;
$info->action->procDocumentGetList->type='controller';
$info->action->procDocumentGetList->grant='guest';
$info->action->procDocumentGetList->standalone='true';
$info->action->procDocumentGetList->ruleset='';
$info->action->procDocumentGetList->method='';
$info->action->procDocumentAdminInsertAlias = new stdClass;
$info->action->procDocumentAdminInsertAlias->type='controller';
$info->action->procDocumentAdminInsertAlias->grant='guest';
$info->action->procDocumentAdminInsertAlias->standalone='true';
$info->action->procDocumentAdminInsertAlias->ruleset='insertAlias';
$info->action->procDocumentAdminInsertAlias->method='';
$info->action->procDocumentAdminDeleteAlias = new stdClass;
$info->action->procDocumentAdminDeleteAlias->type='controller';
$info->action->procDocumentAdminDeleteAlias->grant='guest';
$info->action->procDocumentAdminDeleteAlias->standalone='true';
$info->action->procDocumentAdminDeleteAlias->ruleset='deleteAlias';
$info->action->procDocumentAdminDeleteAlias->method='';
$info->action->procDocumentAdminRestoreTrash = new stdClass;
$info->action->procDocumentAdminRestoreTrash->type='controller';
$info->action->procDocumentAdminRestoreTrash->grant='guest';
$info->action->procDocumentAdminRestoreTrash->standalone='true';
$info->action->procDocumentAdminRestoreTrash->ruleset='';
$info->action->procDocumentAdminRestoreTrash->method='';
$info->action->procDocumentAdminMoveExtraVar = new stdClass;
$info->action->procDocumentAdminMoveExtraVar->type='controller';
$info->action->procDocumentAdminMoveExtraVar->grant='guest';
$info->action->procDocumentAdminMoveExtraVar->standalone='true';
$info->action->procDocumentAdminMoveExtraVar->ruleset='';
$info->action->procDocumentAdminMoveExtraVar->method='';
$info->action->procDocumentAdminInsertExtraVar = new stdClass;
$info->action->procDocumentAdminInsertExtraVar->type='controller';
$info->action->procDocumentAdminInsertExtraVar->grant='guest';
$info->action->procDocumentAdminInsertExtraVar->standalone='true';
$info->action->procDocumentAdminInsertExtraVar->ruleset='insertExtraVar';
$info->action->procDocumentAdminInsertExtraVar->method='';
$info->action->procDocumentAdminDeleteExtraVar = new stdClass;
$info->action->procDocumentAdminDeleteExtraVar->type='controller';
$info->action->procDocumentAdminDeleteExtraVar->grant='guest';
$info->action->procDocumentAdminDeleteExtraVar->standalone='true';
$info->action->procDocumentAdminDeleteExtraVar->ruleset='';
$info->action->procDocumentAdminDeleteExtraVar->method='';
$info->action->procDocumentAdminDeleteChecked = new stdClass;
$info->action->procDocumentAdminDeleteChecked->type='controller';
$info->action->procDocumentAdminDeleteChecked->grant='guest';
$info->action->procDocumentAdminDeleteChecked->standalone='true';
$info->action->procDocumentAdminDeleteChecked->ruleset='';
$info->action->procDocumentAdminDeleteChecked->method='';
$info->action->procDocumentAdminInsertConfig = new stdClass;
$info->action->procDocumentAdminInsertConfig->type='controller';
$info->action->procDocumentAdminInsertConfig->grant='guest';
$info->action->procDocumentAdminInsertConfig->standalone='true';
$info->action->procDocumentAdminInsertConfig->ruleset='';
$info->action->procDocumentAdminInsertConfig->method='';
$info->action->procDocumentAdminDeleteAllThumbnail = new stdClass;
$info->action->procDocumentAdminDeleteAllThumbnail->type='controller';
$info->action->procDocumentAdminDeleteAllThumbnail->grant='guest';
$info->action->procDocumentAdminDeleteAllThumbnail->standalone='true';
$info->action->procDocumentAdminDeleteAllThumbnail->ruleset='';
$info->action->procDocumentAdminDeleteAllThumbnail->method='';
$info->action->procDocumentAdminCancelDeclare = new stdClass;
$info->action->procDocumentAdminCancelDeclare->type='controller';
$info->action->procDocumentAdminCancelDeclare->grant='guest';
$info->action->procDocumentAdminCancelDeclare->standalone='true';
$info->action->procDocumentAdminCancelDeclare->ruleset='';
$info->action->procDocumentAdminCancelDeclare->method='';
$info->action->procDocumentAdminMoveToTrash = new stdClass;
$info->action->procDocumentAdminMoveToTrash->type='controller';
$info->action->procDocumentAdminMoveToTrash->grant='guest';
$info->action->procDocumentAdminMoveToTrash->standalone='true';
$info->action->procDocumentAdminMoveToTrash->ruleset='';
$info->action->procDocumentAdminMoveToTrash->method='';
return $info;