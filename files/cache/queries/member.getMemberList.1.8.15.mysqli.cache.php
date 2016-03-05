<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMemberList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->is_admin)) {
${'is_admin69_argument'} = new ConditionArgument('is_admin', $args->is_admin, 'equal');
${'is_admin69_argument'}->createConditionValue();
if(!${'is_admin69_argument'}->isValid()) return ${'is_admin69_argument'}->getErrorMessage();
} else
${'is_admin69_argument'} = NULL;if(${'is_admin69_argument'} !== null) ${'is_admin69_argument'}->setColumnType('char');
if(isset($args->is_denied)) {
${'is_denied70_argument'} = new ConditionArgument('is_denied', $args->is_denied, 'equal');
${'is_denied70_argument'}->createConditionValue();
if(!${'is_denied70_argument'}->isValid()) return ${'is_denied70_argument'}->getErrorMessage();
} else
${'is_denied70_argument'} = NULL;if(${'is_denied70_argument'} !== null) ${'is_denied70_argument'}->setColumnType('char');
if(isset($args->member_srls)) {
${'member_srls71_argument'} = new ConditionArgument('member_srls', $args->member_srls, 'in');
${'member_srls71_argument'}->createConditionValue();
if(!${'member_srls71_argument'}->isValid()) return ${'member_srls71_argument'}->getErrorMessage();
} else
${'member_srls71_argument'} = NULL;if(${'member_srls71_argument'} !== null) ${'member_srls71_argument'}->setColumnType('number');
if(isset($args->s_user_id)) {
${'s_user_id72_argument'} = new ConditionArgument('s_user_id', $args->s_user_id, 'like');
${'s_user_id72_argument'}->createConditionValue();
if(!${'s_user_id72_argument'}->isValid()) return ${'s_user_id72_argument'}->getErrorMessage();
} else
${'s_user_id72_argument'} = NULL;if(${'s_user_id72_argument'} !== null) ${'s_user_id72_argument'}->setColumnType('varchar');
if(isset($args->s_user_name)) {
${'s_user_name73_argument'} = new ConditionArgument('s_user_name', $args->s_user_name, 'like');
${'s_user_name73_argument'}->createConditionValue();
if(!${'s_user_name73_argument'}->isValid()) return ${'s_user_name73_argument'}->getErrorMessage();
} else
${'s_user_name73_argument'} = NULL;if(${'s_user_name73_argument'} !== null) ${'s_user_name73_argument'}->setColumnType('varchar');
if(isset($args->s_nick_name)) {
${'s_nick_name74_argument'} = new ConditionArgument('s_nick_name', $args->s_nick_name, 'like');
${'s_nick_name74_argument'}->createConditionValue();
if(!${'s_nick_name74_argument'}->isValid()) return ${'s_nick_name74_argument'}->getErrorMessage();
} else
${'s_nick_name74_argument'} = NULL;if(${'s_nick_name74_argument'} !== null) ${'s_nick_name74_argument'}->setColumnType('varchar');
if(isset($args->html_nick_name)) {
${'html_nick_name75_argument'} = new ConditionArgument('html_nick_name', $args->html_nick_name, 'like');
${'html_nick_name75_argument'}->createConditionValue();
if(!${'html_nick_name75_argument'}->isValid()) return ${'html_nick_name75_argument'}->getErrorMessage();
} else
${'html_nick_name75_argument'} = NULL;if(${'html_nick_name75_argument'} !== null) ${'html_nick_name75_argument'}->setColumnType('varchar');
if(isset($args->s_email_address)) {
${'s_email_address76_argument'} = new ConditionArgument('s_email_address', $args->s_email_address, 'like');
${'s_email_address76_argument'}->createConditionValue();
if(!${'s_email_address76_argument'}->isValid()) return ${'s_email_address76_argument'}->getErrorMessage();
} else
${'s_email_address76_argument'} = NULL;if(${'s_email_address76_argument'} !== null) ${'s_email_address76_argument'}->setColumnType('varchar');
if(isset($args->s_birthday)) {
${'s_birthday77_argument'} = new ConditionArgument('s_birthday', $args->s_birthday, 'like');
${'s_birthday77_argument'}->createConditionValue();
if(!${'s_birthday77_argument'}->isValid()) return ${'s_birthday77_argument'}->getErrorMessage();
} else
${'s_birthday77_argument'} = NULL;if(${'s_birthday77_argument'} !== null) ${'s_birthday77_argument'}->setColumnType('char');
if(isset($args->s_extra_vars)) {
${'s_extra_vars78_argument'} = new ConditionArgument('s_extra_vars', $args->s_extra_vars, 'like');
${'s_extra_vars78_argument'}->createConditionValue();
if(!${'s_extra_vars78_argument'}->isValid()) return ${'s_extra_vars78_argument'}->getErrorMessage();
} else
${'s_extra_vars78_argument'} = NULL;if(${'s_extra_vars78_argument'} !== null) ${'s_extra_vars78_argument'}->setColumnType('text');
if(isset($args->s_regdate)) {
${'s_regdate79_argument'} = new ConditionArgument('s_regdate', $args->s_regdate, 'like_prefix');
${'s_regdate79_argument'}->createConditionValue();
if(!${'s_regdate79_argument'}->isValid()) return ${'s_regdate79_argument'}->getErrorMessage();
} else
${'s_regdate79_argument'} = NULL;if(${'s_regdate79_argument'} !== null) ${'s_regdate79_argument'}->setColumnType('date');
if(isset($args->s_last_login)) {
${'s_last_login80_argument'} = new ConditionArgument('s_last_login', $args->s_last_login, 'like_prefix');
${'s_last_login80_argument'}->createConditionValue();
if(!${'s_last_login80_argument'}->isValid()) return ${'s_last_login80_argument'}->getErrorMessage();
} else
${'s_last_login80_argument'} = NULL;if(${'s_last_login80_argument'} !== null) ${'s_last_login80_argument'}->setColumnType('date');
if(isset($args->s_regdate_more)) {
${'s_regdate_more81_argument'} = new ConditionArgument('s_regdate_more', $args->s_regdate_more, 'more');
${'s_regdate_more81_argument'}->createConditionValue();
if(!${'s_regdate_more81_argument'}->isValid()) return ${'s_regdate_more81_argument'}->getErrorMessage();
} else
${'s_regdate_more81_argument'} = NULL;if(${'s_regdate_more81_argument'} !== null) ${'s_regdate_more81_argument'}->setColumnType('date');
if(isset($args->s_regdate_less)) {
${'s_regdate_less82_argument'} = new ConditionArgument('s_regdate_less', $args->s_regdate_less, 'less');
${'s_regdate_less82_argument'}->createConditionValue();
if(!${'s_regdate_less82_argument'}->isValid()) return ${'s_regdate_less82_argument'}->getErrorMessage();
} else
${'s_regdate_less82_argument'} = NULL;if(${'s_regdate_less82_argument'} !== null) ${'s_regdate_less82_argument'}->setColumnType('date');
if(isset($args->s_last_login_more)) {
${'s_last_login_more83_argument'} = new ConditionArgument('s_last_login_more', $args->s_last_login_more, 'more');
${'s_last_login_more83_argument'}->createConditionValue();
if(!${'s_last_login_more83_argument'}->isValid()) return ${'s_last_login_more83_argument'}->getErrorMessage();
} else
${'s_last_login_more83_argument'} = NULL;if(${'s_last_login_more83_argument'} !== null) ${'s_last_login_more83_argument'}->setColumnType('date');
if(isset($args->s_last_login_less)) {
${'s_last_login_less84_argument'} = new ConditionArgument('s_last_login_less', $args->s_last_login_less, 'less');
${'s_last_login_less84_argument'}->createConditionValue();
if(!${'s_last_login_less84_argument'}->isValid()) return ${'s_last_login_less84_argument'}->getErrorMessage();
} else
${'s_last_login_less84_argument'} = NULL;if(${'s_last_login_less84_argument'} !== null) ${'s_last_login_less84_argument'}->setColumnType('date');

