<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getLayoutDotList");
$query->setAction("select");
$query->setPriority("");

${'site_srl60_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl60_argument'}->checkFilter('number');
${'site_srl60_argument'}->ensureDefaultValue('0');
${'site_srl60_argument'}->checkNotNull();
${'site_srl60_argument'}->createConditionValue();
if(!${'site_srl60_argument'}->isValid()) return ${'site_srl60_argument'}->getErrorMessage();
if(${'site_srl60_argument'} !== null) ${'site_srl60_argument'}->setColumnType('number');

${'layout_type61_argument'} = new ConditionArgument('layout_type', $args->layout_type, 'equal');
${'layout_type61_argument'}->ensureDefaultValue('P');
${'layout_type61_argument'}->createConditionValue();
if(!${'layout_type61_argument'}->isValid()) return ${'layout_type61_argument'}->getErrorMessage();
if(${'layout_type61_argument'} !== null) ${'layout_type61_argument'}->setColumnType('char');

${'layout62_argument'} = new ConditionArgument('layout', $args->layout, 'like');
${'layout62_argument'}->ensureDefaultValue('.');
${'layout62_argument'}->createConditionValue();
if(!${'layout62_argument'}->isValid()) return ${'layout62_argument'}->getErrorMessage();
if(${'layout62_argument'} !== null) ${'layout62_argument'}->setColumnType('varchar');

${'sort_index63_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index63_argument'}->ensureDefaultValue('layout_srl');
if(!${'sort_index63_argument'}->isValid()) return ${'sort_index63_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_layouts`', '`layouts`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl60_argument,"equal")
,new ConditionWithArgument('`layout_type`',$layout_type61_argument,"equal", 'and')
,new ConditionWithArgument('`layout`',$layout62_argument,"like", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index63_argument'}, "desc")
));
$query->setLimit();
return $query; ?>