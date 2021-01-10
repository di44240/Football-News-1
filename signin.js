function fullNameValidation(){
    var inputi=document.getElementById("inputUsername");
    var inputi2=document.getElementById("inputPassword")

    for(var i=0;i<inputi.value.length;i++){
        if(inputi.value[i]>=0 && inputi.value[i]<=9){
            inputi.style.border="3px solid red";
            document.getElementById("invalidUsername").style.visibility="visible";
            return false;
        }
        else{
            document.getElementById("invalidUsername").style.visibility="hidden";
            inputi.style.border="0";
        }
    }
    for(var i=0;i<inputi2.value.length;i++){
        if(inputi2.value[i]<=9 || inputi2.value[i]>=0){
            inputi2.style.border="3px solid red";
            document.getElementById("invalidPassword").style.visibility="visible";
            return false;
        }
        else{
            document.getElementById("invalidPassword").style.visibility="hidden";
            inputi2.style.border="0";
        }
    }

    if(inputi.value.trim()==""){
        inputi.style.border="3px solid red";
        document.getElementById("invalidUsername").style.visibility="visible";
        return false;
    }
    else if(inputi.value.length<2){
        inputi.style.border="3px solid red";
        document.getElementById("invalidUsername").style.visibility="visible";
        return false;
    }
    else if(inputi.value.trim()==""){
        inputi2.style.border="3px solid red";
        document.getElementById("invalidPassword").style.visibility="visible";
        return false;
    }
    else if(inputi2.value.length<2){
        inputi2.style.border="3px solid red";
        document.getElementById("invalidPassword").style.visibility="visible";
        return false;
    }
    else{
        alert("Success!");
        return true;
    }
}