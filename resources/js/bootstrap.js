// import axios from 'axios';
// window.axios = axios;

// window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

// core version + navigation, pagination modules:
import Swiper from "swiper";
import { Navigation, Pagination } from "swiper/modules";
// import Swiper and modules styles
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";

// init Swiper:
const swiper = new Swiper(".swiper", {
    // configure Swiper to use modules
    modules: [Navigation, Pagination],
    loop: true,
    spaceBetween: 4,

    autoplay: {
        delay: 4000,
    },

    slidesPerView: "auto",
    // centeredSlides: false,

    // breakpoints: {
    //     320: {
    //         slidesPerView: 2,
    //     },
    //     480: {
    //         slidesPerView: 3,
    //     },
    //     767: {
    //         slidesPerView: 'auto',
    //     },
    // },

    navigation: {
        nextEl: ".swiper-next",
        prevEl: ".swiper-prev",
    },
});

import Alpine from "alpinejs";
import intersect from "@alpinejs/intersect";

window.Alpine = Alpine;
Alpine.plugin(intersect);
Alpine.start();
