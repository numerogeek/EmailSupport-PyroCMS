<section class="title">
	<h4><?php echo lang('label_support'); ?></h4>
</section>

<section class="item">
	<?php echo form_open(); ?>
			<div class="form_inputs">
				<fieldset>		
							<ul>															
								<li class="even">
									<label for="name"><?php echo lang('label_name');?><span>*</span></label>
									<div class="input"><input type="text" name="name" value="<?php echo set_value('name'); ?>"></div>
								</li>
								<li class="even">
									<label for="lastname"><?php echo lang('label_lastname');?><span>*</span></label>
									<div class="input"><input type="text" name="lastname" value="<?php echo set_value('name'); ?>"></div>
								</li>
								<li class="even">									
									<label for="message"><?php echo lang('label_message'); ?>: <span>*</span></label>
									<div class="input"><textarea name="message" cols="20" rows="8" class="wysiwyg-simple"><?php echo set_value('message'); ?></textarea></div>
								</li>								
							</ul>
						</fieldset>
					</div>
				<div class="buttons">
		    		<button type="submit" name="btnAction" value="invia" class="btn blue">
						<span><?php echo lang('send_request'); ?></span>
					</button>
				</div>
	<?php
		echo form_close();
	?>
</section>