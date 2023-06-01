let slider = document.querySelector(".slider");
let currentSlide = 0;
let totalSlide = slider.querySelectorAll(".wrapper .left > div").length - 1;

slider.querySelector(".ctrl .up").addEventListener("click",function(){
    if(currentSlide == 0){
        return;
    }
    currentSlide--;
    slider.querySelector(".wrapper .left div").style.marginTop = `${currentSlide*-100}vh`;
    slider.querySelector(".wrapper .right div").style.marginTop = `${(totalSlide-currentSlide)*-100}vh`;
});
slider.querySelector(".ctrl .down").addEventListener("click",function(){
    if(currentSlide == totalSlide){
        return;
    }
    currentSlide++;
    slider.querySelector(".wrapper .left div").style.marginTop = `${currentSlide*-100}vh`;
    slider.querySelector(".wrapper .right div").style.marginTop = `${(totalSlide-currentSlide)*-100}vh`;
});