<?php
/*
  Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/js/jqueryfileupload/css/blueimp-gallery.min.css");
  Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/js/jqueryfileupload/css/jquery.fileupload.css");
  Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/js/jqueryfileupload/css/jquery.fileupload-ui.css");
  Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/js/jqueryfileupload/css/jquery.fileupload-noscript.css");
  Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/js/jqueryfileupload/css/jquery.fileupload-ui-noscript.css");
 * Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/css/medicalrecord.css"); 
 */
?>

<link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/js/jqueryfileupload/css/blueimp-gallery.min.css">
<link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/js/jqueryfileupload/css/jquery.fileupload.css">
<link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/js/jqueryfileupload/css/jquery.fileupload-ui.css">
<noscript><link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/js/jqueryfileupload/css/jquery.fileupload-noscript.css"></noscript>
<noscript><link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/js/jqueryfileupload/css/jquery.fileupload-ui-noscript.css"></noscript>
<link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap-datepicker/css/bootstrap-datepicker.css">
<link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/js/colorbox-master/colorbox.css">
<link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/user.css">


<?php
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/bootstrap-datepicker/bootstrap-datepicker.js', CClientScript::POS_HEAD);
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/bootstrap-datepicker/bootstrap-datepicker.zh-CN.js', CClientScript::POS_HEAD);
//Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/jqueryfileupload/vendor/jquery-1.10.1.min.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/jqueryfileupload/vendor/jquery.ui.widget.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/jqueryfileupload/vendor/tmpl.min.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/jqueryfileupload/vendor/load-image.all.min.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/jqueryfileupload/vendor/canvas-to-blob.min.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/jqueryfileupload/jquery.iframe-transport.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/jqueryfileupload/jquery.fileupload.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/jqueryfileupload/jquery.fileupload-process.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/jqueryfileupload/jquery.fileupload-image.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/jqueryfileupload/jquery.fileupload-validate.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/jqueryfileupload/jquery.fileupload-ui.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/jqueryfileupload/custom.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/colorbox-master/jquery.colorbox.custom.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/wheelzoom.js', CClientScript::POS_END);

/*
  <!-- The XDomainRequest Transport is included for cross-domain file deletion for IE 8 and IE 9 -->
  <!--[if (gte IE 8)&(lt IE 10)]>
  Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/jqueryfileupload/cors/jquery.xdr-transport.js', CClientScript::POS_END);
  <![endif]-->
 */
//$hideSubmitBtn boolean to indicate hide submit button. use isset($hideSubmitBtn) to check for validity first.
// MedicalRecord.id
$mrid = $model->getId();
$userid=$model->getUserId();
// ajax request urls.
$urlLoadFiles = $this->createUrl('medicalRecord/ajaxLoadFiles', array('id' => $mrid, 'tmpl' => 1));
$urlUploadFile = $this->createUrl('medicalRecord/ajaxUploadFile');
//$urlUploadFile = $this->createUrl('api/create',array('model'=>'mrfile'));
$urlDeleteFile = $this->createUrl('medicalRecord/deleteFile');
$urlUpdateFileMeta = $this->createUrl('medicalRecord/ajaxUpdateFileMeta');
// report types.
$report_lab = MedicalRecordFile::REPORT_LAB;
$report_image = MedicalRecordFile::REPORT_IMAGE;
$report_written = MedicalRecordFile::REPORT_WRITTEN;
?>

<div class="clearfix">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" id="report-tab">
        <li class="active"><a href="#report-lab" data-toggle="tab">化验报告</a></li>
        <li><a href="#report-image" data-toggle="tab">影像资料</a></li>
        <li><a href="#report-written" data-toggle="tab">其它报告</a></li>                
    </ul>
</div>

