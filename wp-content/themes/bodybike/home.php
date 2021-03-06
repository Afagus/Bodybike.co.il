<?php
/*
Template Name: home
*/
?>

<?php get_header() ?>
<?php $content = get_post_meta( get_the_ID(), 'box', true ); ?>
<main class="main">
    <section class="section-text">
        <div class="wrap-section-text">
            <picture>
                <source srcset="<?= wp_get_attachment_image_url( $content['aboutLogo']['mobileImage'], 'large' ); ?>"
                        media="(max-width:859px)">
                <img src="<?= wp_get_attachment_image_url( $content['aboutLogo']['image'], 'large' ); ?>"
                     alt="Body Bike"/>
            </picture>
			<?php while ( have_posts() ) {
				the_post();
				echo '<h1>';
				the_title();
				echo '</h1>';
				the_content();
			} ?>
        </div>
    </section>
    <section class="section-products">
        <h3>BODY BIKE</h3>
        <h1>PRODUCTS</h1>
        <div class="products slider">
			<?php
			foreach ( $content['productsCarousel'] as $product ):?>
                <div class="slider-item">
                    <div class="product">
                        <div class="image-holder">
							<?= wp_get_attachment_image( $product['image'], 'large' ); ?>
                        </div>
                        <h4><?= $product['title']?></h4>
                    </div>
                </div>
			<?php endforeach; ?>
        </div>
    </section>
    <section class="image-slider">
        <div class="wrap-image-slider">
			<?php $content = get_post_meta( get_the_ID(), 'box', true ) ?>
			<?php foreach ( $content['footPoster'] as $slide ): ?>
                <div class="slide">
                    <picture>
                        <source srcset="<?php echo wp_get_attachment_image_url( $slide['mobileImage'], 'medium' ); ?>"
                                media="(max-width:859px)">
                        <img src="<?php echo wp_get_attachment_image_url( $slide['image'], 'large' ); ?>"
                             alt="Body Bike"/>
                    </picture>
                </div>
			<?php endforeach; ?>
        </div>

        <div class="buttons-links">
            <a class="btn" target="_blank" href="#">???????? ?????????? ???? BODY BIKE</a>
            <a class="btn dark" target="_blank" href="#">???????? ???????????? ?????????????? ???????????? >></a>
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
    <a class="link-register-contact" href="#register">?????????? ???????????? ?????????? > ></a>
	<?php get_footer() ?>


