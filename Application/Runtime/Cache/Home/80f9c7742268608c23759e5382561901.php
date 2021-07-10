<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title>南京工业大学电气工程与控制科学学院时间管理网站修改密码页面</title>
<!--Custom Theme files-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="/time/Public/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="/time/Public/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--web-fonts-->
<link href='http://fonts.useso.com/css?family=Jura:400,300,500,600' rel='stylesheet' type='text/css'>
<script src="/time/Public/js/jquery-1.11.1.min.js"></script> 
</head>
<body>
	<div class="main">
		<div class="signin-form profile">
			<h3> 密码修改 </h3>
			<div class="login-form">
			
					<input id = "stuid" type="text" placeholder="<?php echo (session('stuid')); ?>" required="" value="<?php echo (session('stuid')); ?>">
					<input id = "password" type="password" placeholder="填写密码" required="">
					<input id = "repassword" type="password" placeholder="确认密码" required="">
					<button class="btn btn-large btn-block btn-primary" type="submit" id = "submit">确认修改</button>
				
			</div>
		</div>
	<div class="copyright">
		<p>Copyright @南京工业大学电气工程与控制科学学院</p>
	</div>					
</body>
</html>
		<script>
      $(function(){
    	  //alert("123");
	        $('#submit').click(function(){
	       	       var stuid=$('#stuid').val();
        	       var  password=$('#password').val();
        	       var repassword=$('#repassword').val();
        	      if(stuid!="" && password!="" && repassword!=""){
        		      if(password != repassword){
					    alert('前后密码不一致');
					   }
        		      else{
        			     $.ajax({
					        url:'/time/index.php/Home/User/editpwd',
						    type:'post',
						    data:{stuid:stuid,password:password},
						    dataType:"json",
						    success:function(res){
                  	           alert(res.info);
                  	           window.open('/time/index.php/Home/User/login');
						    }
					     }) ;   
					    }
			        }
			 })
	    })
  </script>