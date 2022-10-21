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
		var lhsSource = '[{"_id":"63517adfef0761afc221951d","index":0,"guid":"d629566f-9877-4255-9aa7-a2d9e8bf6382","isActive":true,"balance":"$2,602.58","picture":"http://placehold.it/32x32","age":23,"eyeColor":"brown","name":"Shaffer Browning","gender":"male","company":"LIMAGE","email":"shafferbrowning@limage.com","phone":"+1 (854) 466-3840","address":"138 Murdock Court, Escondida, Illinois, 1527","about":"Dolore Lorem in ex laborum laborum aliqua in magna pariatur incididunt voluptate. Aliqua et nisi mollit dolore tempor fugiat sit mollit nostrud veniam dolore. Eiusmod eu nulla eiusmod sit deserunt fugiat officia. Irure aliquip cillum quis nostrud sint do ea aliqua. Incididunt cupidatat consectetur anim aliquip commodo pariatur mollit exercitation magna eu labore dolor ipsum officia. Elit magna mollit incididunt quis commodo proident minim quis pariatur elit cupidatat commodo. Velit anim laborum commodo tempor velit fugiat in pariatur eu laboris ex adipisicing.\r\n","registered":"2016-09-26T03:58:52 +06:00","latitude":0.121231,"longitude":88.361683,"tags":["est","veniam","ex","elit","dolor","esse","id"],"friends":[{"id":0,"name":"Alba Rutledge"},{"id":1,"name":"Evelyn Marsh"},{"id":2,"name":"Buchanan Hutchinson"}],"greeting":"Hello, Shaffer Browning! You have 9 unread messages.","favoriteFruit":"strawberry"}]';
		var rhsSource = '[{"_id":"63517adfef0761afc221951d","index":0,"guid":"-9877-4255-9aa7-a2d9e8bf6382","isActive":true,"balance":"$2,602.58","picture":"http://placehold.it/32x32","age":23,"eyeColor":"brown","name":"Shaffer Browning","gender":"male","company":"LIMAGE","email":"shafferbrowning@limage.com","phone":"+1 (854) 466-3840","address":"138 Murdock Court, Escondida, Illinois, 1527","about":"Dolore Lorem in ex laborum laborum aliqua in magna pariatur incididunt voluptate. Aliqua et nisi mollit dolore tempor fugiat sit mollit nostrud veniam dolore. Eiusmod eu nulla eiusmod sit deserunt fugiat officia. Irure aliquip cillum quis nostrud sint do ea aliqua. Incididunt cupidatat consectetur anim aliquip commodo pariatur mollit exercitation magna eu labore dolor ipsum officia. Elit magna mollit incididunt quis commodo proident minim quis pariatur elit cupidatat commodo. Velit anim laborum commodo tempor velit fugiat in pariatur eu laboris ex adipisicing.\r\n","registered":"2016-09-26T03:58:52 +06:00","latitude":0.121231,"longitude":88.361683,"tags":["est","veniam","ex","elit","dolor","esse","id"],"friends":[{"id":0,"name":"Alba Rutledge"},{"id":1,"name":"Evelyn Marsh"},{"id":2,"name":"Buchanan Hutchinson"}],"greeting":"Hello, Shaffer Browning! You have 9 unread messages.","favoriteFruit":"strawberry"}]';
	</script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#mergely').mergely({
				license: 'lgpl',
				cmsettings: {
					readOnly: true
				},
				lhs: function(setValue) {
					setValue(lhsSource);
				},
				rhs: function(setValue) {
					setValue(rhsSource);
				}
			});
            $("#mergely-splash").remove();
		});
	</script>
</head>
<body>
	<div class="mergely-full-screen-8">
		<div class="mergely-resizer">
			<div id="mergely">
			</div>
		</div>
	</div>
</body>
</html>
