<?php
class jqueryuiJqueryuiHelper extends jqueryuiJqueryuiHelper_Parent
{

    public function getUrl()
    {
        if (Clementine::$config['module_jqueryui']['url']) {
            return Clementine::$config['module_jqueryui']['url'];
        }
        return __WWW_ROOT_JQUERYUI__ . '/skin/js/jquery-ui.min.js';
    }

}
