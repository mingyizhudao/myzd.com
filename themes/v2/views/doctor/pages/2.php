
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
    <div id="cover">
		<span class="verify pull-right"> 本站已经通过实名认证，所有内容由陈志洁医生本人发表</span>
		<div class="avatar">
			<ul class="media-list">
				<li class="media">
					<img class="media-object pull-left" src="<?php echo $urlDP; ?>" alt="">
					<div class="media-body">
						<h3 class="media-heading"><span>陈志洁&nbsp;&nbsp;正主任医师&nbsp;&nbsp;</span>
						<span class="pull-right" style="width:200px;"><a class="btn btn-success btn-createcase btn-lg btn-block" href="">上传病历</a></span>
						</h3>
						<div class="mt5"><a>安徽省安庆市立医院</a>&nbsp;&nbsp;<a>其他</a></div>
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
						<span class="r">正主任医师</span>
					</li>
					<li class="list-group-item">
						<span class="l">科室：</span>
						<span class="r">其他</span>
					</li>
					<li class="list-group-item">
						<span class="l">工作年限：</span>
						<span class="r">12年</span>
					</li>
					<li class="list-group-item">
						<span class="l">擅长：</span>
						<span class="r">擅长使用国内外最先进的各种泌尿外科手术器械及设备，如惠康双定位电磁波体外震波碎石机、
						英国佳乐等离子电切镜、科医人钬激光机、德国狼牌输尿管镜经皮肾镜、史塞克腹腔镜等。
						并利用这些先进设备开展了体外碎石、输尿管镜经皮肾镜钬激光碎石、前列腺等离子电切术、后腹腔镜下肾切除术、肾癌根治术、
						半尿路切除术、肾上腺肿瘤切除术、腹腔镜下全膀胱切除-原位新膀胱术、前列腺癌根治术等一系列。</span>
					</li>
					
				</ul>
			</div>
    	</div>
		
    	<div class="col-sm-8 passage" >
    	
    	<div class="linex">
    		<h3 class="inline-block" style="background: white; padding-right:10px;">
    		工作及获奖情况
    		</h3>
    	</div>
  				<p class="mt10" style="border-left: 1px solid #d3d3d3;padding-left: 15px;padding-bottom: 10px;border-bottom: 1px solid #d3d3d3;">
  					主任医师、科主任、安徽医科大学教授、中华医学会安徽省耳鼻咽喉头颈外科专业委员会常委、
  					安徽省康复医学会耳鼻咽喉科专业委员会常委、安庆市耳鼻咽喉科分会主任委员、
  					安庆市中西医结合耳鼻咽喉科协会副理事长兼秘书长、泛太平洋地区整形外科协会会员、《中国中西医结合耳鼻咽喉科杂志》编委；
  					多次在复旦大学附属眼耳鼻咽喉科医院、北京同仁医院等地进修学习。
  					<br>在安庆市率先开展了鼓室成形+听小骨植入手术、耳硬化症的手术、鼻内镜下垂体瘤切除术、喉部激光手术、下咽癌切除+胸大肌皮瓣修复术、
  					颈部气管造口成形术等特大、新手术，居省内先进水平。在国家级刊物上发表了论文十余篇，因“侧颅底病变的手术治疗” 、
  					“鼻内镜下蝶窦良性病变手术治疗”、“微创气管切开术在凝血功能障碍的病人中应用”、“鼾症病人的综合治疗与护理”曾分别荣获安庆市人民政府科学技术进步二等奖、三等奖。
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
