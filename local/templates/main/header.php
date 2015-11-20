<?php
/**
 * Created by PhpStorm.
 * User: sav_owl
 * Date: 20.11.2015
 * Time: 18:23
 */
?>
<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
?>
<?IncludeTemplateLangFile(__FILE__);?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?=LANGUAGE_ID?>">
<head>
    <?$APPLICATION->ShowHead();?>
    <title><?$APPLICATION->ShowTitle();?></title>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/_include/css/all.css",true);?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/_include/js/jquery-1.4.2.min.js", true);?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/_include/js/slideBlock.js", true);?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/_include/js/latte.js", true);?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/_include/js/loopedslider.js", true);?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/_include/js/looped-options.js", true);?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/_include/js/jquery.roundabout.min.js", true);?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/_include/js/loader.js", true);?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/_include/js/ddsmoothmenu.js", true);?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/_include/js/cufon.js", true);?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/_include/js/cufon-fonts.js", true);?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/_include/js/cufon-settings.js", true);?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/_include/js/input.js", true);?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/_include/js/main.js", true);?>

    <!--[if lt IE 8]>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/_include/css/ie.css",true);?><![endif]-->
</head>
<body>
<?$APPLICATION->ShowPanel();?>
<!-- start header -->
<div class="header-wrap">
    <div id="header">
        <div class="header-holder">
            <div class="wrap">
                <h1 class="logo">Synoptic</h1>
                <ul id="nav" class="ddsmoothmenu">
                    <li class="active"><a href="index.html" class="home">Home</a></li>
                    <li><a href="about.html"><span><em>About</em></span></a></li>
                    <li>
                        <a href="#"  class="with-drop"><span><em>Styles</em></span></a>
                        <ul class="drop">
                            <li>
                                <a href="#" class="with-drop">Color variations</a>
                                <ul class="drop2">
                                    <li><a href="../markup/index.html">Black</a></li>
                                    <li><a href="../colors/midnight-blue/index.html">Midnight blue</a></li>
                                    <li><a href="../colors/azure/index.html">Azure</a></li>
                                    <li><a href="../colors/cerulean/index.html">Cerulean</a></li>
                                    <li><a href="../colors/cofee/index.html">Coffee</a></li>
                                    <li><a href="../colors/emerald/index.html">Emerald</a></li>
                                    <li><a href="../colors/contrast-green/index.html">Contrast green</a></li>
                                    <li><a href="../colors/camouflage-green/index.html">Camouflage green</a></li>
                                    <li><a href="../colors/indigo/index.html">Indigo</a></li>
                                    <li><a href="../colors/amethyst/index.html">Amethyst</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="with-drop">Slider variations</a>
                                <ul id="sliderSwitch" class="drop2">
                                    <li id="slider1"><a href="index.html">Loooped slider</a></li>
                                    <li id="slider2"><a href="index-slider02.html">Loooped slider(right)</a></li>
                                    <li id="slider3"><a href="index-slider03.html">Roundabout slider</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="blog.html"><span><em>Blog</em></span></a></li>
                    <li><a href="portfolio.html"><span><em>Portfolio</em></span></a></li>
                    <li><a href="market.html"><span><em>Market</em></span></a></li>
                    <li><a href="contacts.html"><span><em>Contacts</em></span></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- end header -->
<!-- start intro-holder -->
<div id="intro-holder">
    <div class="intro-box">
        <div class="roundabout-holder large">
            <ul id="myRoundabout">
                <li>
                    <img src="<?=SITE_TEMPLATE_PATH;?>/_include/images/bg-image.gif"  alt="image description" width="100%"/>
                    <div class="image">

                    </div>
                </li>
                <li>
                    <img src="<?=SITE_TEMPLATE_PATH;?>/_include/images/bg-image.gif"  alt="image description" width="100%"/>
                    <div class="image">

                    </div>
                </li>
                <li>
                    <img src="<?=SITE_TEMPLATE_PATH;?>/_include/images/bg-image.gif"  alt="image description" width="100%"/>
                    <div class="image">

                    </div>
                </li>
            </ul>
            <div class="controls">
                <a href="#" id="next">Next!</a>
                <a href="#" id="previous">Previous!</a>
            </div>
        </div>
    </div>
</div>
<!-- end intro-holder -->
<!-- start promo-box -->
<div class="promo-wrap">
    <div class="promo-box">
        <div class="promo-holder">
            <strong class="promo-text">Konnichiwa &amp; Welcome! You don't know how it work?</strong>
            <a href="#steps-slider" class="btn-take ancLinks">Take a tour right now!</a>
        </div>
    </div>
</div>
<!-- end promo-box -->
<div id="main">