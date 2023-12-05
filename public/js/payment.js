
config = {
    defaultDate: "today",   
    minDate: "today",
    "disable": [
        function(date) {
            return (date.getDay() === 0 );

        }
    ],
    "locale": {
        "firstDayOfWeek": 1 
    }
}
  flatpickr("input[type=date]", config);

  function submistForm() {
    var formData = new FormData(document.getElementById('contact_form'))
  }