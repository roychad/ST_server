<?php

class OrderController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('admin','delete', 'create','index','view', 'update'),
				'expression' => 'Yii::app()->user->isAdmin',
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('index','create','update','view'),
				'expression' => '!Yii::app()->user->isGuest',
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id, $isCreate = '0')
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
			'isCreate' => $isCreate,
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Order;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Order']))
		{
			if(isset($_GET['state'])&&($_GET['state']==='1'))
			{
				$model->attributes=$_POST['Order'];
				$model->create_time = date("Y-m-d H:i:s");
				$model->state = '1';
				$model->input_user = Yii::app()->user->id;
				if($model->save())
				{
					$this->redirect(array('view','id'=>$model->id,'isCreate'=>'1'));
				}
				else
				{
					echo '订单入库失败！请重新确认后再提交！';
				}
			}
			else
			{
				echo '订单入库失败！请重新确认订单状态是否正确后再提交！';
			}
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate()
	{
		$model = new Order;
		
		if(isset($_POST['Order']))
		{
			$res = $model->searchFirstByOid($_POST['Order']['oid']);
			if($res === null)
			{
				throw new CHttpException(500,'输入的订单号在之前可能不存在，请重新确认后再次输入。');
			}
			$id = $res['id'];
			$model=$this->loadModel($id);
			if(isset($_GET['state'])&&($_GET['state']==='2'||$_GET['state']==='3'||$_GET['state']==='4'))
			{
				$model->attributes=$_POST['Order'];
				$model->create_time = date("Y-m-d H:i:s");
				$model->state = $_GET['state'];
				$model->input_user = Yii::app()->user->id;
				$model->isNewRecord = false;
				if($model->save())
				{
					$this->redirect(array('view','id'=>$model->id,'isCreate'=>'1'));
				}
				else
				{
					echo '订单入库失败！请重新确认后再提交！';
				}
			}
			else
			{
				echo '订单入库失败！请重新确认订单状态是否正确后再提交！';
			}
		}


		$this->render('update',array(
			'model'=>$model,
			'state' => '2',
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Order');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Order('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Order']))
			$model->attributes=$_GET['Order'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Order::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='order-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
