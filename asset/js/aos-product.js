//For custom animated on scroll 
function setAOS(){
    $("body").attr({
        "data-aos-easing": "ease",
        "data-aos-duration": 400,
        "data-aos-delay" : 150,
    });
    $(".product, .post").addClass("aos-init aos-animate");
    $(".product, .post").attr("data-aos","zoom-in");
}
$(document).ready(function(){
    setAOS();
    AOS.init();
});