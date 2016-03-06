<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateModule");
$query->setAction("update");
$query->setPriority("");

${'module29_argument'} = new Argument('module', $args->{'module'});
${'module29_argument'}->checkNotNull();
if(!${'module29_argument'}->isValid()) return ${'module29_argument'}->getErrorMessage();
if(${'module29_argument'} !== null) ${'module29_argument'}->setColumnType('varchar');
if(isset($args->module_category_srl)) {
${'module_category_srl30_argument'} = new Argument('module_category_srl', $args->{'module_category_srl'});
if(!${'module_category_srl30_argument'}->isValid()) return ${'module_category_srl30_argument'}->getErrorMessage();
} else
${'module_category_srl30_argument'} = NULL;if(${'module_category_srl30_argument'} !== null) ${'module_category_srl30_argument'}->setColumnType('number');
if(isset($args->layout_srl)) {
${'layout_srl31_argument'} = new Argument('layout_srl', $args->{'layout_srl'});
if(!${'layout_srl31_argument'}->isValid()) return ${'layout_srl31_argument'}->getErrorMessage();
} else
${'layout_srl31_argument'} = NULL;if(${'layout_srl31_argument'} !== null) ${'layout_srl31_argument'}->setColumnType('number');
if(isset($args->skin)) {
${'skin32_argument'} = new Argument('skin', $args->{'skin'});
if(!${'skin32_argument'}->isValid()) return ${'skin32_argument'}->getErrorMessage();
} else
${'skin32_argument'} = NULL;if(${'skin32_argument'} !== null) ${'skin32_argument'}->setColumnType('varchar');

${'is_skin_fix33_argument'} = new Argument('is_skin_fix', $args->{'is_skin_fix'});
${'is_skin_fix33_argument'}->ensureDefaultValue('N');
if(!${'is_skin_fix33_argument'}->isValid()) return ${'is_skin_fix33_argument'}->getErrorMessage();
if(${'is_skin_fix33_argument'} !== null) ${'is_skin_fix33_argument'}->setColumnType('char');
if(isset($args->mskin)) {
${'mskin34_argument'} = new Argument('mskin', $args->{'mskin'});
if(!${'mskin34_argument'}->isValid()) return ${'mskin34_argument'}->getErrorMessage();
} else
${'mskin34_argument'} = NULL;if(${'mskin34_argument'} !== null) ${'mskin34_argument'}->setColumnType('varchar');

${'is_mskin_fix35_argument'} = new Argument('is_mskin_fix', $args->{'is_mskin_fix'});
${'is_mskin_fix35_argument'}->ensureDefaultValue('N');
if(!${'is_mskin_fix35_argument'}->isValid()) return ${'is_mskin_fix35_argument'}->getErrorMessage();
if(${'is_mskin_fix35_argument'} !== null) ${'is_mskin_fix35_argument'}->setColumnType('char');
if(isset($args->menu_srl)) {
${'menu_srl36_argument'} = new Argument('menu_srl', $args->{'menu_srl'});
${'menu_srl36_argument'}->checkFilter('number');
if(!${'menu_srl36_argument'}->isValid()) return ${'menu_srl36_argument'}->getErrorMessage();
} else
${'menu_srl36_argument'} = NULL;if(${'menu_srl36_argument'} !== null) ${'menu_srl36_argument'}->setColumnType('number');

${'mid37_argument'} = new Argument('mid', $args->{'mid'});
${'mid37_argument'}->checkNotNull();
if(!${'mid37_argument'}->isValid()) return ${'mid37_argument'}->getErrorMessage();
if(${'mid37_argument'} !== null) ${'mid37_argument'}->setColumnType('varchar');

${'browser_title38_argument'} = new Argument('browser_title', $args->{'browser_title'});
${'browser_title38_argument'}->checkNotNull();
if(!${'browser_title38_argument'}->isValid()) return ${'browser_title38_argument'}->getErrorMessage();
if(${'browser_title38_argument'} !== null) ${'browser_title38_argument'}->setColumnType('varchar');

${'description39_argument'} = new Argument('description', $args->{'description'});
${'description39_argument'}->ensureDefaultValue('');
if(!${'description39_argument'}->isValid()) return ${'description39_argument'}->getErrorMessage();
if(${'description39_argument'} !== null) ${'description39_argument'}->setColumnType('text');

${'is_default40_argument'} = new Argument('is_default', $args->{'is_default'});
${'is_default40_argument'}->ensureDefaultValue('N');
${'is_default40_argument'}->checkNotNull();
if(!${'is_default40_argument'}->isValid()) return ${'is_default40_argument'}->getErrorMessage();
if(${'is_default40_argument'} !== null) ${'is_default40_argument'}->setColumnType('char');
if(isset($args->content)) {
${'content41_argument'} = new Argument('content', $args->{'content'});
if(!${'content41_argument'}->isValid()) return ${'content41_argument'}->getErrorMessage();
} else
${'content41_argument'} = NULL;if(${'content41_argument'} !== null) ${'content41_argument'}->setColumnType('bigtext');
if(isset($args->mcontent)) {
${'mcontent42_argument'} = new Argument('mcontent', $args->{'mcontent'});
if(!${'mcontent42_argument'}->isValid()) return ${'mcontent42_argument'}->getErrorMessage();
} else
${'mcontent42_argument'} = NULL;if(${'mcontent42_argument'} !== null) ${'mcontent42_argument'}->setColumnType('bigtext');

