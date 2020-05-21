$(document).ready(function(){

        $("#contactForm").submit(function(){

            var  url = "php/correo.php";

            $.ajax({
                type: "POST",
                url:url,
                data:  $("#resultado").serialize(),
                success:function(Data)
                {
                    $("#resultado").html(data);
                }

            });
            return false;
        });


});