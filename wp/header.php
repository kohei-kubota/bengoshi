<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title><?php bloginfo('name'); ?></title>
<meta name="keywords" content="">
<meta name="description" content="<?php bloginfo('description'); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/slick-theme.css">
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
</head>
<body>
	<header id="header" class="clearfix">
		<div id="header-inner">
			<h1 id="logo"><a href="/"><img src="/img/common/logo.png" alt=""></a></h1>
			<nav id="g-nav">
				<ul class="g-nav-list">
					<li>
						<div class="make_border"></div>
						<a href="/guide">事務所のご案内</a>
					</li>
					<li id="belong-lowyers">
						<div class="make_border"></div>
						<a href="/wakai">弁護士のご紹介</a>
						<ul class="sub-menu">
							<li><a href="/wakai">弁護士・若井 亮</a></li>
							<li><a href="/kosugi">弁護士・小杉 俊介</a></li>
							<li><a href="/yoshida">弁護士・吉田 圭二</a></li>
						</ul>
					</li>
					<li>
						<div class="make_border"></div>
						<a href="/degree">取り扱い分野</a>
					</li>
					<li>
						<div class="make_border"></div>
						<a href="/cost">弁護士費用</a>
					</li>
					<li>
						<div class="make_border"></div>
						<a href="/contact">お問い合わせ</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>
