<?php
defined('MOODLE_INTERNAL') || die;
global $CFG;

require_once(dirname(dirname(__FILE__)).'/ldap_syncplus/auth.php');

class auth_plugin_ldap_students extends auth_plugin_ldap_syncplus {
    static $instancename = 'ldap_students';

    public function __construct() {
        $this->authtype = self::$instancename;
        $this->roleauth = self::$instancename;
        $this->errorlogtag = '[AUTH LDAP students]';
        $this->init_plugin($this->authtype);
    }
}