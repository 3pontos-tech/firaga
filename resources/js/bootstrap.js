import axios from 'axios';
import jQuery from 'jquery';
window.$ = jQuery;



window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
