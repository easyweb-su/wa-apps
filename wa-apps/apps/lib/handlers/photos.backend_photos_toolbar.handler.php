<?php

class appsPhotosBackend_photos_toolbarHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
		$event = wa('apps')->event('photos.backend_photos_toolbar', $params, $array_keys);
        return ifempty($event);
    }
}
