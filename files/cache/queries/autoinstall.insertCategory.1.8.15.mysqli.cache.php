<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertCategory");
$query->setAction("insert");
$query->setPriority("");

${'category_srl33_argument'} = new Argument('category_srl', $args->{'category_srl'});
${'category_srl33_argument'}->checkFilter('number');
${'category_srl33_argument'}->checkNotNull();
if(!${'category_srl33_argument'}->isValid()) return ${'category_srl33_argument'}->getErrorMessage();
if(${'category_srl33_argument'} !== null) ${'category_srl33_argument'}->setColumnType('number');

${'parent_srl34_argument'} = new Argument('parent_srl', $args->{'parent_srl'});
${'parent_srl34_argument'}->checkFilter('number');
${'parent_srl34_argument'}->checkNotNull();
if(!${'parent_srl34_argument'}->isValid()) return ${'parent_srl34_argument'}->getErrorMessage();
if(${'parent_srl34_argument'} !== null) ${'parent_srl34_argument'}->setColumnType('number');
if(isset($args->title)) {
${'title35_argument'} = new Argument('title', $args->{'title'});
if(!${'title35_argument'}->isValid()) return ${'title35_argument'}->getErrorMessage();
} else
${'title35_argument'} = NULL;if(${'title35_argument'} !== null) ${'title35_argument'}->setColumnType('varchar');

${'list_order36_argument'} = new Argument('list_order', $args->{'list_order'});
${'list_order36_argument'}->checkFilter('number');
${'list_order36_argument'}->checkNotNull();
if(!${'list_order36_argument'}->isValid()) return ${'list_order36_argument'}->getErrorMessage();
if(${'list_order36_argument'} !== null) ${'list_order36_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`category_srl`', ${'category_srl33_argument'})
,new InsertExpression('`parent_srl`', ${'parent_srl34_argument'})
,new InsertExpression('`title`', ${'title35_argument'})
,new InsertExpression('`list_order`', ${'list_order36_argument'})
));
$query->setTables(array(
new Table('`xe_ai_remote_categories`', '`ai_remote_categories`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>