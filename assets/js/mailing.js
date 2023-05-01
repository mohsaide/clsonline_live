

function submitForm(event) {
    event.preventDefault(); 
    var myForm = document.getElementById("mailing_form");
    var formData = new FormData(myForm); 

    
    for (let i = 0; i < myForm.elements.length; i++) 
    {
      const element = myForm.elements[i];
      if (!element.checkValidity())
       {
       alert( "( " + element.name +" ) " + element.validationMessage)
       return ;
      }
    }


    
      fetch("http://clsonline.org/assets/php/mailing.php", {
        method: "POST",
        body: formData
      })
      .then(response => {
        

        if (response['status']==200)
        {
            var mailing_notification = document.getElementById("mailing_notification");
            mailing_notification.innerHTML = 'Email has been sent!';
            mailing_notification.style.backgroundColor = 'green';
            document.getElementById("to").value ='';
            document.getElementById("subject").value ='';
            document.getElementById("message").value ='';

            setTimeout(function() {
              mailing_notification.style.display ='none';
              return ; 
            }, 5000);

        }
        else if (response['status']==401)
        {
            var mailing_notification = document.getElementById("mailing_notification");
            mailing_notification.innerHTML = 'You are not authorized!';
            mailing_notification.style.backgroundColor = 'Orange';
            document.getElementById("to").value ='';
            document.getElementById("subject").value ='';
            document.getElementById("message").value ='';

            setTimeout(function() {
              mailing_notification.style.display ='none';
              return ; 
            }, 5000);

        }
        else
        {
            var mailing_notification = document.getElementById("mailing_notification");
            mailing_notification.innerHTML = 'Something went wrong!';
            mailing_notification.style.backgroundColor = 'red';
            document.getElementById("to").value ='';
            document.getElementById("subject").value ='';
            document.getElementById("message").value ='';

            setTimeout(function() {
              mailing_notification.style.display ='none';
              return ; 
            }, 5000);

        }



       
      })
      .catch(error => {

        var mailing_notification = document.getElementById("mailing_notification");
        mailing_notification.innerHTML = 'Something went wrong!';
        mailing_notification.style.backgroundColor = 'red';
        console.error('mailing js error');
        document.getElementById("to").value ='';
        document.getElementById("subject").value ='';
        document.getElementById("message").value ='';

        setTimeout(function() {
          mailing_notification.style.display ='none';
          return ; 
        }, 5000);
        
      });


  }