<!-- Tab panes -->
<div class="tab-content form border">
    <div class="tab-pane active" id="report-lab">
        <div class="alert alert-warning">化验报告包括：验血、验尿、验血糖等。<br />请在“设置日期”处添加报告检验日期。</div>        
        <!-- The file upload form used as target for the file upload widget -->
        <form class="fileupload" action="<?php echo $urlUploadFile; ?>" method="POST" enctype="multipart/form-data">
            <!-- Redirect browsers with JavaScript disabled to the origin page -->
            <noscript><input type="hidden" name="redirect" value=""></noscript>
            <div class="mr-data">
                <input class="report-type" type="hidden" name="MRFile[report_type]" value="<?php echo $report_lab; ?>">
                <input type="hidden" name="MRFile[user_id]" value="<?php echo $userid; ?>">
                <input type="hidden" name="MRFile[mrid]" value="<?php echo $mrid; ?>">
                <input type="hidden" name="id" value="<?php echo $mrid; ?>">
            </div>
            <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
            <div class="clearfix fileupload-buttonbar mb20">
                <div class="col-sm-5 col-md-4">
                    <!-- The fileinput-button span is used to style the file input field as button -->
                    <span class="btn btn-primary btn-lg btn-block fileinput-button">
                        <i class="fa fa-plus"></i>
                        <span>上传化验报告</span>
                        <input type="file" name="mr_files[]" multiple>
                    </span>
                </div>
            </div>
            <div class="file-loading loading loading01 show-on-start"></div>
            <div role="presentation" class="gallery row center-block clearfix">
                <!-- The table listing the files available for upload/download -->
                <div class="files"></div>
                <!-- file upload button -->
                <div class="btn-doc col-sm-6 col-md-4">
                    <span class="button fileinput-button">
                        <i class="fa fa-plus-square-o icon"></i>
                        <span class="caption">点击添加</span>
                        <input type="file" name="mr_files[]" multiple>
                    </span>
                </div>
            </div>
        </form>
    </div>

    <div class="tab-pane" id="report-image">
        <div class="alert alert-warning">影像资料包括（照片）：X光片、CT、 PET-CT、 磁共振（MRI）等。<br />请上传 jpg、png、gif格式。<br />请在“设置日期”处添加拍摄日期。</div>
        <!-- The file upload form used as target for the file upload widget -->
        <form class="fileupload" action="<?php echo $urlUploadFile; ?>" method="POST" enctype="multipart/form-data">
            <!-- Redirect browsers with JavaScript disabled to the origin page -->
            <noscript><input type="hidden" name="redirect" value=""></noscript>
            <div class="mr-data">
                <input type="hidden" name="MRFile[report_type]" value="<?php echo $report_image; ?>">
                <input type="hidden" name="MRFile[user_id]" value="<?php echo $userid; ?>">
                <input type="hidden" name="MRFile[mrid]" value="<?php echo $mrid; ?>">
                <input type="hidden" name="id" value="<?php echo $mrid; ?>">
            </div>
            <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
            <div class="clearfix fileupload-buttonbar mb20">
                <div class="col-sm-5 col-md-4">
                    <!-- The fileinput-button span is used to style the file input field as button -->
                    <span class="btn btn-primary btn-lg btn-block fileinput-button">
                        <i class="glyphicon glyphicon-plus"></i>
                        <span>上传影像资料</span>
                        <input type="file" name="mr_files[]" multiple>
                    </span>
                </div>
            </div>
            <div class="file-loading loading loading01 show-on-start"></div>
            <!-- The table listing the files available for upload/download -->
            <div role="presentation" class="gallery row center-block clearfix">
                <!-- The table listing the files available for upload/download -->
                <div class="files"></div>
                <!-- file upload button -->
                <div class="btn-doc col-sm-6 col-md-4">
                    <span class="button fileinput-button">
                        <i class="fa fa-plus-square-o icon"></i>
                        <span class="caption">点击添加</span>
                        <input type="file" name="mr_files[]" multiple>
                    </span>
                </div>
            </div>
        </form>
    </div>

    <div class="tab-pane" id="report-written">
        <div class="alert alert-warning">其它报告：心电图、B超、病理报告、门诊病历、出院小结等。<br />请在“设置日期”处添加检查日期。</div>
        <!-- The file upload form used as target for the file upload widget -->
        <form class="fileupload" action="<?php echo $urlUploadFile; ?>" method="POST" enctype="multipart/form-data">
            <!-- Redirect browsers with JavaScript disabled to the origin page -->
            <noscript><input type="hidden" name="redirect" value=""></noscript>
            <div class="mr-data">
                <input type="hidden" name="MRFile[report_type]" value="<?php echo $report_written; ?>">
                <input type="hidden" name="MRFile[user_id]" value="<?php echo $userid; ?>">
                <input type="hidden" name="MRFile[mrid]" value="<?php echo $mrid; ?>">
                <input type="hidden" name="id" value="<?php echo $mrid; ?>">
            </div>
            <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
            <div class="clearfix fileupload-buttonbar mb20">
                <div class="col-sm-5 col-md-4">
                    <!-- The fileinput-button span is used to style the file input field as button -->
                    <span class="btn btn-primary btn-lg btn-block fileinput-button">
                        <i class="glyphicon glyphicon-plus"></i>
                        <span>上传其它报告</span>
                        <input type="file" name="mr_files[]" multiple>
                    </span>                    
                </div>
            </div>
            <div class="file-loading loading loading01 show-on-start"></div>
            <!-- The table listing the files available for upload/download -->
            <div role="presentation" class="gallery row center-block clearfix">
                <!-- The table listing the files available for upload/download -->
                <div class="files"></div>
                <!-- file upload button -->
                <div class="btn-doc col-sm-6 col-md-4">
                    <span class="button fileinput-button">
                        <i class="fa fa-plus-square-o icon"></i>
                        <span class="caption">点击添加</span>
                        <input type="file" name="mr_files[]" multiple>
                    </span>
                </div>
            </div>
        </form>
    </div>
    <?php if (isset($hideSubmitBtn) === false || $hideSubmitBtn === false) { ?>
        <div class="mt30 row">
            <div class="col-sm-4 pull-right">
                <button id="btn-submit" type="submit" class="btn btn-success btn-lg btn-block" data-loading-text="处理中..."><i class="glyphicon glyphicon-floppy-saved"></i>&nbsp;保存</button>
                <input type="hidden" name="mrId" value="<?php echo $mrid; ?>"/>
            </div>
        </div>
    <?php } ?>
