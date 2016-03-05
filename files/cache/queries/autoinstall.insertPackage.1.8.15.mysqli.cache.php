<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertPackage");
$query->setAction("insert");
$query->setPriority("");

${'package_srl38_argument'} = new Argument('package_srl', $args->{'package_srl'});
${'package_srl38_argument'}->checkFilter('number');
${'package_srl38_argument'}->checkNotNull();
if(!${'package_srl38_argument'}->isValid()) return ${'package_srl38_argument'}->getErrorMessage();
if(${'package_srl38_argument'} !== null) ${'package_srl38_argument'}->setColumnType('number');
if(isset($args->category_srl)) {
${'category_srl39_argument'} = new Argument('category_srl', $args->{'category_srl'});
${'category_srl39_argument'}->checkFilter('number');
if(!${'category_srl39_argument'}->isValid()) return ${'category_srl39_argument'}->getErrorMessage();
} else
${'category_srl39_argument'} = NULL;if(${'category_srl39_argument'} !== null) ${'category_srl39_argument'}->setColumnType('number');

${'path40_argument'} = new Argument('path', $args->{'path'});
${'path40_argument'}->checkNotNull();
if(!${'path40_argument'}->isValid()) return ${'path40_argument'}->getErrorMessage();
if(${'path40_argument'} !== null) ${'path40_argument'}->setColumnType('varchar');

${'have_instance41_argument'} = new Argument('have_instance', $args->{'have_instance'});
${'have_instance41_argument'}->checkNotNull();
if(!${'have_instance41_argument'}->isValid()) return ${'have_instance41_argument'}->getErrorMessage();
if(${'have_instance41_argument'} !== null) ${'have_instance41_argument'}->setColumnType('char');

${'updatedate42_argument'} = new Argument('updatedate', $args->{'updatedate'});
${'updatedate42_argument'}->checkNotNull();
if(!${'updatedate42_argument'}->isValid()) return ${'updatedate42_argument'}->getErrorMessage();
if(${'updatedate42_argument'} !== null) ${'updatedate42_argument'}->setColumnType('date');

${'latest_item_srl43_argument'} = new Argument('latest_item_srl', $args->{'latest_item_srl'});
${'latest_item_srl43_argument'}->checkNotNull();
if(!${'latest_item_srl43_argument'}->isValid()) return ${'latest_item_srl43_argument'}->getErrorMessage();
if(${'latest_item_srl43_argument'} !== null) ${'latest_item_srl43_argument'}->setColumnType('number');

${'version44_argument'} = new Argument('version', $args->{'version'});
${'version44_argument'}->checkNotNull();
if(!${'version44_argument'}->isValid()) return ${'version44_argument'}->getErrorMessage();
if(${'version44_argument'} !== null) ${'version44_argument'}->setColumnType('varchar');

$query->setColumns(array(
new InsertExpression('`package_srl`', ${'package_srl38_argument'})
,new InsertExpression('`category_srl`', ${'category_srl39_argument'})
,new InsertExpression('`path`', ${'path40_argument'})
,new InsertExpression('`have_instance`', ${'have_instance41_argument'})
,new InsertExpression('`updatedate`', ${'updatedate42_argument'})
,new InsertExpression('`latest_item_srl`', ${'latest_item_srl43_argument'})
,new InsertExpression('`version`', ${'version44_argument'})
));
$query->setTables(array(
new Table('`xe_autoinstall_packages`', '`autoinstall_packages`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>