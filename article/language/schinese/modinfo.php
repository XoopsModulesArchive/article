<?php
// $Id$
// _LANGCODE: zh-CN
// _CHARSET : gb2312
// Translator: A.D.Horse, http://www.tv-io.com

if (!defined('XOOPS_ROOT_PATH')){ exit(); }

$current_path = __FILE__;
if ( DIRECTORY_SEPARATOR != "/" ) $current_path = str_replace( strpos( $current_path, "\\\\", 2 ) ? "\\\\" : DIRECTORY_SEPARATOR, "/", $current_path);
$url_arr = explode("/",strstr($current_path,"/modules/"));
include XOOPS_ROOT_PATH."/modules/".$url_arr[2]."/include/vars.php";

if(defined($GLOBALS["ART_VAR_PREFIXU"]."_LANG_GB_MODINFO")) return; 
define($GLOBALS["ART_VAR_PREFIXU"]."_LANG_GB_MODINFO",1);

define($GLOBALS["ART_VAR_PREFIXU"]."_MI_NAME","���¹���");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DESC","���¹���");

define($GLOBALS["ART_VAR_PREFIXU"]."_MI_PAGE_INDEX","��ҳ");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_PAGE_ARTICLE","����");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_PAGE_CATEGORY","���");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_PAGE_TOPIC","ר��");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_PAGE_AUTHOR","����");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_PAGE_KEYWORD","�ؼ���");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_PAGE_BLOCKS","��������");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_PAGE_ARCHIVE","�鵵����");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_PAGE_LIST","�����б�");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_PAGE_SEARCH","��������");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_PAGE_MYPAGE","�ҵ�����");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_PAGE_TAGS","Tag�б�");

define($GLOBALS["ART_VAR_PREFIXU"]."_MI_SUBMIT","�ύ����");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_SPOTLIGHT","����");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_SPOTLIGHT_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ARTICLE","����");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ARTICLE_DESC","");

define($GLOBALS["ART_VAR_PREFIXU"]."_MI_CATEGORY","����");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_CATEGORY_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_TOPIC","ר��");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_TOPIC_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_AUTHOR","����");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_AUTHOR_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_BLOCK_RECENTNEWS","������Ϣ");

define($GLOBALS["ART_VAR_PREFIXU"]."_MI_BLOCK_TAG_CLOUD","Tag Cloud");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_BLOCK_TAG_TOP","����Tag");

define($GLOBALS["ART_VAR_PREFIXU"]."_MI_TIMEFORMAT","ʱ����ʾ��ʽ��");
xoops_load("xoopslocal");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_TIMEFORMAT_DESC", XoopsLocal::getTimeFormatDesc());
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_TIMEFORMAT_CUSTOM","�Զ���");

define($GLOBALS["ART_VAR_PREFIXU"]."_MI_CONFIGCAT_MODULE","һ������");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_CONFIGCAT_MODULE_DESC","ģ��ͨ��Ԥ��");

define($GLOBALS["ART_VAR_PREFIXU"]."_MI_CONFIGCAT_ARTICLE","��������");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_CONFIGCAT_ARTICLE_DESC","��������趨");

define($GLOBALS["ART_VAR_PREFIXU"]."_MI_THEMESET","ѡ��ģ��ר����");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_THEMESET_DESC","ѡ�� '" . _NONE . "' ��ʹ��Ԥ����");

define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DISPLAY_SUMMARY","�Ƿ��������б���ʾժҪ��");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DISPLAY_SUMMARY_DESC","");

