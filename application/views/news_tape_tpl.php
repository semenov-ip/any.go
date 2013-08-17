<?php
    $this->load->view('header');
?>
<body>
	<div class="container-fluid">
		
		<div class="row-fluid">
			
			<div class="span12">

				<div class="span12 logocolor">

					<div class="logo"><img src="/images/logo.png"></div>
				
				</div>

				<div class="span12 topmenu">

					<div class="span8 list"> <a href="#"><div class="icon type"></div>Список груп</a></div>
					<div class="span4 repeat"> <a href="#"><div class="icon repeat"></div>Обновить</a></div>

				
				</div>

				<?php foreach ($eventsData as $val) { ?>
					
					<div class="span12 news_blok">
					
						<div class="span12 topwhite">

							<div class="span12">
								<img src="<?php echo !empty($val->photo_url) ? $val->photo_url : "Казань"; ?>" />
								<h3><?php echo !empty($val->group_name) ? $val->group_name : "Казань"; ?></h3>
								<div class="icon time"></div><p><?php echo !empty($val->event_date) ? $val->event_date : ""; ?></p>
								<div class="line"></div>
							</div>
							<div class="span12 text">
								<p><?php echo !empty($val->min_text) ? $val->min_text : ""; ?></p>
							</div>

						</div>

					</div>
					
				<?php } ?>

			</div>

		</div>

	</div>
</body>
</html>