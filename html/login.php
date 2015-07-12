<?php
	
	/* セッション開始 */
	session_start();
	
	/* 初期メッセージの設定 */
	$errorMessage = "Please provide your details";
	
	/* ログイントライ回数 */
	$tryLoginNumber = 0;
	
	//	両方空の場合は無視
	if(  empty($_POST['username']) && empty($_POST['password'])){
		$errorMessage = "Please provide your details";
	}
	//	ユーザ名が空の場合
	else if( empty($_POST['username']) && !empty($_POST['password'])){
		$errorMessage = '<font color="red">ユーザ名が空です</font>';
	}
	//	パスワードがからの場合
	else if( !empty($_POST['username']) && empty($_POST['password'])){
		$errorMessage = '<font color="red">パスワードが空です</font>';
	}
	//	両方値が入っている場合認証シーケンスへ移行
	else{
		/* 認証失敗時はエラーを表示 */	
		$errorMessage = '<font color="red">invalid token</font>';
		$tryLoginNumber = $tryLoginNumber+1;
		
		/* 認証シーケンス */
		/* サンプルプログラムなので認証は飛ばします */
		
		/* 認証成功時はセッションに保存し、dashboard.htmlにリダイレクトする */
		$_SESSION['username'] = $_POST['username'];
		header("Location: dashboard.php");
      	exit;
	}
	
	
	
	
	
?>


<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <title>serveradmin</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes"> 
    
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />

<link href="css/font-awesome.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/pages/signin.css" rel="stylesheet" type="text/css">

</head>

<body>
	
	<div class="navbar navbar-fixed-top">
	
	<div class="navbar-inner">
		
		<div class="container">
			
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			
			<a class="brand" href="index.html">
				serveradmin				
			</a>		
			
			<div class="nav-collapse">
				<ul class="nav pull-right">
					
					<li class="">						
						<a href="signup.html" class="">
							Don't have an account?
						</a>
						
					</li>
					
					<li class="">						
						<a href="index.html" class="">
							<i class="icon-chevron-left"></i>
							Back to Homepage
						</a>
						
					</li>
				</ul>
				
			</div><!--/.nav-collapse -->	
	
		</div> <!-- /container -->
		
	</div> <!-- /navbar-inner -->
	
</div> <!-- /navbar -->



<div class="account-container">
	
	<div class="content clearfix">
		
		<form action="login.php" method="post">
		
			<h1>Member Login</h1>		
			
			<div class="login-fields">
				
				<p><?php echo $errorMessage; ?></p>
				<div class="field">
					<label for="username">Username</label>
					<input type="text" id="username" name="username" value="" placeholder="Username" class="login username-field" />
				</div> <!-- /field -->
				
				<div class="field">
					<label for="password">Password:</label>
					<input type="password" id="password" name="password" value="" placeholder="Password" class="login password-field"/>
				</div> <!-- /password -->
				
			</div> <!-- /login-fields -->
			
			<div class="login-actions">
				
				<span class="login-checkbox">
					<input id="Field" name="Field" type="checkbox" class="field login-checkbox" value="First Choice" tabindex="4" />
					<label class="choice" for="Field">Keep me signed in</label>
				</span>
									
				<button class="button btn btn-success btn-large">Sign In</button>
				
			</div> <!-- .actions -->
			
			
			
		</form>
		
	</div> <!-- /content -->
	
</div> <!-- /account-container -->



<div class="login-extra">
	<a href="#">Reset Password</a>
</div> <!-- /login-extra -->


<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/bootstrap.js"></script>

<script src="js/signin.js"></script>

</body>

</html>