${'page87_argument'} = new Argument('page', $args->{'page'});
${'page87_argument'}->ensureDefaultValue('1');
if(!${'page87_argument'}->isValid()) return ${'page87_argument'}->getErrorMessage();

${'page_count88_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count88_argument'}->ensureDefaultValue('10');
if(!${'page_count88_argument'}->isValid()) return ${'page_count88_argument'}->getErrorMessage();

${'list_count89_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count89_argument'}->ensureDefaultValue('20');
if(!${'list_count89_argument'}->isValid()) return ${'list_count89_argument'}->getErrorMessage();

${'sort_index85_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index85_argument'}->ensureDefaultValue('list_order');
if(!${'sort_index85_argument'}->isValid()) return ${'sort_index85_argument'}->getErrorMessage();

${'sort_order86_argument'} = new SortArgument('sort_order86', $args->sort_order);
${'sort_order86_argument'}->ensureDefaultValue('asc');
if(!${'sort_order86_argument'}->isValid()) return ${'sort_order86_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_member`', '`member`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`is_admin`',$is_admin69_argument,"equal")
,new ConditionWithArgument('`denied`',$is_denied70_argument,"equal", 'and')
,new ConditionWithArgument('`member_srl`',$member_srls71_argument,"in", 'and')))
,new ConditionGroup(array(
new ConditionWithArgument('`user_id`',$s_user_id72_argument,"like")
,new ConditionWithArgument('`user_name`',$s_user_name73_argument,"like", 'or')
,new ConditionWithArgument('`nick_name`',$s_nick_name74_argument,"like", 'or')
,new ConditionWithArgument('`nick_name`',$html_nick_name75_argument,"like", 'or')
,new ConditionWithArgument('`email_address`',$s_email_address76_argument,"like", 'or')
,new ConditionWithArgument('`birthday`',$s_birthday77_argument,"like", 'or')
,new ConditionWithArgument('`extra_vars`',$s_extra_vars78_argument,"like", 'or')
,new ConditionWithArgument('`regdate`',$s_regdate79_argument,"like_prefix", 'or')
,new ConditionWithArgument('`last_login`',$s_last_login80_argument,"like_prefix", 'or')
,new ConditionWithArgument('`member`.`regdate`',$s_regdate_more81_argument,"more", 'or')
,new ConditionWithArgument('`member`.`regdate`',$s_regdate_less82_argument,"less", 'or')
,new ConditionWithArgument('`member`.`last_login`',$s_last_login_more83_argument,"more", 'or')
,new ConditionWithArgument('`member`.`last_login`',$s_last_login_less84_argument,"less", 'or')),'and')
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index85_argument'}, $sort_order86_argument)
));
$query->setLimit(new Limit(${'list_count89_argument'}, ${'page87_argument'}, ${'page_count88_argument'}));
return $query; ?>