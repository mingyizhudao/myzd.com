
<style>
    .col-left .list-group-item{border-radius:0;}
    .col-left .heading{background-color:#eee;}
    .col-left .l,.col-left .r{padding:4px;vertical-align:top;}
    .col-left .l{display:inline-block;width:90px;font-weight:bold;}
    .col-left .r{display:inline-block;width:170px;}
    
    #cover .title{position:absolute;top:20px;padding-left:40px;}
    #cover .avatar{xposition:absolute;bottom:0;width:100%;height:136px;padding-top:10px;padding-left:30px;background-color:#eee;}
    #cover .avatar .media-list{}
    #cover .avatar .media{}
    #cover .avatar .media .media-object{position:absolute; top:85px;width:140px;border:1px solid #fff;}
    #cover .avatar .media-body{margin-left:20px;padding-left:140px;}
    #cover .verify{float:right;margin-top:-32px;padding:6px 10px;color:#fff;background-color:rgba(0,0,0,0.4);}
</style>		
<?php
$urlDP = $this->createUrl('doctor/loadAvatar', array('uid' => $model->getDoctorAvatar()->getUID()));
?>
<!-- Content -->

<div id="cover">
   
    <span class="verify pull-right"> 本站已经通过实名认证，所有内容由郝玉萍医生本人发表</span>
    <div class="avatar">
        <ul class="media-list">
            <li class="media">
                    <!--<img class="media-object pull-left" src="../themes/v1/images/demo/avatar/avatar20.jpg" alt="">-->
                <img class="media-object pull-left" src="<?php echo $urlDP; ?>" alt="">
                <div class="media-body">
                    <h3 class="media-heading"><span>郝玉萍&nbsp;&nbsp;正高主任&nbsp;&nbsp;</span>
                        <span class="pull-right" style="width:200px;"><a class="btn btn-success btn-createcase btn-lg btn-block" href="">上传病历</a></span>
                    </h3>
                    <div class="mt5"><a>安徽省安庆市立医院</a>&nbsp;&nbsp;<a>外科</a></div>
                </div>

            </li>				
        </ul>

    </div>

</div>

<div class="row" >
    <div class="col-sm-4 col-left mt20">
        <div>
            <ul class="list-group">
                <li class="list-group-item heading">
                    <div class="h4">专家信息：</div>
                </li>
                <li class="list-group-item">
                    <span class="l">职称：</span>
                    <span class="r">正高主任</span>
                </li>
                <li class="list-group-item">
                    <span class="l">科室：</span>
                    <span class="r">安徽省安庆市立医院 外科</span>
                </li>
                <li class="list-group-item">
                    <span class="l">工作年限：</span>
                    <span class="r">25年</span>
                </li>
            </ul>
        </div>
    </div>

    <div class="col-sm-8 passage" >

        <div class="linex">
            <h3 class="inline-block" style="background: white; padding-right:10px;">
                专长领域
            </h3>
        </div>
        <p class="mt10" style="border-left: 1px solid #d3d3d3;padding-left: 15px;padding-bottom: 10px;border-bottom: 1px solid #d3d3d3;">
            擅长于各种类型白内障、青光眼、角膜病、泪道病、眼底病、复杂性眼外伤的手术治疗，并先后到徐州医学院、
            安徽省立医院和天津眼科医院进修学习。专业从事眼前节疾病的Y-G激光治疗和儿童斜、弱视的诊治.
        </p>
        <div class="mt20 row">

            <div class="col-sm-10">
                <div class="row">
                    <div class="col-sm-4 mt10">
                        <button class="btn btn-success btn-createcase btn-block btn-lg">上传病历</button>
                    </div>
                    <div class="col-sm-4 mt10">
                        <button class="btn btn-info disabled btn-block btn-lg">电话咨询</button>
                    </div>
                    <div class="col-sm-4 mt10">
                        <button class="btn btn-primary disabled btn-block btn-lg">网上咨询</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix">
    </div>
</div>



<script>
    $(document).ready(function(){	
        var urlDoctor = "<?php echo $this->createAbsoluteUrl('medicalRecord/create', array('did' => $id)); ?>";
        $(".btn-createcase").click(function(e){
            e.preventDefault();
            window.location=urlDoctor;
        });
	
    });
</script>
