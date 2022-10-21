<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" /><title>Compare</title>
	<meta http-equiv="X-UA-Compatible" content="chrome=1, IE=edge">
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>

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
			var lhs_url = '/src/' + '{{ $lhsFile }}';
			var rhs_url = '/src/' + '{{ $rhsFile }}';
			$.ajax({
				type: 'GET', async: true, dataType: 'text',
				url: lhs_url,
				success: function (response) {
					$('#path-lhs').text(lhs_url.replace("/src/", ""));
					$('#mergely').mergely('lhs', response);
				}
			});
			$.ajax({
				type: 'GET', async: true, dataType: 'text',
				url: rhs_url,
				success: function (response) {
					$('#path-rhs').text(rhs_url.replace("/src/", ""));
					$('#mergely').mergely('rhs', response);
				}
			});
			$.ajax({
				type: 'GET', async: true, dataType: 'text',
				url: '/compare/files',
				success: function (response) {
					$('#path-rhs').text(rhs_url.replace("/src/", ""));
					$('#mergely').mergely('rhs', response);
				}
			});
			$("#lhsSelect").click(function(){
				alert('Left Side file chooser modal');
			});
			$("#rhsSelect").click(function(){
				alert('Right Side file chooser modal');
			});	
		});
	</script>
</head>
<body>
	<table  style="width: 100%;">
		<tr>
			<td style="width: 50%;"><button id="lhsSelect">File...</button> &nbsp; <tt id="path-lhs"></tt></td>
			<td style="width: 50%;"><button id="rhsSelect">File...</button> &nbsp; <tt id="path-rhs"></tt></td>
		</tr>
	</table>
	<div class="mergely-full-screen-80">
		<div class="mergely-resizer">
			<div id="mergely">
			</div>
		</div>
	</div>
	<div>
		<h2>Available Files</h2>
		<p><i>These will go into the modal file selector window</i></p>
		<p>
			<ul>
				@foreach ($files as $file)
				<li>{{ $file }}</li>
				@endforeach
			</ul>
		</p>
	</div>
</body>
</html>
