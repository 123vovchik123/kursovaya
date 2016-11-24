<?php
/**
 * Created by PhpStorm.
 * User: Vladimir
 * Date: 10.11.2016
 * Time: 16:35
 */?>
<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();?>
<?use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Page\Asset;
Loc::loadMessages(__FILE__);?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?=LANGUAGE_ID?>">
<head>
    <title><?$APPLICATION->ShowTitle();?></title>
    <?$APPLICATION->ShowHead();?>
    <?Asset::getInstance()->
    addCss(SITE_TEMPLATE_PATH."/template_styles.css");?>
    <?Asset::getInstance()->
    addJs(SITE_TEMPLATE_PATH."/_include/js/cufon-yui.js", true);?>
    <?Asset::getInstance()->
    addJs(SITE_TEMPLATE_PATH."/_include/js/arial.js", true);?>
    <?Asset::getInstance()->
    addJs(SITE_TEMPLATE_PATH."/_include/js/cuf_run.js", true);?>
</head>
<body>
<?$APPLICATION->ShowPanel();?>
<div class="main">
    <div class="header">
        <div class="header_resize">
            <div class="logo">
                <h1><a href="#">IT<span>Desk</span></a> <small>simple design templates</small></h1>
            </div>
            <div class="clr"></div>
            <div class="menu_nav">
                <ul>
                    <li class="active"><a href="index.html">Home</a></li>
                    <li><a href="support.html">Support</a></li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                </ul>
            </div>
            <div class="clr"></div>
        </div>
    </div>
