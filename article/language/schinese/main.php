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

if(defined($GLOBALS["ART_VAR_PREFIXU"]."_LANG_GB_MAIN")) return; 
define($GLOBALS["ART_VAR_PREFIXU"]."_LANG_GB_MAIN",1);


define($GLOBALS["ART_VAR_PREFIXU"]."_MD_INVALID","��Ч����");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_NOACCESS","��Ǹ��������Ȩ�ޡ����¼��ע�ᡣ");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_TEXTEMPTY","���ı�");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_INSERTERROR","���ݱ��淢������");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_NEWARTICLE","�½�����");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_TITLE","����");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_AUTHOR","����");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_SUMMARY","ժҪ");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_BODY","����");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_SORTBY","����");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_SAVED","�����ѱ���");;
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_SUBMITED","���ύ");;

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_ALREADYRATED","���Ѿ�Ͷ��Ʊ");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_NOTSAVED","����δ�ܱ���");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_CPARTICLE","���¹���");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_ACTIONDONE","�����ɹ���");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_CPCATEGORY","�������");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_CPTOPIC","ר�����");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_CPTRACKBACK","��������");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_EMAIL","�ʼ�");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_EMAILADDRESS","�ʼ���ַ");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_CONTENT","����");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_ARTICLE","����");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_CATEGORY","���");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_INDEX","��ҳ");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_DISCLAIMER","��������");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_SUBTITLE","��ҳ����");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_KEYWORDS","�ؼ���");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_EDNOTE","�༭��ע");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_DATE","����");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_ERROROCCURED","��������");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_USERNAME","�û�����");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_SELECTFEED","ѡ��Feed����");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_XMLDESC_ARTICLE","����XML");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_SOURCE","��Դ");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_XMLDESC_CATEGORY","���� %s XML");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_XMLDESC_AUTHOR","���� %s XML");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_XMLDESC_INDEX","��ҳXML");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_PROFILE","���߼��");
//define($GLOBALS["ART_VAR_PREFIXU"]."_MD_SELECT_EDITOR","ѡ��༭��");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_TEXT","�ı�����");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_EDITPAGE_NO","ҳ�� %d");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_NEWPAGE","�½�ҳ��");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_EDITPAGE","��ҳ��༭");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_EDITPAGE_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_EDITPAGE_TEXT","ҳ���ı�");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_SUMMARY_DESC","ժҪ����");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_SUMMARY_DESC_TEXT","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_KEYWORDS_DESC","�ؼ�������");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_KEYWORDS_DESC_TEXT","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_EDNOTE_DESC","�༭��ע����");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_EDNOTE_DESC_TEXT","");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_FORUM","��̳");
/*
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_BLOG","����");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_PDF","PDF");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_PRINT","��ӡ");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_BOOKMARK","�ղ�");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_DC","DC");
*/
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_TRACKBACKS","������ַ");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_TEMPLATE_SELECT","ѡ��ģ��");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_CATEGORY_BASE","��������");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_ELINKS","�������");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_ELINKS_DESC","��������");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_ELINKS_DESC_TEXT","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_TRACKBACKS_DESC","�����������");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_TRACKBACKS_DESC_TEXT","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_NOTIFY_ON_APPROVAL","��׼֪ͨ");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_PUBLISH_ARTICLE","����");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_SAVE","����");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_SAVE_DRAFT","����ݸ�");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_SAVE_EDIT","���沢�����༭");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_DELETE_PAGE","ɾ����ҳ");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_DELETE_ARTICLE","ɾ������");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_DELETE_ARTICLE_CONFIRM","ȷ��ɾ��������?");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_MODERATOR_REMOVE","�Ƴ�����Ա");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_MODERATOR_ADD","��ӹ���Ա");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_DESCRIPTION","����");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_ORDER","����");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_SPONSOR","��������ַ������");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_SPONSOR_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_SPONSOR_DESC_TEXT","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_IMAGE_UPLOAD","�ϴ�ͼƬ");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_IMAGE_SELECT","ѡ��ͼƬ");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_TOPIC","ר��");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_FROMLASTDAYS","����� %d ��");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_FROMLASTHOURS","����� %d Сʱ");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_THELASTYEAR","ȥ��");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_BEGINNING","�ӿ�ʼ");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_RSS","RSS");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_RDF","RDF");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_ATOM","ATOM");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_OPML","OPML");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_CPANEL","����");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_ARTICLES","����");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_ADDARTICLE","�������");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_MODERATOR","����Ա");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_MYARTICLES","�ҵ�����");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_STATS","״̬");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_FEATURED","����");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_TOPICS","ר��");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_SUBMITTED","���ύ");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_PUBLISHED","�ѷ���");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_CREATED","�Ѵ���");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_REGISTERED","��ע��");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_REGULAR","��ͨ");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_CATEGORIES","����");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_SUBTITLES","������");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_PAGES","ҳ��");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_URL","���µ�ַ");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_TRACKBACK","���ٵ�ַ");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_SUBMITTER","�ύ��");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_VIEWS","�Ķ�");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_RATE","����");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_RATEIT","ͶƱ��");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_RESETRATE","��������");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_TIME","ʱ��");
//define($GLOBALS["ART_VAR_PREFIXU"]."_MD_PDF_PAGE","�� %s ҳ");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_PREVIOUS","<<");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_NEXT",">>");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_TEXTOPTIONS",'�ı�ѡ��');
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_DOHTML",'����HTML���');
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_DOSMILEY",'���ñ���ͼ');
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_DOXCODE",'����XOOPS������');
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_DOBR",'�Զ�����(����HTMLʱ�رմ˹���)');

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_SPONSORS","����");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_TIME_CREATE","�Ѵ���");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_TIME_EXPIRE","����");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_TYPES","����");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_NAME","����");
//define($GLOBALS["ART_VAR_PREFIXU"]."_MD_BIO","����");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_FORMMODE","�༭��ʽ");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_BASIC","����");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_ADVANCE","�߼�");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_CUSTOM","����");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_INVALID_SUBMIT","��Ǹ���ύ��ʱ���������ݲ��ٴ��ύ��");

