//jquery core
import $ from "./plugins/jquery";

// sweetalert2
import Swal from "sweetalert2";
window.Swal = Swal;

// toastr
import initToastr from "./plugins/toastr";
initToastr();

//import plugin for tailwind-jquery-modal
import initModal from "./plugins/modal";
initModal($);
