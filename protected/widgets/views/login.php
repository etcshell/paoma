<div class="uk-active" id="signin-form">
	<?php $form=$this->beginWidget('CActiveForm', array(  
	    'id'=>'login-form',  
	    'action' => Yii::app()->createUrl("/account/login"),
	    'enableAjaxValidation'=>true,  
	    'enableClientValidation'=>true,  
	    'htmlOptions'=>array('class'=>'uk-form uk-form-stacked signin-form','enctype'=>'multipart/form-data'),
	    'clientOptions' => array(  
                        'validateOnSubmit' => true,  
                        'afterValidate'=>'js:function(form,data,hasError){  
                        	if(!hasError){  
                                $.ajax({  
                                        "type":"POST",  
                                        "url":"",  
                                        "data":$("#login-form").serialize(),  
                                        "success":function(data){$("#searchResults").html(data);},  
                                        });  
                                }  
                        }'  
                    ),  
	      
	)); ?>
	<div class="uk-form-row">
		<label class="uk-form-label" for="email">邮箱</label>
		<div class="uk-form-controls uk-grid">
			<div class="uk-width-1-1">
				<?php echo $form->textField($model,'email',array('id'=>'email','placeholder'=>'请输入您的邮箱','class'=>'uk-form-large uk-width-1-1 required email')); ?>
			</div>
		</div>
	</div>
	<div class="uk-form-row">
		<label class="uk-form-label" for="password">密码</label>
		<div class="uk-form-controls uk-grid">
			<div class="uk-width-1-1">
				<?php echo $form->passwordField($model,'password',array('id'=>'password','placeholder'=>'请输入您的密码','class'=>'uk-form-large uk-width-1-1 required','autocomplete'=>'off')); ?>
			</div>
		</div>
	</div>
	<div class="uk-form-row">
	<?php echo CHtml::ajaxSubmitButton('登录',Yii::app()->createUrl('/account/login',array('type'=>'ajax')),array('success'=>'function(msg){}'),array('class' => 'uk-button uk-button-primary uk-button-large crimson-bg uk-float-right'))?> 
		<a href="<?php echo Yii::app()->createUrl('/account/findpwd');?>" title="Reset your account password" class="uk-button uk-button-large uk-float-right forgot-password">找回密码?</a>
	</div>
<?php $this->endWidget();?>  
</div>