</div>

<!-- The template to display files available for upload -->
<script id="template-upload" type="text/x-tmpl">
    {% for (var i=0, file; file=o.files[i]; i++) { %}
    <div class="template-upload fade">
        <div class="file-holder gallery-cell gallery-preview col-sm-6 col-md-4 mb20 text-center">            
            <div class="gallery-cell-inner">               
                <div class="gallery-image"><span class="preview thumbnail"></span></div>
                <div>
                    <strong class="error text-danger"></strong>
                </div>
                <div>
                    <p class="size">上传中...</p>
                    <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="progress-bar progress-bar-success" style="width:0%;"></div></div>
                </div>
                <div class="btn-holder">
                    {% if (!i && !o.options.autoUpload) { %}
                    <button class="btn btn-primary btn-sm btn-block start" disabled>
                        <i class="glyphicon glyphicon-upload"></i>
                        <span>开始</span>
                    </button>
                    {% } %}
                    {% if (!i) { %}
                    <button class="btn btn-warning btn-sm btn-block cancel">
                        <i class="glyphicon glyphicon-ban-circle"></i>
                        <span>取消</span>
                    </button>
                    {% } %}
                </div>
            </div>
        </div>
        <!-- /- file-holder -->
    </div>

    {% } %}
</script>
<!-- The template to display files available for download -->
<script id="template-download" type="text/x-tmpl">
    {% for (var i=0, file; file=o.files[i]; i++) { %}
    <div class="file-holder gallery-cell col-sm-6 col-md-4 mb20">
        <input type="hidden" name="fileId" value="{%=file.id%}" />
        <input type="hidden" name="mrId" value="{%=file.mrId%}" />
        <div class="gallery-cell-inner">
            <div class="loading"></div>            
            <div class="gallery-image"><div class="gallery-image-controls"><a href="javascript:deleteFile({%=file.id%});" class="control-delete"><i class="fa fa-trash"></i></a><a href="{%=file.fileUrl%}" class="control-popup"><i class="fa fa-search"></i></a><a class="control-dl" href="{%=file.fileUrl%}" download><i class="fa fa-download"></i></a></div>
                <img class="center-block" src="{%=file.thumbnailUrl%}" data-hd-src="{%=file.fileUrl%}"/></div>
            <div><input type="text" name="fileDate" value="{%=file.fileDate%}" placeholder="点击设置日期" class="pull-right gallery-image-date form-control datepicker" data-date-format="yyyy-mm-dd" readonly /><textarea name="fileDesc" class="gallery-image-desc form-control" maxlength="50" rows="3" placeholder="请填写相关描述（最多50个字）">{%=file.fileDesc%}</textarea></div>
        </div>
    </div>   
    {%}%}
</script>

