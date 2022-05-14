<?php
/*
Template Name: home
*/
?>
<?php get_header() ?>

    <main class="main">
        <section class="section-text">
            <div class="wrap-section-text">
                <picture>
                    <source srcset="<?php bloginfo('template_url');?>/assets/images/small-logo.svg" media="(max-width:859px)">
                    <img src="<?php bloginfo('template_url');?>/assets/images/grey-logo.svg" alt="Body Bike"/>
                </picture>
                <h2>ABOUT BODY BIKE</h2>
                <p>כחלק מהחוויה הכוללת, אנו מציעים גם ייעוץ עסקי מותאם לעסק שלכם, ללא תשלום. עם ניסיון עמוק של שנים בעולמות
                    הספורט, השיווק והניהול, אנו שמחים לשתף אתכם בידע שצברנו, במטרה להרים את העסק שלכם כמה שיותר גבוה. </p>
                <p> אצלנו שירות ותחזוקה שוטפת הם חלק בלתי נפרד מהחוויה שאנחנו מציעים. אנחנו מאמינים בליווי צמוד ומענה מיידי
                    ומותאם ללקוחות שלנו, ולכן אנחנו זמינים אליכם כשנוח – לכם!</p>
            </div>
        </section>
        <section class="section-products">
            <h3>BODY BIKE</h3>
            <h2>PRODUCTS</h2>
            <div class="products slider">
	            <?php
	            global $post;

	            $myposts = get_posts([
		            'numberposts' => 5,
		            'offset'      => 1,
		            'category'    => 1
	            ]);

	            if( $myposts ){
		            foreach( $myposts as $post ){
			            setup_postdata( $post );
			            ?>
                        <!-- Вывод постов, функции цикла: the_title() и т.д. -->
			            <?php
		            }
	            } else {
		            // Постов не найдено
	            }

	            wp_reset_postdata(); // Сбрасываем $post
	            ?>



                <div class="slider-item">
                    <div class="product">
                        <div class="image-holder"><img src="<?php bloginfo('template_url');?>/assets/images/image1.png" alt="Body Bike"></div>
                        <h4>body bike</h4>
                    </div>
                </div>
                <div class="slider-item">
                    <div class="product">
                        <div class="image-holder"><img src="<?php bloginfo('template_url');?>/assets/images/image2.png" alt="Body Bike"></div>
                        <span>body bike</span>
                    </div>
                </div>
                <div class="slider-item">
                    <div class="product">
                        <div class="image-holder"><img src="<?php bloginfo('template_url');?>/assets/images/image3.png" alt="Body Bike"></div>
                        <span>body bike</span>
                    </div>
                </div>
                <div class="slider-item">
                    <div class="product">
                        <div class="image-holder"><img src="<?php bloginfo('template_url');?>/assets/images/image1.png" alt="Body Bike"></div>
                        <h4>body bike</h4>
                    </div>
                </div>
                <div class="slider-item">
                    <div class="product">
                        <div class="image-holder"><img src="<?php bloginfo('template_url');?>/assets/images/image2.png" alt="Body Bike"></div>
                        <span>body bike</span>
                    </div>
                </div>
                <div class="slider-item">
                    <div class="product">
                        <div class="image-holder"><img src="<?php bloginfo('template_url');?>/assets/images/image3.png" alt="Body Bike"></div>
                        <span>body bike</span>
                    </div>
                </div>
            </div>
        </section>
        <section class="image-slider">
            <div class="wrap-image-slider">
                <div class="slide">
                    <picture>
                        <source srcset="<?php bloginfo('template_url');?>/assets/images/mob-bodybike.png" media="(max-width:859px)">
                        <img src="<?php bloginfo('template_url');?>/assets/images/desktop-bodybike@2x.png" alt="Body Bike"/>
                    </picture>
                </div>
            </div>
            <div class="buttons-links">
                <a class="btn" target="_blank" href="#">לאתר הרשמי של BODY BIKE</a>
                <a class="btn dark" target="_blank" href="#">לאתר היבואן ומותגים נוספים >></a>
            </div>
        </section>
        <a class="whatsapp" href="#">
            <svg id="whatsapp" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                 viewBox="0 0 32.22 32.017">
                <defs>
                    <clipPath>
                        <rect fill="#f2f3f4"/>
                    </clipPath>
                </defs>
                <g clip-path="url(#clip-path)">
                    <path d="M1.047,31.2c.376-2.157.743-4.029,1.009-5.916a3.111,3.111,0,0,0-.22-1.735A16.04,16.04,0,0,1,14.014.154,16.207,16.207,0,0,1,32.053,13.57,16.02,16.02,0,0,1,18.5,31.847a17.307,17.307,0,0,1-9.006-1.186,6.2,6.2,0,0,0-2.751-.309c-1.818.171-3.618.529-5.69.852M4.26,27.873a18.7,18.7,0,0,0,2.359-.388,4.8,4.8,0,0,1,3.695.464,12.76,12.76,0,0,0,14.065-1.522,12.574,12.574,0,0,0,4.767-13.314A13.348,13.348,0,0,0,12.3,3.3,13.144,13.144,0,0,0,3.592,20.583c.952,2.373,2.2,4.525.669,7.29"
                          transform="translate(0 0)" fill="#f2f3f4"/>
                    <path d="M39.132,35.644a1.611,1.611,0,0,1,1.689,1.263,8.144,8.144,0,0,0,.535,1.518,2.294,2.294,0,0,1-.538,3.09,1.244,1.244,0,0,0-.12,1.162,10.438,10.438,0,0,0,4.247,4.258,1.283,1.283,0,0,0,1.868-.345c1.206-1.362,1.234-1.338,2.844-.455q.5.277,1.007.559a1.955,1.955,0,0,1,.247,3.526,4.349,4.349,0,0,1-4.115.807c-4.8-1.408-7.939-4.67-9.984-9.073a4.526,4.526,0,0,1,.951-5.594,6.566,6.566,0,0,1,1.367-.714"
                          transform="translate(-27.868 -27.392)" fill="#f2f3f4"/>
                </g>
            </svg>
        </a>
        <a class="link-register-contact" href="#register">הרשמו ונחזור אליכם > ></a>
        <div id="register" class="register">
            <h3>הרשמו ונחזור אליכם</h3>





                <?php echo do_shortcode('[contact-form-7 id="96" title="טופס יצירת קשר"]'); ?>
           <p class="contact-form-warning">* בעת השארת הפרטים הנך מאשר/ת קבלת דיוורים ודואר פרסומי,<br> ומודע/ת לכך שבכל רגע תוכל/י להסיר את עצמך
                מהרשימה.</p>
            <strong> או חייגו אלינו:<a href="tel:0772311387">077.2311387</a></strong>
        </div>
    </main>

<?php get_footer() ?>


