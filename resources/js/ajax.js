$(document).ready(function(){

    showAllUsers();

    function showAllUser(){
        $.ajax({
            url:"/resources/php/action.php",
            typr:"POST",
            data: {action:"view"},
            success:function(response){
                $("#showUser").html(response);
                $("table").DataTable({
                    order:[0, 'desc']
                });
            }
        });
    }
    // insert account
    $("#insert_account").click(function(e){
        if($("#from-data")[0].checkValidity()){
            e.preventDefault();
            $.ajax({
                url:"/resources/class/action.php",
                tpye: "POST",
                data: $("form-data").serialize()+"&action=insert_account",
                success:function(response){
                    Swal.fire({
                        title: 'Successfully created an account!',
                        type: 'success',
                        icon: 'success'
                    })
                }
            })
        }
    })

})