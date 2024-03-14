/*function search_animal(){
    window.alert("foi!");
}*/

function search_animal(){
    let input = document.getElementById('pesquisar').value
    input=input.toLowerCase();
    let x = document.getElementsByClassName('itemSeach');
    let y = document.getElementsByClassName('itemSeachb');
    
      
    for (i = 0; i < x.length; i++) { 
        if (!x[i].innerHTML.toLowerCase().includes(input)) {
            x[i].style.display="none";
            y[i].style.display="none";
        }
        else {
            x[i].style.display="block";
            y[i].style.display="block";                 
        }
    }
}
