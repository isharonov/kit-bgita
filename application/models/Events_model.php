<?php

class Events_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function getYears() {
        $query = $this->db->query('SELECT DISTINCT `year` FROM `events`');
        $result = $query->result();
        $years = [];

        foreach ($result as $value) {
            $years[] = $value->year;
        }
        return $years;
    }

    public function getEvents($year) {
        $query = $this->db->query(
            "SELECT `title`, `text`, `poster`, `poster_desc`, `is_portrait`, `action` 
            FROM `events` 
            WHERE `year` = $year");
 
        return $query->result();
    }

    public function getGraduates($year) {
        $query = $this->db->query(
            "SELECT `name`, `vk_id`, `thesis`, `is_red`
            FROM `graduates` 
            WHERE `year` = $year");
 
        return $query->result();
    }

}