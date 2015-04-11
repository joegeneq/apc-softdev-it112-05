<?php
/* @var $this SchoolController */
/* @var $model School */

$this->breadcrumbs=array(
	'Schools'=>array('index'),
	$model->Name,
);

$this->menu=array(
  array('label'=>'Scholars','url'=>array('profile/admin','type'=>'Student'),'active'=>($_GET['type']==='Student')),
  array('label'=>'Graduates','url'=>array('profile/admin','type'=>'Alumni'),'active'=>($_GET['type']==='Alumni')),
  array('label'=>'Schools','url'=>array('school/admin')),

	);

$this->report=array(
	array('label'=>'Allocations','url'=>array('profile/printIndex')),
	);
?>

<h1><?php echo $model->Name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Address',
		'ContactNo',
	),
)); ?>
