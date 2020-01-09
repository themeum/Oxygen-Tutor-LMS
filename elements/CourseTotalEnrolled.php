<?php
namespace Oxygen\TutorElements;

class CourseTotalEnrolled extends \OxygenTutorElements {

	function name() {
        return 'Course Total Enrolled';
    }

    function tutor_button_place() {
        return "single_course";
    }

    /* function icon() {
        return plugin_dir_url(__FILE__) . 'assets/'.basename(__FILE__, '.php').'.svg';
    } */

    function render($options, $defaults, $content) {
        include_once otlms_get_template('course/total-enrolled');
    }

    function class_names() {
        return array('tutor-course-total-enrolled', 'oxy-tutor-element');
    }


    function controls() {

    }

}

new CourseTotalEnrolled();