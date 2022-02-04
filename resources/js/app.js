require('./bootstrap');

//https://fontawesome.com/v5.15/how-to-use/on-the-web/advanced/svg-javascript-core

import { library,dom} from '@fortawesome/fontawesome-svg-core';
import { faFolder } from '@fortawesome/free-solid-svg-icons/faFolder';
import { faProjectDiagram} from "@fortawesome/free-solid-svg-icons/faProjectDiagram";
import { faArrowUp} from "@fortawesome/free-solid-svg-icons/faArrowUp";
import { faFile} from "@fortawesome/free-solid-svg-icons/faFile";
import { faCheck} from "@fortawesome/free-solid-svg-icons/faCheck";
import { faHourglass} from "@fortawesome/free-solid-svg-icons/faHourglass";
import { faList} from "@fortawesome/free-solid-svg-icons/faList";
import { faTasks} from "@fortawesome/free-solid-svg-icons/faTasks";
import { faFileUpload} from "@fortawesome/free-solid-svg-icons/faFileUpload";
import { faTrash } from "@fortawesome/free-solid-svg-icons/faTrash";
import { faPencilAlt } from "@fortawesome/free-solid-svg-icons/faPencilAlt";

library.add(faFolder, faProjectDiagram, faArrowUp, faFile, faCheck, faHourglass, faList, faTasks, faFileUpload, faTrash, faPencilAlt)

dom.watch()


import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
