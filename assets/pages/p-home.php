<?php include("config.php"); ?>
<?php include("header.php"); ?>

<section class="s-gridpage">

	<div class="s-menu">
		<div class="s-menu-box">
			<div class="s-menu-item">Item 1</div>
			<div class="s-menu-item">Item 2</div>
			<div class="s-menu-item">Item 3</div>
		</div>
	</div>

	<div class="s-gridpage-grid">

		<div class="s-gridpage-left">
           
		</div>

		<div class="s-gridpage-center">
            
			<div class="s-postinput">
				<div class="s-postinput-box">
					<textarea class="s-postinput-textarea" id="s-postinput-textarea" placeholder="Type something…"></textarea>
				</div>
			</div>


			<div class="s-post-list">
				<div class="s-post-item">
					<div class="s-post-head">
						<div class="s-align-items-center">
							<img src="<?php echo RootUrl(); ?>uploads/photos/2023/05/12/ia_man.webp" class="s-post-photo">
						</div>
						<div class="s-post-user">
							<div class="s-post-name">John Williams</div>
							<div class="s-post-description">Sun, sand, fresh breeze, and the sound of the waves — beaches remind us how important it is to pause our routine and enjoy nature. Whether it’s to relax, walk along the shore, or dive into the sea, there’s always a beach waiting for you.</div>
						</div>
						<div class="s-align-items-center">
							<img src="<?php echo RootUrl(); ?>assets/icons/three_points.svg" class="s-post-icon">
						</div>
					</div>
				</div>
			</div>

		</div>

		<div class="s-gridpage-right">

		</div>

	</div>

</section>

<?php include("footer.php"); ?>