function countDown(){
    //Set the date we're counting down to
    var countDownDate = new Date("August 30, 2019 12:00:00").getTime();
    //Update the count down every 1 secs
    var count = setInterval(function(){
        //Get today's date and time
        var now = new Date().getTime();
        // Find the distance between now and the count down date
        var distance = countDownDate - now;
        var days = 0;
        var hours = 0;
        var minutes = 0;
        var seconds = 0;
        if (distance > 0){
            // Time calculations for days, hours, minutes and seconds
            days = Math.floor(distance / (1000 * 60 * 60 * 24));
            hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            seconds = Math.floor((distance % (1000 * 60)) / 1000);
        }
        else{
            clearInterval(count);
        }
        // Display the result
        $("#days").text(days);
        $("#hours").text(hours);
        $("#minutes").text(minutes);
        $("#seconds").text(seconds);
    },1000);
}


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
    //Set count down
    countDown();
})

