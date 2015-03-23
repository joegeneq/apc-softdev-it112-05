<?php
/* @var $this SchoolController */
/* @var $model School */

$this->breadcrumbs=array(
	'Schools'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Scholars','url'=>array('profile/admin','type'=>'Student')),
	array('label'=>'Graduates','url'=>array('profile/admin','type'=>'Alumni')),
	array('label'=>'Schools','url'=>array('school/admin'),'active'=>true),
	array('label'=>'Grades','url'=>array('grades/admin')),
	);

?>

<h1>Create School</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>