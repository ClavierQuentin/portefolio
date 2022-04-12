/*let str = document.getElementById('string_dev');
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
*/

let str = document.getElementById('string_dev');

new Typewriter(str,{
    loop : true,
    deleteSpeed : 20
})
.changeDelay(100)
.typeString('Quentin')
.pauseFor(400)
.deleteChars(7)
.typeString('Développeur Web')
.pauseFor(900)
.deleteChars(4)
.typeString(' Front-End')
.pauseFor(900)
.deleteChars(21)
.typeString("à la recherche d'un stage")
.pauseFor(900)
.start()

let barUK = document.getElementById('barUK');
let barHtml = document.getElementById('barHtml');
let barCss = document.getElementById('barCss');
let barJs = document.getElementById('barJs');
let barPhp = document.getElementById('barPhp');
let barBootstrap = document.getElementById('barBootstrap');
let barGit = document.getElementById('barGit');

window.addEventListener('scroll', () => {
    if (window.matchMedia("(max-width: 400px)").matches) {
        if(window.scrollY > 1500 && window.scrollY < 2700){
            barUK.classList.add('uk');
            barHtml.classList.add('html');
            barCss.classList.add('css');
            barJs.classList.add('js');
            barPhp.classList.add('php');
            barBootstrap.classList.add('bootstrap')
            barGit.classList.add('git');
        }
        else{
            barUK.classList.remove('uk');
            barHtml.classList.remove('html');
            barCss.classList.remove('css');
            barJs.classList.remove('js');
            barPhp.classList.remove('php');
            barBootstrap.classList.remove('bootstrap');
            barGit.classList.remove('git');
        }
    }
    if (window.matchMedia("(min-width: 400px)").matches && window.matchMedia('(max-width: 900px').matches) {
        if(window.scrollY > 1100 && window.scrollY < 2350){
            barUK.classList.add('uk');
            barHtml.classList.add('html');
            barCss.classList.add('css');
            barJs.classList.add('js');
            barPhp.classList.add('php');
            barBootstrap.classList.add('bootstrap')
            barGit.classList.add('git');
        }
        else{
            barUK.classList.remove('uk');
            barHtml.classList.remove('html');
            barCss.classList.remove('css');
            barJs.classList.remove('js');
            barPhp.classList.remove('php');
            barBootstrap.classList.remove('bootstrap');
            barGit.classList.remove('git');
        }
    }else if(window.matchMedia("(min-width :900px)").matches){
        if(window.scrollY > 780 && window.scrollY < 1800){
            barUK.classList.add('uk');
            barHtml.classList.add('html');
            barCss.classList.add('css');
            barJs.classList.add('js');
            barPhp.classList.add('php');
            barBootstrap.classList.add('bootstrap')
            barGit.classList.add('git');
        }
        else{
            barUK.classList.remove('uk');
            barHtml.classList.remove('html');
            barCss.classList.remove('css');
            barJs.classList.remove('js');
            barPhp.classList.remove('php');
            barBootstrap.classList.remove('bootstrap');
            barGit.classList.remove('git');
        }
    }
   
})
