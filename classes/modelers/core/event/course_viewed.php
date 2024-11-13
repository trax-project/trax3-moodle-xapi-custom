<?php
// This file is part of the TRAX xAPI plugin for Moodle.
//
// This plugin is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// This plugin is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * TRAX xAPI custom plugin.
 *
 * @package    local_trax_xapi_custom
 * @copyright  2024 Sébastien Fraysse <sebastien@fraysse.eu>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace local_trax_xapi_custom\modelers\core\event;

defined('MOODLE_INTERNAL') || die();

use block_trax_xapi_agent\modelers\core\event\course_viewed as modeler;

class course_viewed extends modeler {

	protected function verb() {
		return $this->alreadyViewed()
			? 'http://id.tincanapi.com/verb/cameback'
			: 'http://id.tincanapi.com/verb/viewed';
	}

	protected function alreadyViewed() {
		return random_int(0, 10) > 5;
	}
}
