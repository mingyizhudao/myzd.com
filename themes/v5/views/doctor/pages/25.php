
<style>
.col-left .list-group-item{border-radius:0;}
.col-left .heading{background-color:#eee;}
.col-left .l,.col-left .r{padding:4px;vertical-align:top;}
.col-left .l{display:inline-block;min-width:90px;font-weight:bold;}
.col-left .r{display:inline-block;min-width:170px;}

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
		
		<span class="verify pull-right"> 本站已经通过实名认证，所有内容由沈强医生本人发表</span>
		<div class="avatar">
			<ul class="media-list">
				<li class="media">
					<img class="media-object pull-left" src="<?php echo $urlDP;?>" alt="">
					<div class="media-body">
						<h3 class="media-heading"><span>沈强&nbsp;&nbsp;副主任医师&nbsp;副教授&nbsp;</span>
						<span class="pull-right" style="width:200px;"><a class="btn btn-success btn-createcase btn-lg btn-block" href="">上传病历</a></span>
						</h3>
						<div class="mt5"><a>上海肿瘤医院</a>&nbsp;&nbsp;<a>头颈外科</a></div>
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
						<span class="r">副主任医师</span>
					</li>
					<li class="list-group-item">
						<span class="l">科室：</span>
						<span class="r">上海肿瘤医院 头颈外科</span>
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
    		教育工资经历
    		</h3>
    	</div>
  				<p class="mt10" style="border-left: 1px solid #d3d3d3;padding-left: 15px;padding-bottom: 10px;border-bottom: 1px solid #d3d3d3;">
  				1980～1990上海医科大学医学系毕业，1990至今在复旦大学附属肿瘤医院，头颈外科任职。尤其擅长甲状腺、唾液腺、口腔、喉咽等头颈部肿瘤的诊断和治疗。	
  					
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

