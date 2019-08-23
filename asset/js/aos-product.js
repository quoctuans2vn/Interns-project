//For custom animated on scroll 
function setAOS(){
    $("body").attr({
        "data-aos-easing": "ease",
        "data-aos-duration": 400,
        "data-aos-delay" : 150,
    });
    $(".product").addClass("aos-init aos-animate");
    $(".product").attr("data-aos","zoom-in");
}
$(document).ready(function(){
    setAOS();
    AOS.init();
});