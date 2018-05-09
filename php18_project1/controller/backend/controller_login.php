<?php 
		class controller_login extends controller
		{
			
			public function __construct()
			{
				//goi ham construct tu class controller de khoi tao bien model(doi tuong cua class model)
				parent::__construct();
				if($_SERVER["REQUEST_METHOD"] == "POST"){
						$c_username = $_POST["c_username"];
						$c_password = $_POST["c_password"];
						//check username
						$check = $this->model->fetch_one("select c_username,c_password from tbl_user where c_username='$c_username'");

									if(isset($check["c_username"]) == true){

									//check password
										$c_password=md5($c_password);
										if($check["c_password"]==$c_password){
											//xac thuc dang nhap thanh cong
											$_SESSION["c_username"] = $c_username;

											header("location:admin.php");
										}
								}
							}
				//load view login
				include "view/backend/view_login.php";
				//----------------------
			}
		}
	new controller_login();
 ?>