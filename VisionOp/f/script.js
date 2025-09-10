document.addEventListener("DOMContentLoaded", function() {
    var today = new Date();
    var maxDate = new Date();
    maxDate.setFullYear(today.getFullYear() + 1); 
  
    var dateInput = document.getElementById("dia_atencion");
    dateInput.min = formatDate(today);
    dateInput.max = formatDate(maxDate);
    function formatDate(date) {
      var year = date.getFullYear();
      var month = String(date.getMonth() + 1).padStart(2, "0");
      var day = String(date.getDate()).padStart(2, "0");
      return year + "-" + month + "-" + day;
    }
  });
document.addEventListener("DOMContentLoaded", function() {
  var cantidadSelect = document.getElementById("cantidad");
  var montoElement = document.getElementById("monto");
  var cantidadPElement = document.getElementById("cantidadP");

  cantidadSelect.addEventListener("change", function() {

    var selectedCantidad = parseInt(cantidadSelect.value);

    var unidadPrice = 30350;
    var totalAmount = unidadPrice * selectedCantidad;

    montoElement.textContent = "$" + totalAmount.toLocaleString() + "+IVA";

    cantidadPElement.textContent = selectedCantidad + " Producto(s)";
  });
});

const figures = document.querySelectorAll('.promocionesHome figure');