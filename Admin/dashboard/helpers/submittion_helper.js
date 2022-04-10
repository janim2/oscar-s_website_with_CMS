function BtnLoading(elem) {
   $(elem).attr("data-original-text", $(elem).html());
   $(elem).prop("disabled", true);
   $(elem).html('<i class="spinner-border spinner-border-sm"></i> Loading...');
}

function BtnReset(elem) {
   $(elem).prop("disabled", false);
   $(elem).html($(elem).attr("data-original-text"));
}


function submitFormQuery(context, url, loading_elem, success_message, isLogin = false){
    $.ajax({
        url: url,
        method: "POST",
        data: new FormData(context),
        // dataType: "json",
        contentType: false,
        cache: false,
        processData: false,
        beforeSend: function(){
            BtnLoading(loading_elem);
        },
        success: function (data) {
            BtnReset(loading_elem);
            if (data == 1) {
                if(isLogin){
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: success_message,
                        showConfirmButton: false,
                        timer: 1500,
                        }).then((result) => {
                            location.href = 'index.php';
                        });
                }
                else{
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: success_message,
                        showConfirmButton: false,
                        timer: 1500,
                      }).then((result) => {
                        location.reload();
                    });
                }
                // alert(data);
                
            } else {
                // alert(data);
                Swal.fire({
                  position: 'top-end',
                  icon: 'error',
                  title: data,
                  showConfirmButton: false,
                  timer: 1500,
                });
            }
            }
      });
}

function submitQuery(url, loading_elem, success_message, isLogOut = false){
    $.ajax({
        url: url,
        method: "POST",
        beforeSend: function(){
            BtnLoading(loading_elem);
        },
        success: function (data) {
            BtnReset(loading_elem);
            if (data == 1) {
                // alert(data);
                // alert(isLogOut);
                if(isLogOut){
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: success_message,
                        showConfirmButton: false,
                        timer: 1500,
                      }).then((result) => {
                          location.href = 'login.php';
                        })
                }else{
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: success_message,
                        showConfirmButton: false,
                        timer: 1500,
                      });
                }
                
            } else {
                // alert(data);
                Swal.fire({
                  position: 'top-end',
                  icon: 'error',
                  title: data,
                  showConfirmButton: false,
                  timer: 1500,
                });
            }
            }
      });
}