<?php
if (!defined('ABSPATH')) exit;

function delvin_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('woocommerce');
    add_theme_support('html5', array(
        'search-form','comment-form','comment-list',
        'gallery','caption','style','script'
    ));
    register_nav_menus(array(
        'primary' => __('منوی اصلی', 'delvin')
    ));
}
add_action('after_setup_theme', 'delvin_setup');

function delvin_assets() {
    wp_enqueue_style(
        'delvin-main',
        get_template_directory_uri() . '/assets/css/main.css',
        array(),
        '2.0.0'
    );

    wp_enqueue_script(
        'delvin-main',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        '2.0.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'delvin_assets');

function delvin_price_html($price) {
    return $price;
}

function delvin_get_demo_products() {
    return array(
        array('name' => 'کیف دوشی مینیمال DELVIN', 'cat' => 'کیف', 'price' => '۲,۴۹۰,۰۰۰ تومان', 'image' => 'https://images.unsplash.com/photo-1591561954557-26941169b49e?auto=format&fit=crop&w=900&q=82'),
        array('name' => 'کیف دستی مدل NOVA', 'cat' => 'کیف دستی', 'price' => '۲,۹۵۰,۰۰۰ تومان', 'image' => 'https://images.unsplash.com/photo-1584917865442-de89df76afd3?auto=format&fit=crop&w=900&q=82'),
        array('name' => 'کوله‌پشتی روزمره', 'cat' => 'کوله‌پشتی', 'price' => '۱,۷۵۰,۰۰۰ تومان', 'image' => 'https://images.unsplash.com/photo-1553062407-98eeb64c6a62?auto=format&fit=crop&w=900&q=82'),
        array('name' => 'کیف مجلسی PEARL', 'cat' => 'مجلسی', 'price' => '۲,۱۵۰,۰۰۰ تومان', 'image' => 'https://images.unsplash.com/photo-1594223274512-ad4803739b7c?auto=format&fit=crop&w=900&q=82'),
        array('name' => 'کیف دوشی NOIR', 'cat' => 'دوشی', 'price' => '۱,۷۹۰,۰۰۰ تومان', 'image' => 'https://images.unsplash.com/photo-1548036328-c9fa89d128fa?auto=format&fit=crop&w=900&q=82'),
    );
}

function delvin_render_demo_cards($count = 5, $sale = false) {
    $items = delvin_get_demo_products();
    $items = array_slice($items, 0, $count);

    foreach ($items as $i => $item) :
        $old = $sale ? '۲,۹۹۰,۰۰۰ تومان' : '';
        ?>
        <article class="product-card">
            <div class="product-image">
                <img src="<?php echo esc_url($item['image']); ?>" alt="<?php echo esc_attr($item['name']); ?>">
                <?php if ($sale) : ?><span class="product-badge sale">تخفیف</span><?php else : ?><span class="product-badge">جدید</span><?php endif; ?>
                <div class="product-tools">
                    <button class="product-tool" type="button" aria-label="افزودن به علاقه‌مندی">♡</button>
                    <button class="product-tool" type="button" aria-label="مشاهده سریع">⌕</button>
                </div>
            </div>
            <div class="product-body">
                <span class="product-category"><?php echo esc_html($item['cat']); ?></span>
                <h3 class="product-name"><?php echo esc_html($item['name']); ?></h3>
                <div class="product-price">
                    <div>
                        <?php if ($old) : ?><span class="old-price"><?php echo esc_html($old); ?></span><?php endif; ?>
                        <span class="price"><?php echo esc_html($item['price']); ?></span>
                    </div>
                </div>
            </div>
        </article>
        <?php
    endforeach;
}
