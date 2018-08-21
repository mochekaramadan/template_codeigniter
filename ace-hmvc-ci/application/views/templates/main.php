<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Dashboard - Ace Admin</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		<title></title>
		<?php echo $_cssglobal ?>
	</head>
	<body class="no-skin">
		<?php echo $_header ?>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<?php echo $_sidebar ?>

			<div class="main-content">
				<div class="main-content-inner">
					<?php echo $_isi ?>
				</div>
			</div><!-- /.main-content -->

			<?php echo $_footer ?>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<?php echo $_jsglobal ?>
	</body>
</html>