<?php
namespace app\components;

use yii;
use yii\base\Widget; 
use yii\helpers\Url;
use yii\helpers\Html;
use yii\web\Request;
use yii\web\View;

class APageHeader extends Widget {
	
	/**
	 * array of Defaults buttons if it empty than implements defaults buttons.
	 * 
	 */
	public $buttons = [];
	
	/**
	 * boolen when show all buttons in every pages.
	 *
	 */
	public $allShow = false;
	/**
	 * set optios for buttons like url and classes of buttons
	 * $option = [
	 * 		'add' => [
	 * 			'url' => 
	 * 		],
	 * 		'update' => [
	 * 			'url' => 
	 * 		]
	 * ];
	 */
	public $options = [];
	/**
	 * set false if you don not want to see buttons on page
	 */
	public $defaultButton = true;
	/**  
	 * upate button default set true if it is false than not implement update button on page 
	 */
	public $update = true;
	/**
	 * Add button default set true if it is false than not implement update button on page
	 */
	public $add = true;
	/**
	 * Delete button default set true if it is false than not implement Delete button on page
	 */
	public $delete = true;
	/**
	 * Bluck Delete button default set true if it is false than not implement Bluck Delete button on page
	 */
	public $bulkDelete= true;
	/**
	 * Manage button default set true if it is false than not implement update button on page
	 */
	public $manage = true;
	
	/**
	 * Manage button default set true if it is false than not implement update button on page
	 */
	public $model;
	
	public function init() {
		if( $this->defaultButton ) {
			$this->generateButton();
		}
	}
	
	public function run() {
		if( $this->defaultButton ) {
			$data = $this->generateButton();
			if( $data) {
				foreach ( $data as $key => $button ) {
					echo $data[$key];
				}
			}
		}
		$this->renderJs();
		return false;
	}
	
	public function add() {
		$addOptions = [
				'href' => Url::toRoute(['/'.\Yii::$app->controller->id.'/create']),
				'class' => 'btn btn-info'
		];
		
		$title = isset($this->options['add']['title']) ? $this->options['add']['title'] : 'Add';
		
		$opt = isset($this->options['add']) ? $this->options['add'] : [];
		$addOptions = array_merge($addOptions, $opt);
		
		return Html::tag('a', $title, $addOptions);
	}
	public function manage() {
		$addOptions = [
				'href' => Url::toRoute(['/'.\Yii::$app->controller->id.'/index']),
				'class' => 'btn btn-success'
		];
		
		$title = isset($this->options['manage']['title']) ? $this->options['manage']['title'] : 'manage';
		
		$opt = isset($this->options['manage']) ? $this->options['manage'] : [];
		$addOptions = array_merge($addOptions, $opt);
		
		return Html::tag('a', $title, $addOptions);
	}
	public function update() {
		$addOptions = [
				'href' => Url::toRoute(['/'.\Yii::$app->controller->id.'/update?id='.\yii::$app->request->get('id', 'undefined')]),
				'class' => 'btn btn-primary'
		];
		
		$title = isset($this->options['add']['title']) ? $this->options['add']['title'] : 'Update';
		
		$opt = isset($this->options['update']) ? $this->options['update'] : [];
		$addOptions = array_merge($addOptions, $opt);
		
		return Html::tag('a', $title, $addOptions);
	}
	
	public function delete() {
		$addOptions = [
				'href' => Url::toRoute(['/'.\Yii::$app->controller->id.'/delete?id='.\yii::$app->request->get('id', 'undefined')]),
				'class' => 'btn btn-warning',
				'data-method' => 'post',
				'data-confirm' => 'Are you sure you want to delete this item?'
		];
		
		$title = isset($this->options['add']['title']) ? $this->options['add']['title'] : 'Delete';
		
		$opt = isset($this->options['delete']) ? $this->options['delete'] : [];
		$addOptions = array_merge($addOptions, $opt);
		
		return Html::tag('a', $title, $addOptions);
	}
	
	public function bulkDelete() {
		$addOptions = [
				'href' => 'javascript:void(0)',
				'id' => 'bulk-delete-data',
				'data-text' => "Do you really want to delete these items?",
				'data-confirm-button' => "Yes I am",
				'data-cancel-button' => "Whoops no",
				'class' => 'btn btn-danger',
		];
		
		$title = isset($this->options['bulkDelete']['title']) ? $this->options['bulkDelete']['title'] : 'Bulk Delete';
		
		$opt = isset($this->options['bulkDelete']) ? $this->options['bulkDelete'] : [];
		$addOptions = array_merge($addOptions, $opt);
		
		return Html::tag('a', $title, $addOptions);
	}
	
	protected function renderJs() {
		if( $this->bulkDelete ) {
			$view = $this->getView();
			$id = isset($this->options['bulkDelete']['id']) ? $this->options['bulkDelete']['id'] : 'bulk-delete-data';
			$url = Url::toRoute(['/'.\yii::$app->controller->id.'/'.'bulk-delete']);
			$view->registerJs("$('#$id').confirm({
				confirmButtonClass: 'btn btn-danger',
				cancelButtonClass: 'btn btn-info',
				confirm: function(button) {
					var checkBox = [];
					$('table tbody tr td input[type=checkbox]:checked').each(function() {
						checkBox.push($(this).val());
					});
					$.ajax({
						url  :  '$url',
						type : 'post',
						data : {
							data : checkBox
						},
						success : function(response) {
							if( response.status == '1' ) {
								
							}
						},
					});
				},
			})",
					View::POS_LOAD);
		}
	}
	
	protected function generateButton() {
		return $this->getButtons();
	}
	
	protected function getButtons() {
		$default = [];
		if( $this->add ) {
			$default['add'] = $this->add();
		}
		if( $this->manage ) {
			$default['manage'] = $this->manage();
		}
		if( \Yii::$app->controller->action->id == 'view' && $this->allShow == false ) {
			if( $this->update ) {
				$default['update'] = $this->update();
			}
			if( $this->delete ) {
				$default['delete'] = $this->delete();
			}
		}
		if( \Yii::$app->controller->action->id == 'index' ) {
			if( $this->bulkDelete) {
				$default['bulkDelete'] = $this->bulkDelete();
			}
		}
		
		return array_merge($default, $this->buttons);
	}	
	
}