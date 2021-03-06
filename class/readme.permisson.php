<?php
/**
 * Article management
 *
 * @copyright	The XOOPS project http://www.xoops.org/
 * @license		http://www.fsf.org/copyleft/gpl.html GNU public license
 * @author		Taiwen Jiang (phppp or D.J.) <php_pp@hotmail.com>
 * @since		1.00
 * @version		$Id$
 * @package		module::article
 */

Module permission:
search, html, upload

category:
users: access, view, submit, publish, rate
moderators can: approve, delete

topic:
inherite from category
moderators can: add, remove
?>