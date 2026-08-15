<?php get_header(); ?>

<div class="home-main">
    <div class="container">
        <div class="notice">
            <span>جدیدترین محصولات و کالکشن‌های DELVIN را ببینید</span>
            <a href="#shop">مشاهده محصولات ←</a>
        </div>

        <section class="section" id="shop">
            <div class="section-head">
                <div class="section-title-wrap">
                    <h2 class="section-title">جدیدترین محصولات</h2>
                    <span class="section-meta">انتخاب‌های تازه DELVIN</span>
                </div>
                <a class="section-link" href="#">مشاهده همه ←</a>
            </div>

            <div class="tab-row">
                <button class="tab active" type="button">همه</button>
                <button class="tab" type="button">کیف</button>
                <button class="tab" type="button">کیف دستی</button>
                <button class="tab" type="button">دوشی</button>
                <button class="tab" type="button">کوله‌پشتی</button>
                <button class="tab" type="button">اکسسوری</button>
            </div>

            <div class="product-grid">
                <?php delvin_render_demo_cards(5); ?>
            </div>
            <button class="more-btn" type="button">بارگیری بیشتر محصولات</button>
        </section>

        <section class="section">
            <div class="section-head">
                <div class="section-title-wrap">
                    <h2 class="section-title">جدیدترین‌های DELVIN</h2>
                    <span class="section-meta">پیشنهادهای منتخب</span>
                </div>
                <a class="section-link" href="#">مشاهده همه ←</a>
            </div>

            <div class="product-grid">
                <?php delvin_render_demo_cards(5); ?>
            </div>
            <button class="more-btn" type="button">بارگیری بیشتر محصولات</button>
        </section>

        <section class="section" id="collections">
            <div class="collection-grid">
                <article class="collection-card">
                    <img src="https://images.unsplash.com/photo-1591561954557-26941169b49e?auto=format&fit=crop&w=1300&q=82" alt="کالکشن کیف">
                    <div class="collection-overlay"></div>
                    <div class="collection-content">
                        <span class="collection-kicker">COLLECTION 01</span>
                        <h3>کالکشن کیف‌های DELVIN</h3>
                        <a href="#shop">مشاهده کالکشن ←</a>
                    </div>
                </article>

                <article class="collection-card">
                    <img src="https://images.unsplash.com/photo-1553062407-98eeb64c6a62?auto=format&fit=crop&w=1300&q=82" alt="کالکشن روزمره">
                    <div class="collection-overlay"></div>
                    <div class="collection-content">
                        <span class="collection-kicker">COLLECTION 02</span>
                        <h3>انتخاب‌های روزمره</h3>
                        <a href="#shop">مشاهده کالکشن ←</a>
                    </div>
                </article>
            </div>
        </section>

        <section class="section">
            <div class="sale-strip" id="sale">
                <div>
                    <h3>فروش ویژه DELVIN</h3>
                    <p>محصولات منتخب با قیمت ویژه و تعداد محدود.</p>
                </div>
                <a href="#shop">مشاهده تخفیف‌ها</a>
            </div>
        </section>

        <section class="section">
            <div class="section-head">
                <div class="section-title-wrap">
                    <h2 class="section-title">محبوب‌ترین‌ها</h2>
                    <span class="section-meta">انتخاب مشتریان</span>
                </div>
                <a class="section-link" href="#">مشاهده همه ←</a>
            </div>

            <div class="product-grid">
                <?php delvin_render_demo_cards(5, true); ?>
            </div>
            <button class="more-btn" type="button">بارگیری بیشتر محصولات</button>
        </section>

        <section class="section">
            <div class="info-grid">
                <div class="info-card"><div class="info-icon">✓</div><h4>ضمانت اصالت کالا</h4><p>خرید مطمئن و شفاف.</p></div>
                <div class="info-card"><div class="info-icon">↗</div><h4>ارسال سریع</h4><p>پردازش سفارش در سریع‌ترین زمان.</p></div>
                <div class="info-card"><div class="info-icon">◉</div><h4>پشتیبانی</h4><p>پاسخ‌گویی قبل و بعد از خرید.</p></div>
                <div class="info-card"><div class="info-icon">♡</div><h4>انتخاب متنوع</h4><p>مجموعه‌ای از مدل‌های کاربردی و خاص.</p></div>
            </div>
        </section>

        <section class="section" id="about">
            <div class="about-card">
                <h3>درباره BAG.DELVIN GALLERY</h3>
                <p>
                    این بخش محل معرفی برند، داستان شکل‌گیری مجموعه و توضیح کوتاه درباره تجربه خرید است.
                    متن نهایی را بعداً با محتوای واقعی کارفرما جایگزین می‌کنیم.
                </p>
            </div>
        </section>
    </div>
</div>

<?php get_footer(); ?>
