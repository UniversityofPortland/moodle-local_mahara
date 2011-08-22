<?php
defined('MOODLE_INTERNAL') || die();

$publishes = array(
    'maharaviewsubmission' => array(
        'apiversion' => 1,
        'classname'  => 'maharaviewsubmission_mnetservice',
        'filename'   => 'mnetlib.php',
        'methods'    => array(
            'get_views_for_user',
            'submit_view_for_assessment',
            'release_submitted_view',
        ),
    ),
);
