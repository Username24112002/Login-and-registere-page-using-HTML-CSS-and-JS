const btnjoinus = document.querySelector('.btn-join-us');
const wrapper = document.querySelector('.wrapper');
const icon = document.querySelector('.icon');
const regLink = document.querySelector('.reg-link');
const loginLink = document.querySelector('.login-link');
const word = document.getElementById('email');
console.log(word);
btnjoinus.addEventListener("click",()=>{
    wrapper.classList.add('active');
});
icon.addEventListener("click",()=>{
    wrapper.classList.remove('active');
    wrapper.classList.remove('activereg');
})
regLink.addEventListener("click",()=>{
    wrapper.classList.add('activereg');
})
loginLink.addEventListener("click",()=>{
    wrapper.classList.remove('activereg');
})
