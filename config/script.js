window.addEventListener('DOMContentLoaded', function() {
    const burger_btn = document.querySelector('.fa-align-justify');
    const menu_burger =document.querySelector('.burger');

    burger_btn.addEventListener('click',(e)=>{
        console.log(e.target);
        if(e.target === burger_btn){
            menu_burger.classList.toggle('active');
        }
    });

});