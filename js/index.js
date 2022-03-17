// SHOW BOX TO EDIT OR DELETE POST---------------------------
let get_activities = document.querySelectorAll(".card-activity");
function showActivity(){
    for (let activity of get_activities){
        if (activity.style.display == "none"){
            return show(activity);
        }
        
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

// window.onclick = function(event) {
//     if (event.target.className !== "icon") {
//         activity.style.display = "none";
//     }
// }

let icons = document.querySelectorAll(".icon");
for (let icon of icons){
    icon.addEventListener("click",showActivity);
    console.log(icon);
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

let posts=document.querySelectorAll(".container-card")
posts.forEach(element => {
    console.log(element);
});
