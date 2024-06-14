import './bootstrap';

import Alpine from 'alpinejs'

import jQuery from 'jquery';

window.$ = jQuery;

Alpine.start()

// If you want Alpine's instance to be available everywhere.
window.Alpine = Alpine