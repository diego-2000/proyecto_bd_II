<?php
    class Post extends CI_Model{

       public function getPost(){
            return $this->db->get('fecha_def')->result();
       }   


       public function consulta(){
        $this->db->select('*');
        $this->db->from('paciente_covid_19');
        $this->db->join('fecha_def', 'fecha_def.id = paciente_covid_19.id');
        return $query = $this->db->get()->result();
      }   
       
    }

?>