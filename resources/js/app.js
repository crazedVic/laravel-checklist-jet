require('./bootstrap');

//https://fontawesome.com/v5.15/how-to-use/on-the-web/advanced/svg-javascript-core

import { library,dom} from '@fortawesome/fontawesome-svg-core';
import { faAirFreshener } from '@fortawesome/free-solid-svg-icons/faAirFreshener';
import { faAddressBook } from '@fortawesome/free-solid-svg-icons/faAddressBook';

library.add(faAddressBook, faAirFreshener)

dom.watch()


import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
