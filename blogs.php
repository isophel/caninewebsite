<?php require_once('config.php');?>
<?php require_once( ROOT_PATH . '/includes/public_functions.php') ?>
<?php require_once(ROOT_PATH . '/includes/header.php'); ?>


	<nav class="breadcrumbs" style="margin-top: 150px; margin-left: 50px;">
						<a href="index.php">Home</a> &rarr;
						<span>Blogs</span>
		</nav>
		
	<div class="bannerlogin" style="margin-left: 50px;">
		<?php require_once(ROOT_PATH . '/includes/banner.php');?>
	</div>
		<div class="content" style="margin-left: 50px;">
			<?php $posts= getPublishedPosts();?>
			<h2 class="content-title">Recent Articles</h2>
			<hr>
			<!--Retreiving posts from the database-->
		
	<?php foreach ($posts as $post): ?>
	<div class="post" style="margin-left: 0px;">
		<img src="<?php echo BASE_URL . 'images/' . $post['image']; ?>" class="post_image" alt="">
		<?php if (isset($post['topic']['name'])): ?>
			<a 
				href="<?php echo BASE_URL . 'filtered_posts.php?topic=' . $post['topic']['id'] ?>"
				class="btn category">
				<?php echo $post['topic']['name'] ?>
			</a>
		<?php endif ?>
		
		<a href="single_post.php?post-slug=<?php echo $post['slug']; ?>">
			<div class="post_info">
				<h3><?php echo $post['title'] ?></h3>
				<div class="info">
					<span><?php echo date("F j, Y ", strtotime($post["created_at"])); ?></span>
					<span class="read_more">Read more...</span>
				</div>
			</div>
		</a>
	</div>
	<?php endforeach ?>
		</div>

<?php require_once(ROOT_PATH . '/includes/footer.php'); ?>