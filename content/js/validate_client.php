<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"
        type="text/javascript"></script>
    <!-- <script src="demoValidation.js" type="text/javascript"></script> -->
    <title>Document</title>
    <script>
        $().ready(function () {
            $("#demoForm").validate({
                onfocusout: false,
                onkeyup: false,
                onclick: false,
                rules: {
                    "user": {
                        required: true,
                        maxlength: 15
                    },
                    "password": {
                        required: true,
                        minlength: 8
                    },
                    "password1": {
                        equalTo: "#password",
                        minlength: 8
                    },
                    email: {
                        required: true,
                        email: true
                    }

                }
            });
        });
    </script>
    <style>
        .error {
            color: red;
        }
    </style>
</head>

<body>

</body>

</html>