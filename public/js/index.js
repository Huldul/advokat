document.addEventListener('DOMContentLoaded', ()=>{
    const swiper = new Swiper('.hero__slider', {
        // Optional parameters
        loop: true,
        speed: 1500,           
        effect: 'fade',
        autoplay: {
            delay: 3500,
        },
    });
    const about = new Swiper('.about__images', {
        // Optional parameters
        loop: true,
        speed: 1500,           
        effect: 'fade',
        autoplay: {
            delay: 3000,
        },
        pagination: {
            el: '.swiper-pagination',
        },
    });
    const certificates = new Swiper('.certificates__slider', {
        // Optional parameters
        loop: false,
        slidesPerView: 3,
        spaceBetween:30,
         // If we need pagination
        pagination: {
            el: '.swiper-pagination',
            clickable: true
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
        // when window width is >= 320px
        320: {
            slidesPerView: 1,
            spaceBetween: 20
        },
        // when window width is >= 480px
        585: {
            slidesPerView: 2,
            spaceBetween: 30
        },
        // when window width is >= 640px
        991: {
            slidesPerView: 3,
            spaceBetween: 30
        }
        }
    });
    // Burger menu
    const burger = document.querySelector('.header-burger');
    const menu = document.querySelector('.header__nav__mobile');
    const tagBody = document.querySelector('body')
    burger.addEventListener('click', () => {
        console.log('dgf');
        tagBody.classList.toggle('body-hidden')
        burger.classList.toggle('active')
        menu.classList.toggle('active')
    })

    function hideMenuResize() {
        const vw = window.innerWidth;
        if(vw > 1185){
            menu.classList.remove('active')
            tagBody.classList.remove('body-hidden')
            burger.classList.remove('active')
        }
        // document.documentElement.style.setProperty("--vh", `${vh}px`);
    }  
    window.addEventListener("resize", hideMenuResize);
    const header = document.querySelector('header'); 

    if (!header) {
        return; 
    }

    window.addEventListener('scroll', () => {
        if (window.scrollY > 20) { 
        header.classList.add('active');
        } else {
        header.classList.remove('active');
        }
    });
    // Модальное окно
    function bindModal(trigger, modal, close) {
        const triggers = document.querySelectorAll(trigger),
              closeBtn = document.querySelector(close);
    
        triggers.forEach(element => {
            element.addEventListener('click', e => {
                e.preventDefault();
                const modalId = element.dataset.modal; // Получаем значение атрибута data-modal
                const targetModal = document.getElementById(modalId); // Получаем соответствующее модальное окно
                targetModal.style.display = 'flex';
            });
        });
    
        closeBtn.addEventListener('click', () => {
            const modals = document.querySelectorAll(modal); // Получаем все модальные окна
            modals.forEach(modal => {
                modal.style.display = 'none'; // Закрываем все модальные окна
            });
        });
    } 
    
    bindModal('.modal__info__open', '.modal__wrapper', '.modal__close');
    bindModal('.modal__btn', '.modal__wrapper', '.modal__close');
    bindModal('.fixed-contact', '.modal__wrapper3', '.modal__close3');
    bindModal('.modal__info__open', '.modal__wrapper3', '.modal__close3');
    $('input[type="tel"]').mask("+7 (999) 999-99-99");  
})
function closeModal() {
    const modals = document.querySelectorAll('.modal__wrapper'); // Получаем все модальные окна
    modals.forEach(modal => {
        modal.style.display = 'none'; // Закрываем все модальные окна
    });
}
