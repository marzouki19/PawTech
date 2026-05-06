import { startStimulusApp } from '@symfony/stimulus-bundle';
import UsersToggleController from './controllers/users_toggle_controller.js';
import EntitySortController from './controllers/entity_sort_controller.js';
import ImagePreviewController from './controllers/image_preview_controller.js';

const app = startStimulusApp();
// register any custom, 3rd party controllers here
// app.register('some_controller_name', SomeImportedController);
app.register('users-toggle', UsersToggleController);
app.register('entity-sort', EntitySortController);
app.register('image-preview', ImagePreviewController);