define($GLOBALS["ART_VAR_PREFIXU"]."_MI_FORUM","ѡ����̳��������");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_FORUM_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_URLFORUM","�趨��̳��ַ��");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_URLFORUM_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_URLBLOG","�趨���͵�ַ��");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_URLBLOG_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOFORMADVANCE","ȱʡʹ�ø߼��༭��ʽ��");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOFORMADVANCE_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOSPOTLIGHT","�Ƿ����ý��㣺");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOSPOTLIGHT_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOREALNAME","ʹ����ʵ����");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOREALNAME_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOTRACKBACK","�Ƿ�����Trackback��");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOTRACKBACK_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOTRACKBACKUTF8","Trackbackʹ��UTF-8���룺");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOTRACKBACKUTF8_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOAPISTATS","�Ƿ���������APIͳ�ƣ�");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOAPISTATS_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOIMAGEUPLOAD","�Ƿ�����ͼƬ�ϴ���");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOIMAGEUPLOAD_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DORSSUTF8","XML�Ƿ�ʹ��UTF-8���룺");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DORSSUTF8_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DODEBUG","�Ƿ����ó���ģʽ��");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DODEBUG_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOURLREWRITE","����URL��д");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOURLREWRITE_DESC","��Ҫ����AcceptPathInfo (Apache2)");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOCOUNTER","�Ƿ������������������");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOCOUNTER_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOPINGBACK","�Ƿ�����PING���ܣ�");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOPINGBACK_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOSIBLING","�Ƿ���ʾ�������±��⣺");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOSIBLING_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOSUBTITLE","�Ƿ���ʾ�����⣺");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOSUBTITLE_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOHEADING","�Ƿ������ʾ���⣺");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOHEADING_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOFOOTNOTE","�Ƿ������ʾ��ע��");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOFOOTNOTE_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DORATE","�Ƿ�������������");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DORATE_DESC","���ú���Ҫ�趨���Ⱥ��Ȩ��");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOKEYWORDS","�Ƿ�ͻ����ʾ�ؼ��ʣ�");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOKEYWORDS_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_SIBLINGLENGTH","�������±��ⳤ�ȣ�");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_SIBLINGLENGTH_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_KEYWORDS","�趨�ؼ��ʣ�");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_KEYWORDS_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_COUNTINGSUBCATEGORY","ͳ���ӷ�����������");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_COUNTINGSUBCATEGORY_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ARTICLESPERPAGE","ÿҳ��ʾ��������");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ARTICLESPERPAGE_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ARTICLES_INDEX","��ҳ��ʾ��������");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ARTICLESINDEX_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_FEATURED_INDEX","��ҳ��ʾ��������");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_FEATUREDINDEX_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ARTICLES_CATEGORY","����ҳ��ʾ��������");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ARTICLES_CATEGORY_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_FEATURED_CATEGORY","����ҳ��ʾ��������");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_FEATURED_CATEGORY_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_LENGTHEXCERPT","�趨ժҪ���ȣ�");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_LENGTHEXCERPT_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ARTICLE_EXPIRE","�趨���²ݸ����������");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ARTICLE_EXPIRE_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_TOPIC_EXPIRE","�趨ר�����������");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_TOPIC_EXPIRE_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_TOPIC_MAX","��ʾ���ר������");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_TOPIC_MAX_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_TEMPLATE","ϵͳԤ��ģ�壺");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_TEMPLATE_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DISCLAIMER","��������������");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DISCLAIMER_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DISCLAIMER_TEXT","���ύ�����¼����ݽ������GPL�������������޸Ļ򴫲���лл������ &copy; ".$GLOBALS["xoopsConfig"]["sitename"]);
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_SPONSOR","������������ַ��");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_SPONSOR_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_PING","�趨PING��ַ��");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_PING_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_PATHCACHE","�����ļ���·����");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_PATHCACHE_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_PATHFILE","�趨�ļ��ϴ�·����");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_PATHFILE_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_PATHIMAGE","�趨ͼƬ�ϴ�·����");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_PATHIMAGE_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_PATHHTML","�趨HTML�ļ��ϴ�·����");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_PATHHTML_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_SINCE_OPTIONS","ʱ��ѡ��");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_SINCE_OPTIONS_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_EDITORS","�༭");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_EDITORS_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_COPYRIGHT","�趨��Ȩ��Ϣ��");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_COPYRIGHT_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_HEADER","�趨��ҳ��ͷ��");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_HEADER_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_TRACKBACK_OPTION","��ȡTrackback��ѡ�");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_TRACKBACK_OPTION_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_MODERATION","��Ҫ����Ա���");


define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ADMENU_INDEX","��ҳ");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ADMENU_CATEGORY","����");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ADMENU_TOPIC","ר��");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ADMENU_ARTICLE","����");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ADMENU_PERMISSION","Ȩ��");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ADMENU_BLOCK","����");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ADMENU_SPOTLIGHT","����");
//define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ADMENU_TEMPLATE","ģ��");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ADMENU_TRACKBACK","Trackback");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ADMENU_FILE","�ļ�");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ADMENU_UTILITY","����");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ADMENU_ABOUT","�������¹���");

