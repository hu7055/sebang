<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getLatestPackage");
$query->setAction("select");
$query->setPriority("");

${'page30_argument'} = new Argument('page', $args->{'page'});
${'page30_argument'}->ensureDefaultValue('1');
if(!${'page30_argument'}->isValid()) return ${'page30_argument'}->getErrorMessage();

${'page_count31_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count31_argument'}->ensureDefaultValue('10');
if(!${'page_count31_argument'}->isValid()) return ${'page_count31_argument'}->getErrorMessage();

${'list_count32_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count32_argument'}->ensureDefaultValue('1');
if(!${'list_count32_argument'}->isValid()) return ${'list_count32_argument'}->getErrorMessage();

${'sort_index29_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index29_argument'}->ensureDefaultValue('updatedate');
if(!${'sort_index29_argument'}->isValid()) return ${'sort_index29_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_autoinstall_packages`', '`packages`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index29_argument'}, "desc")
));
$query->setLimit(new Limit(${'list_count32_argument'}, ${'page30_argument'}, ${'page_count31_argument'}));
return $query; ?>