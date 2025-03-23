<html>

<head>
    
    <meta charset="utf-8">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

    <script>

        $().ready(function () { 

            $("#ValidateForm").validate({

                rules: {
                    firstname: "required",
                    lastname: "required",
                    
                    username: {
                        required: true,
                        minlength: 5
                    },
                    
                    password: {
                        required: true,
                        minlength: 8
                    },
                    
                    confirm_password: {
                        required: true,
                        minlength: 8,
                        equalTo: "#password"
                    },
                    
                    email: {
                        required: true,
                        email: true
                    },
                    
                    agree: "required"
                },
            
                messages: {
                    
                    firstname: "<b class='error-message'>Field required</b>",
                    lastname: " <b class='error-message'>Field required</b>",
                    username: {

                        required: " <b class='error-message'>Field required</b>",
                        minlength: "<b>Your username consist of at least 5 characters</b>"
                    },
                    
                    password: {
                        
                        required: "<b>Field required</b>",
                        minlength: "<b>Password is too short!! Your password must be consist of at least 8 characters</b>"
                    },
                    
                    confirm_password: {
                        
                        required: "<b>Field required</b>",
                        minlength: "<b>Your password must be consist of at least 8 characters</b>",
                        equalTo: "<b>Please enter the same password as above</b>"
                    },
                    
                    agree: "Please accept our policy"
                }
            });

            $("h2.new").on({
                mouseenter: function() {
                    $(this).css("background-color", "lightblue");
                },
                    
                mouseleave: function() {
                    $(this).css("background-color", "teal");
                },

                click:function() {
                    $(this).css("background-color", "skyblue");
                }
            });


            $("button").click(function() {
                $("p").toggle(500);
            });
        });

    </script>
</head>

<body>
    <style>

        .error-message {
            color: red;
            padding-left: 10px;
        }

        div.container{

            display: flex;
            justify-content: center;
        }

        form{
            
            padding: 50px;
            border-radius: 10px;
            
        }

    </style>
    

    <form  class="cmxform" id="ValidateForm" method="get" action="#" autocomplete="off">
        <fieldset>

            <h2 class = "new" style = "color:lightSeaGreen">Form Validation 85541634</h2>
            <h1 style = "color:teal">Customer Registration.</h1>

            <p>
            <br></br>
                <label for="firstname">Firstname</label>
                <input id="firstname" name="firstname" type="text"></input>
            </p>

            <p>
                <label for="lastname">Lastname</label>
                <input id="lastname" name="lastname" type="text"></input>
            </p>

            <p>
                <label for="username">Username</label>
                <input id="username" name="username" type="text"></input>
            </p>

            <p>
                <label for="password">Password</label>
                <input id="password" name="password" type="password"></input>
            </p>

            <p>
                <label for="confirm_password">Confirm password</label>
                <input id="confirm_password" name="confirm_password" type="password"></input>
            </p>

            <p><label for="email">Email</label><input id="email" name="email" type="email"></input></p>
            <p><label for="agree">Please agree to our policy</label>

            <input id="agree" name="agree" type="checkbox"></input></p>
            <p><input  class="lg btn btn-primary" type="submit" value="Submit"></p>

            <button type="button" id = "btn" class="lg btn btn-success">Hide Form</button>

        </fieldset>

    </form>

</body>

</html>