let str = document.getElementById('string_dev');
let compteurDev = 0;
let array =[];
let quentin = ["Q","u","e","n","t","i","n"];
let developpeur = ["a"," ", "D","e","v","e","l","o","p","p","e","r"];

function newLetterDev(){
    array = str.textContent.split('');
        array.pop()
        str.textContent = array.join('');
    if(array[0] == null){
        array[0] = developpeur[0];
        str.textContent = array.join('');
    }
    if(array[0] == developpeur[0]){
        if(compteurDev > 11){
            controle()
            return
        }
        else {
            for(let i = 0; i <= compteurDev; i++){
            array[i] = developpeur[i];
            }
        }
        str.textContent = array.join('');
        compteurDev++;
    }
    setTimeout(newLetterDev,300)
}
function newLetterQ(){
    array.pop()
    str.textContent = array.join('');
    if(array[0] == null){
        array[0] = quentin[0];
        str.textContent = array.join('');
    }
    if(array[0] == quentin[0]){
        if(compteurDev > 7){
            controle()
            return
        }
        else {
            for(let i = 0; i <= compteurDev; i++){
            array[i] = quentin[i];
            }
        }
        str.textContent = array.join('');
        compteurDev++;
    }
    setTimeout(newLetterQ,300)
}
function controle(){
    compteurDev = 0;
    array = str.textContent.split('');
    if(array[0] == quentin[0]){
        newLetterDev();
    }
    if(array[0]== developpeur[0]){
        newLetterQ()
    }
}
setTimeout(controle,1000)

