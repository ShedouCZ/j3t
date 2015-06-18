<?php
// Load event listeners
App::uses('CakeGalleryRedirects', 'Lib/Event');
App::uses('CakeEventManager', 'Event');

// Attach listeners.
CakeEventManager::instance()->attach(new CakeGalleryRedirects());
