/* start js first todolist */
const button = document.querySelector(".btn")
const informationUser = document.querySelector("#information_user")

/* cette fonction permet de rassembler toute les valeurs obtenus dans une seule varriable */
const getUser = () => {
    return {
        nom : document.getElementById("nom"),         /* ici on récupère les valeur de nos input*/
        prenom : document.getElementById("prenom"),
        age : document.getElementById("Age"),
        dateN : document.getElementById("born"),    
        prescripteur : document.getElementById("Prescripteur"), 
    }
}
button.addEventListener("click", function(){
    const user = getUser() /* donc la user contient getUser(donc toute nos valeurs récupérer au dessus)*/
    let TR = document.createElement("tr")
    for (const property in user) {
        let TH = document.createElement("td")
        let TXT = document.createTextNode(user[property].value)
        TH.appendChild(TXT)
        TR.appendChild(TH)
        document.getElementById("tableUser").appendChild(TR)
        user[property].value = "";
      }
      
})