define($GLOBALS["ART_VAR_PREFIXU"]."_MI_GLOBAL_NOTIFY","ȫ��֪ͨ");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_GLOBAL_NOTIFYDSC","ȫ��֪ͨѡ��");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_CATEGORY_NOTIFY","����֪ͨ");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_CATEGORY_NOTIFYDSC","����֪ͨѡ��");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ARTICLE_NOTIFY","����֪ͨ");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ARTICLE_NOTIFYDSC","����֪ͨѡ��");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_GLOBAL_ARTICLESUBMIT_NOTIFY","ȫ�������ύ֪ͨ");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_GLOBAL_ARTICLESUBMIT_NOTIFYCAP","ȫ���������ύʱ֪ͨ��");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_GLOBAL_ARTICLESUBMIT_NOTIFYDSC","ȫ�����������ύʱ�յ�֪ͨ");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_GLOBAL_ARTICLESUBMIT_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} �Զ�֪ͨ : ȫ���������ύ֪ͨ");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_GLOBAL_NEWARTICLE_NOTIFY","ȫ��������");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_GLOBAL_NEWARTICLE_NOTIFYCAP","ȫ���������·���ʱ��֪ͨ��");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_GLOBAL_NEWARTICLE_NOTIFYDSC","ȫ������������·����յ�֪ͨ");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_GLOBAL_NEWARTICLE_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} �Զ�֪ͨ : ȫ��������֪ͨ");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_GLOBAL_ARTICLEMONITOR_NOTIFY","ȫ�ָ������¶�̬");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_GLOBAL_ARTICLEMONITOR_NOTIFYCAP","�����������¶�̬ʱ��֪ͨ��");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_GLOBAL_ARTICLEMONITOR_NOTIFYDSC","�����������¶�̬ʱ�յ�֪ͨ");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_GLOBAL_ARTICLEMONITOR_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} �Զ�֪ͨȫ�ָ������¶�̬");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_GLOBAL_ARTICLETRACKBACK_NOTIFY","����Trackback֪ͨ");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_GLOBAL_ARTICLETRACKBACK_NOTIFYCAP","�д��������Trackbackʱ��֪ͨ��");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_GLOBAL_ARTICLETRACKBACK_NOTIFYDSC","�д��������Trackbackʱ�յ�֪ͨ");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_GLOBAL_ARTICLETRACKBACK_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} �Զ�֪ͨ : ����Trackback֪ͨ");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_CATEGORY_ARTICLESUBMIT_NOTIFY","���������ύ֪ͨ");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_CATEGORY_ARTICLESUBMIT_NOTIFYCAP","���κ��������Ĵ�������ʱ֪ͨ��");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_CATEGORY_ARTICLESUBMIT_NOTIFYDSC","����������Ĵ�������ʱ�յ�֪ͨ");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_CATEGORY_ARTICLESUBMIT_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} �Զ�֪ͨ�����������ύ֪ͨ");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_CATEGORY_NEWARTICLE_NOTIFY","������֪ͨ");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_CATEGORY_NEWARTICLE_NOTIFYCAP","���������������·���ʱ��֪ͨ��");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_CATEGORY_NEWARTICLE_NOTIFYDSC","�����������������·���ʱ�յ�֪ͨ");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_CATEGORY_NEWARTICLE_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} �Զ�֪ͨ��������֪ͨ");

define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ARTICLE_ARTICLEAPPROVE_NOTIFY","����ͨ�����֪ͨ");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ARTICLE_ARTICLEAPPROVE_NOTIFYCAP","����ͨ�����ʱ��֪ͨ��");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ARTICLE_ARTICLEAPPROVE_NOTIFYDSC","�������ͨ�����ʱ�յ�֪ͨ");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ARTICLE_ARTICLEAPPROVE_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} �Զ�֪ͨ������ͨ�����֪ͨ");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ARTICLE_ARTICLEMONITOR_NOTIFY","���¶�̬֪ͨ");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ARTICLE_ARTICLEMONITOR_NOTIFYCAP","�籾�������¶�̬ʱ��֪ͨ��");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ARTICLE_ARTICLEMONITOR_NOTIFYDSC","�籾�����¶�̬ʱ�յ�֪ͨ");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ARTICLE_ARTICLEMONITOR_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} �Զ�֪ͨ�����¶�̬֪ͨ");
?>