<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMemberCountByDate");
$query->setAction("select");
$query->setPriority("");
if(isset($args->regDate)) {
${'regDate51_argument'} = new ConditionArgument('regDate', $args->regDate, 'like_prefix');
${'regDate51_argument'}->createConditionValue();
if(!${'regDate51_argument'}->isValid()) return ${'regDate51_argument'}->getErrorMessage();
} else
${'regDate51_argument'} = NULL;if(${'regDate51_argument'} !== null) ${'regDate51_argument'}->setColumnType('date');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_member`', '`member`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`regdate`',$regDate51_argument,"like_prefix")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>