<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>ProtoType</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
	<script
		src="https://code.jquery.com/jquery-3.4.1.min.js"
		integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
		crossorigin="anonymous"></script>
	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #000;
		margin: 40px;
		font-family: 'Roboto', sans-serif;
		display: -webkit-box;  /* OLD - iOS 6-, Safari 3.1-6, BB7 */
		display: -ms-flexbox;  /* TWEENER - IE 10 */
		display: -webkit-flex; /* NEW - Safari 6.1+. iOS 7.1+, BB10 */
		display: flex;         /* NEW, Spec - Firefox, Chrome, Opera */
		
		justify-content: center;
		align-items: center;
	}


	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}
	#body {
		/* margin: 0 15px 0 15px; */
		display: inline-block
	}

	#container {
		/* margin: 10px; */
		/* border: 1px solid #D0D0D0; */
		/* box-shadow: 0 0 8px #D0D0D0; */
	}
	#buttonDiv {
		cursor: pointer;
		/* -webkit-box-shadow: 0px 0px 15px 0px rgba(255,255,255,1);
		-moz-box-shadow: 0px 0px 15px 0px rgba(255,255,255,1);
		box-shadow: 0px 0px 15px 0px rgba(255,255,255,1); */

		-moz-box-shadow: 0px 8px 8px rgb(100,100,100);
		-webkit-box-shadow: 0px 8px 8px rgb(100,100,100);
		box-shadow: 0px 8px 8px rgb(100,100,100);

		
		background: rgba(0,0,0,0.5);
		border-radius: 15px;
		height: 150px;
		margin-top: 20px;
		/* padding-top: 10px; */
		border-bottom: 25px solid #d18b00;
		/* padding: 10px; */
		border-bottom-left-radius: 15px;
		border-bottom-right-radius: 15px;
	}
	#innerbuttonDiv:after,
	#innerbuttonDiv:before {
		position: absolute;
		top: 130px;
		z-index: 1;
		content: ""
	}

	#innerbuttonDiv:before {
		right: 0;
		left: 0;
		border: 10px solid transparent;
		border-bottom: 10px solid #d18b00;
		border-right: 10px solid #d18b00;
		border-left: 10px solid #d18b00
	}

	#innerbuttonDiv:after {
		width: 100%;
		height: 20px;
		border-radius: 0 0 20px 20px;
		background: #ffea00;
		right: 1px
	}

	/* #curve{
		width: 100%;
		height: 20px;
		margin-top: -1px;
		background-color:#d18b00;    
	}
	#curve:before{
		width: 100%;
		height: 20px;
		border-radius: 0 0 15px 15px;
		background-color:#ffea00;    
		display:inline-block;
		vertical-align: middle;
		margin-top: 127px;
    	margin-left: -73px;
		content: '';
	} */
	/* .gold {
		background-color:#ffea00;
	}
	.goldopacity {
		background-color: #fcf174;
	} */
	/* #innerbuttonDivOverlap{
		border-radius: 15px;
		height: 150px;
		position:relative;
		top:0;
		left:0;
	} */
	/* #buttonDiv:hover {
		-webkit-transform: scale(0.99);
        -ms-transform: scale(0.99);
        transform: scale(0.99);
	} */

	#innerbuttonDiv:hover {
		background:#fcf174;
		top:5px;
	}
	#innerbuttonDiv{
		box-shadow: 0 -5px 8px -5px #fff;
		/* border-top-left-radius: 15px;
		border-top-right-radius: 15px; */
		/* border-bottom: 40px solid #d18b00; */
		border-radius: 15px;

		height: 150px;
		text-align:center;
		color: black;
		display: flex;
		justify-content: center;
		align-items: center;
		background-color:#ffea00;

		cursor:pointer;
		position:relative;
		transition: all 0.7s linear;
		-webkit-transition: all 0.7s linear;
		-moz-transition: all 0.7s linear;
		-o-transition: all 0.7s linear;
		-ms-transition: all 0.7s linear;

	}
	#buttonDiv i{
		color:black;
	}
	#buttonDiv span{
		font-size: xx-large;
		margin-left: 20px;
		margin-right: 20px;
	}
	i.left{
		float: left;
	}
	i.right{
		float: right;
	}
	</style>
	<script>
	
		$(document).ready(function () { 
				console.log('<?php echo site_url()?>')
				$("#innerbuttonDiv").click(function(){
					var baseUrl = '<?php echo site_url()?>';

					$.ajax({
						type: 'POST',
						url: baseUrl + '/welcome/getData',
						dataType: "json",
						success: function(data) {
							console.log(data)
							$('#q1 .answer').text(data[0].title)
						}

					});
					
					// $.ajax({
					// 	type: 'POST',
					// 	url: baseUrl + '/welcome/getData',
					// 	dataType: "json",
					// 	success: function(data) {
					// 		console.log(data)
					// 		$('#q1 .answer').text(data[0].name)
					// 	}

					// });

					// $.ajax({
					// 	type: 'POST',
					// 	url: baseUrl + '/welcome/getData',
					// 	dataType: "json",
					// 	success: function(data) {
					// 		console.log(data)
					// 		$('#q1 .answer').text(data[0].species)
					// 	}

					// });
					// $.ajax({
					// 	type: 'POST',
					// 	url: baseUrl + '/welcome/getData',
					// 	dataType: "json",
					// 	success: function(data) {
					// 		console.log(data)
					// 		$('#q1 .answer').text('Planet:' + data[0].planetname+  '- Pilots : ('+data[0].count+') '+data[0].name +'-'+ data[0].species)
					// 	}

					// });


				})
		});

	</script>

	
</head>
<body>

<div id="container">

	<div id="body">
		<img src="<?php echo base_url().'assets/img/Logo.png'?>" alt="Starwars">
		<div id="buttonDiv" class="">
			<!-- <div id="innerbuttonDivOverlap" class=""> -->
				<div id="innerbuttonDiv" class="gold">
					<i class="fa fa-star fa-5x left"></i>
					<span>Do. Or do not. There is no try.</span>
					<i class="fa fa-star fa-5x right"></i> 
				</div> 
				<!-- <div id="curve"></div> -->
			</div>
			<div id='q1'>
				<h1 class='title'>Which of all the StarWars movies has longest opening crawl?</h1>
				<h1 class='answer'></h1>
			</div>
		</div>

	</div>

</div>

</body>
</html>