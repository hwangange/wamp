<div data-role = "header" data-position = "fixed" id = "header">
	<?php 
		if(isset($_SESSION['login_user'])) {?>
			<a href = "#mainpanel" class="ui-btn ui-icon-bars ui-btn-icon-left">Menu</a>
		<?php } ?>
	<h1>Title</h1>
</div>