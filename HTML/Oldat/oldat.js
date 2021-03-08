function szamol(){
    let oldottanyag=document.getElementById("oldottanyag").value;
    let oldoszer=document.getElementById("oldoszer").value;

    let tomegszazalek=100*oldottanyag/oldoszer;

    
    
   return document.getElementById("tomegszazalek").innerHTML=tomegszazalek;
}