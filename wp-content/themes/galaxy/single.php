<?php

/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage None Plate
 * @since None Plate 1.0
 */

get_header(); ?>

<?php
// Recebe o Thumbnail da Imagem Destacada
// Sizes Example: thumbnail, medium, large, full
$post_thumbnail_id = get_post_thumbnail_id($post->ID);
// $post_thumbnail_url = wp_get_attachment_image_src($post_thumbnail_id, $size = 'large')[0];

// Recebe as Categorias
$categoryclass = '';
$categories = get_the_category();
foreach ($categories as $category) {
	$categoryclass .= ' ct-' . esc_attr($category->slug);
}
?>

<meta property='og:image' content='<?php echo $post_thumbnail_url; ?>' />

<div id="content" class="reading reading-single">
	<!-- BREADCRUMB -->
	<section class="hero-section">
		<?php
		$hero = get_field('hero') ?: [];
		$desktop = $hero['desktop'] ?? '';
		$mobile = $hero['mobile'] ?? '';
		$fallback = IMG_URI . 'hero.jpg';
		$img_src = $desktop ?: $fallback;
		?>
		<picture>
			<?php if ($mobile): ?>
				<source media="(max-width: 767px)" srcset="<?= esc_url($mobile); ?>" type="image/jpeg">
			<?php endif; ?>
			<?php if ($desktop): ?>
				<source media="(min-width: 768px)" srcset="<?= esc_url($desktop); ?>" type="image/jpeg">
			<?php endif; ?>
			<img src="<?= esc_url($img_src); ?>" alt="Display da Home" class="hero-img" loading="lazy" decoding="async">
		</picture>
		<div class="hero-content">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="texto d-flex flex-column align-items-center text-center text-lg-start text-center">
							<p><a href="<?= home_url() ?>">Início&nbsp;></a>&nbsp;Leitura</p>
							<h1><?= get_the_title() ?? 'Fique por dentro das <span>novidades</span>'  ?></h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ARTICLE -->
	<article id="page" class="single-<?php echo $post->ID; ?><?php echo $categoryclass; ?>">
		<main class="page-container">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="the-date">
							<p><?php echo get_the_date(); ?></p>
						</div>
						<div class="the-title">
							<h2><?php the_title(); ?></h2>
						</div>
						<div class="share-this my-4">
							<p>Compartilhe essa notícia com seus amigos e familiares nas redes sociais:</p>
							<div class="social-media">
								<ul>
									<li><a href="https://www.facebook.com/sharer/sharer.php?&u=<?php echo get_permalink(); ?>&display=popup&ref=plugin&src=share_button" target="_blank" class="ico-face"><i class="fa fa-facebook"></i></a></li>
									<li><a href="https://twitter.com/home?status=<?php echo get_the_title() . " " . get_permalink(); ?>" target="_blank" class="ico-twitter"><i class="fa fa-twitter"></i></a></li>
									<li><a href="https://plus.google.com/share?url=<?php echo get_permalink(); ?>" target="_blank" class="ico-gplus"><i class="fa fa-google-plus"></i></a></li>
									<li><a href='mailto:?subject=<?php echo get_the_title(); ?>&amp;body=<?php the_excerpt(); ?> <?php echo get_permalink(); ?>' class='ico-email'><i class='fa fa-envelope'></i></a></li>
								</ul>
							</div>
						</div>
						<?php if (have_posts()) : ?>
							<?php while (have_posts()) : the_post(); ?>
								<div class="the-content">
									<?php the_content(); ?>
								</div>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</main>
	</article>
	<section class="blog py-5 my-5">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="d-flex flex-column gap-3">
						<h2>Conheça nosso blog</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adip iscing elit. Sed lobortis diam in risus.</p>
						<a href="#" class="cta">Explore mais notícias</a>
					</div>
				</div>
				<div class="col-lg-8">
					<div class="swiper blog">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<div class="card">
									<div class="card-thumb">
										<img src="<?= IMG_URI ?>avenue-with-green-trees.jpg" alt="">
									</div>
									<div class="card-body d-flex flex-column gap-3 p-4">
										<div class="info d-flex justify-content-between">
											<div class="date">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M19 4H18V2H16V4H8V2H6V4H5C3.9 4 3 4.9 3 6V20C3 21.1 3.9 22 5 22H19C20.1 22 21 21.1 21 20V6C21 4.9 20.1 4 19 4ZM19 20H5V10H19V20ZM5 8V6H19V8H5ZM7 12H17V14H7V12ZM7 16H14V18H7V16Z" fill="#472135" />
												</svg>
												&nbsp; <?php echo get_the_date(); ?>
											</div>
											<div class="date">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<g clip-path="url(#clip0_7013_1918)">
														<path d="M17.849 11.808L17.142 11.101L7.242 21.001H3V16.758L14.313 5.44403L19.97 11.101C20.1575 11.2886 20.2628 11.5429 20.2628 11.808C20.2628 12.0732 20.1575 12.3275 19.97 12.515L12.9 19.586L11.485 18.172L17.849 11.808ZM15.728 9.68703L14.313 8.27303L5 17.586V19.001H6.414L15.728 9.68703ZM18.556 2.61603L21.385 5.44403C21.5725 5.63156 21.6778 5.88586 21.6778 6.15103C21.6778 6.41619 21.5725 6.6705 21.385 6.85803L19.97 8.27303L15.728 4.03003L17.142 2.61603C17.3295 2.42856 17.5838 2.32324 17.849 2.32324C18.1142 2.32324 18.3685 2.42856 18.556 2.61603Z" fill="#472135" />
													</g>
													<defs>
														<clipPath id="clip0_7013_1918">
															<rect width="24" height="24" fill="white" />
														</clipPath>
													</defs>
												</svg>
												&nbsp; Equipe Roquexc
											</div>
										</div>
										<div class="texto">
											<h3>Tendências em Arquitetura Sustentável para 2025.</h3>
											<p>Descubra as principais tendências que estão moldando o futuro da construção civil com foco na sustentabilidade...</p>
										</div>
										<a href="#" class="cta">Ler Mais</a>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="card">
									<div class="card-thumb">
										<img src="<?= IMG_URI ?>avenue-with-green-trees.jpg" alt="">
									</div>
									<div class="card-body d-flex flex-column gap-3 p-4">
										<div class="info d-flex justify-content-between">
											<div class="date">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M19 4H18V2H16V4H8V2H6V4H5C3.9 4 3 4.9 3 6V20C3 21.1 3.9 22 5 22H19C20.1 22 21 21.1 21 20V6C21 4.9 20.1 4 19 4ZM19 20H5V10H19V20ZM5 8V6H19V8H5ZM7 12H17V14H7V12ZM7 16H14V18H7V16Z" fill="#472135" />
												</svg>
												&nbsp; <?php echo get_the_date(); ?>
											</div>
											<div class="date">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<g clip-path="url(#clip0_7013_1918)">
														<path d="M17.849 11.808L17.142 11.101L7.242 21.001H3V16.758L14.313 5.44403L19.97 11.101C20.1575 11.2886 20.2628 11.5429 20.2628 11.808C20.2628 12.0732 20.1575 12.3275 19.97 12.515L12.9 19.586L11.485 18.172L17.849 11.808ZM15.728 9.68703L14.313 8.27303L5 17.586V19.001H6.414L15.728 9.68703ZM18.556 2.61603L21.385 5.44403C21.5725 5.63156 21.6778 5.88586 21.6778 6.15103C21.6778 6.41619 21.5725 6.6705 21.385 6.85803L19.97 8.27303L15.728 4.03003L17.142 2.61603C17.3295 2.42856 17.5838 2.32324 17.849 2.32324C18.1142 2.32324 18.3685 2.42856 18.556 2.61603Z" fill="#472135" />
													</g>
													<defs>
														<clipPath id="clip0_7013_1918">
															<rect width="24" height="24" fill="white" />
														</clipPath>
													</defs>
												</svg>
												&nbsp; Equipe Roquexc
											</div>
										</div>
										<div class="texto">
											<h3>Tendências em Arquitetura Sustentável para 2025.</h3>
											<p>Descubra as principais tendências que estão moldando o futuro da construção civil com foco na sustentabilidade...</p>
										</div>
										<a href="#" class="cta">Ler Mais</a>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="card">
									<div class="card-thumb">
										<img src="<?= IMG_URI ?>avenue-with-green-trees.jpg" alt="">
									</div>
									<div class="card-body d-flex flex-column gap-3 p-4">
										<div class="info d-flex justify-content-between">
											<div class="date">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M19 4H18V2H16V4H8V2H6V4H5C3.9 4 3 4.9 3 6V20C3 21.1 3.9 22 5 22H19C20.1 22 21 21.1 21 20V6C21 4.9 20.1 4 19 4ZM19 20H5V10H19V20ZM5 8V6H19V8H5ZM7 12H17V14H7V12ZM7 16H14V18H7V16Z" fill="#472135" />
												</svg>
												&nbsp; <?php echo get_the_date(); ?>
											</div>
											<div class="date">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<g clip-path="url(#clip0_7013_1918)">
														<path d="M17.849 11.808L17.142 11.101L7.242 21.001H3V16.758L14.313 5.44403L19.97 11.101C20.1575 11.2886 20.2628 11.5429 20.2628 11.808C20.2628 12.0732 20.1575 12.3275 19.97 12.515L12.9 19.586L11.485 18.172L17.849 11.808ZM15.728 9.68703L14.313 8.27303L5 17.586V19.001H6.414L15.728 9.68703ZM18.556 2.61603L21.385 5.44403C21.5725 5.63156 21.6778 5.88586 21.6778 6.15103C21.6778 6.41619 21.5725 6.6705 21.385 6.85803L19.97 8.27303L15.728 4.03003L17.142 2.61603C17.3295 2.42856 17.5838 2.32324 17.849 2.32324C18.1142 2.32324 18.3685 2.42856 18.556 2.61603Z" fill="#472135" />
													</g>
													<defs>
														<clipPath id="clip0_7013_1918">
															<rect width="24" height="24" fill="white" />
														</clipPath>
													</defs>
												</svg>
												&nbsp; Equipe Roquexc
											</div>
										</div>
										<div class="texto">
											<h3>Tendências em Arquitetura Sustentável para 2025.</h3>
											<p>Descubra as principais tendências que estão moldando o futuro da construção civil com foco na sustentabilidade...</p>
										</div>
										<a href="#" class="cta">Ler Mais</a>
									</div>
								</div>
							</div>
						</div>
						<!-- <div class="swiper-pagination"></div> -->
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

<?php get_footer(); ?>

<script>
	window.addEventListener('load', function() {
		const swiper = new Swiper('.swiper.blog', {
			slidesPerView: 2,
			spaceBetween: 30,
			pagination: {
				el: '.swiper-pagination',
				clickable: true,
			},
			breakpoints: {
				320: {
					slidesPerView: 1,
					spaceBetween: 20
				},
				768: {
					slidesPerView: 2,
					spaceBetween: 30
				}
			}
		});

		const swiperInsta = new Swiper('.swiper.insta', {
			slidesPerView: 4.5,
			direction: 'horizontal',
			spaceBetween: 18,
			centeredSlides: true,
			// autoplay: true,
			// autoplayTimeOut: 3000,
			loop: true,
		})
	});
</script>