const tagContainer = document.querySelector('.email-container');
const inputEmail = document.querySelector('input[name="emails"]');

const input = document.querySelector('input[name="email"]');

const tags = [];
let data = "";

function createTag(label){
    const div = document.createElement("div");
    div.setAttribute("class", "tag");
    const span = document.createElement("span");
    span.innerHTML = label;
    const closeBtn = document.createElement("i");
    closeBtn.setAttribute("class", "fa-sharp fa-solid fa-xmark");
    div.appendChild(span);
    div.appendChild(closeBtn);
    return div;
}

function addTags(){
    const input = createTag(tags[tags.length-1]);
    tagContainer.prepend(input);
}

input.addEventListener("keyup", function (e){
    if(e.key === " "){
        if(data){
            data+=","+input.value;
        }
        else{
            data+=input.value;
        }
        console.log(data);
        tags.push(input.value);
        addTags();
        inputEmail.setAttribute("value", data);
        input.value = "";
    }
})