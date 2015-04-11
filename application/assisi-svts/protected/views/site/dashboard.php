<?php
$this->menu=array(
	array('label'=>'Scholars','url'=>array('profile/admin','type'=>'Student'),'visible'=>Yii::app()->user->checkAccess('profile/admin')),
	array('label'=>'Graduates','url'=>array('profile/admin','type'=>'Alumni'),'visible'=>Yii::app()->user->checkAccess('profile/admin')),
	array('label'=>'Schools','url'=>array('school/admin'),'visible'=>Yii::app()->user->checkAccess('school/admin')),

	);
?>


<div class="shout-box">
      <div class="shout-text">
        <h1><b>Gado & Jess Jalandoni Scholarships</b></h1>
        <p>Scholarship Virtual Tracking System</p>
      </div>
</div>
      <div class="row-fluid">
          <br/>
          <b>Scholars Module</b>
          <p>In this module, the user can <i>Create a Scholar Record(s), View a Scholar Record(s), Add Allocation, and Update Informations of Students.</i> </p>

          <br/>
          <b>Alumni Module</b>
          <p>In this module, the user can <i>Create an Alumni and make their profile</i> The alumni can update their profile once they logged in.</p>

          <br/>
          <b>Schools Module</b>
          <p>In this module, the user can <i>Create a School</i> along with its addess and contact information. The user can also edit particular field(s).</p>
          
          <br/>
      </div>
