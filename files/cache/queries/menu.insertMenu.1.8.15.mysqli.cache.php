<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertMenu");
$query->setAction("insert");
$query->setPriority("");

${'menu_srl3_argument'} = new Argument('menu_srl', $args->{'menu_srl'});
${'menu_srl3_argument'}->checkFilter('number');
${'menu_srl3_argument'}->checkNotNull();
if(!${'menu_srl3_argument'}->isValid()) return ${'menu_srl3_argument'}->getErrorMessage();
if(${'menu_srl3_argument'} !== null) ${'menu_srl3_argument'}->setColumnType('number');

${'site_srl4_argument'} = new Argument('site_srl', $args->{'site_srl'});
${'site_srl4_argument'}->checkFilter('number');
${'site_srl4_argument'}->ensureDefaultValue('0');
${'site_srl4_argument'}->checkNotNull();
if(!${'site_srl4_argument'}->isValid()) return ${'site_srl4_argument'}->getErrorMessage();
if(${'site_srl4_argument'} !== null) ${'site_srl4_argument'}->setColumnType('number');

${'title5_argument'} = new Argument('title', $args->{'title'});
${'title5_argument'}->checkNotNull();
if(!${'title5_argument'}->isValid()) return ${'title5_argument'}->getErrorMessage();
if(${'title5_argument'} !== null) ${'title5_argument'}->setColumnType('varchar');

${'listorder6_argument'} = new Argument('listorder', $args->{'listorder'});
${'listorder6_argument'}->checkNotNull();
if(!${'listorder6_argument'}->isValid()) return ${'listorder6_argument'}->getErrorMessage();
if(${'listorder6_argument'} !== null) ${'listorder6_argument'}->setColumnType('number');

${'regdate7_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate7_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate7_argument'}->isValid()) return ${'regdate7_argument'}->getErrorMessage();
if(${'regdate7_argument'} !== null) ${'regdate7_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`menu_srl`', ${'menu_srl3_argument'})
,new InsertExpression('`site_srl`', ${'site_srl4_argument'})
,new InsertExpression('`title`', ${'title5_argument'})
,new InsertExpression('`listorder`', ${'listorder6_argument'})
,new InsertExpression('`regdate`', ${'regdate7_argument'})
));
$query->setTables(array(
new Table('`xe_menu`', '`menu`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>