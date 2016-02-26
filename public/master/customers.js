;
$(function () {


    $("#tabla").DataTable();


    $('.btnAdd').on('click', function (event) {
        event.preventDefault();

        var _this = $(this);
        var form = _this.closest('form');
        $.ajax({
            url: URL + 'customers/store',
            type: 'post',
            dataType: 'json',
            data: form.serializeArray()
        })
        .done(function () {
            console.log("success");
        })
        .fail(function () {
            console.log("error");
        });

    });

    $('.btnUpdate').on('click', function (event) {
        event.preventDefault();

        alert("sa")
        var _this = $(this);
        var form = _this.closest('form');
        $.ajax({
            url: URL + 'customers/update',
            type: 'post',
            dataType: 'json',
            data: form.serializeArray()
        })
        .done(function () {
            console.log("success");
        })
        .fail(function () {
            console.log("error");
        });


    });




});

 