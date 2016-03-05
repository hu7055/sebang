<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getFavoriteList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->site_srl)) {
${'site_srl27_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl27_argument'}->createConditionValue();
if(!${'site_srl27_argument'}->isValid()) return ${'site_srl27_argument'}->getErrorMessage();
} else
${'site_srl27_argument'} = NULL;if(${'site_srl27_argument'} !== null) ${'site_srl27_argument'}->setColumnType('number');
if(isset($args->module)) {
${'module28_argument'} = new ConditionArgument('module', $args->module, 'equal');
${'module28_argument'}->createConditionValue();
if(!${'module28_argument'}->isValid()) return ${'module28_argument'}->getErrorMessage();
} else
${'module28_argument'} = NULL;if(${'module28_argument'} !== null) ${'module28_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_admin_favorite`', '`admin_favorite`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl27_argument,"equal")
,new ConditionWithArgument('`module`',$module28_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>