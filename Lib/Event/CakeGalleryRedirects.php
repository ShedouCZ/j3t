<?php
App::uses('CakeEventListener', 'Event');

class CakeGalleryRedirects implements CakeEventListener {
    public function implementedEvents() {
        return array(
            'Controller.beforeRedirect' => 'check_redirect',
        );
    }

    public function check_redirect($event) {
        $subject = $event->subject();
        $subject_class = get_class($subject);

        if ($subject_class == 'AlbumsController') {
            return false;
        }
    }
}
