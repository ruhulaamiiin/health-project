export default function initModal() {
    // modal trigger show
    $(document).on("click", ".modal-trigger", function (e) {
        e.preventDefault();
        let targetModal = $(this).data("target");
        showModal(targetModal);
    });

    // show modal
    function showModal(targetModal) {
        $(targetModal).removeClass("hidden");
        $(targetModal).addClass("flex");
        setTimeout(() => {
            $(targetModal).addClass("opacity-100");
        }, 10);
    }

    // modal trigger close
    $(document).on("click", ".close-modal", function (e) {
        e.preventDefault();
        let targetModal = $(this).data("target");
        hideModal(targetModal);
    });

    // modal close
    function hideModal(targetModal) {
        $(targetModal).removeClass("opacity-100");
        setTimeout(() => {
            $(targetModal).removeClass("flex");
            $(targetModal).addClass("hidden");
        }, 301);
        $(targetModal).trigger("modal:hidden");
    }

    // close modal on outside click if backdrop is true
    $(document).on("click", ".modal-body", function (e) {
        let backdrop = $(this).data("backdrop");
        let targetModal = $(this).data("target");

        if (backdrop === false || backdrop === "false") {
            let modalContent = $(this).find(".modal-content").first();
            modalContent.addClass("scale-98");
            setTimeout(() => {
                modalContent.removeClass("scale-98");
            }, 151); // 150ms is the duration of the transition in the CSS
        } else {
            hideModal(targetModal);
        }
    });

    // prevent closing modal on inside click
    $(document).on("click", ".modal-content", function (e) {
        e.stopPropagation();
    });

    // jQuery plugin to mimic Bootstrap modal
    $.fn.modal = function (action) {
        return this.each(function () {
            const $modal = $(this);

            if (action === "show") {
                $modal.removeClass("hidden").addClass("flex");
                setTimeout(() => $modal.addClass("opacity-100"), 10);
            }

            if (action === "hide") {
                $modal.removeClass("opacity-100");
                setTimeout(() => {
                    $modal.removeClass("flex").addClass("hidden");
                    $modal.trigger("modal:hidden"); // optional event
                }, 301);
            }
        });
    };
    window.modal = {
        show(target) {
            $(target).modal("show");
        },
        hide(target) {
            $(target).modal("hide");
        },
    };
}
