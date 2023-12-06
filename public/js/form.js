
$(function()
{

	$('#contact_form').submit(function(e)
      {
        e.preventDefault();
        
        var totalPrice = 0;
        
        // Use :checked selector to get checked checkboxes
        $("input[name='service_types']:checked").each(function () {
          var price = parseFloat($(this).data('price')) || 0;
          totalPrice += price;
        });
        
        $form = $(this).serializeArray()

        var dataObject = arrayToObject($form);

        
        checkTimeAvailable(dataObject.date,dataObject.selecttime,totalPrice,dataObject)
        
      });	

      function checkTimeAvailable(date,time,totalPrice,dataObject)
      {
        $.ajax({
          url: '/check_time',
          dataType: "json",
          type: "Post",
          async: true,
          data: {
            date: date,
            time: time
          },
          success: function (data) {
              console.log(data)
              if(!data){
                return payWithPaystack(totalPrice,dataObject);
              }
              notify("Already Booked","time has been booked","warning")
          },
          error: function (xhr, exception, err) {
            console.log(err);
          }
      }); 
      }

      function payWithPaystack(payStackAmout,form) {
        var handler = PaystackPop.setup({
          key: 'pk_test_e4230c9fdc8e9b4cbffbefc6a572b3583b9c06c6',
          email: document.getElementById('email').value,
          amount: payStackAmout * 100, // the amount value is multiplied by 100 to convert to the lowest currency unit
          currency: 'NGN', // Use GHS for Ghana Cedis or USD for US Dollars
          ref: uuidv4(), // Replace with a reference you generated
          callback: function(response) {
            var newdata = {
              reference: response.trxref, 
              status: response.status, 
              gateway_message: response.message, 
              payload:response , 
              ...form
            }
            //return console.log(newdata)
            submitBooking(newdata)
          },
          onClose: function() {
            alert('Transaction was not completed, window closed.');
          },
        });
        handler.openIframe();
      }

      function submitBooking(payload)
      {
        $.ajax({
          url: '/book',
          dataType: "json",
          type: "Post",
          async: true,
          data: payload,
          success: function (data) {
             console.log(data);
            return notify("Session booked","you have booked a session sucessfully","success")
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
      }

      function arrayToObject(array) {
        var result = {};
        $.each(array, function(index, item) {
            var key = item.name;
            var value = item.value;
    
            // If the key already exists in the result and it's not an array, convert it to an array
            if (result.hasOwnProperty(key) && !Array.isArray(result[key])) {
                result[key] = [result[key]];
            }
    
            // If the key already exists and it's an array, push the value to the array
            if (result.hasOwnProperty(key) && Array.isArray(result[key])) {
                result[key].push(value);
            } else {
                // Otherwise, set the value directly
                result[key] = value;
            }
        });
        return result;
      }



      function notify(title,text,icon)
      {
           Swal.fire({
              title: title,
              text: text,
              icon: icon,
              // showCancelButton: true,
              confirmButtonColor: "#3085d6",
              cancelButtonColor: "#d33",
              confirmButtonText: "Ok"
            }).then((result) => {
              if (result.isConfirmed) {
                window.location.reload();
              }
            });
      }

      function uuidv4() {
        return "10000000-1000-4000-8000-100000000000".replace(/[018]/g, c =>
          (c ^ crypto.getRandomValues(new Uint8Array(1))[0] & 15 >> c / 4).toString(16)
        );
      }

});