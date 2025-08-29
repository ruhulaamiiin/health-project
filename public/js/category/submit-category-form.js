$(document).on("submit", "#categoryForm", function (e) {
    e.preventDefault(); // Prevent the default form submission
    $.ajax({
        url: $(this).attr("action"), // Get the form action URL
        type: "POST",
        data: $(this).serialize(), // Serialize the form data
        success: function (response) {
            $(".error").text(""); // Clear any previous error messages
            if (response.status == "success") {
                [
                    "#paginationHeader",
                    ".search-filter",
                    "#categoryTable",
                    "#paginationLink",
                ].forEach((selector) => {
                    $(selector).load(location.href + " " + selector);
                });
                Modal.hide("#categoryModal"); // Hide the modal
                toastr.success("Success", response.message);
            }
        },
        error: function (xhr, status, error) {
            $(".error").text(""); // Clear any previous error messages
            if (xhr.status === 422) {
                let errorMsg = xhr.responseJSON.errors;
                console.log(errorMsg);
                if (errorMsg.hasOwnProperty("name")) {
                    $(".error-name").text(errorMsg.name[0]);
                }
                if (errorMsg.hasOwnProperty("slug")) {
                    $(".error-slug").text(errorMsg.slug[0]);
                }
            } else {
                alert("Internal server error");
            }
        },
    });
});

