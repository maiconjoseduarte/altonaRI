<?php
/**
 * Created by PhpStorm.
 * User: maicon
 * Date: 13/09/18
 * Time: 21:22
 */

namespace frontend\assets;

class SiteAsset extends \yii\web\AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'site/lib/bootstrap/css/bootstrap.min.css',
        'site/lib/font-awesome/css/font-awesome.min.css',
        'site/lib/animate/animate.min.css',
        'site/lib/ionicons/css/ionicons.min.css',
        'site/lib/owlcarousel/assets/owl.carousel.min.css',
        'site/lib/lightbox/css/lightbox.min.css',
        'site/css/style.css',
    ];

    public $js = [
        'site/lib/jquery/jquery.min.js',
        'site/lib/jquery/jquery-migrate.min.js',
        'site/lib/bootstrap/js/bootstrap.bundle.min.js',
        'site/lib/easing/easing.min.js',
        'site/lib/superfish/hoverIntent.js',
        'site/lib/superfish/superfish.min.js',
        'site/lib/wow/wow.min.js',
        'site/lib/waypoints/waypoints.min.js',
        'site/lib/counterup/counterup.min.js',
        'site/lib/owlcarousel/owl.carousel.min.js',
        'site/lib/isotope/isotope.pkgd.min.js',
        'site/lib/lightbox/js/lightbox.min.js',
        'site/lib/touchSwipe/jquery.touchSwipe.min.js',
        'site/contactform/contactform.js',
        'site/js/main.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}