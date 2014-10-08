<!DOCTYPE html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<script src="script.js"></script>
	<style>
		input {margin-bottom: 5px;}
		label {margin-top: 5px;}
		button {margin-left: 30%;}
		p {color: red;}
	</style>
</head>
<body>
	<div class="container">
		<div class="col-md-6 col-md-offset-3">
		<h1>PRICES CALCULATOR</h1>
		
			<form role="form" method="get" onsubmit="return false">
				<div class="form-group">
					<div class="row">
						<div class="col-md-3">
							<label for="price1">1st price:</label><br>
							<label for="quantity1">1st quantity:</label>
						</div>
						<div class="col-md-9">
							<input type="number" name="price1" id="price1" step="0.01"><br>
							<input type="number" name="quantity1" id="quantity1" step="0.01">
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<label for="price2">2nd price:</label><br>
							<label for="quantity2">2nd quantity:</label>
						</div>
						<div class="col-md-9">
							<input type="number" name="price2" id="price2" step="0.01"><br>
							<input type="number" name="quantity2" id="quantity2" step="0.01">
						</div>
					</div>
				</div>
				<button type="submit" class="btn btn-default" onclick="calculate()">Calculate</button>
				<div id="answer"></div>
			</form>
		</div>
		
	</div>
</body>

