window.addEventListener('load',()=>{

    document.getElementById('kalkulator').addEventListener('keyup',szamol);
})
let alapErtek=100;
let minimum=46;
let maximum=50;

function szamol(){
    if(this.value!=null && this.value!=""){
    let mennyiseg=this.value;
    
        if(isNaN(mennyiseg)){
            document.getElementById('nemszam').innerHTML="Nem számot adtál meg!";
        }else {
            document.getElementById('nemszam').innerHTML="<b>"+min(mennyiseg)+" - "+max(mennyiseg)+" kcal</b>";
        }
    }else {
        document.getElementById('nemszam').innerHTML="";
    }

}
function min(felhasznaloe){
    let szazalek=felhasznaloe/alapErtek;
    let minErtek=minimum*szazalek;
    if(minErtek%1!=0){
        return minErtek.toFixed(2);
    }else{
        return minErtek;
    }   
}
function max(felhasznaloe){
    let szazalek=felhasznaloe/alapErtek;
    let maxErtek=maximum*szazalek;
    if(maxErtek%1!=0){
        return maxErtek.toFixed(2);
    }else{
        return maxErtek;
    }  
}