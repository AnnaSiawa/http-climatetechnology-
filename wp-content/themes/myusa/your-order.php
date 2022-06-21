<?php
/**
 * Template Name: Your Order
 */
?>

<?php get_header(); ?>
<div class="content contain">
    <div class="page-your-order">
        <section class="main-block">
            <div class="main-block__wrap">
                <div class="main-block__container">
                    <div class="main-block__description">
                        <h1>Your Order</h1>
                    </div>
                    <div class="main-block__graphics">
                        <div class="main-block__graphics_image" style="background-image: url(<?= get_template_directory_uri(); ?>/dist/images/your-order-splash.jpg)"></div>
                    </div>
                </div>
            </div>
        </section>
        <div class="contain-inner">
            <div class="page-your-order__title">
                <div class="page-your-order__title_link">MyUSACorporation.com</div>
                <div class="page-your-order__title_text">What happens after the order is&nbsp;placed?</div>
            </div>
            <div class="order-steps">
                <div class="order-step">
                    <div class="order-step__icon" style="background-image: url(<?= get_template_directory_uri(); ?>/dist/images/your-order-icon01.png)"></div>
                    <div class="order-step__icon order-step__icon-bg"></div>
                    <div class="order-step__icon order-step__icon-bg2-desktop"></div>
                    <div class="order-step__text">
                        <div class="order-step__text_title">
                            Order Progress
                        </div>
                        <div class="order-step__text_text">
                            <p>Once your order is&nbsp;submitted and paid in&nbsp;full our account specialists immediately begin working on&nbsp;your application. The progress is&nbsp;recorded in&nbsp;your personal
                                account. You will be&nbsp;able to&nbsp;trace each and every step of&nbsp;the filing process.</p>
                        </div>
                    </div>
                    <div class="order-step__counter">01</div>
                </div>
                <div class="order-step">
                    <div class="order-step__icon" style="background-image: url(<?= get_template_directory_uri(); ?>/dist/images/your-order-icon02.png)"></div>
                    <div class="order-step__icon order-step__icon-bg"></div>
                    <div class="order-step__icon order-step__icon-bg2-desktop"></div>
                    <div class="order-step__text">
                        <div class="order-step__text_title">
                            Documents
                        </div>
                        <div class="order-step__text_text">
                            <p>Your account will also contain scanned copies of&nbsp;all the documents related to&nbsp;your order, such as&nbsp;Articles of&nbsp;Incorporation, EIN notification letter, Certificate of&nbsp;Filing,
                                etc.</p>
                        </div>
                    </div>
                    <div class="order-step__counter">02</div>
                </div>
                <div class="order-step">
                    <div class="order-step__icon" style="background-image: url(<?= get_template_directory_uri(); ?>/dist/images/your-order-icon03.png)"></div>
                    <div class="order-step__icon order-step__icon-bg"></div>
                    <div class="order-step__icon order-step__icon-bg2-desktop"></div>
                    <div class="order-step__text">
                        <div class="order-step__text_title">
                            Alerts
                        </div>
                        <div class="order-step__text_text">
                            <p>Finally, we&nbsp;will send you important email alerts regarding your orders and your account.</p>
                        </div>
                    </div>
                    <div class="order-step__counter">03</div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
