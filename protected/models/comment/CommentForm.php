<?php

class CommentForm extends EFormModel {

    public $user_id;
    public $user_name;
    public $bk_type;
    public $bk_id;
    public $service;
    public $post_operative;
    public $comment_text;

    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('user_id, user_name, bk_type, bk_id, service, post_operative, comment_text', 'required', 'message' => '请填写{attribute}'),
            array('user_id, bk_type, bk_id, service, post_operative', 'numerical', 'integerOnly' => true),
            array('user_name', 'length', 'max' => 30),
            array('comment_text', 'length', 'max' => 1000),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('user_id, user_name, bk_type, bk_id, service, post_operative, comment_text', 'safe', 'on' => 'search'),
        );
    }

    public function attributeLabels() {
        return array(
            'user_id' => '关联user',
            'user_name' => 'User Name',
            'bk_type' => '预约类型',
            'bk_id' => '关联预约表',
            'service' => '服务效率',
            'post_operative' => '术后效果',
            'comment_text' => '其他分享与评价',
        );
    }

}