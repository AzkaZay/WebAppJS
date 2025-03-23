<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body {
	font-family: Roboto;
	background-image: linear-gradient(rgba(20,4,10,0.4),rgba(20,4,10,0.4)),url("slider/shot2.jpg");
}

li {
	background: #fff;
	height: 40px;
	line-height: 40px;
	color: #666;
}

li:nth-child(2n) {
	background: #f7f7f7;
}

input {
	font-size: 18px;
	background-color: #f7f7f7;
	width: 100%;
	padding: 13px 13px 13px 20px;
	box-sizing: border-box;
	color: #2980b9;
	border: 1px solid rgba(0, 0, 0, 0);
}

input:focus {
	background: #fff;
	border: 3px solid #FFC0CB;
	outline: none;
}

h1 {
	background: #DB7093;
	color: #fff;
	margin: 0;
	padding: 10px 20px;
	text-transform: uppercase;
	font-size: 24px;
	font-weight: normal;
}

	
span {
	background: #FA8072;
	height: 40px;
	margin-right: 20px;
	text-align: center;
	color: #fff;
	width: 0px;
	display: inline-block;
	transition: 0.2s linear; 
	opacity: 0;
}

li:hover span {
	width:40px;
	opacity: 1.0;
}

ul{
	list-style: none;
	margin: 0;
	padding: 0;
}

#container {
	width: 50%;
	margin: 100px auto;
	box-shadow: 0 0 3px rgba(0,0,0, 0.1);
	background: #f7f7f7;
    filter: drop-shadow(0px 0px 0.9rem #000000);
}

.fa-plus {
	float: right;
	color: #FFB6C1;
}

.completed {
	color: grey;
	text-decoration: line-through;
}

.btn.btn-success.btn-lg{
    margin-left: 120px;
    margin-bottom: 600px;
    filter: drop-shadow(0px 0px 0.9rem #fff);
}
.btn.btn-primary.btn-lg{
    margin: 500px;
    margin-top: -120px;
    filter: drop-shadow(0px 0px 0.9rem #fff);
}
    </style>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
	<title>Flavours Update</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700,500" rel="stylesheet" type="text/css">
	<script src="http://code.jquery.com/jquery-3.2.1.js"
	integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
</head>
<body>

	<div id="container">
		<h1 style="color:#FFB6C1">Flavours Update<i class="fa fa-plus"></i></h1>
		
		<input type="text" placeholder="Add a new flavour...">

		<ul>
			<li><span><i class="fa fa-trash"></i></span> Almond </li>
			<li><span><i class="fa fa-trash"></i></span> Banana</li>
			<li><span><i class="fa fa-trash"></i></span>Blackforest</li>
            <li><span><i class="fa fa-trash"></i></span> Brownies </li>
            <li><span><i class="fa fa-trash"></i></span> Caramel </li>
            <li><span><i class="fa fa-trash"></i></span> Choccy </li>
            <li><span><i class="fa fa-trash"></i></span> Coffee </li>
            <li><span><i class="fa fa-trash"></i></span> Cookie </li>
            <li><span><i class="fa fa-trash"></i></span> Kitkat </li>
            <li><span><i class="fa fa-trash"></i></span> Mint </li>
            <li><span><i class="fa fa-trash"></i></span> Oreo </li>
            <li><span><i class="fa fa-trash"></i></span> Redvelvet </li>
            <li><span><i class="fa fa-trash"></i></span> Vanilla </li>
		</ul>
	</div>
	</script>
    <script>
        

    $("ul").on("click", "li", function(){
		$(this).toggleClass("completed");
});

    $("ul").on("click", "span", function(event){
	$(this).parent().fadeOut(500,function(){
		$(this).remove();
	});
	event.stopPropagation();
});

    $("input[type='text'").keypress(function(event){
	if(event.which === 13){
		var todoText = $(this).val(); 
		$(this).val("");
    $("ul").append("<li><span><i class='fa fa-trash'></i></span> " + todoText + "</li>");
}
    }); 

    $(".fa-plus").click(function(){
		$("input[type='text'").fadeToggle();
    }); 
    </script>

<a href="/jQuery/Carousel.php" class="btn btn-primary btn-lg">Gallery</a>
<a href="orders.php" class="btn btn-success btn-lg">Go back to Orders</a>

</body>
</html>