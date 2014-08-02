<?php
/* @var $this CountryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Countries',
);

$this->menu=array(
	array('label'=>'Create Country', 'url'=>array('create')),
	array('label'=>'Manage Country', 'url'=>array('admin')),
);
?>

<h1>Countries</h1>

<?php /* $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
    'pager'=>array(
        'class'=>'CListPager',
    ),
)); */ ?>

<?php $this->widget('zii.widgets.CListView', array(
    'id' => 'CountryList',
    'dataProvider' => $dataProvider,
    'itemView' => '_view',
    'template' => '{items} {pager}',
    'pager' => array(
        'class' => 'ext.infiniteScroll.IasPager',
        'rowSelector'=>'.view',
        'listViewId' => 'CountryList',
        'header' => '',
        'loaderText'=>'Loading...',
        'options' => array('history' => false, 'triggerPageTreshold' => 1, 'trigger'=>'Load more'),
    ),
)); ?>
