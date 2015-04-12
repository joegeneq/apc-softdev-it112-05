	<?php
/* @var $this ProfileController */
/* @var $model Profile */

$this->breadcrumbs=array(
	'Profiles'=>array('index'),
	$model->Id,
	);

$type = Role::model()->findByPk($user->Role_Id)->Name;
$this->menu=array(
  array('label'=>'Scholars','url'=>array('profile/admin','type'=>'Student'),'active'=>($type==='Student')),
  array('label'=>'Graduates','url'=>array('profile/admin','type'=>'Alumni'),'active'=>($type==='Alumni')),
  array('label'=>'Schools','url'=>array('school/admin')),

 );

	?>

	<h1>
	<?php echo $model->getFullname();
		if($type==='Student'){	
			echo Timeline::getSponsoredYears($application->Id);
			echo ' (';
			$this->widget('editable.EditableField', array(
				'type'      => 'select',
				'model'     => $user,
				'attribute' => 'Role_Id',
				'url'       => $this->createUrl('user/update'), 
				'source'    => Editable::source(Role::model()->GetRoles()),
				//you can also use js function returning string url
				//'source'    => 'js: function() { return "?r=role/getRolesForEdit"; }',
				'placement' => 'right',
			));
			echo ')';
		}	
		else if($type === 'Alumni'){
			echo ' (';
			$this->widget('editable.EditableField', array(
				'type'      => 'text',
				'model'     => $model,
				'attribute' => 'YearStarted',
				'url'       => $this->createUrl('profile/update'), 
				//'source'    => Editable::source(Role::model()->GetRoles()),
				//you can also use js function returning string url
				//'source'    => 'js: function() { return "?r=role/getRolesForEdit"; }',
				'placement' => 'right',
			));
			echo  '-';
			$this->widget('editable.EditableField', array(
				'type'      => 'text',
				'model'     => $model,
				'attribute' => 'YearEnded',
				'url'       => $this->createUrl('profile/update'), 
				//'source'    => Editable::source(Role::model()->GetRoles()),
				//you can also use js function returning string url
				//'source'    => 'js: function() { return "?r=role/getRolesForEdit"; }',
				'placement' => 'right',
			));
			echo ') <br/>';
			$this->widget('editable.EditableField', array(
				'type'      => 'text',
				'model'     => $model,
				'attribute' => 'Honor',
				'url'       => $this->createUrl('profile/update'), 
				//'source'    => Editable::source(Role::model()->GetRoles()),
				//you can also use js function returning string url
				//'source'    => 'js: function() { return "?r=role/getRolesForEdit"; }',
				'placement' => 'right',
			));
		}
		
		
	?>
	</h1>
<?php $this->beginWidget('bootstrap.widgets.TbModal', array('id'=>'myModal')); ?>
 
<!-- <div class="modal-header">
    <a class="close" data-dismiss="modal">&times;</a>
    <h4>Modal header</h4>
</div> -->
 
<div class="modal-body">
    <?php
    if (!is_null($application)) {
        $all=new Allocation;
        $academicYear=new Academicyear;
        $academicTerm=new Academicterm;
        $all->Application_Id=$application->Id;
        $all->scenario="created";

        echo $this->renderPartial('/allocation/_form', array('model'=>$all,'academicTerm'=>$academicTerm,
            'academicYear'=>$academicYear)); 
    }
	
    ?>
</div>
 
<!-- <div class="modal-footer">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
        'type'=>'primary',
        'label'=>'Save changes',
        'url'=>'#',
        'htmlOptions'=>array('data-dismiss'=>'modal'),
    )); ?>
    <?php $this->widget('bootstrap.widgets.TbButton', array(
        'label'=>'Close',
        'url'=>'#',
        'htmlOptions'=>array('data-dismiss'=>'modal'),
    )); ?>
</div> -->
 
<?php $this->endWidget(); ?>   

<?php
    $this->widget('editable.EditableDetailView', array(
    'data'       => $model,
    //you can define any default params for child EditableFields 
    'url'        => $this->createUrl('profile/update'), //common submit url for all fields
    //'params'     => array('YII_CSRF_TOKEN' => Yii::app()->request->csrfToken), //params for all fields
    'emptytext'  => 'no value',
    //'apply' => false, //you can turn off applying editable to all attributes
      
    'attributes' => array(
        array(
            'name' => 'Firstname',
            'editable' => array(
                'type'       => 'text',
                'placement' => 'right',                
                'validate'   => 'js:function(value) {
                    if(!value) return "Firstname is required";
                }'
            ),
        ),
        array(
            'name' => 'Middlename',
            'editable' => array(
                'type'       => 'text',
                'placement' => 'right',                
            ),
        ),
        array(
            'name' => 'Lastname',
            'editable' => array(
                'type'       => 'text',
                'placement' => 'right',                
                'validate'   => 'function(value) {
                    if(!value) return "Lastname is required"
                }'
            ),
        ),
        array(
            'name' => 'Religion',
            'editable' => array(
                'type'       => 'text',
                'placement' => 'right',           
            ),
            'visible'=>($type === "Student"),
        ),
        array(
            'name' => 'Sex',
            'editable' => array(
                'type'       => 'select',
                'source'    => Editable::source(Profile::model()->getGenders()),
                'placement' => 'right',           
            ),
        ),
        array(
            'name' => 'CivilStatus',
            'editable' => array(
                'type'       => 'select',
                'source'    => Editable::source(Profile::model()->getCivilStatus()),
                'placement' => 'right',           
            )
        ),
        array(
            'name' => 'DateOfBirth',
            'editable' => array(
                'type'       => 'date',
                'placement' => 'right',
                'format'      => 'yyyy-mm-dd', //format in which date is expected from model and submitted to server
                'viewformat'  => 'dd/mm/yyyy',          
            ),
        ),
        array(
            'name' => 'PlaceOfBirth',
            'editable' => array(
                'type'       => 'text',
                'placement' => 'right',           
            ),
            'visible'=>($type === "Student"),
        ),
 
        array(
            'name' => 'ContactNumber',
            'editable' => array(
                'type'       => 'text',
                'placement' => 'right',           
            ),
        ),
        array(
            'name' => 'Email',
            'editable' => array(
                'type'       => 'text',
                'placement' => 'right',           

            ),
        ), 
		
		array(
            'name' => 'Occupation',
            'editable' => array(
                'type'       => 'text',
                'placement' => 'right',           
            ),
			'visible'=>($type === 'Alumni'),
        ),
        array(
            'name'=>'FuturePlan',
			'label'=>($type === 'Student') ? 'FuturePlan' : 'Remarks'
            ),	
    )
    ));
?>

<?php //if($type === "Student") : ?>
<h1>Application Details</h1>
<?php 
 $this->widget('editable.EditableDetailView', array(
 	'data'=>$partnerSchool,
     'htmlOptions'=>array('style'=>'padding-bottom:200px;'),
 	'attributes'=>array(
 		array(
 		'name'=>'School_Id',
 		'header'=>'School',
 		'value'=>$partnerSchool->school->Name,
		'editable' => array(
                'type'       => 'select',
                'source'    => Editable::source(School::model()->GetSchools()),
                'placement' => 'right',           
            )
 		),
 	),
 )); 
$this->widget('editable.EditableDetailView', array(
    'data'=>$applicatio n,   
	'htmlOptions'=>array('style'=>'padding-bottom:20px;'),
    'attributes'=>array(
        array( 'name'=>'Course',
			'editable'=>array(
				'type'=>'text',
				'placement'=>'right'
		)),        
    ),
));
?>


