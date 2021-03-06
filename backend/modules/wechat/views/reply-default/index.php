<?php
use yii\helpers\Url;
use yii\widgets\ActiveForm;

$this->title = '关注/默认回复';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-sm-12">
            <div class="tabs-container">
                <ul class="nav nav-tabs">
                    <li><a href="<?= Url::to(['rule/index'])?>"> 关键字自动回复</a></li>
                    <li><a href="<?= Url::to(['setting/special-message'])?>"> 非文字自动回复</a></li>
                    <li class="active"><a href="<?= Url::to(['reply-default/index'])?>"> 关注/默认回复</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active">
                        <div class="panel-body">
                            <?php $form = ActiveForm::begin(); ?>
                            <div class="col-sm-12">
                                <?= $form->field($model, 'follow_content')->textInput()->hint('注意这里是自动回复设置的关键字，设置用户添加公众帐号好友时，发送的欢迎信息。') ?>
                                <?= $form->field($model, 'default_content')->textInput()->hint('注意这里是自动回复设置的关键字，当系统不知道该如何回复粉丝的消息时，默认发送的内容。') ?>
                            </div>
                            <div class="form-group">　
                                <div class="col-sm-4 col-sm-offset-2">
                                    <div class="hr-line-dashed"></div>
                                    <button class="btn btn-primary" type="submit">保存</button>
                                </div>
                            </div>
                            <?php ActiveForm::end(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>