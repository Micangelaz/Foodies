$(document).ready(function () {
    $("#search__text").keyup(function tableSearchName() {
        _this = this;
        $.each($("#myTable tbody tr"), function () {
            if ($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1)
                $(this).hide();
            else
                $(this).show();
        });

    });
});

$(document).ready(function () {
    $("#search__category").keyup(function tableSearchCategory () {
        _this = this;
        $.each($("#myTable tbody tr"), function () {
            if ($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1)
                $(this).hide();
            else
                $(this).show();
                tableSearchName();
        });
    });
});