<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Form Todo List Laravel and Vue Js</title>

	<!-- Jquery -->
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

	<!-- Vue JS -->
	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

	<!-- CSS -->
	<style>
		body {
			margin: 30px;
		}
		.todolist-wrapper {
			border: 1px solid #cccccc;
			min-height: 100px;
		}
	</style>

</head>
<body>

	<!-- container bootstrap -->
	<div class="container">
		<!-- container vue js -->
		<div id="app">
			<div class="row">
				<div class="col-sm-3"></div>
				<div class="col-sm-6">
					<div class="text-right mb-3 btn-sm">
						<a href="javascript: ;" class="btn btn-primary">Tambah</a>
					</div>
					<div class="todolist-wrapper">
						
					</div>
				</div>
				<div class="col-sm-3"></div>
			</div>
		</div>
	</div>


	<!-- Deklasikan Vue Js -->
	<script>
		var vue = new Vue ({
			el: '#app',
			data: {

			},
			methods: {
				// // function didalam vuejs
				// updateData: function() {

				// }
			}
		});
	</script>
</body>
</html>