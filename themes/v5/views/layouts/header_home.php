<?php
//Yii::app()->clientScript->registerScriptFile("http://static.mingyizhudao.com/login_quickbooking.min.js", CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . 'home-extra.js', CClientScript::POS_END);
?>
<div class="container-fluid pt50 collapse bg-home-top" id="header_home">
    <div id="close-header" class="pull-right"><img src="http://static.mingyizhudao.com/146010032220519"/></div>
    <div class="row">
        <div class="container">	
            <div class="row">
                <div class="col-sm-3">
                    <div class="h180"><img src="http://static.mingyizhudao.com/14601003861506"></div>
                    <div class="mt30 color-white text16">快速匹配名医</div>
                    <div class="mt10 color-white text13">急需手术、约不到名医？</div>
                    <div class="color-white text13">名医主刀为您快速匹配最佳主刀医生，<br/>并提供治疗方案。</div>
                </div>
                <div class="col-sm-3">
                    <div class="h180"><img src="http://static.mingyizhudao.com/146010038626711"></div>
                    <div class="mt30 color-white text16">快速预约床位</div>
                    <div class="mt10 color-white text13">床位紧张、排队耽误病情？</div>
                    <div class="color-white text13">名医主刀为您快速安排闲置手术床位，<br/>让您手术不再难。</div>
                </div>
                <div class="col-sm-3">
                    <div class="h180"><img src="http://static.mingyizhudao.com/146010038605879"></div>
                    <div class="mt30 color-white text16">邀请专家会诊</div>
                    <div class="mt10 color-white text13">病人行动不便，想在当地手术？</div>
                    <div class="color-white text13">名医主刀为您邀请全国名医前来会诊，<br/>让您在当地也能享受到顶尖名医服务。</div>
                </div>
                <div class="col-sm-3">
                    <div class="h180"><img src="http://static.mingyizhudao.com/146010038622238"></div>
                    <div class="mt30 color-white text16">了解更多</div>
                    <div class="mt10 color-white text13"><a target="_blank" href="<?php echo $this->createUrl('site/page', array('view' => 'aboutus')); ?>" class="learn-more">了解更多</a>关于名医主刀平台信息，</div>
                    <div class="color-white text13">让名医随时有，手术不再难。</div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>

</script>