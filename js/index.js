


// SHOW BOX TO EDIT OR DELETE POST---------------------------


function cancel_post(){
    let cancel_post = document.querySelector(".container");
    document.body.style.overflow="visible";
    // write_post.textContent = document.querySelector(".title").value;
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
    if(event.target.matches(".material-icons")){
        event.target.parentElement.nextElementSibling.style.display = "block";
    } else{
        let boxes = document.querySelectorAll(".comment_action");
        for(let box of boxes){
            box.style.display = "none";
        }
    }
    if(event.target.matches(".view_more")){
        event.target.nextElementSibling.style.display = "block";
        event.target.nextElementSibling.nextElementSibling.style.display = "none";
        console.log(event.target.nextElementSibling);
    }
}

// UPLOAD PHOTO--------------
var uploadImage = function(event){
    var image = document.getElementById("image-post");
    image.src = URL.createObjectURL(event.target.files[0]);
    displayImage();
}


function displayImage(){
    let box = document.querySelector(".user-post");
    box.style.height ="15rem";
    box.style.overflow = "auto";
}



// like and comment post 
let count_likes = document.querySelectorAll(".count_like");
let click_likes = document.querySelectorAll(".btn_likes");
let show_likes = document.querySelectorAll(".like_post")
// let update_counter = document.querySelectorAll(".update_likes")
for (let each_post of click_likes){
    
    each_post.addEventListener("click",(e)=>{
        let click_on = e.target.parentElement.id
        e.target.style.color="blue"
        for (let each_likes of count_likes){
            // for (let each_update of update_counter){
                if (click_on == each_likes.id){
                    let number_likes = parseInt(each_likes.textContent)+1;
                    each_likes.textContent = number_likes + " Likes";
                    if ( number_likes == 0){
                        each_likes.textContent = number_likes + " Like";
                    }
                }
            }
        for (let each_show of show_likes){
            if (click_on==each_show.id){
                    each_show.style.display="block"
            }
        }
    })
}



// like and comment post 
let count_comment = document.querySelectorAll(".count_comment");
let click_comment = document.querySelectorAll(".click_comment");
let show_comment = document.querySelectorAll(".comment_box")
for (let each_post of click_comment){
    // console.log(each_post.id);
    each_post.addEventListener("click",(e)=>{
        let click_on=e.target.id
            for (let each_show of show_comment){
                if (click_on==each_show.id){
                    each_show.style.display="flex"
                }
            }
    })
}


