// SHOW BOX TO EDIT OR DELETE POST---------------------------
let get_activities = document.querySelector(".card-activity");
get_activities.style.display = "none";
function showActivity(){
    console.log(get_activities);
    return show(get_activities);
}


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

window.onclick = function(event) {
    if (event.target.className !== "icon") {
        get_activities.style.display = "none";
    }
}

let more_icon = document.querySelector(".fa-ellipsis-h");
more_icon.addEventListener("click",showActivity);
// CREATE POST---------------------------------------------------------------
let write_post = document.querySelector(".add-post");
function create_post(){
    if (add_contianer_post.style.display== "none"){
        document.body.style.overflow="hidden";
        show(add_contianer_post);
       
    }
}

let add_contianer_post=document.querySelector(".container");

let posts=document.querySelectorAll(".container-card")
posts.forEach(element => {
    console.log(element);
});
