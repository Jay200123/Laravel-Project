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

$("#userSubmit").on("click", function(e){
    e.preventDefault();
    var data = $("#uform")[0];
    console.log(data);

    let formData = newFormData(data);

    console.log(formData);
    for (var pair of formData.entries()){
        console.log(pair[0] + ',' + pair[1]);

        var $itablee =
    }

    $.ajax({
        type: "POST",
        url: "/api/signups",
        data:formData,
        contentType: false,
        processData: false,
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        dataType:"json",

        success:function(data){
            console.log(data);
            //message for Successful User Registration
            console.log("customer successfuly recorded");

        },

        error:function(error){
            console.log(error)
        }
    })
});
