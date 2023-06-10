$(function() {
    document.addEventListener("scroll", () => {
        let scrollTop = $(".navbar").offset().top;
        let authOpacity0 = [
            scrollTop <= 300
        ];
        if(authOpacity0.filter(e => e).length >= 1)
            navbarOpcity0();
        else
            navbarOpcity1();
    })
})
function navbarOpcity0() {
    $(".navbar").removeClass("navbar-opacity1-wh")
    $(".navbar").addClass("navbar-opacity0-wh");
}
function navbarOpcity1() {
    $(".navbar").removeClass("navbar-opacity0-wh")
    $(".navbar").addClass("navbar-opacity1-wh");
}


