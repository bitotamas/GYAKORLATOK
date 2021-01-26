window.addEventListener('load',init)

function init(){
    document.getElementById("legnepszerubb").innerHTML="LECSÓ KOLBÁSZ CSIPSSZEL";
    
}
function vendegkonyv(){
    let log=document.getElementById("bejegyzes").value;
    if(log.length==0){
        alert("Ne legyen üresen hagyva a bejegyzés");
    }else {
        alert("Köszönjük a bejegyzést!");
        document.getElementById("bejegyzes").value="";
    }
}
