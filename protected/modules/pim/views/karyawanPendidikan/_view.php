<li>
	<div class="user-info">
		<a href="<?php echo Yii::app()->createAbsoluteUrl('pim/karyawanpendidikan/empdetail/user/'.CHtml::encode($data->karyawan_id).''); ?>">
			<strong><?php echo CHtml::encode($data->jenis); ?></strong>
		</a>
		<i class="user-occ">
			<?php echo CHtml::encode($data->institusi); ?>
		</i>
		<i class="user-ll"><?php echo CHtml::encode($data->major); ?></i>
	</div>
</li>

<?php 
/*
<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('karyawan_id')); ?>:</b>
	<?php echo CHtml::encode($data->karyawan_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jenis')); ?>:</b>
	<?php echo CHtml::encode($data->jenis); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('institusi')); ?>:</b>
	<?php echo CHtml::encode($data->institusi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('major')); ?>:</b>
	<?php echo CHtml::encode($data->major); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nilai')); ?>:</b>
	<?php echo CHtml::encode($data->nilai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tgl_masuk')); ?>:</b>
	<?php echo CHtml::encode($data->tgl_masuk); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('tgl_keluar')); ?>:</b>
	<?php echo CHtml::encode($data->tgl_keluar); ?>
	<br />



</div>
	*/ ?>