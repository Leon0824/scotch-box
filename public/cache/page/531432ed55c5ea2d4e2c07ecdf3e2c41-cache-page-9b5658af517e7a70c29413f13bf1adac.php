<?php die("Access Denied"); ?>#x#a:3:{s:4:"body";s:11877:"<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-tw" lang="zh-tw" dir="ltr">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	  <base href="http://scotchbox/blog" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="Joomla 3.x繁体中文内容" />
  <meta name="robots" content="noindex, nofollow" />
  <meta name="description" content="Joomla 3.x繁体中文内容, 繁体中文内容" />
  <meta name="generator" content="Joomla! - Open Source Content Management" />
  <title>Blog</title>
  <link href="/templates/protostar/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
  <link rel="stylesheet" href="/templates/protostar/css/template.css" type="text/css" />
  <link rel="stylesheet" href="/media/com_finder/css/finder.css" type="text/css" />
  <script src="/media/jui/js/jquery.min.js" type="text/javascript"></script>
  <script src="/media/jui/js/jquery-noconflict.js" type="text/javascript"></script>
  <script src="/media/jui/js/jquery-migrate.min.js" type="text/javascript"></script>
  <script src="/media/system/js/caption.js" type="text/javascript"></script>
  <script src="/media/jui/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="/templates/protostar/js/template.js" type="text/javascript"></script>
  <script src="/media/jui/js/jquery.autocomplete.min.js" type="text/javascript"></script>
  <script type="text/javascript">
jQuery(window).on('load',  function() {
				new JCaption('img.caption');
			});window.setInterval(function(){var r;try{r=window.XMLHttpRequest?new XMLHttpRequest():new ActiveXObject("Microsoft.XMLHTTP")}catch(e){}if(r){r.open("GET","./",true);r.send(null)}},840000);jQuery(document).ready(function(){
	jQuery('.hasTooltip').tooltip({"html": true,"container": "body"});
});
jQuery(document).ready(function() {
	var value, searchword = jQuery('#mod-finder-searchword');

		// Set the input value if not already set.
		if (!searchword.val())
		{
			searchword.val('搜尋...');
		}

		// Get the current value.
		value = searchword.val();

		// If the current value equals the default value, clear it.
		searchword.on('focus', function()
		{	var el = jQuery(this);
			if (el.val() === '搜尋...')
			{
				el.val('');
			}
		});

		// If the current value is empty, set the previous value.
		searchword.on('blur', function()
		{	var el = jQuery(this);
			if (!el.val())
			{
				el.val(value);
			}
		});

		jQuery('#mod-finder-searchform').on('submit', function(e){
			e.stopPropagation();
			var advanced = jQuery('#mod-finder-advanced');
			// Disable select boxes with no value selected.
			if ( advanced.length)
			{
				advanced.find('select').each(function(index, el) {
					var el = jQuery(el);
					if(!el.val()){
						el.attr('disabled', 'disabled');
					}
				});
			}
		});
	var suggest = jQuery('#mod-finder-searchword').autocomplete({
		serviceUrl: '/component/finder/?task=suggestions.suggest&format=json&tmpl=component',
		paramName: 'q',
		minChars: 1,
		maxHeight: 400,
		width: 300,
		zIndex: 9999,
		deferRequestBy: 500
	});});
  </script>

				<link href='//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
		<style type="text/css">
			h1,h2,h3,h4,h5,h6,.site-title{
				font-family: 'Open Sans', sans-serif;
			}
		</style>
				<!--[if lt IE 9]>
		<script src="/media/jui/js/html5.js"></script>
	<![endif]-->
</head>

<body class="site com_content view-category layout-blog no-task itemid-108">

	<!-- Body -->
	<div class="body">
		<div class="container">
			<!-- Header -->
			<header class="header" role="banner">
				<div class="header-inner clearfix">
					<a class="brand pull-left" href="/">
						<span class="site-title" title="Sentec Joomla!">Sentec Joomla!</span>											</a>
					<div class="header-search pull-right">
						
<form id="mod-finder-searchform" action="/component/finder/search" method="get" class="form-search">
	<div class="finder">
		<input type="text" name="q" id="mod-finder-searchword" class="search-query input-medium" size="25" value="" />
							<br />
			<a href="/component/finder/search">進階搜尋</a>
				<input type="hidden" name="Itemid" value="108" />	</div>
