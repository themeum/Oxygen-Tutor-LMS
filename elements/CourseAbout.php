<?php
namespace Oxygen\TutorElements;

class CourseAbout extends \OxygenTutorElements {

	function name() {
        return 'Course Description';
    }

    function tutor_button_place() {
        return "single_course";
    }

    function icon() {
		return plugin_dir_url(OTLMS_FILE) . 'assets/icons/'.basename(__FILE__, '.php').'.svg';
	}

    function render($options, $defaults, $content) {
        include_once otlms_get_template('course/about');
    }

    function class_names() {
        return array('tutor-course-about', 'oxy-tutor-element');
    }

    function controls() {

        $selector = '.oxy-course-description';

		/* Course about */
		$course_about = $this->addControlSection("about", __("Course Description"), "assets/icon.png", $this);
		$about_selector =  $selector." .tutor-course-details-content";
        $course_about->typographySection(__('Heading'), $about_selector.' h2 ', $this);
		$course_about->typographySection(__('Paragraph'), $about_selector.' div ', $this);
    }

}

new CourseAbout();