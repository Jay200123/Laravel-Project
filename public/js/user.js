// for user profile function
$.ajax({

    type: "GET",
    url: "/api/profile",
    dataType: "json",

    success: function(data){

        $.each(data, function (key, value){

            id = value.customer_id;

            var div = $("<div>");

            div.append($("<h3>").html(value.customer_id));
            div.append($("<h3>").html(value.fname));
            div.append($("<h3>").html(value.lname));
            div.append($("<h3>").html(value.address));
            div.append($("<h3>").html(value.phone));
            div.append($("<h3>").html(value.town));
            div.append($("<h3>").html(value.city));

            $("#pbody").append(div);
        });
    },

    error: function(){

        console.log("Ajax Load Not Work Error");
        alert("error");
    }

});
