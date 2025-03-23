<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<style>


.accordion {
    background-color: #eee;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 50%;
    border: solid teal;
    text-align: center;
    outline: none;
    font-size: 15px;
    transition: 0.9s;
    margin-left: 470px;
}

h2 {
    text-align: center;

}
.active, .accordion:hover {
    background-color: teal; 
}

.panel {
    padding: 0 18px;
    display: none;
    background-color: white;
    overflow: hidden;
}

.para {
    text-align: center ;
    background-color: lightcyan;
}
</style>

</head>
    <body>
    <br>

    <h2 style = "color:LightSeaGreen">Bakin'Codes 47827539</h2>

    <br>

    <button class="accordion" style = "color:skyblue" >Products</button>
    <div class="panel">

    <p>
        <li class = "para">Biscuits</li>
        <li p class = "para">Cakes</li>
        <li p class = "para">Cookies</li>
        <li p class = "para">Puddings</li>
        <li p class = "para">Custards</li>
        <li p class = "para">Pastries</li>
        <li p class = "para">Macaroons</li>
        <li p class = "para">Tarts</li>
        <li p class = "para">Pies</li>
        <li p class = "para">Ice-cream</li>
    </p>
    </div>

    <button class="accordion" style = "color:skyblue" >Opening Hours</button>
    <div class="panel">

    <p>
        
        <li p class = "para">Monday:      08:30-17:30</li>
        <li p class = "para">Tuesday:     08:30-17:30</li>
        <li p class = "para">Wednesday:   08:30-17:30</li>
        <li p class = "para">Thursday:    08:30-17:30</li>
        <li p class = "para">Friday:      08:30-18:30</li>
        <li p class = "para">Saturday:    08:30-12:30</li>
        <li p class = "para">Sunday:      10:30-14:30</li>

    </p>
    </div>

    <button class="accordion" style = "color:skyblue" >About Us</button>
    <div class="panel">

        <br></br>
    
        <p class = "para">
        <b>If you are looking for something sweet and tempting, <br>you might want to try some of our desserts.</b>
            <br></br>
        
        Here you get a cake for every occasion. 
        We offer exceptional taste at exceptional prices. We just cake!Ready Steady Bake! Unique confections for unique occasions.A special cake for a special event.
            <br></br>
        Everything started with taking up little gathering requests. With the progression of time, we moved to counters in markets and now have 50 outlets in the city of LA.
            <br></br>
        Bakin'Codes develops with each passing day and connecting with individuals and adding to mind-blowing festivals.
        </p>

    </div>


        <script src="jquery-3.7.1.slim.js"></script>
        
        <script>
            var acc = document.getElementsByClassName("accordion");
            var i;

            for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
            panel.style.display = "none";
            } else {
            panel.style.display = "block";
        }
    });
}
        </script>

        <br></br>
        <br></br>


    </body>
</html>