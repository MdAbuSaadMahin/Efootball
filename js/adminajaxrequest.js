

function checkAdminLogin() {

    var adminLogEmail = $('#exampleInputEmail1').val();
    var adminLogPassword = $('#exampleInputPassword1').val();
    $.ajax({
        url:"Admin/admin.php",
        method: "POST",
        data: {
            checkLogmail : "checkLogmail",
            adminLogEmail : 'adminLogEmail',
            adminLogPassword:"adminLogPassword"

        },

        success:function(data){
            if(data==0){
                $('statusAdminLogMsg').html(
                    '<small class ="alert alert-danger">Invalid Email or Password !</small>'
                );
            } else if(data==1){
                $('statusAdminLogMsg').html(
                    '<small class ="alert alert-success"> Successful </small>'
                );

                setTimeout() => {
                    window.location.href ="index.php";


                }



            }
        }





    }



    )

}