<script>       
    $(document).ready(function(){
        
        initFiles();        
        
        $('#report-tab a').click(function (e) {
            e.preventDefault()
            $(this).tab('show')
        })
        // submit all files' meta data.
        $("#btn-submit").click(function(e){
            e.preventDefault();
            myhzUpdateFileMetaData($(this));
        });
        
    });
    
    function initFiles(){
        $("form.fileupload").each(function(){
            var domForm = $(this);
            var reportType = domForm.find("input[name='MRFile[report_type]']").val();           
            
            $.ajax({ 
                type:'get',
                dataType: "json",
                url: "<?php echo $urlLoadFiles; ?>"+"&rt="+reportType,
                beforeSend:function(){
                    $(".loading").show();
                },
                success: function( data ) {
                    data.init=true; //indicate its initial loading.      
                    domForm.find(".files").html(tmpl("template-download", data));    
                   
                    myhzBindFileActionEvents(domForm.find(".files .file-holder"));                   
                },
                complete:function(){
                    $(".loading").hide();
                }
            });       
        });
        
    }
    
    function myhzBindFileActionEvents($domFH){                
        $domFH.find(".datepicker").datepicker({
            //	startDate: "+1d",
            endDate:"+0d",
            todayBtn: true,
            autoclose: true,
            maxView: 2,
            format: "yyyy-mm-dd",
            language: "zh-CN"
        });
        
        $domFH.find(".gallery-image-controls>.control-popup").click(function(e){        
            e.preventDefault();            
            // $(this).parents(".gallery").find(".gallery-cell .control-popup").colorbox({
            $(this).colorbox({
                //$(this).colorbox({		
                overlayClose:false,
                caption:function(){return "\u76f8\u5173\u63cf\u8ff0："+$(this).parents(".file-holder").find("textarea[name='fileDesc']").val();},   //相关描述
                date:function(){return "\u65e5\u671f："+$(this).parents(".file-holder").find("input[name='fileDate']").val();}, //日期
                rel:"img-data", 
                transition:"none", 
                width:"90%",
                height:"100%",
                onComplete:function(){wheelzoom(document.querySelector("#colorbox .cboxPhoto"));},
                onClosed:function(){$(this).colorbox.remove();}
            });
										
        });

    }
    
    
    function myhzUpdateFileMetaData($domBtn){	
        $domBtn.button("loading");
        var $nextStep = $domBtn.attr("data-next-step");
        var $mrid = $domBtn.parent().find("input[name='mrId']").val();
        var $data=new FormData();
        if($nextStep){
            $data.append('next_step', $nextStep);
        }
        $data.append("id", $mrid);  //filterMedicalRecordContext.
        
        $(".file-holder").each(function(){
            var $fid=$(this).find("input[name='fileId']").val();
            var $fdate=$(this).find("input[name='fileDate']").val();
            var $fdesc=$(this).find("textarea[name='fileDesc']").val();									
            $data.append("MRFile["+$fid+"][id]",$fid);					
            $data.append("MRFile["+$fid+"][date_taken]",$fdate);					
            $data.append("MRFile["+$fid+"][description]",$fdesc);				
        });
									
        $.ajax({    
            url:"<?php echo $urlUpdateFileMeta; ?>",   
            data:$data,    
            type:'post',  
            processData: false, 
            contentType: false,
            beforesend:function(){},
            success:function(response) {
                if(response.status===true){
                    if(response.urlNext){
                        window.location=response.urlNext;
                    }
                    // if($domBtn.attr("data-next-step")==="3"){}
                    else{
                        $domBtn.button("reset");
                        myhzShowModalAlert("上传病历", "<i class='fa fa-check'></i>&nbsp;保存成功！", null, false);
                    }
                }
            },    
            error : function(response) {
                $domBtn.button("reset");
            },
            complete:function(response){
                // $domBtn.button("reset");
            }
					
        });
    }
			
    function deleteFile($id){
        var $domInputId = $(".files .file-holder").find("input[value='"+$id+"']");
        if($domInputId!==undefined){
            var $domFH = $domInputId.parents(".file-holder");
            var $domBtn = $domFH.find(".btn-delete");
            $domBtn.attr("disabled",true);  //disable the button first.
            var $mrid = $domFH.find("input[name='mrId']").val();
            var $fid=$domFH.find("input[name='fileId']").val();
            var $data = new FormData();
            $data.append("id",$mrid);
            $data.append("fid",$fid);
        
            $.ajax({    
                url:"<?php echo $urlDeleteFile; ?>",   
                data:$data,    
                type:'post',  
                processData: false, 
                contentType: false,
                beforeSend:function(){
                    $domFH.find(".loading").show();
                },
                success:function(response) { 
                    if(response.status==="true"){
                        $domFH.remove();
                    }else{
                        console.log(response);
                    }
                },    
                error : function(response) {    
                    console.log(response);
                },
                complete:function(){
                    $domFH.find(".loading").hide();
                    $domBtn.attr("disabled",false); //enable the button
                }
					
            });
        }
        return false;
    }
          
</script>