<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title></title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>

<link rel="stylesheet" href="../css/style.css">
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
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

	<section id="fv">
		<img src="/img/news/banner_news.png" alt="">
	</section>

	<section id="bread-crumb">
		<ul class="clearfix">
			<li><a href="/">TOP</a>>></li>
			<li><a href="/info">お知らせ</a>>></li>
			<li>記事</li>
		</ul>
	</section>

	<section id="article">
		<div id="article-inner">
			<?php if (have_posts()) : // WordPress ループ
			while (have_posts()) : the_post(); // 繰り返し処理開始 ?>
			<div class="date-wrapper">
				<p class="date"><?php echo get_the_date(); ?></p>
			</div>
			<h2 class="title">
				<?php echo get_the_title(); ?>
			</h2>
			<div class="contents">
			<?php the_content(); ?>
			</div>
			<?php endwhile; // 繰り返し処理終了
			else : // ここから記事が見つからなかった場合の処理 ?>
			<div class="post">
			<h2>記事はありません</h2>
			<p>お探しの記事は見つかりませんでした。</p>
			</div>
			<?php endif; // WordPress ループ終了 ?>
			<!-- <div class="date-wrapper">
				<p class="date">2017.05.30</p>
			</div>
			<h2 class="title">
				記事のタイトル記事のタイトル記事のタイトル記事のタ
イトル記事のタイトル記事のタイトル記事のタイトル記
事のタイトル
			</h2>
			<div class="contents">
				記事のテキスト記事のテキスト記事のテキスト記事のテキスト記事のテキスト記事のテキスト記事のテキスト記事のテキスト記事のテキスト記事のテキスト記事のテキスト記事のテキスト

<br><br>記事のテキスト記事のテキスト記事のテキスト記事のテキスト記事のテキスト記事のテキスト記事のテキスト記事のテキスト記事のテキスト記事のテキスト記事のテキスト

<br><br>記事のテキスト記事のテキスト記事のテキスト記事のテキスト記事のテキスト記事のテキスト記事のテキスト記事のテキスト記事のテキスト

<br><br>記事のテキスト記事のテキスト記事のテキスト記事のテキスト記事のテキスト記事のテキスト記事のテキスト記事のテキスト記事のテキスト記事のテキスト記事のテキスト記事のテキスト記事のテキスト記事のテキスト記事のテキスト記事のテキスト

<br><br>記事のテキスト記事のテキスト

<br><br>記事のテキスト記事のテキスト記事のテキスト記事のテキスト記事のテキスト
			</div> -->
		</div>
	</section>

	<section id="footer">
		<div id="footer-inner">
			<h1 id="logo"><a href="/"><img src="/img/common/logo.png" alt=""></a></h1>
			<nav id="g-nav">
				<ul class="footer-menu">
					<li>
						<a href="/guide">事務所のご案内</a>
					</li>
					<li>
						<a href="/wakai">弁護士のご紹介</a>
					</li>
					<li>
						<a href="/degree">取り扱い分野</a>
					</li>
					<li>
						<a href="/cost">弁護士費用</a>
					</li>
					<li>
						<a href="/contact">お問い合わせ</a>
					</li>
					<li>
						<a href="/sitemap">サイトマップ</a>
					</li>
				</ul>
				<div class="make_border"></div>
				<ul class="sub-menu">
					<li><a href="/wakai">弁護士・若井 亮</a></li>
					<li><a href="/kosugi">弁護士・小杉 俊介</a></li>
					<li><a href="/yoshida">弁護士・吉田 圭二</a></li>
				</ul>
			</nav>
		</div>
	</section>

	<section id="copyright">
		<p class="copy">Copyright©️Allrights reserved 2017.</p>
	</section>

	<script src="js/function.js"></script>
</body>
</html>
