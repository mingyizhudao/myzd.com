
<?php
$themeBaseUrl = Yii::app()->theme->baseUrl;
Yii::app()->clientScript->registerCssFile($themeBaseUrl . "/css/home.css" . "?v=" . time());
?>
<link rel="stylesheet" type="text/css" href="<?php echo $themeBaseUrl; ?>/js/jquery.bxslider/jquery.bxslider.css">
<?php
$urlCloud = $this->createUrl('huizhen/index');
$urlHospital = $this->createUrl('hospital/view');
$urlOverseas = $this->createUrl('overseas/view');
$urlRecommend = $this->createUrl('event/view');
$urlGuke = $this->createUrl('huizhen/guke');
$urlZhengxing = $this->createUrl('huizhen/zhengxing');
$urlXinxueguan = $this->createUrl('huizhen/xinxueguan');
$urlZhongliu = $this->createUrl('huizhen/zhongliu');
$urlFuchan = $this->createUrl('huizhen/fuchan');
$urlGandan = $this->createUrl('huizhen/gandan');
$urlShenjingke = $this->createUrl('huizhen/shenjingke');
?>

<div id="main-content" class="container-fluid">
    <div class="row">
        <div id="page-slider">
            <div class="slide page-intro1">
                <div class="container">
                    <div class="row content">
                        <div class="col-sm-4 col-l hidden-xs">
                            <div class="row pic block"></div>
                        </div>
                        <div class="col-sm-8 col-r">
                            <div class="angle">
                                <img src="<?php echo $themeBaseUrl; ?>/images/home/page-intro1-angle.png">
                            </div>
                            <div class="caption">								
                                <div class="line-1">您还在因预约不到名医而无助么？</div>
                                <div class="line-2" style="display:none;">您还在为入住三甲医院而焦虑么？</div>
                                <div class="line-2">您还在为难等的病床位而焦虑么？</div>
                            </div>
                            <div class="solution">
                                <div class="reg-myhz text-center">登陆名医主刀</div>
                                <div class="commitment text-center">三甲名医主刀&nbsp;&nbsp;&nbsp;床位随时入住</div>
                            </div>
                            <div class="btn-group">                               
                                <a type="button" class="btn btn-success btn-lg" href="<?php echo $this->createUrl('medicalrecord/create'); ?>"><i class="fa fa-headphones"></i>&nbsp;在线预约</a>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
            <div class="slide page-2">
                <div class="container">
                    <div class="row content">
                        <div class="col-sm-8">
                            <div class="dis-faculty-controls bg-contain">
                                <div class="control-item top-left"><a href="<?php echo $urlGuke; ?>"><div class="icon icon-bone"></div><div class="caption">骨科</div></a></div>
                                <div class="control-item top-right"><a href="<?php echo $urlShenjingke; ?>"><div class="icon icon-shenjingke"></div><div class="caption">神经科</div></a></div>
                                <div class="control-item middle-left"><a href="<?php echo $urlXinxueguan; ?>"><div class="icon icon-cardio"></div><div class="caption">心血管</div></a></div>
                                <div class="control-item middle-right"><a href="<?php echo $urlZhongliu; ?>"><div class="icon icon-tumor"></div><div class="caption">肿瘤</div></a></div>
                                <div class="control-item bottom-left"><a href="<?php echo $urlFuchan; ?>"><div class="icon icon-baby"></div><div class="caption">妇产科</div></a></div>
                                <div class="control-item bottom-right"><a href="<?php echo $urlGandan; ?>"><div class="icon icon-liver"></div><div class="caption">肝胆</div></a></div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="description"><div class="line-1">六大科室</div><div class="line-2">随时候诊</div></div>
                        </div>
                    </div>    
                </div>
            </div>
            <div class="slide page-3">
                <div class="bg-top"></div>
                <div class="container">
                    <div class="row content workflow">
                        <div class="workflow-controls">
                            <div class="control ctrl-1 odd icon" data-toggle="desc-1"></div>
                            <div class="control ctrl-2 even icon" data-toggle="desc-2"></div>
                            <div class="control ctrl-3 odd icon" data-toggle="desc-3"></div>
                            <div class="control ctrl-4 even icon" data-toggle="desc-4"></div>
                        </div>
                        <div class="workflow-description">
                            <div class="desc-1 active"><img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/home/page-03-contactus.png" /></div>
                            <div class="desc-2"><img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/home/page-03-upload.png" /></div>
                            <div class="desc-3"><img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/home/page-03-huizhen.png" /></div>
                            <div class="desc-4"><img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/home/page-03-hospital.png" /></div>
                        </div>
                    </div>    
                </div>
                <div class="bg-btm"></div>
            </div>
            <div class="slide page-4">
                <div class="container">
                    <div class="row content">
                        <div class="item item-1">
                            <div class="comment">平台服务反馈很及时，节省了很多时间，完全是从病人的角度来考虑，服务态度很好，跟以往看病的体验完全不同.更重要的是，竟然帮我约到了非常难约的老名医!看到反馈后家里人心里很放心.</div>
                            <div class="btm"><div class="icon-quote icon-quote-left"></div><div class="name">患者：冯先生</div><div class="dis">肺部肿瘤</div><div class="location">湖北</div></div>
                        </div>
                        <div class="item item-2">
                            <div class="comment">现在有这样的平台真的是太好了，服务特别好，患者的问题平台反馈的特别快，还给我们联系了上海的专家，专家的建议也很贴心很感谢你们这个平台，给我们解决了很多问题，我要推荐给我身边的朋友有病就找名医主刀。希望你们越办越好成为我们老百姓人人可以看的起名医的一个平台。</div>
                            <div class="btm"><div class="name">患者：李女士</div><div class="dis">类风湿关节炎</div><div class="location">新疆</div><div class="icon-quote icon-quote-right"></div></div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="page-app-dl" class="slide page-5">
                <div class="page-bg">
                    <div class="container">
                        <div class="row content">
                            <div class="app-dl">
                                <div class="description"><div class="line-1">根据手机型号，选择免费下载</div><div class="line-2">您可在App Store、安卓市场，直接搜索"名医主刀"</div></div>
                                <div>
                                    <ul class="list-inline-block clearfix">
                                        <!--<li class="link-apple"><a class="block" href="https://appsto.re/sg/N11M5.i" target="_blank"><div><i class="fa fa-apple"></i></div><div class="caption">iPhone</div></a>-->
                                        <li class="link-apple"><a class="block" href="https://itunes.apple.com/cn/app/id1001032594" target="_blank"><div><i class="fa fa-apple"></i></div><div class="caption">iPhone</div></a>
                                        </li><li class="link-android"><a class="block" href="http://www.wandoujia.com/apps/com.mingyihz.myhzwebapp" target="_blank"><div><i class="fa fa-android"></i></div><div class="caption">Android</div></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer">
                    <div>
                        <ul class="inline-block">
                            <li><?php echo Yii::app()->name; ?>版权所有&copy;2015</li>
                            <li><?php echo CHtml::link('关于我们', array('site/page', 'view' => 'aboutus'), array('class' => 'xnostyle', 'id' => 'footer-nav-aboutus')); ?></li>
                            <li><?php echo CHtml::link('免责声明', array('site/page', 'view' => 'terms'), array('class' => 'xnostyle', 'id' => 'footer-nav-terms')); ?></li>
                            <li><?php echo CHtml::link('联系我们', array('site/contactus'), array('class' => 'xnostyle', 'id' => 'footer-nav-contactus')); ?></li>                                        
                            <li>沪ICP备15004081号</li>
                        </ul>
                    </div>
                </div>
            </div>



        </div>
    </div>
    <script type="text/javascript">
        $(function () {
            var homePageSlider = $('#partnerlist>.carousel').bxSlider({
                minSlides: 1,
                maxSlides: 10,
                slideWidth: 180,
                slideMargin: 5,
                ticker: true,
                tickerHover: true,
                speed: 20000,
                useCSS: false
            });
        });
    </script>