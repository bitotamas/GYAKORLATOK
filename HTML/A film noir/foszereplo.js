window.addEventListener('load',()=>{
    document.getElementById('foszereplo').addEventListener('click',kep);
})
let kepp=0;
function kep(){
    console.log("asd");
    if(kepp==0){
        document.getElementById('kephelye').src="hBogart.jpg";
        kepp=1;
    }else{
        document.getElementById('kephelye').src="";
        kepp=0;
    }
}