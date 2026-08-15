<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="topbar">
    <div class="container topbar-inner">
        <span>ارسال سریع و بسته‌بندی حرفه‌ای DELVIN</span>
        <a href="#contact">پشتیبانی و تماس با ما</a>
    </div>
</div>

<header class="main-header">
    <div class="container header-row">
        <a class="logo" href="<?php echo esc_url(home_url('/')); ?>">
            <span class="logo-mark">D</span>
            <span>
                <span class="logo-word">BAG.DELVIN</span>
                <span class="logo-sub">GALLERY</span>
            </span>
        </a>

        <form class="search-box" action="<?php echo esc_url(home_url('/')); ?>" method="get">
            <input type="search" name="s" placeholder="جستجوی محصولات..." value="<?php echo esc_attr(get_search_query()); ?>">
            <button type="submit" aria-label="جستجو">⌕</button>
        </form>

        <div class="header-actions">
            <a class="header-action icon-only" href="#" aria-label="مقایسه">⇄</a>
            <a class="header-action icon-only" href="#" aria-label="علاقه‌مندی">♡</a>
            <a class="header-action label-hide" href="<?php echo esc_url(wp_login_url()); ?>">حساب کاربری</a>
            <a class="header-action" href="<?php echo function_exists('wc_get_cart_url') ? esc_url(wc_get_cart_url()) : '#'; ?>">
                سبد
                <span class="count">0</span>
            </a>
            <button class="header-action icon-only" id="themeToggle" type="button" aria-label="تغییر تم">☾</button>
        </div>
    </div>

    <div class="main-nav">
        <div class="container nav-inner">
            <a class="nav-link active" href="<?php echo esc_url(home_url('/')); ?>">خانه</a>
            <a class="nav-link" href="#shop">فروشگاه</a>
            <a class="nav-link" href="#collections">کالکشن‌ها</a>
            <a class="nav-link" href="#sale">فروش ویژه</a>
            <a class="nav-link" href="#about">درباره DELVIN</a>
        </div>
    </div>
</header>

<main>
