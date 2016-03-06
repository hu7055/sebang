<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateMenuItem");
$query->setAction("update");
$query->setPriority("");
if(isset($args->menu_srl)) {
${'menu_srl53_argument'} = new Argument('menu_srl', $args->{'menu_srl'});
if(!${'menu_srl53_argument'}->isValid()) return ${'menu_srl53_argument'}->getErrorMessage();
} else
${'menu_srl53_argument'} = NULL;if(${'menu_srl53_argument'} !== null) ${'menu_srl53_argument'}->setColumnType('number');
if(isset($args->parent_srl)) {
${'parent_srl54_argument'} = new Argument('parent_srl', $args->{'parent_srl'});
if(!${'parent_srl54_argument'}->isValid()) return ${'parent_srl54_argument'}->getErrorMessage();
} else
${'parent_srl54_argument'} = NULL;if(${'parent_srl54_argument'} !== null) ${'parent_srl54_argument'}->setColumnType('number');

${'name55_argument'} = new Argument('name', $args->{'name'});
${'name55_argument'}->checkNotNull();
if(!${'name55_argument'}->isValid()) return ${'name55_argument'}->getErrorMessage();
if(${'name55_argument'} !== null) ${'name55_argument'}->setColumnType('text');
if(isset($args->desc)) {
${'desc56_argument'} = new Argument('desc', $args->{'desc'});
if(!${'desc56_argument'}->isValid()) return ${'desc56_argument'}->getErrorMessage();
} else
${'desc56_argument'} = NULL;if(${'desc56_argument'} !== null) ${'desc56_argument'}->setColumnType('varchar');
if(isset($args->url)) {
${'url57_argument'} = new Argument('url', $args->{'url'});
if(!${'url57_argument'}->isValid()) return ${'url57_argument'}->getErrorMessage();
} else
${'url57_argument'} = NULL;if(${'url57_argument'} !== null) ${'url57_argument'}->setColumnType('varchar');
if(isset($args->is_shortcut)) {
${'is_shortcut58_argument'} = new Argument('is_shortcut', $args->{'is_shortcut'});
if(!${'is_shortcut58_argument'}->isValid()) return ${'is_shortcut58_argument'}->getErrorMessage();
} else
${'is_shortcut58_argument'} = NULL;if(${'is_shortcut58_argument'} !== null) ${'is_shortcut58_argument'}->setColumnType('char');
if(isset($args->open_window)) {
${'open_window59_argument'} = new Argument('open_window', $args->{'open_window'});
if(!${'open_window59_argument'}->isValid()) return ${'open_window59_argument'}->getErrorMessage();
} else
${'open_window59_argument'} = NULL;if(${'open_window59_argument'} !== null) ${'open_window59_argument'}->setColumnType('char');
if(isset($args->expand)) {
${'expand60_argument'} = new Argument('expand', $args->{'expand'});
if(!${'expand60_argument'}->isValid()) return ${'expand60_argument'}->getErrorMessage();
} else
${'expand60_argument'} = NULL;if(${'expand60_argument'} !== null) ${'expand60_argument'}->setColumnType('char');
if(isset($args->normal_btn)) {
${'normal_btn61_argument'} = new Argument('normal_btn', $args->{'normal_btn'});
if(!${'normal_btn61_argument'}->isValid()) return ${'normal_btn61_argument'}->getErrorMessage();
} else
${'normal_btn61_argument'} = NULL;if(${'normal_btn61_argument'} !== null) ${'normal_btn61_argument'}->setColumnType('varchar');
if(isset($args->hover_btn)) {
${'hover_btn62_argument'} = new Argument('hover_btn', $args->{'hover_btn'});
if(!${'hover_btn62_argument'}->isValid()) return ${'hover_btn62_argument'}->getErrorMessage();
} else
${'hover_btn62_argument'} = NULL;if(${'hover_btn62_argument'} !== null) ${'hover_btn62_argument'}->setColumnType('varchar');
if(isset($args->active_btn)) {
${'active_btn63_argument'} = new Argument('active_btn', $args->{'active_btn'});
if(!${'active_btn63_argument'}->isValid()) return ${'active_btn63_argument'}->getErrorMessage();
} else
${'active_btn63_argument'} = NULL;if(${'active_btn63_argument'} !== null) ${'active_btn63_argument'}->setColumnType('varchar');
if(isset($args->group_srls)) {
${'group_srls64_argument'} = new Argument('group_srls', $args->{'group_srls'});
if(!${'group_srls64_argument'}->isValid()) return ${'group_srls64_argument'}->getErrorMessage();
} else
${'group_srls64_argument'} = NULL;if(${'group_srls64_argument'} !== null) ${'group_srls64_argument'}->setColumnType('text');

${'menu_item_srl65_argument'} = new ConditionArgument('menu_item_srl', $args->menu_item_srl, 'equal');
${'menu_item_srl65_argument'}->checkFilter('number');
${'menu_item_srl65_argument'}->checkNotNull();
${'menu_item_srl65_argument'}->createConditionValue();
if(!${'menu_item_srl65_argument'}->isValid()) return ${'menu_item_srl65_argument'}->getErrorMessage();
if(${'menu_item_srl65_argument'} !== null) ${'menu_item_srl65_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`menu_srl`', ${'menu_srl53_argument'})
,new UpdateExpression('`parent_srl`', ${'parent_srl54_argument'})
,new UpdateExpression('`name`', ${'name55_argument'})
,new UpdateExpression('`desc`', ${'desc56_argument'})
,new UpdateExpression('`url`', ${'url57_argument'})
,new UpdateExpression('`is_shortcut`', ${'is_shortcut58_argument'})
,new UpdateExpression('`open_window`', ${'open_window59_argument'})
,new UpdateExpression('`expand`', ${'expand60_argument'})
,new UpdateExpression('`normal_btn`', ${'normal_btn61_argument'})
,new UpdateExpression('`hover_btn`', ${'hover_btn62_argument'})
,new UpdateExpression('`active_btn`', ${'active_btn63_argument'})
,new UpdateExpression('`group_srls`', ${'group_srls64_argument'})
));
$query->setTables(array(
new Table('`xe_menu_item`', '`menu_item`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`menu_item_srl`',$menu_item_srl65_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>