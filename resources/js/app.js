import './bootstrap';
import '../css/navbar.css';
import '../css/body.css';
import './main.js';

import.meta.glob([
    '../assets/images/**',
    '../assets/fonts/**',
]);

// Initialization for ES Users
import {
    Datepicker,
    Input,
    initTE,
    Ripple,
} from "tw-elements";

initTE({ Datepicker, Ripple, Input });
