<?phpclass WebUser extends CWebUser{	private $_model;		public function getIsAdmin()	{		$user = $this->loadUser(Yii::app()->user->id);		return ($user)?($user->limit_id==='0'):0;	}		public function getUserId()	{		$user = $this->loadUser(Yii::app()->user->id);		return ($user)?$user->user_id:'000000';	}		protected function loadUser($id=null)     {         if($this->_model===null)         {             if($id!==null)                 $this->_model=User::model()->findByPk($id);         }         return $this->_model;     }	}?>