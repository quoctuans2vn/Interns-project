$(document).ready(function(){
    //Set modal
    $("#userBtn").click(function(){
        $("#userModal").modal(
            {backdrop: "false"},
        );
    });
    $("#modalRightBtn").click(function(){
        $("#modalRight").modal(
            {backdrop: "false"},
        );
    });
})