function reloj(){
var rel = new Date();

var fech = rel.getDate();
var hor = rel.getHours();
var min = rel.getMinutes();
var sec = rel.getSeconds();
var mes = rel.toLocaleString("es", { month: "long" });
var an = rel.getFullYear();
var mesma = mes.charAt(0).toUpperCase() + mes.slice(1);

hor =("0"+ hor).slice(-2);
min =("0"+ min).slice(-2);
sec =("0"+ sec).slice(-2);

document.getElementById('rej').innerHTML =
fech +" de "+ mesma +"  " + an + " " + hor + " : " + min + " : " + sec ;
var t = setTimeout(reloj, 500);
}

function article(){
    const grid =  document.getElementById("grid")
    
    const div = document.createElement('div')
    
    div.textContent = document.getElementById("noticia").value

    grid.appendChild(div)
}