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
let click_likes = document.querySelectorAll(".click_like");
let show_likes = document.querySelectorAll(".like_post")
let update_counter = document.querySelectorAll(".update_likes")
for (let each_post of click_likes){
    // console.log(each_post.id);
    each_post.addEventListener("click",(e)=>{
        e.preventDefault()
        let click_on=e.target.id
        for (let each_count of count_likes){
            for (let each_update of update_counter){
                if (click_on == each_count.id && click_on == each_update.id){
                    let number_likes = parseInt(each_count.textContent);
                    // each_count = parseInt(each_count.value);
                    if (number_likes == 0){
                        each_count.textContent = 1
                    } else{
                        each_count.textContent = number_likes + 1
                    }
                    each_update.value = each_count.textContent
                    console.log(each_update.value, "update later");
                }
            }
            for (let each_show of show_likes){
                if (click_on==each_show.id){
                    each_show.style.display="block"
                }
            }
            

        }
        console.log(click_on);
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
                    // alert(each_show)
                }
            }

    })
}
