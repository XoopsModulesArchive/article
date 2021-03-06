<?php
/**
 * Article module for XOOPS
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code 
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package         article
 * @since           1.0
 * @author          Taiwen Jiang <phppp@users.sourceforge.net>
 * @version         $Id$
 */
 
include "../../../include/cp_header.php";
require XOOPS_ROOT_PATH . "/modules/" . $xoopsModule->getVar("dirname") . "/include/vars.php";
require_once XOOPS_ROOT_PATH . "/modules/" . $xoopsModule->getVar("dirname") . "/include/functions.php";
include_once XOOPS_ROOT_PATH . "/Frameworks/art/functions.admin.php";

xoops_loadLanguage("main", $xoopsModule->getVar("dirname"));
art_define_url_delimiter();
$myts = MyTextSanitizer::getInstance();
?>