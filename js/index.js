// SHOW BOX TO EDIT OR DELETE POST---------------------------
function showActivity(){
    if (get_activities.style.display == "none"){
        return show(get_activities);
    }
}


function cancel_post(){
    let cancel_post = document.querySelector(".container");
    document.body.style.overflow="visible";
    write_post.textContent = document.querySelector(".title").value;
    return hide(cancel_post);
}
function show(element){
    element.style.display = "block";
}

function hide(element){
    element.style.display = "none";
}

window.onclick = function(event) {
    if (event.target.className !== "icon") {
        get_activities.style.display = "none";;
    }
}
let get_activities = document.querySelector(".card-activity");



// CREATE POST---------------------------------------------------------------
let write_post = document.querySelector(".add-post");
function create_post(){
    if (add_contianer_post.style.display== "none"){
        document.body.style.overflow="hidden";
        show(add_contianer_post);
       
    }
}

let add_contianer_post=document.querySelector(".container");
