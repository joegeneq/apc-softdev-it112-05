<?php
/* @var $this GradesController */
/* @var $model Grades */

/*$this->breadcrumbs=array(
	'Grades'=>array('index'),
	'Create',
);
*/
$this->menu=array(
		array('label'=>'Scholars','url'=>array('profile/admin','type'=>'Student'),'visible'=>Yii::app()->user->checkAccess('profile/admin')),
	array('label'=>'Graduates','url'=>array('profile/admin','type'=>'Alumni'),'visible'=>Yii::app()->user->checkAccess('profile/admin')),
	array('label'=>'Schools','url'=>array('school/admin'),'visible'=>Yii::app()->user->checkAccess('school/admin')),
	array('label'=>'Grades','url'=>array('grades/admin'),'visible'=>Yii::app()->user->checkAccess('school/admin')),
	);

?>

<h1>Create Grades</h1>

<?php $this->renderPartial('_form', array('model'=>$model,'academicYear'=>$academicYear,
			'academicTerm'=>$academicTerm)); ?>