//define($GLOBALS["ART_VAR_PREFIXU"]."_MD_KEYWORD_ON","�ؼ���");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_SUBCATEGORIES","�ӷ���");

//define($GLOBALS["ART_VAR_PREFIXU"]."_MD_TAG_LIST","Tag �б�");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_ACTIVE","����");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_EXPIRED","����");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_APPROVED","�Ѻ�׼");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_DELETED","ɾ��");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_PENDING","����");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_EXPIRATION","��������");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_CREATION","��������");
//define($GLOBALS["ART_VAR_PREFIXU"]."_MD_ADD","���");
//define($GLOBALS["ART_VAR_PREFIXU"]."_MD_SELECT","ѡ��");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_APPROVE","��׼");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_FEATUREIT","��Ǿ���");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_UNFEATUREIT","ȡ������");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_TERMINATE","�Ƴ�");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_REGISTERTOPIC","��ӵ�ר��");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_ACTIONS","����");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_SUBMISSION","�ύ");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_PUBLISH","����");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_REGISTER","ע��");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_FEATURE","����");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_HEADINGS","����");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_NOTES","��ע");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_FROM","����"); // Trackback

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_VIEWALL","�Ķ������ı�");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_COMMENTS","����");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_CLICKTOCOPY","�������");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_ACHIVE","���Ĺ鵵����");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_MONTHLY","����");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_TIME_Y","%s"); // Year
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_TIME_YM","%2\$s - %1\$s"); // Year - Month
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_TIME_YMD","%1\$s - %2\$s - %3\$s"); // Year - Month - Day

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_MONTH_1","һ��");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_MONTH_2","����");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_MONTH_3","����");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_MONTH_4","����");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_MONTH_5","����");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_MONTH_6","����");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_MONTH_7","����");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_MONTH_8","����");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_MONTH_9","����");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_MONTH_10","ʮ��");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_MONTH_11","ʮһ��");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_MONTH_12","ʮ����");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_WEEK_1","����һ");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_WEEK_2","���ڶ�");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_WEEK_3","������");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_WEEK_4","������");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_WEEK_5","������");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_WEEK_6","������");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_WEEK_7","������");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_IMAGE_CAPTION","ͼƬ����");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_IMAGE_CURRENT","��ǰͼƬ");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_SPOTLIGHT","����");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_LIST","�����б�");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_DRAFTS","�ݸ�");

/*
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_TRANSFER","������");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_TRANSFER_DESC","��������ת������Ӧ����");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_TRANSFER_DONE","�����ѳɹ�ִ��: %s");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_SELECTEDITOR","ѡ��༭��");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_REQUIRED","������");
*/
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_REMOVE","���");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_SAVE_BEFORE_SWITCH","ҳ��ת��ǰע�Ᵽ������");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_NEWPAGE_AVAILABLE","�����һҳ֮����Լ�����Ӹ���ҳ��");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_MOVE_CATEGORYANDARTICLE","�����ӷ�������½���ת�Ƶ��ϲ������.");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_DELETE_CATEGORYANDARTICLE","�����ӷ�������½��������ݿ���ɾ��.");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_CONFIG_CATEGORYANDARTICLE","��ѡ�����ͨ���޸� article/include/plugin.php �е� \$GLOBALS[\"xoopsModuleConfig\"][\"category_delete_forced\"] ��������");

//define($GLOBALS["ART_VAR_PREFIXU"]."_MD_CATEGORY1_CAN_NOT_DELETE","���к�cat_id=1����������ɾ��");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_PARENT_CATEGORY","�ϲ����");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_ENTRY_SELECT","ѡ����ҳ����");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_ARTICLE_SELECT","ѡ������");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_DEFAULT","ȱʡ");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_DESC","����");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_ASC","˳��");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_SORTORDER", '��%1$s%2$s'); // sort, order

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_UPDATE_TIME","��������");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_IMAGE_ARTICLE","������ͷͼƬ");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_IMAGE_UPLOADED","���ϴ���ͼƬ");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_HELP","����");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_HELP_PUBLISH_ARTICLE","���浱ǰ���ݲ��ύ���������Ȩ���趨��ĳЩ�������Ҫ��������Ա��˺���ܹ���������");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_HELP_SAVE","���浱ǰҳ������");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_HELP_SAVE_EDIT","���浱ǰҳ�����ݲ����ؼ����༭�������ǰ����״̬Ϊδ����״̬������Ҫ�ύ�����Ժ����²��ܱ�����������");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_HELP_SAVE_DRAFT","���浱ǰ����Ϊ˽�˲ݸ壨ֻ�������Լ�����������������������ύ������Զ�ɾ����");
?>