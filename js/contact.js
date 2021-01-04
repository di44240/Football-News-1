var nje=document.getElementById("foto1Slideshow");
var dy=document.getElementById("foto2Slideshow");
var tre=document.getElementById("foto3Slideshow");
var i="a";
var j="a";


document.getElementsByClassName("left")[0].addEventListener("click",function(event){
    if(i=="d"){
        nje.src="images/slideshow1.jpg";
        dy.src="images/slideshow2.jpg";
        tre.src="images/slideshow3.jpg";
        i="a";
        j="a";
        return;
    }
    else if(i=="c"){
        nje.src="images/slideshow2.jpg";
        dy.src="images/slideshow3.jpg";
        tre.src="images/slideshow4.jpg";
        i="d";
        j="d";
        return;
    }
    else if(i=="b"){
        nje.src="images/slideshow3.jpg";
        dy.src="images/slideshow4.jpg";
        tre.src="images/slideshow1.jpg";
        i="c";
        j="c";
        return;
    }
    else if(i=="a"){
        nje.src="images/slideshow4.jpg";
        dy.src="images/slideshow1.jpg";
        tre.src="images/slideshow2.jpg";
        i="b";
        j="b";
        return;
    }
})
document.getElementsByClassName("right")[0].addEventListener("click",function(event){
    if(j=="b"){
        nje.src="images/slideshow1.jpg";
        dy.src="images/slideshow2.jpg";
        tre.src="images/slideshow3.jpg";
        j="a";
        i="a";
    }
    else if(j=="c"){
        nje.src="images/slideshow4.jpg";
        dy.src="images/slideshow1.jpg";
        tre.src="images/slideshow2.jpg";
        j="b";
        i="b";
    }
    else if(j=="d"){
        nje.src="images/slideshow3.jpg";
        dy.src="images/slideshow4.jpg";
        tre.src="images/slideshow1.jpg";
        j="c";
        i="c";
    }
    else if(j=="a"){
        nje.src="images/slideshow2.jpg";
        dy.src="images/slideshow3.jpg";
        tre.src="images/slideshow4.jpg";
        j="d";
        i="d";
    }
})