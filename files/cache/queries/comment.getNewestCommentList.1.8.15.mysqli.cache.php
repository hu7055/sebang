<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getNewestCommentList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->status)) {
${'status55_argument'} = new ConditionArgument('status', $args->status, 'equal');
${'status55_argument'}->createConditionValue();
if(!${'status55_argument'}->isValid()) return ${'status55_argument'}->getErrorMessage();
} else
${'status55_argument'} = NULL;if(${'status55_argument'} !== null) ${'status55_argument'}->setColumnType('number');
if(isset($args->module_srl)) {
${'module_srl56_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl56_argument'}->checkFilter('number');
${'module_srl56_argument'}->createConditionValue();
if(!${'module_srl56_argument'}->isValid()) return ${'module_srl56_argument'}->getErrorMessage();
} else
${'module_srl56_argument'} = NULL;if(${'module_srl56_argument'} !== null) ${'module_srl56_argument'}->setColumnType('number');
if(isset($args->document_srl)) {
${'document_srl57_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl57_argument'}->checkFilter('number');
${'document_srl57_argument'}->createConditionValue();
if(!${'document_srl57_argument'}->isValid()) return ${'document_srl57_argument'}->getErrorMessage();
} else
${'document_srl57_argument'} = NULL;if(${'document_srl57_argument'} !== null) ${'document_srl57_argument'}->setColumnType('number');

${'list_count59_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count59_argument'}->ensureDefaultValue('20');
if(!${'list_count59_argument'}->isValid()) return ${'list_count59_argument'}->getErrorMessage();

${'sort_index58_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index58_argument'}->ensureDefaultValue('list_order');
if(!${'sort_index58_argument'}->isValid()) return ${'sort_index58_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_comments`', '`comments`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`status`',$status55_argument,"equal", 'and')
,new ConditionWithArgument('`module_srl`',$module_srl56_argument,"in", 'and')
,new ConditionWithArgument('`document_srl`',$document_srl57_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index58_argument'}, "asc")
));
$query->setLimit(new Limit(${'list_count59_argument'}));
return $query; ?>