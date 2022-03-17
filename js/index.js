// SHOW BOX TO EDIT OR DELETE POST---------------------------


function cancel_post(){
    let cancel_post = document.querySelector(".container");
    document.body.style.overflow="visible";
    return hide(cancel_post);
}


function show(element){
    element.style.display = "block";
}

function hide(element){
    element.style.display = "none";
}

// CREATE POST---------------------------------------------------------------
let write_post = document.querySelector(".add-post");
function create_post(){
    if (add_contianer_post.style.display== "none"){
        document.body.style.overflow="hidden";
        show(add_contianer_post);
    }
}

let add_contianer_post=document.querySelector(".container");


window.onclick = function (event) {
    if(event.target.matches(".icon")){
        event.target.parentElement.nextElementSibling.style.display = "block";
    } else{
        let card_mores = document.querySelectorAll(".card-activity");
        for(let card of card_mores){
            card.style.display = "none";
        }
    }
}

window.reload();