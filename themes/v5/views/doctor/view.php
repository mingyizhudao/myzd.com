<?php
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/css/doctor.css");
$urlResImage = Yii::app()->theme->baseUrl . "/images/";
$urlBooking = $this->createUrl('booking/create', array('ajax' => 1));
$doctor = $data->results->doctor;
//var_dump($data);
?>
<div class="contaier-fluid bg-green">
    <div class="container">
        <div class="crumbs-doctor">
            <a href="<?php echo Yii::app()->homeUrl; ?>">首页</a> > <?php echo $doctor->hpDeptName; ?> > <?php echo $doctor->name; ?>
        </div>
    </div>
</div>
<div class="container mb50">
    <div class="row doctorInfo mt20">
        <div class="col-md-8 col-sm-8">
            <div class="">
                <div class="media doc-media ml30">
                    <div class="media-left media-middle pull-left">
                        <img class="media-object doc-img" src="<?php echo $doctor->imageUrl; ?>" alt="<?php echo $doctor->name; ?>">
                    </div>
                    <div class="media-body pl10">
                        <h4 class="media-heading mt30"><span><?php echo $doctor->name; ?></span><span class="color-gray ml20"><?php echo $doctor->mTitle; ?></span><span class="color-gray ml20"><?php echo $doctor->aTitle; ?></span></h4>
                        <div class="mt20">
                            <?php echo $doctor->hpDeptName == '' ? '' : '<span class="expert-faculty text-center">' . $doctor->hpDeptName . '</span>'; ?>
                            <span><?php echo $doctor->hospitalName; ?></span>
                        </div>
                    </div>
                </div>
                <section class="main pb20">
                    <?php
                    if (isset($doctor->reasons) && arrayNotEmpty($doctor->reasons)) {
                        $reasons = $doctor->reasons;
                        ?>
                        <div>
                            <div class="docinfo-title reason">推荐理由</div>
                            <div class="pl30">
                                <div class="row">
                                    <?php
                                    foreach ($reasons as $key => $reason) {
                                        $textcenter = strlen($reason) <= 30 ? 'text-center' : '';
                                        echo '<div class="col-sm-12 col-md-4"><div class="reason-content"><div class="reason-text ' . $textcenter . '">' . $reason . '</div></div></div>';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    <?php }
                    ?> 
                    <?php
                    if (isset($doctor->description) && !is_null($doctor->description)) {
                        ?>
                        <div class="disTags">
                            <div class="docinfo-title good">擅长手术</div>
                            <ul class="pl30">
                                <?php
                                echo $doctor->description;
                                ?>
                            </ul>
                        </div> 
                    <?php }
                    ?>
                    <?php
                    if (isset($doctor->honour) && arrayNotEmpty($doctor->honour)) {
                        ?>
                        <div class="honour">
                            <div class="docinfo-title honor">获得荣誉</div>
                            <div class="pl30">
                                <ul>
                                    <?php
                                    foreach ($doctor->honour as $value) {
                                        if (trim($value) != "") {
                                            echo '<li>' . $value . '</li>';
                                        }
                                    }
                                    ?>
                                </ul>                       
                            </div>
                        </div>
                    <?php }
                    ?>
                    <?php
                    if (isset($doctor->careerExp) && !is_null($doctor->careerExp)) {
                        ?>
                        <div>
                            <div class="docinfo-title experience">执业经历</div>
                            <div class="pl30">
                        <?php echo $doctor->careerExp; ?>
                            </div>
                        </div> 
                    <?php }
                    ?>                                     
                    <?php
                    if (isset($data->results->members) && !is_null($data->results->members)) {
                        $members = $data->results->members;
                        ?>
                        <div class="">
                            <div class="row"> 
                                <div class="col-sm-3"><div class="docinfo-title members pull-left">团队成员简介</div></div><div class="col-sm-9"><div style="border-bottom:1px solid #25aea6;margin-top:57px;margin-left:-50px;"></div></div>                           
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <?php
                        foreach ($members as $member) {
                            ?>
                            <div class="pl30">
                                <div class="media">
                                    <div class="media-left media-middle pull-left">
                                        <img class="media-object team-img" src="<?php echo $member->imageUrl; ?>" alt="<?php echo $member->name; ?>">
                                    </div>
                                    <div class="media-body pl10">
                                        <div class="media-heading mt15"><strong><?php echo $member->name; ?></strong><span class="expert-mtitle ml20"><?php echo $member->mTitle; ?>&nbsp;<?php echo $member->aTitle; ?></span></div>
                                        <div class="mt15">
        <?php echo $member->hpDeptName == null ? '' : '<span class="color-25aea6 text-center">' . $member->hpDeptName . '</span>'; ?>
                                        </div>
                                        <div class="mt15"><?php echo $doctor->hospitalName; ?></div>
                                    </div>
                                </div>
                                <div class="expert-desc mt15 mb40"><?php echo $member->description == null ? '' : $member->description; ?></div>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </section>									
            </div> 
        </div>
        <div class="col-sm-4 doctor-menu">
            <div class="mt20 text-center">
                <div class="bookingBtn doc-booking" data-url="<?php echo $urlBooking; ?>&did=<?php echo $doctor->id; ?>" data-toggle="modal" data-target="#booking" data-docid="<?php echo $doctor->id; ?>" data-docname="<?php echo $doctor->name; ?>" data-dochospital="<?php echo $doctor->hospitalName; ?>" data-docdept="<?php echo $doctor->hpDeptName; ?>"></div>
            </div>
            <div class="" style="margin-top:10px;font-size:21px;">立即预约的流程</div>       
            <div class="pb30 mt5">
                <img class="" src="<?php echo $urlResImage; ?>doctor/liucheng-01.png">
                <div class="clearfix"></div>
            </div>
            <!--                        <div class="rec-title">
                                        <span>其他推荐</span>
                                    </div>
                                    <div class="border-green">
                                        <div class="rec-doc">-->
            <?php
//                    if (isset($data->results->related) && is_array($data->results->related)) {
//                        $related = $data->results->related;
//                        $last = '';
//                        foreach ($related as $i => $relateddoc) {
//                            if ($i == count($related) - 1) {
//                                $last = 'last';
//                            }
            ?>
                        <!--                            <a href="<?php // echo $this->createUrl('doctor/view', array('id' => $relateddoc->id));         ?>" target='_blank'>
                                                        <div class="expInfo <?php // echo $last;         ?>">
                                                            <div class="pull-left mr10" >
                                                                <img src="<?php //echo $relateddoc->imageUrl;         ?>"/>
                                                            </div>	
                                                            <div class="expName pt20"><span class="strong color-black"><?php //echo $relateddoc->name;         ?></span>&nbsp;&nbsp;<span class="color-gray"><?php //echo $relateddoc->mTitle;         ?> <?php //echo $relateddoc->aTitle;         ?></span></div>
                                                            <div class="expHospital mt10 text-overflow"><?php //echo $relateddoc->hospitalName;         ?></div>
                                                            <div class="expHospital mt10 text-overflow"><?php //echo $relateddoc->hpDeptName;         ?></div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </a>  -->
            <?php
//                        }
//                    } else {
//                        echo '<div class="expInfo last"><div class="mt20 mb50">暂无其他推荐</div></div>';
//                    }
            ?>
            <!--                </div>
                        </div>-->
        </div>
    </div>
</div>
<?php $this->renderPartial("//booking/formModal"); ?>