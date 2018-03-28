<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Auth plugin "LDAP Instances"
 *
 * @package    auth_ldap_instances
 * @copyright  2016 Martin v. Löwis, <loewis@beuth-hochschule.de>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

require(dirname(dirname(__FILE__)).'/ldap_syncplus/version.php');

$plugin->component = 'auth_ldap_students';
$plugin->dependencies = ['auth_ldap_syncplus' => 2018020800];
$plugin->version  = 2018032800;

