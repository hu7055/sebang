<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getActionForward");
$query->setAction("select");
$query->setPriority("");
if(isset($args->act)) {
${'act66_argument'} = new ConditionArgument('act', $args->act, 'equal');
${'act66_argument'}->createConditionValue();
if(!${'act66_argument'}->isValid()) return ${'act66_argument'}->getErrorMessage();
} else
${'act66_argument'} = NULL;if(${'act66_argument'} !== null) ${'act66_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_action_forward`', '`action_forward`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`act`',$act66_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>