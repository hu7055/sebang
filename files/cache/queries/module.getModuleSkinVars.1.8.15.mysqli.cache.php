<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getModuleSkinVars");
$query->setAction("select");
$query->setPriority("");

${'module_srl9_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl9_argument'}->checkFilter('number');
${'module_srl9_argument'}->checkNotNull();
${'module_srl9_argument'}->createConditionValue();
if(!${'module_srl9_argument'}->isValid()) return ${'module_srl9_argument'}->getErrorMessage();
if(${'module_srl9_argument'} !== null) ${'module_srl9_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_module_skins`', '`module_skins`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl9_argument,"in")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>