${'open_rss43_argument'} = new Argument('open_rss', $args->{'open_rss'});
${'open_rss43_argument'}->ensureDefaultValue('Y');
${'open_rss43_argument'}->checkNotNull();
if(!${'open_rss43_argument'}->isValid()) return ${'open_rss43_argument'}->getErrorMessage();
if(${'open_rss43_argument'} !== null) ${'open_rss43_argument'}->setColumnType('char');

${'header_text44_argument'} = new Argument('header_text', $args->{'header_text'});
${'header_text44_argument'}->ensureDefaultValue('');
if(!${'header_text44_argument'}->isValid()) return ${'header_text44_argument'}->getErrorMessage();
if(${'header_text44_argument'} !== null) ${'header_text44_argument'}->setColumnType('text');

${'footer_text45_argument'} = new Argument('footer_text', $args->{'footer_text'});
${'footer_text45_argument'}->ensureDefaultValue('');
if(!${'footer_text45_argument'}->isValid()) return ${'footer_text45_argument'}->getErrorMessage();
if(${'footer_text45_argument'} !== null) ${'footer_text45_argument'}->setColumnType('text');
if(isset($args->mlayout_srl)) {
${'mlayout_srl46_argument'} = new Argument('mlayout_srl', $args->{'mlayout_srl'});
if(!${'mlayout_srl46_argument'}->isValid()) return ${'mlayout_srl46_argument'}->getErrorMessage();
} else
${'mlayout_srl46_argument'} = NULL;if(${'mlayout_srl46_argument'} !== null) ${'mlayout_srl46_argument'}->setColumnType('number');

${'use_mobile47_argument'} = new Argument('use_mobile', $args->{'use_mobile'});
${'use_mobile47_argument'}->ensureDefaultValue('N');
if(!${'use_mobile47_argument'}->isValid()) return ${'use_mobile47_argument'}->getErrorMessage();
if(${'use_mobile47_argument'} !== null) ${'use_mobile47_argument'}->setColumnType('char');

${'site_srl48_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl48_argument'}->checkFilter('number');
${'site_srl48_argument'}->ensureDefaultValue('0');
${'site_srl48_argument'}->checkNotNull();
${'site_srl48_argument'}->createConditionValue();
if(!${'site_srl48_argument'}->isValid()) return ${'site_srl48_argument'}->getErrorMessage();
if(${'site_srl48_argument'} !== null) ${'site_srl48_argument'}->setColumnType('number');

${'module_srl49_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl49_argument'}->checkFilter('number');
${'module_srl49_argument'}->checkNotNull();
${'module_srl49_argument'}->createConditionValue();
if(!${'module_srl49_argument'}->isValid()) return ${'module_srl49_argument'}->getErrorMessage();
if(${'module_srl49_argument'} !== null) ${'module_srl49_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`module`', ${'module29_argument'})
,new UpdateExpression('`module_category_srl`', ${'module_category_srl30_argument'})
,new UpdateExpression('`layout_srl`', ${'layout_srl31_argument'})
,new UpdateExpression('`skin`', ${'skin32_argument'})
,new UpdateExpression('`is_skin_fix`', ${'is_skin_fix33_argument'})
,new UpdateExpression('`mskin`', ${'mskin34_argument'})
,new UpdateExpression('`is_mskin_fix`', ${'is_mskin_fix35_argument'})
,new UpdateExpression('`menu_srl`', ${'menu_srl36_argument'})
,new UpdateExpression('`mid`', ${'mid37_argument'})
,new UpdateExpression('`browser_title`', ${'browser_title38_argument'})
,new UpdateExpression('`description`', ${'description39_argument'})
,new UpdateExpression('`is_default`', ${'is_default40_argument'})
,new UpdateExpression('`content`', ${'content41_argument'})
,new UpdateExpression('`mcontent`', ${'mcontent42_argument'})
,new UpdateExpression('`open_rss`', ${'open_rss43_argument'})
,new UpdateExpression('`header_text`', ${'header_text44_argument'})
,new UpdateExpression('`footer_text`', ${'footer_text45_argument'})
,new UpdateExpression('`mlayout_srl`', ${'mlayout_srl46_argument'})
,new UpdateExpression('`use_mobile`', ${'use_mobile47_argument'})
));
$query->setTables(array(
new Table('`xe_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl48_argument,"equal")
,new ConditionWithArgument('`module_srl`',$module_srl49_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>