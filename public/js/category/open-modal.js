$(document).on("click", ".create-category", function (e) {
    e.preventDefault();
    $("#categoryModal .modal-title").text("Create new category");
    $('.btn-title').text('Create Category');
    $("#categoryForm").attr("action", "/categories/create-category");
    modal.show("#categoryModal");
});
