
$(function()
{
    function after_form_submitted(data) 
    {
        if(data.result == 'success')
        {
            $('#success_message').show();
            $('#error_message').hide();
        }
        else
        {
            $('#error_message').append('<ul></ul>');

            jQuery.each(data.errors,function(key,val)
            {
                $('#error_message ul').append('<li>'+key+':'+val+'</li>');
            });
            $('#success_message').hide();
            $('#error_message').show();

            //reverse the response on the button
            $('button[type="button"]', $form).each(function()
            {
                $btn = $(this);
                label = $btn.prop('orig_label');
                if(label)
                {
                    $btn.prop('type','submit' ); 
                    $btn.text(label);
                    $btn.prop('orig_label','');
                }
            });
            
        }//else
    }

    function payWithPaystack(payStackAmout) {
        // alert(amount)
        function uuidv4() {
            return "10000000-1000-4000-8000-100000000000".replace(/[018]/g, c =>
              (c ^ crypto.getRandomValues(new Uint8Array(1))[0] & 15 >> c / 4).toString(16)
            );
          }
        var handler = PaystackPop.setup({
          key: 'pk_test_b5f38b1599579d6a8909219f972b462e4b30d235',
          email: document.getElementById('email').value,
          amount: payStackAmout, // the amount value is multiplied by 100 to convert to the lowest currency unit
          currency: 'NGN', // Use GHS for Ghana Cedis or USD for US Dollars
          ref: uuidv4(), // Replace with a reference you generated
          callback: function(response) {
            console.log(response)
            //this happens after the payment is completed successfully
            var reference = response.reference;
            alert('Payment complete! Reference: ' + reference);
            // Make an AJAX call to your server with the reference to verify the transaction
          },
          onClose: function() {
            alert('Transaction was not completed, window closed.');
          },
        });
        handler.openIframe();
      }
      
	$('#contact_form').submit(function(e)
      {
        e.preventDefault();
        
        //alert('form submitted');
         $form = $(this).serializeArray();
         var checkedValues = [];
         var checkedPrice = [];
        var totalPrice = 0;
         // Use :checked selector to get checked checkboxes
         $("input[name='service_types']:checked").each(function () {
            var price = parseFloat($(this).data('price')) || 0;
            checkedPrice.push(price);
            totalPrice += price;
          });
        
          // Log total price to console
          console.log('Total Price:', totalPrice);
          var payStackAmout = totalPrice * 100
          payWithPaystack(payStackAmout);
        // //show some response on the button
        // $('button[type="submit"]', $form).each(function()
        // {
        //     $btn = $(this);
        //     $btn.prop('type','button' ); 
        //     $btn.prop('orig_label',$btn.text());
        //     $btn.text('Sending ...');
        // });
        

        //             $.ajax({
        //         type: "POST",
        //         url: 'handler.php',
        //         data: $form.serialize(),
        //         success: after_form_submitted,
        //         dataType: 'json' 
        //     });        
        
      });	
});