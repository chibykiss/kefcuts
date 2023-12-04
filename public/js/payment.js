
config = {
    defaultDate: "today",
    onChange: function(selectedDates, dateStr, instance) {
      var defaultDate = selectedDates[0].getDay();
      var opt_830AM = document.getElementById('opt_830');
      var opt_930PM = document.getElementById('opt_930');
      var opt_10PM = document.getElementById('opt_10');
      var opt_9pm = document.getElementById('opt_9');
      var opt_830PM = document.getElementById ('opt_830PM') 
    
      if (defaultDate >= 1 && defaultDate < 5) {
        opt_10PM.style.display = 'none';
        opt_930PM.style.display = 'none';
        opt_830AM.style.display = 'none';
        opt_830PM.style.display = 'none'
        opt_9pm.style.display = 'none'
      }else{
        opt_10PM.style.display = 'block';
        opt_930PM.style.display = 'block';
        opt_830AM.style.display = 'block';
        opt_830PM.style.display = 'block'
        opt_9pm.style.display = 'block'
      }
    },    
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