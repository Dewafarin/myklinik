<?php
/* @var $this PelangganController */
/* @var $data Pelanggan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gejala')); ?>:</b>
	<?php echo CHtml::encode($data->gejala); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('obat')); ?>:</b>
	<?php 
		$obat = Obat::model()->with('pelanggans')->findByPk($data->obat);
	if($obat){

		$obatnama= $obat->obat;
		echo $obatnama; 
	}
		?>
	
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tindakan')); ?>:</b>
	<?php 
		$tindakan = Tindakan::model()->with('pelanggans')->findByPk($data->tindakan);
	if($tindakan){

		$tindakannama= $tindakan->tindakan;
		echo $tindakannama; 
	}?>
	
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('biaya')); ?>:</b>
	<?php echo CHtml::encode($data->biaya); ?>
	<br />


</div>