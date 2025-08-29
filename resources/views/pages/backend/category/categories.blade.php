@extends('layouts.backend.app')

@section('title', 'Nijershastho | Categories')

@section('content')
    <div class="p-6">
        <!-- Header with title + create button -->
        <div class="flex items-center justify-between mb-4">
            <h2 class="text-xl font-semibold text-gray-800">Categories</h2>
            <button id="openCategoryModal" data-target="#"
                class="create-category px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-lg shadow hover:bg-blue-700">
                + Create Category
            </button>
        </div>

        <!-- Category Table -->
        <div id="categoryTableWrapper">
            @include('pages.backend.category.includes.table')
        </div>
    </div>

    @include('pages.backend.category.includes.modal')
@endsection

@push('scripts')
    <script src="/js/category/open-modal.js" type="module"></script>
    <script src="/js/category/submit-category-form.js" type="module"></script>
    <script type="">
        $(document).ready(function() {
            //open modal for add category
            $(document).on("click", ".create-category", function(e) {
                e.preventDefault();
                const modalTitle = "Create new category";
                const btnText = "Create Category";
                const url = "/categories/create-category";
                $("#parent_id").html("");
                $("#parent_id").append('<option value="">None</option>');

                $.ajax({
                    url: "/categories/get-parent-categories",
                    type: "GET",
                    dataType: "json",
                    success: function(response) {
                        if (
                            Array.isArray(response.parentCategories) &&
                            response.parentCategories.length > 0
                        ) {
                            $.each(response.parentCategories, function(index, ctg) {
                                var option_item = $("<option></option>", {
                                    value: ctg.id,
                                    text: ctg.name,
                                });
                                $("#parent_id").append(option_item);
                            });
                        } else {
                            //
                        }
                    },
                    error: function(xhr, status, error) {
                        alert("Something is wrong");
                    },
                });

                $(".modal-title").text(modalTitle);
                $("#categoryFormSubmitButtonTitle").text(btnText);
                $("#categoryForm").attr("action", url);
                Modal.show("#categoryModal");
            });
        })
    </script>
@endpush
