<?php
// $Id$
// _LANGCODE: zh-CN
// _CHARSET : gb2312
// Translator: A.D.Horse, http://www.tv-io.com

if (!defined("XOOPS_ROOT_PATH")){ exit(); }

$current_path = __FILE__;
if ( DIRECTORY_SEPARATOR != "/" ) $current_path = str_replace( strpos( $current_path, "\\\\", 2 ) ? "\\\\" : DIRECTORY_SEPARATOR, "/", $current_path);
$url_arr = explode("/",strstr($current_path,"/modules/"));
include XOOPS_ROOT_PATH."/modules/".$url_arr[2]."/include/vars.php";

if(defined($GLOBALS["ART_VAR_PREFIXU"]."_LANG_GB_ADMIN")) return; 
define($GLOBALS["ART_VAR_PREFIXU"]."_LANG_GB_ADMIN",1);

define($GLOBALS["ART_VAR_PREFIXU"]."_AM_ARTICLES","��������");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_APPROVEARTICLE","�������");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_CPARTICLE","���¹���");

define($GLOBALS["ART_VAR_PREFIXU"]."_AM_SPOTLIGHT","�������");
//define($GLOBALS["ART_VAR_PREFIXU"]."_AM_SPOTLIGHT_LATEST","Use latest article");;
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_SPOTLIGHT_CURRENT","��ǰ����");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_SPOTLIGHT_CATEGORIES","��ѡ���ࣺ");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_IMAGE_UPLOAD","�ϴ�ͼƬ��");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_IMAGE_SELECT","ѡ��ͼƬ��");
//define($GLOBALS["ART_VAR_PREFIXU"]."_AM_SPOTLIGHT_CHOOSE","Choose an article");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_SPOTLIGHT_OPTION","����ѡ�");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_SPOTLIGHT_LASTARTICLE","��������");
//define($GLOBALS["ART_VAR_PREFIXU"]."_AM_SPOTLIGHT_LASTFEATURE","Last featured article");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_SPOTLIGHT_SPECIFIED","ָ������");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_SPOTLIGHT_NOTE","���㸽ע(���߰�)��");

define($GLOBALS["ART_VAR_PREFIXU"]."_AM_TITLE","����");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_CATEGORY","����");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_SPOTIT","ѡ��");

define($GLOBALS["ART_VAR_PREFIXU"]."_AM_SUBMITTED","�ύ������");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_CATEGORIES","��������");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_CPCATEGORY","�������");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_ADDCATEGORY","��ӷ���");

define($GLOBALS["ART_VAR_PREFIXU"]."_AM_FILES","�ļ�����");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_FILES_ALL","ȫ��");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_FILES_ORPHAN","�����ļ�");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_FILENAME","�ļ�����");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_ARTICLE","����");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_LOST","��ʧ");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_ORPHAN","����");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_ACTION","����");

define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERMISSION","Ȩ�޹���");

define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERM_ACCESS","����");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERM_ACCESS_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERM_VIEW","���ȫ��");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERM_VIEW_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERM_SUBMIT","�ύ");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERM_SUBMIT_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERM_PUBLISH","�Զ�����");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERM_PUBLISH_DEC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERM_RATE","����");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERM_RATE_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERM_MODERATE","����");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERM_MODERATE_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERMISSION_GLOBAL","ȫ��Ȩ��");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERMISSION_GLOBAL_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERM_SEARCH","����");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERM_HTML","ʹ��HTML");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERM_UPLOAD","�ϴ�");

define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERMISSION_DESC", 
	"�����趨�ķ���Ȩ��: ".
	art_constant("AM_PERM_ACCESS").",".
	art_constant("AM_PERM_VIEW").",".
	art_constant("AM_PERM_SUBMIT").",".
	art_constant("AM_PERM_RATE").",".
	art_constant("AM_PERM_MODERATE")."<br />". 
	"�����趨��ȫ��Ȩ��: ".
	art_constant("AM_PERM_SEARCH").",".
	art_constant("AM_PERM_HTML").",".
	art_constant("AM_PERM_UPLOAD")
);

