<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" /><title>Compare</title>
	<meta http-equiv="X-UA-Compatible" content="chrome=1, IE=edge">
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>

	<!-- Bootstrap -->
	<link href="/bootstrap/bootstrap.min.css" rel="stylesheet">
	<!-- Requires jQuery -->
	<script type="text/javascript" src="/jquery/3.2.1/jquery.min.js"></script>

	<!-- Requires CodeMirror -->
	<script type="text/javascript" src="/codemirror/5.32.0/codemirror.min.js"></script>
	<script type="text/javascript" src="/codemirror/5.32.0/addon/search/searchcursor.min.js"></script>
	<link type="text/css" rel="stylesheet" href="/codemirror/5.32.0/codemirror.min.css" />

	<!-- Requires Mergely -->
	<script type="text/javascript" src="/mergely/js/mergely.js"></script>
	<link type="text/css" rel="stylesheet" href="/mergely/css/mergely.css" />
	<script type="text/javascript">
		$(document).ready(function () {
			$('#mergely').mergely({
				width: 'auto',
				height: 600,
				license: 'lgpl',
				cmsettings: {
					readOnly: false,
					lineWrapping: true,
				}
			});
			$("#mergely-splash").remove();
			$("#lhsSelect").change(function(){
				$('#path-lhs').text($("#lhsSelect").find(":selected").val());
				//alert();
				lhsLoad($("#lhsSelect").find(":selected").val());
			});
			$("#rhsSelect").change(function(){
				$('#path-rhs').text($("#rhsSelect").find(":selected").val());
				rhsLoad($("#rhsSelect").find(":selected").val());
			});	
		});
	</script>
	<script type="text/javascript">
		function lhsLoad($fileName){
			var fileUrl = '/compare/getfile/' + $fileName;
			$.ajax({
				type: 'GET', async: true, dataType: 'text',
				url: fileUrl,
				success: function (response) {
					$('#mergely').mergely('lhs', response);
				}
			});
		}
		function rhsLoad($fileName){
			var fileUrl = '/compare/getfile/' + $fileName;
			$.ajax({
				type: 'GET', async: true, dataType: 'text',
				url: fileUrl,
				success: function (response) {
					$('#mergely').mergely('rhs', response);
				}
			});
		}
	</script>
</head>
<body>
	<div class="container">
		<div class="card my-2 shadow">
			<div class="card-body">
				<div class="row p-1 text-center">
					<div class="col-6 text-center">
						<select id="lhsSelect" class="form-select">
							<option>Select a file...</option>
							@foreach ($files as $file)
							<option>{{ $file }}</option>
							@endforeach
						</select>
					</div>
					<div class="col-6 text-center">
						<select id="rhsSelect" class="form-select">
							<option>Select a file...</option>
							@foreach ($files as $file)
							<option>{{ $file }}</option>
							@endforeach
						</select>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="card">
			<div class="card-header">
				Content Comparison
			</div>
			<div class="card-body">
				<div class="mergely-resizer">
					<div id="mergely"></div>
				</div>
			</div>
		</div>
	</div>
	<script src="/bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>
