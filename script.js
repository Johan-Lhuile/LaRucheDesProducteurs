//------------------------------------------------------------------------------
                    //--------RECUP DE DATE ET HEURE---------------
//------------------------------------------------------------------------------

const date = new Date();
// getDay nous rend le jour de la semaine (Lundi, Mardi...)
// getDate nous rend le jour du mois (1 - 31)
document.querySelector("#pDay").textContent = date.getDay() + " / " + date.getDate() + " / " + (date.getMonth() + 1) + " / " + date.getFullYear() + "   " + date.toLocaleTimeString();
// getMonth nous rend le mois (sans le 0 initiale)
document.querySelector("#pMonth").textContent = date.getMonth() + 1 + " /";
// getFullYear nous rend l'année sur 4 chiffres
document.querySelector("#pYear").textContent = date.getFullYear();
// toLocaleTimeString nous rend l'heure, les minutes et les secondes en un string.
document.querySelector("#pHour").textContent = date.toLocaleTimeString();

//------------------------------------------------------------------------------
        //--------FUNCTION CHANGER UNE IMAGE SUIVANT LA SAISON---------------
//------------------------------------------------------------------------------

let day = 10;
let month = 4;

let printemps = false;
let ete = false;                   //! fonctionne avec les months mais pas quand j'essaie d'ajouter les Days;
let automne = false;
let hiver = false;

if (month >= 3 && day > 20) {                   //? si entre le 19 mars et le 20 juin alors printemps = true;
     if (month <= 6 && day <= 20);
    printemps = true;
    console.log("printemps " + printemps);    
}

if ((month >= 6 && day >= 21) && (month <= 9 && day >= 22)){
    ete = true;
    console.log("ete " + ete);
}
  
if ((month >= 9 && day >= 23) && (month <= 12 && day >= 21)){
    automne = true;
    console.log("Autonne  " + automne);
}

if ((month >= 12 && day >= 22) && (month <= 3 && day >= 19)) {
     hiver = true;
    console.log("hiver  " + hiver);
}

//------------------------------------------------------------------------------
                    //--------FIN---------------
//------------------------------------------------------------------------------