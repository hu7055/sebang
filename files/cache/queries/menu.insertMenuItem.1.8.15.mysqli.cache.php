<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertMenuItem");
$query->setAction("insert");
$query->setPriority("");

${'menu_item_srl8_argument'} = new Argument('menu_item_srl', $args->{'menu_item_srl'});
${'menu_item_srl8_argument'}->checkFilter('number');
${'menu_item_srl8_argument'}->checkNotNull();
if(!${'menu_item_srl8_argument'}->isValid()) return ${'menu_item_srl8_argument'}->getErrorMessage();
if(${'menu_item_srl8_argument'} !== null) ${'menu_item_srl8_argument'}->setColumnType('number');

${'parent_srl9_argument'} = new Argument('parent_srl', $args->{'parent_srl'});
${'parent_srl9_argument'}->checkFilter('number');
${'parent_srl9_argument'}->ensureDefaultValue('0');
if(!${'parent_srl9_argument'}->isValid()) return ${'parent_srl9_argument'}->getErrorMessage();
if(${'parent_srl9_argument'} !== null) ${'parent_srl9_argument'}->setColumnType('number');

${'menu_srl10_argument'} = new Argument('menu_srl', $args->{'menu_srl'});
${'menu_srl10_argument'}->checkFilter('number');
${'menu_srl10_argument'}->checkNotNull();
if(!${'menu_srl10_argument'}->isValid()) return ${'menu_srl10_argument'}->getErrorMessage();
if(${'menu_srl10_argument'} !== null) ${'menu_srl10_argument'}->setColumnType('number');

${'name11_argument'} = new Argument('name', $args->{'name'});
${'name11_argument'}->checkNotNull();
if(!${'name11_argument'}->isValid()) return ${'name11_argument'}->getErrorMessage();
if(${'name11_argument'} !== null) ${'name11_argument'}->setColumnType('text');
if(isset($args->desc)) {
${'desc12_argument'} = new Argument('desc', $args->{'desc'});
if(!${'desc12_argument'}->isValid()) return ${'desc12_argument'}->getErrorMessage();
} else
${'desc12_argument'} = NULL;if(${'desc12_argument'} !== null) ${'desc12_argument'}->setColumnType('varchar');
if(isset($args->url)) {
${'url13_argument'} = new Argument('url', $args->{'url'});
if(!${'url13_argument'}->isValid()) return ${'url13_argument'}->getErrorMessage();
} else
${'url13_argument'} = NULL;if(${'url13_argument'} !== null) ${'url13_argument'}->setColumnType('varchar');

${'is_shortcut14_argument'} = new Argument('is_shortcut', $args->{'is_shortcut'});
${'is_shortcut14_argument'}->ensureDefaultValue('N');
${'is_shortcut14_argument'}->checkNotNull();
if(!${'is_shortcut14_argument'}->isValid()) return ${'is_shortcut14_argument'}->getErrorMessage();
if(${'is_shortcut14_argument'} !== null) ${'is_shortcut14_argument'}->setColumnType('char');
if(isset($args->open_window)) {
${'open_window15_argument'} = new Argument('open_window', $args->{'open_window'});
if(!${'open_window15_argument'}->isValid()) return ${'open_window15_argument'}->getErrorMessage();
} else
${'open_window15_argument'} = NULL;if(${'open_window15_argument'} !== null) ${'open_window15_argument'}->setColumnType('char');
if(isset($args->expand)) {
${'expand16_argument'} = new Argument('expand', $args->{'expand'});
if(!${'expand16_argument'}->isValid()) return ${'expand16_argument'}->getErrorMessage();
} else
${'expand16_argument'} = NULL;if(${'expand16_argument'} !== null) ${'expand16_argument'}->setColumnType('char');
if(isset($args->normal_btn)) {
${'normal_btn17_argument'} = new Argument('normal_btn', $args->{'normal_btn'});
if(!${'normal_btn17_argument'}->isValid()) return ${'normal_btn17_argument'}->getErrorMessage();
} else
${'normal_btn17_argument'} = NULL;if(${'normal_btn17_argument'} !== null) ${'normal_btn17_argument'}->setColumnType('varchar');
if(isset($args->hover_btn)) {
${'hover_btn18_argument'} = new Argument('hover_btn', $args->{'hover_btn'});
if(!${'hover_btn18_argument'}->isValid()) return ${'hover_btn18_argument'}->getErrorMessage();
} else
${'hover_btn18_argument'} = NULL;if(${'hover_btn18_argument'} !== null) ${'hover_btn18_argument'}->setColumnType('varchar');
if(isset($args->active_btn)) {
${'active_btn19_argument'} = new Argument('active_btn', $args->{'active_btn'});
if(!${'active_btn19_argument'}->isValid()) return ${'active_btn19_argument'}->getErrorMessage();
} else
${'active_btn19_argument'} = NULL;if(${'active_btn19_argument'} !== null) ${'active_btn19_argument'}->setColumnType('varchar');
if(isset($args->group_srls)) {
${'group_srls20_argument'} = new Argument('group_srls', $args->{'group_srls'});
if(!${'group_srls20_argument'}->isValid()) return ${'group_srls20_argument'}->getErrorMessage();
} else
${'group_srls20_argument'} = NULL;if(${'group_srls20_argument'} !== null) ${'group_srls20_argument'}->setColumnType('text');

${'listorder21_argument'} = new Argument('listorder', $args->{'listorder'});
${'listorder21_argument'}->checkNotNull();
if(!${'listorder21_argument'}->isValid()) return ${'listorder21_argument'}->getErrorMessage();
if(${'listorder21_argument'} !== null) ${'listorder21_argument'}->setColumnType('number');

${'regdate22_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate22_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate22_argument'}->isValid()) return ${'regdate22_argument'}->getErrorMessage();
if(${'regdate22_argument'} !== null) ${'regdate22_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`menu_item_srl`', ${'menu_item_srl8_argument'})
,new InsertExpression('`parent_srl`', ${'parent_srl9_argument'})
,new InsertExpression('`menu_srl`', ${'menu_srl10_argument'})
,new InsertExpression('`name`', ${'name11_argument'})
,new InsertExpression('`desc`', ${'desc12_argument'})
,new InsertExpression('`url`', ${'url13_argument'})
,new InsertExpression('`is_shortcut`', ${'is_shortcut14_argument'})
,new InsertExpression('`open_window`', ${'open_window15_argument'})
,new InsertExpression('`expand`', ${'expand16_argument'})
,new InsertExpression('`normal_btn`', ${'normal_btn17_argument'})
,new InsertExpression('`hover_btn`', ${'hover_btn18_argument'})
,new InsertExpression('`active_btn`', ${'active_btn19_argument'})
,new InsertExpression('`group_srls`', ${'group_srls20_argument'})
,new InsertExpression('`listorder`', ${'listorder21_argument'})
,new InsertExpression('`regdate`', ${'regdate22_argument'})
));
$query->setTables(array(
new Table('`xe_menu_item`', '`menu_item`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>