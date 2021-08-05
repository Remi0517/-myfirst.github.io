function side_list(num){
    let element = document.getElementsByClassName('side-list-content');
    for(let i = 0;i<element.length;i++){
        element[i].style.display = "none";
    }   
    element[num].style.display = "block";
}
let articleModal;
function article_modal(num){
    let element = document.getElementsByClassName('modal');
    for(let i = 0;i<element.length;i++){
        element[i].style.display = "none";
    }   
    element[num].style.display = "block";
    articleModal = num;
}
window.onclick = function(event) {
    let element = document.getElementsByClassName('modal'); 
    if (event.target == element[articleModal]) {
        element[articleModal].style.display = "none";
    }
}
