<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getDocumentCountByDate");
$query->setAction("select");
$query->setPriority("");
if(isset($args->moduleSrlList)) {
${'moduleSrlList52_argument'} = new ConditionArgument('moduleSrlList', $args->moduleSrlList, 'in');
${'moduleSrlList52_argument'}->createConditionValue();
if(!${'moduleSrlList52_argument'}->isValid()) return ${'moduleSrlList52_argument'}->getErrorMessage();
} else
${'moduleSrlList52_argument'} = NULL;if(${'moduleSrlList52_argument'} !== null) ${'moduleSrlList52_argument'}->setColumnType('number');
if(isset($args->regDate)) {
${'regDate53_argument'} = new ConditionArgument('regDate', $args->regDate, 'like_prefix');
${'regDate53_argument'}->createConditionValue();
if(!${'regDate53_argument'}->isValid()) return ${'regDate53_argument'}->getErrorMessage();
} else
${'regDate53_argument'} = NULL;if(${'regDate53_argument'} !== null) ${'regDate53_argument'}->setColumnType('date');
if(isset($args->statusList)) {
${'statusList54_argument'} = new ConditionArgument('statusList', $args->statusList, 'in');
${'statusList54_argument'}->createConditionValue();
if(!${'statusList54_argument'}->isValid()) return ${'statusList54_argument'}->getErrorMessage();
} else
${'statusList54_argument'} = NULL;if(${'statusList54_argument'} !== null) ${'statusList54_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$moduleSrlList52_argument,"in")
,new ConditionWithArgument('`regdate`',$regDate53_argument,"like_prefix", 'and')
,new ConditionWithArgument('`status`',$statusList54_argument,"in", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>