<?php
/* @var $this PesertaController */
/* @var $model Peserta */

$this->breadcrumbs=array(
	'Pesertas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Peserta', 'url'=>array('index')),
	array('label'=>'Create Peserta', 'url'=>array('create')),
	array('label'=>'Update Peserta', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Peserta', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Peserta', 'url'=>array('admin')),
	array('label'=>'Cetak SEP', 'url'=>array('printPDF','id'=>$model->id)),
    array('label'=>'Cari kartu', 'url'=>array('bpjs')),
);
?>

<h1><?php echo $model->nama; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'noKartu',
		'nik',
		'nama',
		'pisa',
		'sex',
		'tglLahir',
		'tglCetakKartu',
		'provUmum0.kdProvider',
		'provUmum0.nmProvider',
		'provUmum0.kdCabang',
		'provUmum0.nmCabang',
		'jenisPeserta0.kdJenisPeserta',
		'jenisPeserta0.nmJenisPeserta',
		'kelasTanggungan0.kdKelas',
		'kelasTanggungan0.nmKelas',
	),
)); ?>