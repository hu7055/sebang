<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deletePackage");
$query->setAction("delete");
$query->setPriority("");

${'path45_argument'} = new ConditionArgument('path', $args->path, 'equal');
${'path45_argument'}->checkNotNull();
${'path45_argument'}->createConditionValue();
if(!${'path45_argument'}->isValid()) return ${'path45_argument'}->getErrorMessage();
if(${'path45_argument'} !== null) ${'path45_argument'}->setColumnType('varchar');

$query->setTables(array(
new Table('`xe_autoinstall_packages`', '`autoinstall_packages`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`path`',$path45_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>