<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="row-fluid">
	<div class="span10">
		<?php echo $content; ?>
	</div>
	
	<div class="span2">
		<?php
			/*$this->beginWidget('zii.widgets.CPortlet', array(
				'title'=>'Operations',
			));*/
			$this->widget('zii.widgets.CMenu', array(
				'items'=>$this->menu,
				'htmlOptions'=>array('class'=>'nav nav-tabs nav-stacked'),
			));
			/*$this->endWidget();*/
		?>
		
	</div>
</div>


<?php /*<div class="row-fluid">
	<div class="span12">
		<div id="content">
			<?php echo $content; ?>
		</div><!-- content -->
	</div>
	<div class="span-5 last">
		<div id="sidebar">
		<?php
			$this->beginWidget('zii.widgets.CPortlet', array(
				'title'=>'Operations',
			));
			$this->widget('zii.widgets.CMenu', array(
				'items'=>$this->menu,
				'htmlOptions'=>array('class'=>'operations'),
			));
			$this->endWidget();
		?>
		</div><!-- sidebar -->
	</div>
</div>
*/ ?>
<?php $this->endContent(); ?>