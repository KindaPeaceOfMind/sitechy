let bg = document.getElementsByClassName('descriptionDarkBG')[0];
bg.onclick = CloseDescription;
bg.childNodes[1].onclick = ()=>{
    event.stopPropagation();
}
function ShowBlock1(el) {
    el.parentNode.childNodes[2].classList.toggle('hidden');
}
function ShowDescription(el){
    bg.style.display = 'block';
}
function CloseDescription(){
    bg.style.display = 'none';
}