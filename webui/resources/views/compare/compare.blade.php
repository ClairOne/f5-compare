<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" /><title>Compare</title>
	<meta http-equiv="X-UA-Compatible" content="chrome=1, IE=edge">
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>

	<!-- Bootstrap -->
	<link href="{!! asset('vendor/twbs/bootstrap/dist/css/bootstrap.min.css') !!}" rel="stylesheet">
	<!-- Requires jQuery -->
    <!-- @TODO: localize jquery -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Requires CodeMirror -->
    <!-- @TODO: localize CodeMirror -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.32.0/codemirror.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.32.0/addon/search/searchcursor.min.js"></script>
	<link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.32.0/codemirror.min.css" />

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
	<table  style="width: 100%;">
		<tr>
			<td style="width: 50%;">
				<select id="lhsSelect">
					<option>Select a file...</option>
					@foreach ($files as $file)
					<option>{{ $file }}</option>
					@endforeach
				</select>
			</td>
			<td style="width: 50%;">
				<select id="rhsSelect">
					<option>Select a file...</option>
					@foreach ($files as $file)
					<option>{{ $file }}</option>
					@endforeach
				</select>
			</td>
		</tr>
	</table>
	<div class="alert alert-primary" role="alert">
  A simple primary alert—check it out!
</div>
	<table  style="width: 100%;">
		<tr>
			<td style="width: 50%;"><tt id="path-lhs"></tt></td>
			<td style="width: 50%;"><tt id="path-rhs"></tt></td>
		</tr>
	</table>
	<div class="mergely-full-screen-80">
		<div class="mergely-resizer">
			<div id="mergely">
			</div>
		</div>
	</div>
</body>
</html>
