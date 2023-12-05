$.ajaxSetup({
  headers: {
      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
  }
});
config = {
    defaultDate: "today",
    onChange: function(selectedDates, dateStr, instance) {
        //console.log(dateStr);
        $.ajax({
          url: '/appointment',
          //dataType: "json",
          type: "Post",
          async: true,
          data: {
              'date' : dateStr
           },
          success: function (data) {
             //console.log(data);
             $('#time-container').html(data);
          },
          error: function (xhr, exception, err) {
            console.log(err);
              //var msg = "";
              // if (xhr.status === 0) {
              //     msg = "Not connect.\n Verify Network." + xhr.responseText;
              // } else if (xhr.status == 404) {
              //     msg = "Requested page not found. [404]" + xhr.responseText;
              // } else if (xhr.status == 500) {
              //     msg = "Internal Server Error [500]." +  xhr.responseText;
              // } else if (exception === "parsererror") {
              //     msg = "Requested JSON parse failed.";
              // } else if (exception === "timeout") {
              //     msg = "Time out error." + xhr.responseText;
              // } else if (exception === "abort") {
              //     msg = "Ajax request aborted.";
              // } else {
              //     msg = "Error:" + xhr.status + " " + xhr.responseText;
              // }
             
          }
      }); 
  
    },    
    minDate: "today",
    // "disable": [
    //     function(date) {
    //         return (date.getDay() === 0 );

    //     }
    // ],
    "locale": {
        "firstDayOfWeek": 1 
    }
}
  flatpickr("input[type=date]", config);

  function submistForm() {
    var formData = new FormData(document.getElementById('contact_form'))
  }