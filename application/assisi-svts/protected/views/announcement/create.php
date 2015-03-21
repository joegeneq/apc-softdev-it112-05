<?php
/* @var $this AnnouncementController */
/* @var $model Announcement */

$this->breadcrumbs=array(
	'Announcements'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Announcement', 'url'=>array('index')),
);
?>

<h1>Create Announcement</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>