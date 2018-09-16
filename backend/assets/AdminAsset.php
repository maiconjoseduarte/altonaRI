<?php
/**
 * Created by PhpStorm.
 * User: maicon
 * Date: 16/09/18
 * Time: 18:00
 */

namespace backend\assets;

use yii\web\AssetBundle;

class AdminAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'admin/css/bootstrap.min.css',
        'admin/css/bootstrap-theme.css',
        'admin/css/elegant-icons-style.css',
        'admin/css/font-awesome.min.css',
        'admin/css/jquery-easy-pie-chart/jquery.easy-pie-chart.css',
        'admin/css/owl.carousel.css',
        'admin/css/jquery-jvectormap-1.2.2.css',
        'admin/css/fullcalendar.css',
        'admin/css/widgets.css',
        'admin/css/style.css',
        'admin/css/style-responsive.css',
        'admin/css/xcharts.min.css',
        'admin/css/jquery-ui-1.10.4.min.css',
    ];
    public $js = [
        'admin/js/jquery.js',
        'admin/js/jquery-ui-1.10.4.min.js',
        'admin/js/jquery-1.8.3.min.js',
        'admin/js/jquery-ui-1.9.2.custom.min.js',
        'admin/js/bootstrap.min.js',
        'admin/js/jquery.scrollTo.min.js',
        'admin/js/jquery.nicescroll.js',
        'admin/js/scripts.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}