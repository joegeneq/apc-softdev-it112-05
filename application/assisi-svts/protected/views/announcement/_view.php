<?php
/* @var $this AnnouncementController */
/* @var $data Announcement */
?>

<div class="view">
		
	<b><?php
		if(Yii::app()->session['Role'] !== 'Admin')
			echo CHtml::encode($data->Subject);
		else
			echo CHtml::link(CHtml::encode($data->Subject),array('update','id'=>$data->id)); ?></b>
		
		<?php echo CHtml::encode(Yii::app()->dateFormatter->format("MMM-dd-yyyy",strtotime($data->date_posted))); ?>
	<br />
	<?php echo CHtml::encode($data->message_box); ?>
	<br />
</div>
<br/>