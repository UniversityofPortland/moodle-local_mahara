<?php

class maharaviewsubmission_mnetservice {
    public function get_views_for_user($username, $query=null) {
        return new stdClass();
    }

    public function submit_view_for_assessment($username, $viewid) {
        return array();
    }

    public function release_submitted_view($viewid, $assessmentdata=array(), $username) {
    }
}
