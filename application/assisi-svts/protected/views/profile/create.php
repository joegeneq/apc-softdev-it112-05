<?php
/* @var $this ProfileController */
/* @var $model Profile */

$this->breadcrumbs=array(
	'Profiles'=>array('index'),
	'Create',
);

$this->menu=array(
		array('label'=>'Scholars','url'=>array('profile/admin','type'=>'Student'),'visible'=>Yii::app()->user->checkAccess('profile/admin')),
	array('label'=>'Graduates','url'=>array('profile/admin','type'=>'Alumni'),'visible'=>Yii::app()->user->checkAccess('profile/admin')),
	array('label'=>'Schools','url'=>array('school/admin'),'visible'=>Yii::app()->user->checkAccess('school/admin')),
	array('label'=>'Grades','url'=>array('grades/admin'),'visible'=>Yii::app()->user->checkAccess('school/admin')),
  );

if(Yii::app()->user->checkAccess('profile/admin'))


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