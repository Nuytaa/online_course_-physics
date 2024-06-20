const openPopUp = document.getElementById('open_pop_up');
const closePopUp = document.getElementById('pop_up_close');
const popUp = document.getElementById('pop_up');

openPopUp.addEventListener('click', function(e){
    e.preventDefault();
    popUp.classList.add('active');
})

closePopUp.addEventListener('click', () => {
    popUp.classList.remove('active');
})


const openPopUp2 = document.getElementById('open_pop_up2');
const closePopUp2 = document.getElementById('pop_up_close2');
const popUp2 = document.getElementById('pop_up2');

openPopUp2.addEventListener('click', function(e){
    e.preventDefault();
    popUp2.classList.add('active');
})

closePopUp2.addEventListener('click', () => {
    popUp2.classList.remove('active');
})

const openPopUp5 = document.getElementById('open_pop_up5');
openPopUp5.addEventListener('click', function(e){
    e.preventDefault();
    popUp.classList.add('active');
})


// Карточки для третьей страницы сайта


// Загрузка фото в личном кабинете
// function updateImage(param) {  
//     console.log(this.files);

//     if (this.files) {
//         preview.src = window.URL.createObjectURL(this.files[0]);
//         preview.setAttribute('height','100%');
//     } 
//     else {
//         preview.setAttribute('height','32px');
//         preview.src = 'camera.png';
//     }

// } 

// const input = document.getElementById('avatar');
// const preview = document.getElementById('preview');

// input.addEventListener('change', updateImage);




