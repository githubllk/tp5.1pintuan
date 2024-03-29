<?php /*a:2:{s:68:"E:\phpstudy\PHPTutorial\WWW\666\application\user\view\tpl\links.html";i:1556523498;s:65:"E:\phpstudy\PHPTutorial\WWW\666\application\user\view\layout.html";i:1557454083;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title>小程序商城</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="renderer" content="webkit"/>
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <meta name="apple-mobile-web-app-title" content="小程序商城"/>
    <link rel="icon" type="image/png" href="assets/user/i/favicon.ico"/>
    <link rel="stylesheet" href="assets/user/css/wy_modality.css"/>
    <link rel="stylesheet" href="/assets/user/vendors/iconfonts/mdi/css/materialdesignicons.min.css"/>
    <link rel="stylesheet" href="/assets/user/vendors/css/vendor.bundle.base.css"/>
	<link rel="stylesheet" href="assets/layui/css/layui.css"  media="all">
    <script src="assets/user/js/jquery.min.js"></script>
    <script src="assets/user/js/global.js"></script>
    <script>
        BASE_URL = '<?php echo htmlentities($base_url); ?>';
        STORE_URL =  '/index.php?s=/user';
		
    </script>
</head>

<body data-type="">
<div class="layer-g tpl-g">
    <!-- 头部 -->
    <header class="tpl-header">
        <!-- 右侧内容 -->
        <div class="tpl-header-fluid">
            <!-- 侧边切换 -->
            <div class="layer-fl tpl-header-button switch-button">
                <i class="iconfont icon-menufold"></i>
            </div>
            <!-- 刷新页面 -->
            <div class="layer-fl tpl-header-button refresh-button">
                <i class="iconfont icon-refresh"></i>
				<div class="tpl-header-text-gl"><a href="#">功能列表</a></div>
            </div>
            <!-- 其它功能-->
            <div class="layer-fr tpl-header-navbar">
                <ul>
                    <!-- 欢迎语 -->
                    <li class="layer-text-sm tpl-header-navbar-welcome">
                        <a href="#">欢迎你，<span><?php echo htmlentities($store['user_name']); ?></span>
                        </a>
                    </li>
					<!-- 意见箱 -->
					<li>
					<a href="<?php echo url('user/index/proposal'); ?>">提交建议</a>
					</li>
					

                    <!-- 退出 -->
                    <li class="layer-text-sm">
                        <a href="<?php echo url('user/login/logout'); ?>">
                            <i class="iconfont icon-tuichu"></i> 退出
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <!-- 侧边导航栏 -->
    <div class="left-sidebar dis-flex">
        <!-- 一级菜单 -->
        <ul class="sidebar-nav">
            <li class="sidebar-nav-heading"><img class="logo" src="/assets/user/img/logo.png" width="60" /></li>
           <?php if(is_array($menu) || $menu instanceof \think\Collection || $menu instanceof \think\Paginator): $i = 0; $__LIST__ = $menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
				<li class="sidebar-nav-link">
                    <a href="<?= isset($item['url']) ? url($item['url']) : 'javascript:void(0);' ?>"
                       class="<?php if($item['model'] == $group): ?> active <?php endif; ?>">
                            <i class="mdi sidebar-nav-link-logo menu-icon <?php echo htmlentities($item['icon']); ?>"></i>
                        <?php echo htmlentities($item['name']); ?>
                    </a>
                </li>
			<?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <!-- 子级菜单-->
		<?php $second = $menu[$group]; if(isset($second['list'])): ?>
            <ul class="left-sidebar-second">
                <!-- <li class="sidebar-second-title"><?php echo htmlentities($menu[$group]['name']); ?></li> -->
                <li class="sidebar-second-item">
                   
					<?php if(is_array($second['list']) || $second['list'] instanceof \think\Collection || $second['list'] instanceof \think\Paginator): $i = 0; $__LIST__ = $second['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
						
                            <!-- 二级菜单-->
                            <a href="<?php echo url($item['url']); ?>" class="two-active" style="">
                                <?php echo htmlentities($item['name']); ?>
                            </a>
                       
                            <!-- 三级菜单-->
                            <div class="sidebar-third-item">
                               <!--  <a href="javascript:void(0);"
                                   class="sidebar-nav-sub-title <?php echo !empty($item['active']) ? 'active'  :  ''; ?>">
                                    <i class="iconfont icon-caret"></i>
                                    <?php echo htmlentities($item['name']); ?>
                                </a>  -->
								<?php if(isset($item['list'])): ?>
								
                                <ul class="sidebar-third-nav-sub">
								
									<?php if(is_array($item['list']) || $item['list'] instanceof \think\Collection || $item['list'] instanceof \think\Paginator): $i = 0; $__LIST__ = $item['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$third): $mod = ($i % 2 );++$i;?>
                                        <li>
                                            <a class="<?php echo $third['url']==$url ? 'active'  :  ''; ?>"
                                               href="<?php echo url($third['url']); ?>">
                                                <?php echo htmlentities($third['name']); ?></a>
                                        </li>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
									
                                </ul>
								<?php endif; ?>
                            </div>
                      
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </li>
            </ul>
        <?php endif; ?>
    </div>

    <!-- 内容区域 start -->
    <div class="tpl-content-wrapper <?php if(isset($second['list']) == null): ?>no-sidebar-second<?php endif; ?>">
	
        <div class="row-content layer-cf">
    <div class="row">
        <div class="layui-col-sm12 layui-col-md12 layui-col-lg12">
            <div class="widget layer-cf ">
                    <div class="widget-head layer-cf">
                        <div class="widget-title">页面链接</div>
                    </div>
                <div class="widget-body">
                    <div class="link-list">
                        <ul class="">
                            <li class="link-item">
                                <div class="row page-nlayere">商城首页</div>
                                <div class="row layer-cf">
                                    <div>地址：</div>
                                    <div>
                                        <span class="x-color-green">pages/index/index</span>
                                    </div>
                                </div>
                            </li>
                            <li class="link-item">
                                <div class="row page-nlayere">自定义页面</div>
                                <div class="row layer-cf">
                                    <div>地址：</div>
                                    <div>
                                        <span class="x-color-green">pages/custom/index</span>
                                    </div>
                                </div>
                                <div class="row layer-cf">
                                    <div>参数：</div>
                                    <div>
                                        <p class="parlayer">
                                            <span class="x-color-green">page_id</span>
                                            <span>页面ID</span>
                                            <span class="x-color-red">　--必填</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="row layer-cf">
                                    <div>例如：</div>
                                    <div>
                                        <span class="x-color-c-gray-5f">pages/custom/index?page_id=10001</span>
                                    </div>
                                </div>
                            </li>
                            <li class="link-item">
                                <div class="row page-nlayere">分类页面</div>
                                <div class="row layer-cf">
                                    <div>地址：</div>
                                    <div>
                                        <span class="x-color-green">pages/category/index</span>
                                    </div>
                                </div>
                            </li>
                            <li class="link-item">
                                <div class="row page-nlayere">商品列表</div>
                                <div class="row layer-cf">
                                    <div>地址：</div>
                                    <div>
                                        <span class="x-color-green">pages/category/list</span>
                                    </div>
                                </div>
                                <div class="row layer-cf">
                                    <div>参数：</div>
                                    <div>
                                        <p class="parlayer">
                                            <span class="x-color-green">category_id</span>
                                            <span>商品分类ID</span>
                                            <span class="">　--选填</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="row layer-cf">
                                    <div class="">例如：</div>
                                    <div class="">
                                        <span class="x-color-c-gray-5f">pages/category/list?category_id=10001</span>
                                    </div>
                                </div>
                            </li>
                            <li class="link-item">
                                <div class="row page-nlayere">商品详情</div>
                                <div class="row layer-cf">
                                    <div class="">地址：</div>
                                    <div class="">
                                        <span class="x-color-green">pages/goods/index</span>
                                    </div>
                                </div>
                                <div class="row layer-cf">
                                    <div class="">参数：</div>
                                    <div class="">
                                        <p class="parlayer">
                                            <span class="x-color-green">goods_id</span>
                                            <span>商品ID</span>
                                            <span class="x-color-red">　--必填</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="row layer-cf">
                                    <div class="">例如：</div>
                                    <div class="">
                                        <span class="x-color-c-gray-5f">pages/goods/index?goods_id=10001</span>
                                    </div>
                                </div>
                            </li>
                            <li class="link-item">
                                <div class="row page-nlayere">搜索页</div>
                                <div class="row layer-cf">
                                    <div class="">地址：</div>
                                    <div class="">
                                        <span class="x-color-green">pages/search/index</span>
                                    </div>
                                </div>
                            </li>
                            <li class="link-item">
                                <div class="row page-nlayere">购物车页面</div>
                                <div class="row layer-cf">
                                    <div class="">地址：</div>
                                    <div class="">
                                        <span class="x-color-green">pages/flow/index</span>
                                    </div>
                                </div>
                            </li>
                            <li class="link-item">
                                <div class="row page-nlayere">个人中心</div>
                                <div class="row layer-cf">
                                    <div class="">地址：</div>
                                    <div class="">
                                        <span class="x-color-green">pages/user/index</span>
                                    </div>
                                </div>
                            </li>
                            <li class="link-item">
                                <div class="row page-nlayere">订单列表</div>
                                <div class="row layer-cf">
                                    <div class="">地址：</div>
                                    <div class="">
                                        <span class="x-color-green">pages/order/index</span>
                                    </div>
                                </div>
                                <div class="row layer-cf">
                                    <div class="">参数：</div>
                                    <div class="">
                                        <p class="parlayer">
                                            <span class="x-color-green">dataType</span>
                                            <span>订单类型 ( </span>
                                            <span class="x-color-green">all</span>
                                            <span>全部，</span>
                                            <span class="x-color-green">payment</span>
                                            <span>已付款，</span>
                                            <span class="x-color-green">delivery</span>
                                            <span>待发货，</span>
                                            <span class="x-color-green">received</span>
                                            <span>待收货</span>
                                            <span>)</span>
                                            <span class="">　--选填</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="row layer-cf">
                                    <div class="">例如：</div>
                                    <div class="">
                                        <span class="x-color-c-gray-5f">pages/order/index?dataType=all</span>
                                    </div>
                                </div>
                            </li>
                            <li class="link-item">
                                <div class="row page-nlayere">分销中心</div>
                                <div class="row layer-cf">
                                    <div class="">地址：</div>
                                    <div class="">
                                        <span class="x-color-green">pages/dealer/index/index</span>
                                    </div>
                                </div>
                            </li>
                            <li class="link-item">
                                <div class="row page-nlayere">领券中心</div>
                                <div class="row layer-cf">
                                    <div class="">地址：</div>
                                    <div class="">
                                        <span class="x-color-green">pages/coupon/coupon</span>
                                    </div>
                                </div>
                            </li>
                            <li class="link-item">
                                <div class="row page-nlayere">我的优惠券</div>
                                <div class="row layer-cf">
                                    <div class="">地址：</div>
                                    <div class="">
                                        <span class="x-color-green">pages/user/coupon/coupon</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(function () {

        /**
         * 表单验证提交
         * @type {*}
         */
        $('#my-form').superForm();

    });
</script>

    </div>
    <!-- 内容区域 end -->

</div>
    <script src="assets/user/js/validform.min.js"></script> <!-- 提交 -->
    <script src="assets/user/js/jquery.form.min.js"></script>
    <script src="assets/user/js/webuploader.html5only.js"></script>
	<script src="assets/user/js/art-template.js"></script>
	<script src="assets/user/js/app.js"></script>
	<script src="assets/user/js/file.library.js"></script>
	<script src="/assets/layui/layui.all.js" charset="utf-8"></script>
</body>
</html>
