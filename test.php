<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>firebase by seegatesite.com</title>
</head>

<body>
    
                <input class="input" id="txtName" type="text" placeholder="Name" value="<?php echo date('ymdhis');?>">
                <button id="btnSave" class="button is-success">Insert</button>
        
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="https://www.gstatic.com/firebasejs/4.10.0/firebase.js"></script>
    <script>
        var config = {
            apiKey: "AIzaSyCRrVTG3idQwSXhUeEFNQWVcqQNHhUdZ7c",
            authDomain: "midstream-81600.firebaseapp.com",
            databaseURL: "https://midstream-81600.firebaseio.com",
            projectId: "midstream-81600",
            storageBucket: "",
            messagingSenderId: "448740852542",
            appId: "1:448740852542:web:af0f19b906eb31b1"
        };
        firebase.initializeApp(config);
        var database = firebase.database();


        function new_data(name, key) {
            database.ref('driver/' + key).set({
                current_weight: name
            });
        }
        $("#btnSave").click(function() {
        	driver_id=$("#txtName").val();
            database.ref('users').once("value").then(function(snapshot)
                {
                    nextkey = $("#txtName").val();
                    new_data(driver_id, nextkey);
                });
        });
    </script>
</body>

</html>