<?php
/* @var $this AnnouncementController */
/* @var $model Announcement */

$this->breadcrumbs=array(
	'Announcements'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Announcement', 'url'=>array('index')),

);
?>

<h1>View Announcement #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'Subject',
		'message_box',
	),
)); ?>
