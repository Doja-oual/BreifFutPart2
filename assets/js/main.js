

//le id de parent  inpute de players   et gardian spicifique
let playerInput = document.getElementById("player-input");
let gardienInput = document.getElementById("goalkeeper-input");
// varibla communs
const form = document.getElementById("form-content");
const name = document.getElementById("name");
const flag = document.getElementById("mySelect");
const footballClub = document.getElementById("football-club");
const position = document.getElementById("position");
const nationality = document.getElementById("nationality");
// variable de joueure

const rating = document.getElementById("rating");
const pace = document.getElementById("pace");
const shooting = document.getElementById("shooting");
const passing = document.getElementById("passing");
const dribbling = document.getElementById("dribbling");
const defending = document.getElementById("defending");
const physical = document.getElementById("physical");
//varible de gardian
const diving = document.getElementById("diving");
const handling = document.getElementById("handling");
const kicking = document.getElementById("kicking");
const reflexes = document.getElementById("reflexes");

const speed = document.getElementById("speed");
const positioning = document.getElementById("positioning");
//
//les button des position de card
let playerBtn = document.getElementById("btn-player");
let gardienBtn = document.getElementById("btn-gardien");
// id de formation des player (bonus)
const formation = document.getElementById("SquadInfo");
// id de section de tiran
const contentFooot =document.querySelector(".content-fooot");
// fonction bonus de formation des players 
// formation.addEventListener("change",function(){
//   switch(formation.value){
//     case"3412":
//     contentFooot.style.gridTemplateColumns = "repeat(6,1fr)"
//     contentFooot.style.gridTemplateRows = "repeat(5,1fr)"
//     contentFooot.style.gridTemplateAreas = `
//     ". ST1 ST1 ST2 ST2 . "
//     ". . CAM CAM  .  ."
//     "LM LM . . RM RM"
//     ". CM1 CM1 CM2 CM2 ."
//     "CB1 CB1 CB2 CB2 CB3 CB3 "
//     "GK GK GK GK GK GK"
//     `
//     break;

//     case"433":
//     contentFooot.style.gridTemplateColumns = "repeat(8,1fr)"
//     contentFooot.style.gridTemplateRows = "repeat(4,1fr)"
//     contentFooot.style.gridTemplateAreas = `
//      ". ST1 ST1 CAM CAM ST2 ST2 ."
//     ". LM LM CM1 CM1 RM RM ."
//     "CB1 CB1 CB2 CB2 CB3 CB3 CM2 CM2"
//     "GK GK GK GK GK GK GK GK"
//     `
//     break;

//     case"442":
//     contentFooot.style.gridTemplateColumns = "repeat(8,1fr)"
//     contentFooot.style.gridTemplateRows = "repeat(4,1fr)"
//     contentFooot.style.gridTemplateAreas = `
//      ". ST1 ST1 . . CAM CAM  ."
//     "LM LM CM1 CM1 RM RM ST2 ST2"
//     "CB1 CB1 CB2 CB2 CB3 CB3 CM2 CM2"
//     "GK GK GK GK GK GK GK GK"
//     `
//     break;
   
  
//   case "3421":
//       contentFooot.style.gridTemplateColumns = "repeat(6, 1fr)";
//       contentFooot.style.gridTemplateRows = "repeat(5, 1fr)";
//       contentFooot.style.gridTemplateAreas = `
//      ". . CAM CAM  .  ."
//     ". ST1 ST1 ST2 ST2 ."
//     "LM LM . . RM RM"
//     ". CM1 CM1 CM2 CM2 ."
//     "CB1 CB1 CB2 CB2 CB3 CB3 "
//     "GK GK GK GK GK GK "
//       `;
//       break;

//   default:
//       console.log("erreur")

//   }
// })


//fonction pour affichie les inpute de gardian
function affichieInputJoueure() {
  playerInput.style.display = "block";
  gardienInput.style.display = "none";
  playerBtn.classList.add("disabled");
  gardienBtn.classList.remove("disabled");
  position_choice("player");

}
//Fonction pour affichie les inpute de player
function affichieInputGardian() {
  playerInput.style.display = "none";
  gardienInput.style.display = "block";
  playerBtn.classList.remove("disabled");
  gardienBtn.classList.add("disabled");
  position_choice("GK");
  
}

function position_choice(pos){
  if(pos=="GK") position.innerHTML='<option value="GK">GK</option>';
  else position.innerHTML=`<option value="chang">chang</option>
                    <option value="CB1">CB1</option>
                    <option value="CB2">CB2</option>
                    <option value="CB3">CB3</option>
                    <option value="CM1">CM1</option>
                    <option value="CM2">CM2</option>
                    <option value="LM">LM</option>
                    <option value="CAM">CAM</option>
                    <option value="RM">RM</option>
                    <option value="ST1">ST1</option>
                    <option value="ST2">ST2</option>`
}

playerBtn.addEventListener("click", affichieInputJoueure);

  gardienBtn.addEventListener("click", affichieInputGardian);




//validation de formulaire pour methode de regex
const patterns = {
  name: /^[A-Za-zÀ-ÖØ-öø-ÿ\s'-]{2,30}$/, 
  rating: /^[0-9]{1,2}(\.[0-9]{1,2})?$/, 
  pace: /^[0-9]{1,2}$/, 
  shooting:  /^[0-9]{1,2}$/,
  passing:  /^[0-9]{1,2}$/,
  dribbling:  /^[0-9]{1,2}$/,
  defending:  /^[0-9]{1,2}$/,
  physical:  /^[0-9]{1,2}$/,
  diving:  /^[0-9]{1,2}$/, 
  handling:  /^[0-9]{1,2}$/,
  kicking:  /^[0-9]{1,2}$/,
  reflexes:  /^[0-9]{1,2}$/,
  speed:  /^[0-9]{1,2}$/,
  positioning:  /^[0-9]{1,2}$/,
  flag: /^(https?:\/\/.*\.(?:png|jpg|jpeg|gif|svg))$/, 
  footballClub: /^[a-zA-Z0-9\s]{2,50}$/, 
 
};
// fonction pour affichier l'erreur
function removeErrorMessage(field) {
  const error = field.nextElementSibling;
  if (error && error.classList.contains("error-message")) {
    error.remove();
  }
}
//fonction pour creer ;essage d'erreur
function createErrorMessage(field, message) {
  removeErrorMessage(field); 
  const error = document.createElement("div");
  error.className = "error-message";
  error.style.color = "red";
  error.innerText = message;
  field.insertAdjacentElement("afterend", error);
}

// validation des form
function validateForm() {
  let isValid = true;

  if (position.value === "GK") {
    fields = [
      name, 
      flag, 
      footballClub, 
      position, 
      nationality,
      diving, 
      handling, 
      kicking, 
      reflexes, 
      speed, 
      positioning
    ];
  } else {
    fields = [
      name, 
      flag, 
      footballClub, 
      position, 
      nationality,
      rating, 
      pace, 
      shooting, 
      passing, 
      dribbling, 
      defending, 
      physical
    ];
  }

  fields.forEach((field) => {
    const pattern = patterns[field.id];
    if (pattern) {
      if (pattern.test(field.value.trim())) {
        field.style.border = "1px solid green";
        removeErrorMessage(field); 
      } else {
        field.style.border = "2px solid red";
        createErrorMessage(field, `Invalid ${field.id}`);
        isValid = false;
      }
    }
  });

  return isValid;
}


  
