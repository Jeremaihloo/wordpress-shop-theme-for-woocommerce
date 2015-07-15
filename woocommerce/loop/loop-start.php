<?php
/**
 * Product Loop Start
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */
?>
<header data-blend-widget="header" class="blend-header">
    <span class="blend-header-left">
        <a class="blend-header-item blend-button blend-button-link" >左部</a>
    </span>
    <span class="blend-header-title">
        <a class="blend-header-item">标题</a>
    </span>
    <span class="blend-header-right">
        <a class="blend-header-item  blend-button blend-button-red">右部</a>
    </span>
</header>

<header data-blend-widget="header" class="blend-header buy-box">
    <span class="blend-header-left"></span>
    <span class="blend-header-title">总计：46.0元</span>
    <span class="blend-header-right">
        <a class="blend-button blend-button-red btn-count">结算</a>
    </span>
</header>

<div id="sidenav" class="blend-sidenav">
    <nav class="blend-sidenav-nav">
        <ul>
            <?php woocommerce_product_subcategories(); ?>
        </ul>
    </nav>
    <section class="blend-sidenav-content">
        <div class="blend-sidenav-item">
