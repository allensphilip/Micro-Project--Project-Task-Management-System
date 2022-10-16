var next_click=document.querySelectorAll(".next-btn");
var previous_click=document.querySelectorAll(".previous-btn");
var submit_click=document.querySelector(".submit-btn");
var main_click=document.querySelectorAll(".main");
let forumnum=0;
next_click.forEach(function(btn){
btn.addEventListener('click',function(){
    if(!validate_form()){
        return false;
    }
    forumnum++; 
    updateform();
});

});

previous_click.forEach(function(butn){
    butn.addEventListener('click',function(){
        forumnum--;
        updateform();
    });
}); 

submit_click.addEventListener('click',function(){
    if(!validate_form()) return false;
        var f_name = document.getElementById("f_name"); 
        var s_name = document.getElementById("s_name");
        s_name.innerHTML = f_name.value;
        forumnum++; 
        updateform();
           
});


 

function updateform(){
    main_click.forEach(function(forms){
        forms.classList.remove('active');
    });
    main_click[forumnum].classList.add('active');
}

function validate_form(){

    var validate=true;
    var inputs= document.querySelectorAll(".main.active input");
    inputs.forEach(function(inpt){
    inpt.classList.remove('warning');
    if(inpt.hasAttribute("require")){
    if(inpt.value.length==0){
    validate=false;
    inpt.classList.add('warning');
    document.getElementById("msg1").innerHTML = "*Please fill all the relevnt fields";
    }
}

});

return validate;

}


document.addEventListener('DOMContentLoaded', () => {
for (const el of document.querySelectorAll("[placeholder][data-slots]")) {
const pattern = el.getAttribute("placeholder"),
slots = new Set(el.dataset.slots || "_"),
prev = (j => Array.from(pattern, (c,i) => slots.has(c)? j=i+1: j))(0),
first = [...pattern].findIndex(c => slots.has(c)),
accept = new RegExp(el.dataset.accept || "\\d", "g"),
clean = input => {
input = input.match(accept) || [];
return Array.from(pattern, c =>
input[0] === c || slots.has(c) ? input.shift() || c : c
);
},
format = () => {
const [i, j] = [el.selectionStart, el.selectionEnd].map(i => {
i = clean(el.value.slice(0, i)).findIndex(c => slots.has(c));
return i<0? prev[prev.length-1]: back? prev[i-1] || first: i; }); el.value=clean(el.value).join``; el.setSelectionRange(i, j); back=false; }; let back=false; el.addEventListener("keydown", (e)=> back = e.key === "Backspace");
    el.addEventListener("input", format);
    el.addEventListener("focus", format);
    el.addEventListener("blur", () => el.value === pattern && (el.value=""));
    }
});