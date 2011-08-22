<?php
defined('MOODLE_INTERNAL') || die();

$publishes = array(
    'maharaviewsubmission' => array(
        'apiversion' => 1,
        'classname'  => 'maharaviewsubmission_mnetservice',
        'filename'   => 'mnetlib.php',
        'methods'    => array(
            'donothing',
        ),
    ),
);

$subscribes = array(
    'maharaviewsubmission' => array(
        'get_views_for_user' => 'mod/mahara/rpclib.php/get_views_for_user',
        'submit_view_for_assignment' => 'mod/mahara/rpclib.php/submit_view_for_assessment',
        'release_submitted_view' => 'mod/mahara/rpclib.php/release_submitted_view',
    ),
);
