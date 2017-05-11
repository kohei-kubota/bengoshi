<?php get_header(); ?>

	<div class="slide-wrapper slider">
	    <div>
	        <img src="img/home/main01.png" alt="">
	    </div>
	    <div>
	        <img src="img/home/main02.png" alt="">
	    </div>
	    <div>
	        <img src="img/home/main03.png" alt="">
	    </div>
	</div>

	<section id="news">
		<div id="news-inner">
			<h2><img src="img/home/news.png" alt=""></h2>
			<table>
			<?php if (have_posts()) :
			while (have_posts()) : the_post(); ?>
				<tr>
					<th><?php the_date(); ?></th>
					<td>
						<a href="<?php the_permalink(); ?>">
							<?php the_title(); ?>
						</a>
					</td>
				</tr>
			<?php
			endwhile;
			?>
			</table>
			<?php else : ?>
			<div class="post">
			<h2>記事はありません</h2>
			<p>お探しの記事は見つかりませんでした。</p>
			</div>
			<?php endif; ?>
		</div>
	</section>

	<section id="lowyers">
		<div id="lowyers-inner">
			<h2><img src="img/home/lowyers.png" alt=""></h2>
			<p class="concept"><img src="img/home/concept.png" alt=""></p>
			<ul class="lowyers-list">
				<li><a href="/wakai"><img src="img/home/lowyers01_off.png" onmouseover="this.src='img/home/lowyers01.png'" onmouseout="this.src='img/home/lowyers01_off.png'" alt=""></a></li>
				<li><a href="/kosugi"><img src="img/home/lowyers02_off.png" onmouseover="this.src='img/home/lowyers02.png'" onmouseout="this.src='img/home/lowyers02_off.png'" alt="" alt=""></a></li>
				<li><a href="/yoshida"><img src="img/home/lowyers03_off.png" onmouseover="this.src='img/home/lowyers03.png'" onmouseout="this.src='img/home/lowyers03_off.png'" alt="" alt=""></a></li>
			</ul>
		</div>
	</section>

	<section id="guide">
		<div id="guide-inner">
			<h2><img src="img/home/guide.png" alt=""></h2>
			<ul class="guide-list">
				<li><a href="/guide"><img src="img/home/guide01.png" alt=""></a></li>
				<li><a href="/degree"><img src="img/home/guide02.png" alt=""></a></li>
				<li><a href="/cost"><img src="img/home/guide03.png" alt=""></a></li>
				<li><a href="/contact"><img src="img/home/guide04.png" alt=""></a></li>
			</ul>
		</div>
	</section>

	<section id="contact">
		<div id="contact-inner">
			<h2><img src="img/home/contact.png" alt=""></h2>
			<ul class="contact-list">
				<li><a href=""><img src="img/home/contact01.png" alt=""></a></li>
				<li><a href="/contact"><img src="img/home/contact02.png" alt=""></a></li>
			</ul>
		</div>
	</section>

	<section id="access">
		<div id="access-inner">
			<h2><img src="img/home/access.png" alt=""></h2>
			<p class="address">
				不動法律事務所<br>
				〒160-0004 東京都新宿区四谷2-4 久保ビル6階
			</p>
			<div id="before">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1362.504526057705!2d139.72546599116987!3d35.686846235800026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188c8c9067e36f%3A0xb473cc427fa10e00!2z44CSMTYwLTAwMDQg5p2x5Lqs6YO95paw5a6_5Yy65Zub6LC377yS5LiB55uu77yU4oiS77yVIOS5heS_neODk-ODqw!5e0!3m2!1sja!2sjp!4v1493810338417" width="800" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
	</section>

	<?php get_footer(); ?>
