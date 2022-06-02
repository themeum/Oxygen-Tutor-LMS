<?php
namespace Oxygen\TutorElements;

class CourseLevel extends \OxygenTutorElements {

	function name() {
        return 'Level';
    }

    function tutor_button_place() {
        return "single_course";
    }

    function icon() {
		return plugin_dir_url(OTLMS_FILE) . 'assets/icons/'.basename(__FILE__, '.php').'.svg';
	}

    function render($options, $defaults, $content) {
        include_once otlms_get_template('course/level');
    }

    function class_names() {
        return array('tutor-course-level', 'oxy-tutor-element');
    }

    function controls() {
        $typography_selector = ".tutor-single-course-meta ul li.tutor-course-level";
        $this->typographySection(__('Label'), $typography_selector.' strong');
        $this->typographySection(__('Value'), $typography_selector);
    }
}

new CourseLevel();