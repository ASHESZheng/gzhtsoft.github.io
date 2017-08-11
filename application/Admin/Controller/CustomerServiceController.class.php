<?php 
	namespace Admin\Controller;
use Common\Controller\AdminbaseController;
class CustomerServiceController extends AdminbaseController{

	public function addCs(){
		$this->display();
	}

	public function deleteCs(){
		$cs=M('customerservice');
		$result=$cs->select();
		$this->assign('customerservice',$result);



		$this->display();
	}

	public function doadd(){
		$cs=M('customerservice');

		// var_dump($cs);
		// echo $_POST['name'];
		// echo '<br/>';
		// echo $_POST['qq'];
		// echo '<br/>';


		$data['name']=$_POST['name'];
		$data['qq']=$_POST['qq'];

		$result=$cs->add($data);
		if($result){
			echo '<h1>添加成功</h1>';
		}else{
			echo '<h1>添加失败</h1>';
		}

	}

	public function doDel(){
		$id=$_GET['id'];

		$cs=M('customerservice');

		if($cs->delete($id)){
			echo '<h1>删除成功</h1>';
		}else{
			echo '<h1>删除失败</h1>';
		}


	}

	public function showMod(){
		$id=$_GET['id'];

		$cs=M('customerservice');

		$data=$cs->find($id);

		$this->assign('cs',$data);
		$this->display();

	}

	public function doMod(){
		$id=$_POST['id'];

		$data['name']=$_POST['name'];
		$data['qq']=$_POST['qq'];

		$cs=M('customerservice');

		$r=$cs->where('id='.$id)->save($data);

		if($r){
			echo '<h1>修改成功</h1>';
		}else{
			echo '<h1>修改失败</h1>';
		}

	}







}


 ?>