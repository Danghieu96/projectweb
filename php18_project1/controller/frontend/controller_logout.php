<?php 
		/**
		* 
		*/
		class controller_logout extends controller
		{
			
			public function __construct()
			{
				//huy cac SESSION
				unset($_SESSION["email"]);
				unset($_SESSION["customer_id"]);
				// quay tro lai trang index
					echo "<meta http-equiv='refresh' content='0; url=index.php'>";
			}
		}
		new controller_logout();
 ?>