<div id="create-form">
	<?php $form=$this->beginWidget('CActiveForm', array(  
	    'id'=>'register-form',  
	    'action' => Yii::app()->createUrl("/account/register"),
	    'enableAjaxValidation'=>true,  
	    'enableClientValidation'=>true,  
	    'htmlOptions'=>array('class'=>'uk-form uk-form-stacked signup-form','enctype'=>'multipart/form-data','method'=>'post'),
	)); ?>
	<div class="uk-form-row">
				<label class="uk-form-label" for="signup_email">登录邮箱</label>
				<div class="uk-form-controls uk-grid">
					<div class="uk-width-1-1">
					<?php echo $form->textField($model,'email',array('id'=>'signup_email','placeholder'=>'请输入您的邮箱','class'=>'uk-form-large uk-width-1-1 required email')); ?>
					</div>
					<div id="err_RegisterForm_email"></div>
				</div>
			</div>
			<div class="uk-form-row">
				<label class="uk-form-label" for="signup_password">登录密码</label>
				<div class="uk-form-controls uk-grid">
					<div class="uk-width-1-1">
					<?php echo $form->passwordField($model,'password',array('id'=>'signup_password','placeholder'=>'请输入您的密码','class'=>'uk-form-large uk-width-1-1 required','autocomplete'=>'off')); ?>
					</div>
					<div id="err_RegisterForm_password"></div>
				</div>
			</div>

			<div class="uk-form-row">
				<label class="uk-form-label" for="signup_password1">确认密码</label>
				<div class="uk-form-controls uk-grid">
					<div class="uk-width-1-1">
					<?php echo $form->passwordField($model,'repassword',array('id'=>'signup_password1','placeholder'=>'请输入您的确认密码','class'=>'uk-form-large uk-width-1-1 required','autocomplete'=>'off')); ?>
					</div>
					<div id="err_RegisterForm_repassword"></div>
				</div>
			</div>
			<div class="uk-form-row uk-grid">
				<div class="uk-width-1-2">
					<label class="uk-form-label" for="first_name">用户名</label>
					<div class="uk-form-controls uk-grid">
						<div class="uk-width-1-1">
						<?php echo $form->textField($model,'name',array('id'=>'first_name','placeholder'=>'请输入您的用户名','class'=>'uk-form-large uk-width-1-1 required')); ?>
						</div>
						<div id="err_RegisterForm_name"></div>
					</div>
				</div>
				<div class="uk-width-1-2">
					<label class="uk-form-label" for="gender_id">性别</label>
					<div class="uk-form-controls uk-grid">
						<div class="uk-width-1-1">
							<select name="RegisterForm[gender]" id="title" id="gender_id" class="uk-form-large uk-width-1-1 required">
											<option value="1">男</option>
											<option value="0">女</option>
							</select>
						</div>
					</div>
				</div>
			</div>

			<div class="uk-form-row">
				<label class="uk-form-label" for="signup_verifyCode">验证码</label>
				<div class="uk-form-controls uk-grid">
					<div class="uk-width-1-1">
						<?php echo $form->textField($model,'verifyCode',array('id'=>'signup_verifyCode','placeholder'=>'请输入验证码','class'=>'uk-form-large uk-width-1-1 required')); ?>
					</div>
					<div id="err_RegisterForm_verifyCode"></div>
				</div>
			</div>
			<div class="uk-form-row">
				<label class="uk-form-label" for="signup_password1"></label>
				<div class="uk-form-controls uk-grid">
					<div class="uk-width-1-1">
                		<?php $this->widget('CCaptcha',array('showRefreshButton'=>true,'clickableImage'=>true,'imageOptions'=>array('alt'=>'点击换图','title'=>'点击换图','style'=>'cursor:pointer;display:inline'))); ?>
					</div>
				</div>
			</div>
			<div class="uk-form-row">
			<?php echo CHtml::ajaxSubmitButton('注册',Yii::app()->createUrl('/account/register',array('type'=>'ajax')),array('success'=>'function(data){var object = eval("("+data+")");$.each(object,function(name,value){$("#err_"+name).html("<span class=\"error\" style=\"display: inline;\">"+value+"</span>")})}'),array('class' => 'uk-button uk-button-primary uk-button-large crimson-bg uk-float-right'))?> 
			</div>
			<?php $this->endWidget();?> 
	</div>