define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERMISSION_TEMPLATE","����ȱʡȨ��ģ��");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERMISSION_TEMPLATE_DESC","�༭����Ȩ��ģ��Ӷ����Է����Ӧ�õ�ĳ��/Щ��̳");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERMISSION_TEMPLATE_CREATED","Ȩ��ģ��������");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERMISSION_TEMPLATE_ERROR","����Ȩ��ģ��ʱ��������");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERMISSION_TEMPLATE_APPLY","Ӧ��ȱʡȨ��ģ��");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERMISSION_TEMPLATE_APPLIED","��ѡ�������Ѿ�����ȱʡȨ��");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERMISSION_ACTION","Ȩ�޹������");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERMISSION_SETBYGROUP","ֱ�Ӱ�Ⱥ������Ȩ��");

define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PAGENAME","ҳ��");

define($GLOBALS["ART_VAR_PREFIXU"]."_AM_TOPICS","ר������");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_CPTOPIC","ר�����");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_ADDTOPIC","���ר��");

define($GLOBALS["ART_VAR_PREFIXU"]."_AM_TRACKBACKS","��������");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_CPTRACKBACK","���ٹ���");

define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PREFERENCES","ģ�����");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_ON","����");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_OFF","�ر�");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_SAFEMODE","safemod");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_REGISTERGLOBALS","register_globals");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_MAGICQUOTESGPC","magic_quotes_gpc");
//define($GLOBALS["ART_VAR_PREFIXU"]."_AM_ZLIBCOMPRESSION","output_compression");
//define($GLOBALS["ART_VAR_PREFIXU"]."_AM_MEMORYLIMIT","memory_limit");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_MAXPOSTSIZE","post_max_size");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_MAXINPUTTIME","max_input_time");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_OUTPUTBUFFERING","output_buffering");

define($GLOBALS["ART_VAR_PREFIXU"]."_AM_XML_EXTENSION","xml");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_MB_EXTENSION","mbstring");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_CURL","curl_init");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_FSOCKOPEN","fsockopen");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_URLFOPEN","allow_url_fopen");

define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PATH_IMAGE","ͼƬ���·��");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PATH_FILE","�ļ����·��");
//define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PATH_HTML","HTMLs path");
//define($GLOBALS["ART_VAR_PREFIXU"]."_AM_FILE_PERMDATA","Permission file");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_STATS","ͳ����Ϣ");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_TOTAL_CATEGORIES","�����ܼ�");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_TOTAL_TOPICS","ר���ܼ�");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_TOTAL_ARTICLES","�����ܼ�");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_TOTAL_AUTHORS","�����ܼ�");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_TOTAL_VIEWS","����ܼ�");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_TOTAL_RATES","�����ܼ�");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_AVAILABLE","��Ч");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_NOTAVAILABLE","��Ч");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_CREATETHEDIR","�����ļ���");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_NOTWRITABLE","����д");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_SETMPERM","����Ȩ��");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_DIRCREATED","Ŀ¼�Ѿ�����");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_DIRNOTCREATED","Ŀ¼�޷�����");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERMSET","Ȩ��������");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_PERMNOTSET","Ȩ���޷�����");

define($GLOBALS["ART_VAR_PREFIXU"]."_AM_DBUPDATED","���ݿ��Ѹ���");

define($GLOBALS["ART_VAR_PREFIXU"]."_AM_IMAGE_CAPTION","ͼƬ���⣺");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_IMAGE_CURRENT","��ǰͼƬ");

define($GLOBALS["ART_VAR_PREFIXU"]."_AM_ABOUT_RELEASEDATE","��������");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_ABOUT_AUTHOR","����");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_ABOUT_CREDITS","��л");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_ABOUT_LICENSE","���Э��");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_ABOUT_WEBSITE","��ҳ");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_ABOUT_MODULE_INFO","ģ����Ϣ");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_ABOUT_MODULE_STATUS","״̬");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_ABOUT_MODULE_TEAM","��Ŀ��Ա");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_ABOUT_AUTHOR_INFO","������Ϣ");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_ABOUT_AUTHOR_NAME","��������");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_ABOUT_AUTHOR_WORD","˵��");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_ABOUT_DISCLAIMER","��Ȩ��Ϣ");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_ABOUT_DISCLAIMER_TEXT","GPL ���Э��");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_ABOUT_CHANGELOG","���ļ�¼");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_ABOUT_HELP","�����ĵ�");

define($GLOBALS["ART_VAR_PREFIXU"]."_AM_SYNC_TITLE","����ͬ��");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_SYNC_SYNCING","���ڽ�������ͬ������");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_SYNC_CATEGORY","���");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_SYNC_ARTICLE","����");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_SYNC_MISC","����");
define($GLOBALS["ART_VAR_PREFIXU"]."_AM_SYNC_ITEMS","ÿ�δ������Ŀ��");

?>