<?php

class appsSiteDomain_saveHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
		$event = wa('apps')->event('site.domain_save', $params, $array_keys);
        return ifempty($event);
    }
}
