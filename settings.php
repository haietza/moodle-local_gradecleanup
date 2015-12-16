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
 * @package   local_asugradecron
 * @author    Michelle Melton <meltonml@appstate.edu>
 * @copyright 2015, Appalachian State University
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

if ($hassiteconfig) { // needs this condition or there is error on login page
    require_once($CFG->dirroot.'/local/asugradecron/lib.php');
    $settings = new admin_settingpage(
        'local_asugradecron',
        get_string('pluginname', 'local_asugradecron')
    );
     
    $settings->add(new admin_setting_configtext('asugradecron_gradehistorylifetime', get_string('asugradecron_gradehistorylifetime_label', 'local_asugradecron'), get_string('asugradecron_gradehistorylifetime_desc', 'local_asugradecron'), '0', PARAM_INT));

    $ADMIN->add('localplugins', $settings);
}