</form>

					</div>
				</div>
			</header>
						
			<div class="row-fluid">
								<main id="content" role="main" class="span9">
					<!-- Begin Content -->
					
					<div id="system-message-container">
	</div>

					<div class="blog" itemscope itemtype="http://schema.org/Blog">
			<div class="page-header">
			<h1> Blog </h1>
		</div>
	
	
	
	
	
				<div class="items-leading clearfix">
							<div class="leading-0"
					itemprop="blogPost" itemscope itemtype="http://schema.org/BlogPosting">
					

			<div class="page-header">

							<h2 itemprop="name">
											<a href="/blog/3-title-fdfd" itemprop="url">
						Title fdfd</a>
									</h2>
			
											</div>
	
	
<div class="icons">
	
					<div class="btn-group pull-right">
				<a class="btn dropdown-toggle" data-toggle="dropdown" href="#"> <span class="icon-cog"></span><span class="caret"></span> </a>
								<ul class="dropdown-menu">
											<li class="print-icon"> <a href="/blog/3-title-fdfd?tmpl=component&amp;print=1&amp;layout=default&amp;page=" title="列印" onclick="window.open(this.href,'win2','status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=640,height=480,directories=no,location=no'); return false;" rel="nofollow"><span class="icon-print"></span>列印</a> </li>
																			</ul>
			</div>
		
	</div>



		<dl class="article-info muted">

		
			<dt class="article-info-term">
													詳細內容							</dt>

							<dd class="createdby" itemprop="author" itemscope itemtype="http://schema.org/Person">
					作者 <span itemprop="name">Super User</span>	</dd>
			
			
										<dd class="category-name">
																		分類：<a href="/blog" itemprop="genre">Blog</a>							</dd>			
					
					
			
						</dl>



 <h1>Title fdfd</h1>

intro_text: Intro Text fdfsdfsdfsf
<hr/>main_text: Main tExt<br />
fdfsdfsdfsd
<hr/>intro_image: 
<hr/>source_url: 
<hr/>



				</div>
									</div><!-- end items-leading -->
	
	
																	<div class="items-row cols-2 row-0 row-fluid clearfix">
						<div class="span6">
				<div class="item column-1"
					itemprop="blogPost" itemscope itemtype="http://schema.org/BlogPosting">
					

			<div class="page-header">

							<h2 itemprop="name">
											<a href="/blog/2-blog-title" itemprop="url">
						Blog Title 4</a>
									</h2>
			
											</div>
	
	
<div class="icons">
	
					<div class="btn-group pull-right">
				<a class="btn dropdown-toggle" data-toggle="dropdown" href="#"> <span class="icon-cog"></span><span class="caret"></span> </a>
								<ul class="dropdown-menu">
											<li class="print-icon"> <a href="/blog/2-blog-title?tmpl=component&amp;print=1&amp;layout=default&amp;page=" title="列印" onclick="window.open(this.href,'win2','status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=640,height=480,directories=no,location=no'); return false;" rel="nofollow"><span class="icon-print"></span>列印</a> </li>
																			</ul>
			</div>
		
	</div>



		<dl class="article-info muted">

		
			<dt class="article-info-term">
													詳細內容							</dt>

							<dd class="createdby" itemprop="author" itemscope itemtype="http://schema.org/Person">
					作者 <span itemprop="name">Super User</span>	</dd>
			
			
										<dd class="category-name">
																		分類：<a href="/blog" itemprop="genre">Blog</a>							</dd>			
					
					
			
						</dl>



 <h1>Blog Title 4</h1>

intro_text: Blog Intro Text 
<hr/>main_text: &lt;h1&gt;Blog Main Text&lt;h1&gt;<br />
Blog Main Text<br />
Blog Main Text<br />
Blog Main Text
<hr/>intro_image: http://scotchbox/images/stories/com_form2content/p2/f2/11.jpg
<hr/>source_url: 
<hr/>



				</div>
				<!-- end item -->
							</div><!-- end span -->
							</div><!-- end row -->
						
	
		</div>

					
