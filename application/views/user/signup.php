<div class="row-fluid">
	<div class="span12 offset6 well well-large">
	  <h4 class="form-signin-heading"><?=lang("usr_createAccount")?></h4>
	  <label><?=lang("usr_enter_mail")?></label>
	  <div class="control-group">
	  	<input type="text" class="input-block-level" placeholder="<?=lang("usr_enter_mail")?>" id="email" name="email">
	  </div>
	  <label><?=lang("usr_enter_passwd")?></label>
	  <div class="control-group">
	  	<input type="password" class="input-block-level" placeholder="<?=lang("usr_enter_passwd")?>" id="password" name="password">
	  </div>
	  <a src="#" class="btn btn-large btn-success btn-block" id="submitLogin"><i class="icon-arrow-right icon-large"></i> <?=lang("usr_createAccount")?></a>
	  <br><p class="text-center"><?=lang("usr_orUse")?><p>
	  <div class="row-fluid">
	  	<div class="span8">
	  		<a id="facebook" class="btn btn-large btn-block btn-primary" href="#"><i class="icon-facebook icon-large"></i> facebook</a>
	  	</div>
	  	<div class="span8">
	  		<a id="google" class="btn btn-large btn-block btn-danger" href="#"><i class="icon-google-plus icon-large"></i> google</a>
	  	</div>
	  	<div class="span8">
	  		<a id="linkedin" class="btn btn-large btn-block btn-info" href="#"><i class="icon-linkedin icon-large"></i> linkedin</a>
	  	</div>
	  </div>
	  <br>
	  <p><small><?=lang("usr_weDontSendSpam")?></small></p>
	</div>
</div>
<div class="usr_validate_mail hide"><?=lang("usr_validate_mail")?></div>
<div class="usr_validate_password hide"><?=lang("usr_validate_password")?></div>
<div id="buttonContent" style="display: none;"></div>