window.addEventListener('load',()=>{
    document.getElementById('foszereplo').addEventListener('click',kep);
})
let kepp=0;
function kep(){
    if(kepp==0){
        document.getElementById('kephelye').src="hBogart.jpg";
        document.getElementById('sortores').innerHTML="<br>";
        kepp=1;
    }else{
        document.getElementById('kephelye').src="";
        document.getElementById('sortores').innerHTML="";
        kepp=0;
    }
}