<br><br><br><br>


<div class="container center over">
	
	<div class="card deep-orange reallyLog" style="opacity: 0.9">
	<h2 class="container card-title">set.ember</h2>
	<br>
		<div class="container log">
			
			<span>Welcome!</span>
			<?php foreach($message as $item): ?>

					<div class="messages">
						<span><?php echo $item['data_message'] ?> - <?php echo $item['message'] ?></span>
					</div>

			<?php endforeach; ?>

			<br><br><br>
			<div class="container center find">
					
						<input type="text" class="user" name="message">
						<input type="submit" class="btn red lighten-2" value="enviar" onsubmit="checkNick(this)">
				
			</div>
		</div>
	</div>
</div>
<br><br><br><br>