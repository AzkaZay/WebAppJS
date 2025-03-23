<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<style>

    body{
        background-color:lightseagreen;
        
    }
    .box{
        width: 100px;
        height: 100px;
        background: lightcyan;
        border-style: solid; /* Required to animate border width */
        border-color: darkcyan;
        filter: drop-shadow(0px 0px 0.75rem #fff);
        
    }
    .animation{
        color: lightseagreen;
        padding: 100px;
        margin: 10%;
        font-family: 'Roboto Condensed', sans-serif;
        
    }
    #btn{
        margin: 30px;
        filter: drop-shadow(0px 0px 0.75rem #fff);
    }
        
    .live-search-list {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 1em;
            width: 25%;
            margin-left: 700px;
            margin-top: 0px;
            background-color: teal;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            font-family: 'Lato', sans-serif;
            color: #fff;
        }

        .live-search-box {
            width: 25%;
            display: block;
            padding: 1em;
            margin-left: 700px;
            margin-top: 150px;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            border: 1px solid #3498db;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
        }

        .live-search-list li {
            color: fff;
            list-style: none;
            padding: 0;
            margin: 5px 0;
        }
        
</style>
<script>
    $(document).ready(function(){
    $("button").click(function(){
        $(".box")
            .animate({width: "1500px"})
            .animate({height: "300px"})
            .animate({marginLeft: "150px"})
            .animate({borderWidth: "10px"})
            .animate({opacity: 0.5});
    });
});

$(document).ready(function(){
        $(".box").hover(function(){
        $(this).css("background-color", "lightcyan");
    }, 
        function(){
    $(this).css("background-color", "white");
    });
});   

    $(document).ready(function(){
        $(".btn").hover(function(){
        $(this).css("background-color", "teal");
    }, 
        function(){
    $(this).css("background-color", "darkcyan");
    });
});


jQuery(document).ready(function($){

$('.live-search-list li').each(function(){
$(this).attr('data-search-term', $(this).text().toLowerCase());
});

$('.live-search-box').on('keyup', function(){

var searchTerm = $(this).val().toLowerCase();

$('.live-search-list li').each(function(){

if ($(this).filter('[data-search-term *= ' + searchTerm + ']').length > 0 || searchTerm.length < 1) {
$(this).show();

} else {

    $(this).hide();
}

});

});

});

$(document).ready(function(){
$(".live-search-list").click(function(){
$(this).hide(500);
});
});
$(document).ready(function () {
    $(".live-search-box").click(function () {
        $(".live-search-list").toggle(500);
    });
});

</script>

</head>
<body>
<button type="button" id = "btn" class="lg btn btn-primary">Display Animation</button>
    <div class="box"><p class = "animation">Welcome to Bakin'Codes 74892059</p></div>

    <input type="text" class="live-search-box" placeholder="Search flavour here..." />

        <ul class="live-search-list">
        <li>Almond</li>
        <li>Banana</li>
        <li>Blackforest</li>
        <li>Blueberry</li>
        <li>Brownies</li>
        <li>Caramel</li>
        <li>Choccy</li>
        <li>Coffee</li>
        <li>Cookie-dough</li> 
        <li>Kitkat</li>
        <li>Mint</li>
        <li>Orange</li>
        <li>Oreo</li>
        <li>Redvelvet</li>
        <li>Strawberry</li>
        <li>Tropical</li> 
        <li>Vanilla</li>
        </ul>
</body>
</html>