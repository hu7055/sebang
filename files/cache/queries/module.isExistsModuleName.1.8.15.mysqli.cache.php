<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("isExistsModuleName");
$query->setAction("select");
$query->setPriority("");

${'site_srl26_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl26_argument'}->ensureDefaultValue('0');
${'site_srl26_argument'}->checkNotNull();
${'site_srl26_argument'}->createConditionValue();
if(!${'site_srl26_argument'}->isValid()) return ${'site_srl26_argument'}->getErrorMessage();
if(${'site_srl26_argument'} !== null) ${'site_srl26_argument'}->setColumnType('number');

${'mid27_argument'} = new ConditionArgument('mid', $args->mid, 'equal');
${'mid27_argument'}->checkNotNull();
${'mid27_argument'}->createConditionValue();
if(!${'mid27_argument'}->isValid()) return ${'mid27_argument'}->getErrorMessage();
if(${'mid27_argument'} !== null) ${'mid27_argument'}->setColumnType('varchar');

${'module_srl28_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'notequal');
${'module_srl28_argument'}->ensureDefaultValue('0');
${'module_srl28_argument'}->checkNotNull();
${'module_srl28_argument'}->createConditionValue();
if(!${'module_srl28_argument'}->isValid()) return ${'module_srl28_argument'}->getErrorMessage();
if(${'module_srl28_argument'} !== null) ${'module_srl28_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl26_argument,"equal")
,new ConditionWithArgument('`mid`',$mid27_argument,"equal", 'and')
,new ConditionWithArgument('`module_srl`',$module_srl28_argument,"notequal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>