<div class="row-fluid no-clear">
	<div class="span12 widget">
		<div class="widget-title">
			<i class="icon-external-link titleicon"></i>
			<p>Form</p>
		</div>
		<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
			'id'=>'user-form',
			'type'=>'horizontal',
			'enableAjaxValidation'=>true,
		)); ?>
			<?php echo $form->textFieldRow($model,'username',array('class'=>'span5','maxlength'=>45)); ?>
			<?php echo $form->passwordFieldRow($model,'password',array('class'=>'span5','maxlength'=>45)); ?>
			<?php echo $form->passwordFieldRow($model,'password2',array('class'=>'span5','maxlength'=>45)); ?>
        	<?php echo $form->redactorRow($model, 'deskripsi', array('class'=>'span2', 'rows'=>5)); ?>
			<?php echo $form->textFieldRow($model,'status',array('class'=>'span5','maxlength'=>9)); ?>
		
				<div class="control-group">
			<div class="controls">
				<?php $this->widget('bootstrap.widgets.TbButton', array(
					'buttonType'=>'submit',
					'type'=>'primary',
					'label'=>$model->isNewRecord ? 'Create' : 'Save',
				)); ?>
				<?php $this->widget('bootstrap.widgets.TbButton', array(
					'buttonType'=>'reset',
					'label'=>'Reset',
				)); ?>
			</div>
		</div>
		<?php $this->endWidget(); ?>
	</div>
</div>

