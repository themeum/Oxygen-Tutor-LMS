<?php
namespace Oxygen\TutorElements;

class CourseLevel extends \OxygenTutorElements {

	function name() {
        return 'Course Level';
    }

    function tutor_button_place() {
        return "single_course";
    }

    /* function icon() {
        return plugin_dir_url(__FILE__) . 'assets/'.basename(__FILE__, '.php').'.svg';
    } */

    function render($options, $defaults, $content) {
        include_once otlms_get_template('course/level');
    }


    function class_names() {
        return array('tutor-course-level', 'oxy-tutor-element');
    }


    function controls() {

    }

}

new CourseLevel();