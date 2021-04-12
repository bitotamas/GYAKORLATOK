window.addEventListener('load',()=>{
    document.getElementById('foszereplo').addEventListener('click',kep);
})
let kepp=false;
function kep(){
    if(kepp==false){
        document.getElementById('kephelye').src="hBogart.jpg";
        document.getElementById('sortores').innerHTML="<br>";
        kepp=true;
    }else{
        document.getElementById('kephelye').src="";
        document.getElementById('sortores').innerHTML="";
        kepp=false;
    }
}