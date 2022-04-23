'use strict';

document.addEventListener('DOMContentLoaded', () => {

    const championsInfo = window.championsInfo;

    console.log(championsInfo);
});

///////////////////
//// FONCTION ////
/////////////////

function onClickImg(){
    // console.log("ok");

    // id de l'element
    var idElt = this.getAttribute('id');
    var who = idElt.substr(9);
    // console.log(who);
    // console.log(idElt);
    // console.log(idElt.length);
    // console.log(idElt.substr(9));

    var instantPic = document.querySelectorAll('.showPerso');
    instantPic.forEach(picx => picx.className = 'hidePerso');

    // console.log(instantPic);

    //show
    var elementShowed = document.getElementById('perso' + who);
    console.log('perso' + who);
    elementShowed.className = 'containChampions showPerso';

    // console.log(elementShowed);

    if (idElt === "miniPerso" + 4){
        nameskill[0].getElementsByClassName('name-skill').innerHTML = 'NEWS';
        console.log("OK!");
    }

    // switch(idElt){
    //     case 'miniPerso0':
    //         document.getElementsByClassName('name-skill').childNodes[0].innerHTML = 'NEWS';
    //         document.getElementsByClassName('name-skill').childNodes[1].innerHTML = 'NEWS';
    //         document.getElementsByClassName('name-skill').childNodes[2].innerHTML = 'NEWS';
    //         break;
    //     case 'miniPerso1':
    //         document.getElementsByClassName('name-skill').childNodes[0].innerHTML = 'LOVE';
    //         document.getElementsByClassName('name-skill').childNodes[1].innerHTML = 'LOVE';
    //         document.getElementsByClassName('name-skill').childNodes[2].innerHTML = 'LOVE';
    //         break;
    //
    //     default:

}

///////////////////
//// VARIABLE ////
/////////////////

var picChamps;
var nameskills;


///////////////////
////// CODE //////
/////////////////


picChamps = document.querySelectorAll(".picChamps");
for (const picChamp of picChamps){
    // console.log(picChamp);
    picChamp.addEventListener("click", onClickImg);
};

//show
var firstPerso = document.getElementById('perso0');
firstPerso.className = 'containChampions showPerso';

nameskills = document.querySelectorAll(".name-skill");
for (const nameskill of nameskills){
    console.log(nameskill);
};
