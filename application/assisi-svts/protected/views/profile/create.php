<?php
/* @var $this ProfileController */
/* @var $model Profile */

$this->breadcrumbs=array(
	'Profiles'=>array('index'),
	'Create',
);

$this->menu=array(
  array('label'=>'Scholars','url'=>array('profile/admin','type'=>'Student'),'active'=>($_GET['type']==='Student')),
  array('label'=>'Graduates','url'=>array('profile/admin','type'=>'Alumni'),'active'=>($_GET['type']==='Alumni')),
  array('label'=>'Schools','url'=>array('school/admin')),

  );
?>
<?php $this->renderPartial('_form', array(
	'model'=>$model,
	'user'=>$user,
	'partnerSchool'=>$partnerSchool,
	'application'=>$application,
	'allocation'=>$allocation,
	'academicTerm'=>$academicTerm,
	'academicYear'=>$academicYear	
	)); ?>