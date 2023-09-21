<?php
/* @var $this PelangganController */
/* @var $model Pelanggan */
/* @var $form CActiveForm */
?>

<div class="form">

	<?php $form = $this->beginWidget('CActiveForm', array(
		'id' => 'pelanggan-form',
		// Please note: When you enable ajax validation, make sure the corresponding
		// controller action is handling ajax validation correctly.
		// There is a call to performAjaxValidation() commented in generated controller code.
		// See class documentation of CActiveForm for details on this.
		'enableAjaxValidation' => false,
	)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model, 'name'); ?>
		<?php echo $form->textField($model, 'name', array('size' => 60, 'maxlength' => 255)); ?>
		<?php echo $form->error($model, 'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'gejala'); ?>
		<?php echo $form->textField($model, 'gejala', array('size' => 60, 'maxlength' => 255)); ?>
		<?php echo $form->error($model, 'gejala'); ?>
	</div>
	<?php if(!Yii::app()->user->isGuest):?>
	<div class="row">
		<?php echo $form->labelEx($model, 'obat'); ?>
		<?php echo $form->dropDownList(
			$model,
			'obat',
			CHtml::listData(Obat::model()->findAll(), 'id', 'obat'),
			array(
				'empty' => '--Pilih obat--'
			)

		); ?>
		<?php echo $form->error($model, 'obat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'tindakan'); ?>
		<?php echo $form->dropDownList(
			$model,
			'tindakan',
			CHtml::listData(Tindakan::model()->findAll(), 'id', 'tindakan'),
			array(
				'empty' => '--Pilih tindakan--'
			)

		); ?>
		<?php echo $form->error($model, 'tindakan'); ?>
	</div>
	<?php endif;?>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

	<?php $this->endWidget(); ?>

</div><!-- form -->