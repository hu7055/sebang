<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMenuItemByUrl");
$query->setAction("select");
$query->setPriority("");

${'url50_argument'} = new ConditionArgument('url', $args->url, 'equal');
${'url50_argument'}->checkNotNull();
${'url50_argument'}->createConditionValue();
if(!${'url50_argument'}->isValid()) return ${'url50_argument'}->getErrorMessage();
if(${'url50_argument'} !== null) ${'url50_argument'}->setColumnType('varchar');
if(isset($args->is_shortcut)) {
${'is_shortcut51_argument'} = new ConditionArgument('is_shortcut', $args->is_shortcut, 'equal');
${'is_shortcut51_argument'}->createConditionValue();
if(!${'is_shortcut51_argument'}->isValid()) return ${'is_shortcut51_argument'}->getErrorMessage();
} else
${'is_shortcut51_argument'} = NULL;if(${'is_shortcut51_argument'} !== null) ${'is_shortcut51_argument'}->setColumnType('char');

${'site_srl52_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl52_argument'}->checkNotNull();
${'site_srl52_argument'}->createConditionValue();
if(!${'site_srl52_argument'}->isValid()) return ${'site_srl52_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_menu_item`', '`MI`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`MI`.`url`',$url50_argument,"equal")
,new ConditionWithArgument('`MI`.`is_shortcut`',$is_shortcut51_argument,"equal", 'and')
,new ConditionSubquery('`MI`.`menu_srl`',new Subquery('`getSiteSrl`', array(
new SelectExpression('`menu_srl`')
), 
array(
new Table('`xe_menu`', '`M`')
),
array(
new ConditionGroup(array(
new ConditionWithArgument('`M`.`site_srl`',$site_srl52_argument,"equal")))
),
array(),
array(),
null
),"in", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>