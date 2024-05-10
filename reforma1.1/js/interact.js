function myFunction(){
   
    var y = document.getElementById("id=myTopnav");
    if(y.className === "id=myTopnav"){
        y.className += "responsive";
    }else{
        y.className = "menu";
    }
}