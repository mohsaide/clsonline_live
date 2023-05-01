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
                      setTimeout(function() {
              
              mailing_notification.innerHTML = '';
              mailing_notification.style.backgroundColor = 'white';
              for (let i = 0; i < myForm.elements.length; i++) 
                  {
                    myForm.elements[i].value ='';
                  }
                  
              return ; 
          }, 5000);
          return;
          // var mailing_notification = document.getElementById("mailing_notification");
          // mailing_notification.innerHTML = 'Email has been sent!';
          // mailing_notification.style.backgroundColor = 'green';
          //  for (let i = 0; i < myForm.elements.length; i++) 
          //     {
          //       element.value = '';
          //     }


          // setTimeout(function() {
          //   var mailing_notification = document.getElementById("mailing_notification");
          //   mailing_notification.style.display ='none';
          //   return ; 
          // }, 5000);

      }
      else
      {
          var mailing_notification = document.getElementById("mailing_notification");
          mailing_notification.innerHTML = 'Something went wrong!';
          mailing_notification.style.backgroundColor = 'red';
          setTimeout(function() {
              
              mailing_notification.innerHTML = '';
              mailing_notification.style.backgroundColor = 'white';
              for (let i = 0; i < myForm.elements.length; i++) 
                  {
                    myForm.elements[i].value ='';
                  }
              return ; 
          }, 5000);
          return;

      }



     
    })
    .catch(error => {
       
       console.log(error);
         var mailing_notification = document.getElementById("mailing_notification");
          mailing_notification.innerHTML = 'Something went wrong!';
          mailing_notification.style.backgroundColor = 'red';
          setTimeout(function() {
              
              mailing_notification.innerHTML = '';
              mailing_notification.style.backgroundColor = 'white';
              for (let i = 0; i < myForm.elements.length; i++) 
                  {
                    myForm.elements[i].value ='';
                  }
              return ; 
          }, 5000);
          return;


      
    });


}