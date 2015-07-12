<?php
 
  session_start();
 
  /* ログイン状態をチェックし、ログインされていない場合はログアウト画面に移行する */
  if(!isset($_SESSION['username'])){
    header("Location: logout.php");
    exit;    
  } 
  
  /* ようこそ画面に名前を表示する */
  $username = $_SESSION['username'];
  
  
?>



<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <title>Icons - Bootstrap Admin Template</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">    
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    
    <link href="css/style.css" rel="stylesheet">
   
    
    <link href="css/pages/faq.css" rel="stylesheet"> 

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
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
					<li class="dropdown">						
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-cog"></i>
								Account
							<b class="caret"></b>
						</a>
						
						<ul class="dropdown-menu">
							<li><a href="javascript:;">Settings</a></li>
							<li><a href="javascript:;">Help</a></li>
						</ul>						
					</li>
			
					<li class="dropdown">						
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-user"></i> 
								<?php echo $username ?>
							<b class="caret"></b>
						</a>
						
						<ul class="dropdown-menu">
							<li><a href="javascript:;">Profile</a></li>
							<li><a href="javascript:;">Logout</a></li>
						</ul>						
					</li>
				</ul>
			
				<form class="navbar-search pull-right">
					<input type="text" class="search-query" placeholder="Search">
				</form>
				
			</div><!--/.nav-collapse -->	
	
		</div> <!-- /container -->
		
	</div> <!-- /navbar-inner -->
	
</div> <!-- /navbar -->
    



    
<div class="subnavbar">

	<div class="subnavbar-inner">
	
		<div class="container">

			<ul class="mainnav">
        		<li><a href="dashboard.php"><i class="icon-dashboard"></i><span>Dashboard</span> </a> </li>
        		<li  class="active"><a href="mailform.php"><i class="icon-envelope"></i><span>MailForms</span> </a> </li>
        		<li><a href="profile.php"><i class="icon-user"></i><span>UserManage</span> </a> </li>
			
			</ul>

		</div> <!-- /container -->
	
	</div> <!-- /subnavbar-inner -->

</div> <!-- /subnavbar -->
    
    
<div class="main">
	
	<div class="main-inner">

	    <div class="container">
    
    <div class="widget">
    	<div class="widget-header">
        <i class="icon-envelope"></i>
        <h3>MailForms</h3>
    </div>
    <!-- /widget-header -->
	
							<!-- widget content -->
    						<div class="widget-content">                    
								<form id="edit-profile" class="form-horizontal">
									<fieldset>
										
										<!-- 差出人 -->
										<div class="control-group">											
											<label class="control-label" for="name">差出人</label>
											<div class="controls">
												<input type="text" class="span6" id="name" value="Example">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										<!-- 件名 -->
										<div class="control-group">											
											<label class="control-label" for="subject">件名</label>
											<div class="controls">
												<input type="textfield" class="span6" id="subject" value="Example">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										
										<!-- 本文 -->
										<div class="control-group">											
											<label class="control-label" for="sentence">本文</label>
											<div class="controls">
												<textarea class="span6" id="sentence" value="Example"></textarea>
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										<!-- 宛先 -->
                                        <div class="control-group">											
											<label class="control-label">宛先</label>
											
                                            
                                            <div class="controls">
                                            <label class="radio inline">
                                              <input type="radio"  name="radiobtns"> 全員
                                            </label>
                                            
                                            <label class="radio inline">
                                              <input type="radio" name="radiobtns"> 所属部署
                                            </label>
											
											<label class="radio inline">
                                              <input type="radio" name="radiobtns"> チーム
                                            </label>
                                          </div>	<!-- /controls -->			
										</div> <!-- /control-group -->
                                        
                                        
										
										<br />
											
										<div class="form-actions">
											<button type="submit" class="btn btn-primary">送信</button> 
											<button class="btn">キャンセル</button>
										</div> <!-- /form-actions -->
									</fieldset>
								</form>
										
										
    						</div>
							<!-- /widget content -->
    
  </div> <!-- /row -->
	
	    </div> <!-- /container -->
    
	</div> <!-- /main-inner -->
	    
</div> <!-- /main -->
    


<div class="extra">

	<div class="extra-inner">

		<div class="container">

			<div class="row">
                    <div class="span3">
                        <h4>
                            About Free Admin Template</h4>
                        <ul>
                            <li><a href="javascript:;">EGrappler.com</a></li>
                            <li><a href="javascript:;">Web Development Resources</a></li>
                            <li><a href="javascript:;">Responsive HTML5 Portfolio Templates</a></li>
                            <li><a href="javascript:;">Free Resources and Scripts</a></li>
                        </ul>
                    </div>
                    <!-- /span3 -->
                    <div class="span3">
                        <h4>
                            Support</h4>
                        <ul>
                            <li><a href="javascript:;">Frequently Asked Questions</a></li>
                            <li><a href="javascript:;">Ask a Question</a></li>
                            <li><a href="javascript:;">Video Tutorial</a></li>
                            <li><a href="javascript:;">Feedback</a></li>
                        </ul>
                    </div>
                    <!-- /span3 -->
                    <div class="span3">
                        <h4>
                            Something Legal</h4>
                        <ul>
                            <li><a href="javascript:;">Read License</a></li>
                            <li><a href="javascript:;">Terms of Use</a></li>
                            <li><a href="javascript:;">Privacy Policy</a></li>
                        </ul>
                    </div>
                    <!-- /span3 -->
                    <div class="span3">
                        <h4>
                            Open Source jQuery Plugins</h4>
                        <ul>
                            <li><a href="http://www.egrappler.com">Open Source jQuery Plugins</a></li>
                            <li><a href="http://www.egrappler.com;">HTML5 Responsive Tempaltes</a></li>
                            <li><a href="http://www.egrappler.com;">Free Contact Form Plugin</a></li>
                            <li><a href="http://www.egrappler.com;">Flat UI PSD</a></li>
                        </ul>
                    </div>
                    <!-- /span3 -->
                </div> <!-- /row -->

		</div> <!-- /container -->

	</div> <!-- /extra-inner -->

</div> <!-- /extra -->


    
    
<div class="footer">
	
	<div class="footer-inner">
		
		<div class="container">
			
			<div class="row">
				
    			<div class="span12">
    				&copy; 2013 <a href="http://www.egrappler.com/">Bootstrap Responsive Admin Template</a>.
    			</div> <!-- /span12 -->
    			
    		</div> <!-- /row -->
    		
		</div> <!-- /container -->
		
	</div> <!-- /footer-inner -->
	
</div> <!-- /footer -->
    

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery-1.7.2.min.js"></script>

<script src="js/bootstrap.js"></script>
<script src="js/base.js"></script>
<script src="js/faq.js"></script>

<script>

$(function () {
	
	$('.faq-list').goFaq ();

});

</script>
  </body>

</html>
