<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertInstalledPackage");
$query->setAction("insert");
$query->setPriority("");

${'package_srl47_argument'} = new Argument('package_srl', $args->{'package_srl'});
${'package_srl47_argument'}->checkFilter('number');
${'package_srl47_argument'}->checkNotNull();
if(!${'package_srl47_argument'}->isValid()) return ${'package_srl47_argument'}->getErrorMessage();
if(${'package_srl47_argument'} !== null) ${'package_srl47_argument'}->setColumnType('number');

${'version48_argument'} = new Argument('version', $args->{'version'});
${'version48_argument'}->checkNotNull();
if(!${'version48_argument'}->isValid()) return ${'version48_argument'}->getErrorMessage();
if(${'version48_argument'} !== null) ${'version48_argument'}->setColumnType('varchar');

${'current_version49_argument'} = new Argument('current_version', $args->{'current_version'});
${'current_version49_argument'}->checkNotNull();
if(!${'current_version49_argument'}->isValid()) return ${'current_version49_argument'}->getErrorMessage();
if(${'current_version49_argument'} !== null) ${'current_version49_argument'}->setColumnType('varchar');
if(isset($args->need_update)) {
${'need_update50_argument'} = new Argument('need_update', $args->{'need_update'});
if(!${'need_update50_argument'}->isValid()) return ${'need_update50_argument'}->getErrorMessage();
} else
${'need_update50_argument'} = NULL;if(${'need_update50_argument'} !== null) ${'need_update50_argument'}->setColumnType('char');

$query->setColumns(array(
new InsertExpression('`package_srl`', ${'package_srl47_argument'})
,new InsertExpression('`version`', ${'version48_argument'})
,new InsertExpression('`current_version`', ${'current_version49_argument'})
,new InsertExpression('`need_update`', ${'need_update50_argument'})
));
$query->setTables(array(
new Table('`xe_ai_installed_packages`', '`ai_installed_packages`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>