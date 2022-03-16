// SHOW BOX TO EDIT OR DELETE POST---------------------------
function showActivity(){
    if (get_activities.style.display == "none"){
        return show(get_activities);
    }
}

function show(element){
    element.style.display = "block";
}

// function hide(element){
//     element.style.display = "none";
// }

window.onclick = function(event) {
    if (event.target.className !== "icon") {
        get_activities.style.display = "none";;
    }
}
let get_activities = document.querySelector(".card-activity");



// CREATE POST---------------------------------------------------------------
document.querySelector(".add-post").addEventListener("click", create_post)
function create_post(){
    if (add_contianer_post.style.display== "none"){
        document.body.style.overflow="hidden";
        show(add_contianer_post);
       
    }
}

let add_contianer_post=document.querySelector(".container");