<ul class="breadcrumb">
	<li class="active">您目前位置：&#160;</li><li><a href="/" class="pathway">首頁</a><span class="divider"><img src="/media/system/images/arrow.png" alt="" /></span></li><li class="active"><span>Blog</span></li></ul>
<ul class="category-module">
						<li>
									<a class="mod-articles-category-title " href="/blog/2-blog-title">
						Blog Title 4					</a>
					
					
					
					
					
					
							</li>
					<li>
									<a class="mod-articles-category-title " href="/blog/3-title-fdfd">
						Title fdfd					</a>
					
					
					
					
					
					
							</li>
			</ul>

					<!-- End Content -->
				</main>
									<div id="aside" class="span3">
						<!-- Begin Right Sidebar -->
						<div class="well _menu"><h3 class="page-header">主菜单</h3><ul class="nav menu">
<li class="item-101"><a href="/" >首页</a></li><li class="item-108 current active"><a href="/blog" >Blog</a></li></ul>
</div><div class="well "><h3 class="page-header">登录</h3><form action="http://scotchbox/blog" method="post" id="login-form" class="form-inline">
		<div class="userdata">
		<div id="form-login-username" class="control-group">
			<div class="controls">
									<div class="input-prepend">
						<span class="add-on">
							<span class="icon-user hasTooltip" title="帳號"></span>
							<label for="modlgn-username" class="element-invisible">帳號</label>
						</span>
						<input id="modlgn-username" type="text" name="username" class="input-small" tabindex="0" size="18" placeholder="帳號" />
					</div>
							</div>
		</div>
		<div id="form-login-password" class="control-group">
			<div class="controls">
									<div class="input-prepend">
						<span class="add-on">
							<span class="icon-lock hasTooltip" title="密碼">
							</span>
								<label for="modlgn-passwd" class="element-invisible">密碼							</label>
						</span>
						<input id="modlgn-passwd" type="password" name="password" class="input-small" tabindex="0" size="18" placeholder="密碼" />
					</div>
							</div>
		</div>
						<div id="form-login-remember" class="control-group checkbox">
			<label for="modlgn-remember" class="control-label">記得我</label> <input id="modlgn-remember" type="checkbox" name="remember" class="inputbox" value="yes"/>
		</div>
				<div id="form-login-submit" class="control-group">
			<div class="controls">
				<button type="submit" tabindex="0" name="Submit" class="btn btn-primary">登入</button>
			</div>
		</div>
					<ul class="unstyled">
							<li>
					<a href="/component/users/?view=registration">
					註冊 <span class="icon-arrow-right"></span></a>
				</li>
							<li>
					<a href="/component/users/?view=remind">
					忘記您的帳號？</a>
				</li>
				<li>
					<a href="/component/users/?view=reset">
					忘記您的密碼？</a>
				</li>
			</ul>
		<input type="hidden" name="option" value="com_users" />
		<input type="hidden" name="task" value="user.login" />
		<input type="hidden" name="return" value="aW5kZXgucGhwP29wdGlvbj1jb21fY29udGVudCZJdGVtaWQ9MTA4" />
		<input type="hidden" name="1bedf64f2f5718ecb919ab4faa467a8c" value="1" />	</div>
	</form>
</div>
						<!-- End Right Sidebar -->
					</div>
							</div>
		</div>
	</div>
	<!-- Footer -->
	<footer class="footer" role="contentinfo">
		<div class="container">
			<hr />
			<div class="footer1">Copyright &#169; 2015 Sentec Joomla!. All Rights Reserved.</div>
<div class="footer2"><a href="http://www.joomla.org">Joomla!</a> 是依照 <a href="http://www.gnu.org/licenses/gpl-2.0.html">GNU General Public License.</a>規定發佈的自由軟體</div>

			<p class="pull-right">
				<a href="#top" id="back-top">
					回到上面				</a>
			</p>
			<p>
				&copy; 2015 Sentec Joomla!			</p>
		</div>
	</footer>
	
</body>
</html>
";s:13:"mime_encoding";s:9:"text/html";s:7:"headers";a:1:{i:0;a:2:{s:4:"name";s:3:"P3P";s:5:"value";s:50:"CP="NOI ADM DEV PSAi COM NAV OUR OTRo STP IND DEM"";}}}