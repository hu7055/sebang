<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getModuleSkinDotList");
$query->setAction("select");
$query->setPriority("");

${'skin65_argument'} = new ConditionArgument('skin', $args->skin, 'like');
${'skin65_argument'}->ensureDefaultValue('.');
${'skin65_argument'}->createConditionValue();
if(!${'skin65_argument'}->isValid()) return ${'skin65_argument'}->getErrorMessage();
if(${'skin65_argument'} !== null) ${'skin65_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('`module`')
,new SelectExpression('`skin`')
));
$query->setTables(array(
new Table('`xe_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`skin`',$skin65_argument,"like")))
));
$query->setGroups(array(
'`skin`' ));
$query->setOrder(array());
$query->setLimit();
return $query; ?>