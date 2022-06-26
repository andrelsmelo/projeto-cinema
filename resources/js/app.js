var dateElementExists = document.getElementsByName("input-date");

if (!dateElementExists) {
    var todayDate = new Date();
    var mainPageMinSettedDate = new Date().toISOString().split('T')[0];
    var maxDate = new Date(todayDate.getTime() + 10 * 24 * 60 * 60 * 1000);
    var mainPageMaxSettedDate = maxDate.toISOString().split('T')[0];
    todayDate.setDate(todayDate.getDate() - 5);
    var mainPageMinSettedDate = todayDate.toISOString().split('T')[0]

    document.getElementsByName("input-date")[0].setAttribute('min', mainPageMinSettedDate);
    document.getElementsByName("input-date")[0].setAttribute('max', mainPageMaxSettedDate);
}

$(document).ready(function () {
    $("#input-text").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#myGrid div a").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});

$(document).ready(function () {
    $("#input-date").on("change", function () {
        var value = $(this).val();
        $("#myTable tbody tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});

$(document).ready(function () {
    $("#input-text").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#myTable tbody tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});

$(document).ready(function () {
    var value = $("#input-date").val();
    $("#myTable tbody tr").filter(function () {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
})

$(document).ready(function() {
    $("#filtro li").on("click", function() {
        var value = $(this).attr("value");
        $("#myGrid div a").filter(function() {
            $(this).toggle($(this).text().indexOf(value) > -1)
        });
    });
});
