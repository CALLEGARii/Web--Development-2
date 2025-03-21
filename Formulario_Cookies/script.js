$(document).ready(function () {

    $("input, select").each(function () {
        $(this).addClass("invalid"); 
    });
    $("input, select").on("input", function () {
        let field = $(this);
        let fieldName = field.attr("id");
        let fieldValue = field.val();

        $.post("index.php", { name: fieldName, value: fieldValue }, function (response) {
            console.log(response);
        });
        validateField(field);
    });
    function validateField(field) {
        if (field.val().trim() === "") {
            field.removeClass("valid").addClass("invalid");
        } else {
            field.removeClass("invalid").addClass("valid");
        }
    }
});
