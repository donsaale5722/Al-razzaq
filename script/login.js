

function login_data(a)
{
  // var email_id = document.getElementById("email");

   // first method

   var formdata=new FormData($('#login_form')[0]);

   $.ajax({
              url: "post.php",
              data: formdata,
              type: 'POST',
              processData: false,
              contentType: false,
              success: function (data) {
                data = JSON.parse(data);
                if(data.status == 'success'){
                  const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                      toast.addEventListener('mouseenter', Swal.stopTimer)
                      toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                  });

                  Toast.fire({
                    icon: 'success',
                    title: 'Logged in successfully'
                  });

                  window.location = "index.php";
                  return true;

                }
                else{
                  
                  alert(data.msg);
                  return false;
                }
              }
        });
}


// signup ajax code form

function signup_data(a)
{
  // var email_id = document.getElementById("email");

   // first method

   var formdata=new FormData($('#signup_form')[0]);
        // var email_id = $('#test').val();
        // var password = $('#test1').val();
        // var repeat_password = $('#test2').val();
   $.ajax({
              url: "signup.php",
              data: formdata,
              type: 'POST',
              dataType: 'html',
              success: function (data) {
                // console.log(data);
                data = JSON.parse(data);
                // alert(data.status);
                if(1 == 1){

                  const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                      toast.addEventListener('mouseenter', Swal.stopTimer)
                      toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                  });

                  Toast.fire({
                    icon: 'success',
                    title: 'Signed in successfully'
                  });

                  window.location = "index.php";
                  return true;

                }
                else{
                  
                  alert('email are already exist');
                  return false;
                }
              }
        });
}
    //   function loggedIn(event){
    //     event.preventDefault();
    //   let myform = document.getElementById("login_form");
    //   let formData = new FormData(myform);
    //     alert(JSON.stringify(FormData));
    //   $.ajax({
    //           url: "post.php",
    //           data: formData,
    //           type: 'POST',
    //           processData: false,
    //           contentType: false,
    //           success: function (data) {
    //             console.log(data);
    //             if(data.status == 'success'){
    //               const Toast = Swal.mixin({
    //                 toast: true,
    //                 position: 'top-end',
    //                 showConfirmButton: false,
    //                 timer: 3000,
    //                 timerProgressBar: true,
    //                 didOpen: (toast) => {
    //                   toast.addEventListener('mouseenter', Swal.stopTimer)
    //                   toast.addEventListener('mouseleave', Swal.resumeTimer)
    //                 }
    //               });

    //               Toast.fire({
    //                 icon: 'success',
    //                 title: 'Signed in successfully'
    //               });

    //               window.location = "index.php";
    //               return true;

    //             }
    //             else{
                  
    //               alert(data.msg);
    //               return false;
    //             }
    //           }
    //     });
    // }
    