<section id="footer">
	<div id="footer-inner">
		<h1 id="logo"><a href="/"><img src="/img/common/logo.png" alt=""></a></h1>
		<nav id="g-nav">
			<ul class="footer-menu">
				<li>
					<a href="/guide">事務所のご案内</a>
				</li>
				<li>
					<a href="javascript:void(0)">弁護士のご紹介</a>
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
				<li>
					<a href="/info">お知らせ</a>
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

<script src="<?php echo get_template_directory_uri(); ?>/js/function.js"></script>
<script>
	$('.slide-wrapper').slick({
		accessibility: false,
		dots: true,
		arrows: false,
		autoplay: true
	});

	var map = $('iframe');
	map.css('pointer-events', 'none');
	$('#access').click(function() {
			map.css('pointer-events', 'auto');
	});
	map.mouseout(function() {
			map.css('pointer-events', 'none');
	})
</script>
<?php wp_footer(); ?>
</body>
</html>
