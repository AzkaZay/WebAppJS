<!DOCTYPE html>
<html>
<head>

    <h1 style = "color:lightSeaGreen"></br>...Pick your favourite!</h1>
    <h2>Available cake flavours</h2>
    <p>Appending new flavours to the existing list.</p>

    
    <title>Pick your favourite!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
        $(document).ready(function(){

            var texts = ["Brownies", "Caramel", "Choccy", "Coffee", "Cookie", "Kitkat", "Mint", "Orange", "Oreo", "Redvelvet", "Strawberry", "Tropical", "Vanilla"];
            var currentIndex = 0;

            $("#btn").click(function(){

                if (currentIndex < texts.length) {
                    $("ol").append("<li>" + texts[currentIndex] + "</li>");
                    currentIndex++;
                } else {
                    alert("This is the end of the Menu.");
                    $("#btn").prop("disabled", true); 
                }
                $(this).text("Show more...");
            });
        });

    </script>

</head>

<body>


    <ol style = "color:lightSeaGreen">  
        <li>Almond</li>
        <li>Banana</li>
        <li>Blackforest</li>
        <li>Blueberry</li>
    </ol>

    <button type="button" id = "btn" class="lg btn btn-success">Display Menu</button>
</body>
</html>

