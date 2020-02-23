<?php
class Welcome_Model extends CI_Model{
    
    public function __construct() {
        parent::__construct();
        
    }

    public function loadlongestopeningcrawl(){
        
        $sql = "select * from films ORDER BY LENGTH(opening_crawl) DESC limit 1"; 
        // $this->db->query($sql, array('code', 'php'));
        $query = $this->db->query($sql);
        if($query){
            if($query->num_rows() > 0){
                return $query->result();
            }
        }

    }
    public function loadmostappearance(){
        
        $sql = "select a.title,c.name,count(1) count from films a
        join films_characters b on a.id = b.film_id
        join people c on b.people_id = c.id
        group by name order by count desc limit 1"; 
        // $this->db->query($sql, array('code', 'php'));
        $query = $this->db->query($sql);
        if($query){
            if($query->num_rows() > 0){
                return $query->result();
            }
        }

    }

    public function loadmostappearancespecies(){
        
        $sql = "select a.title,c.name,e.name species,count(1) count from films a
        join films_characters b on a.id = b.film_id
        join people c on b.people_id = c.id
        join species_people d on c.id = d.people_id
        join species e on d.species_id = e.id
        group by name order by count desc limit 1"; 
        // $this->db->query($sql, array('code', 'php'));
        $query = $this->db->query($sql);
        if($query){
            if($query->num_rows() > 0){
                return $query->result();
            }
        }

    }

    public function loadmostpilot(){
        
        $sql = "select title,d.name,e.name  planetname,count(1) count,g.name species from films a
        join films_vehicles b on a.id = b.film_id
        join vehicles_pilots c on b.vehicle_id = c.vehicle_id
        join people d on c.people_id = d.id
        join planets e on d.homeworld = e.id
        join species_people f on d.id = f.people_id
        join species g on f.species_id = g.id
        group by name order by count desc limit 1"; 
        // $this->db->query($sql, array('code', 'php'));
        $query = $this->db->query($sql);
        if($query){
            if($query->num_rows() > 0){
                return $query->result();
            }
        }

    }
    

    
    
}