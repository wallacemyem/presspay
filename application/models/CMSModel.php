<?php defined('BASEPATH') OR exit('No direct script access allowed');
class CMSModel extends CI_Model
{
    public function create($table,array $data)
    {
        $this->db->insert($table,$data);
        return $this->db->insert_id();
    }
    public function update($table,array $data, array $where)
    {
        if(is_array($data) && is_array($where)){
            $this->db
            ->where($where)
            ->update($table,$data);
            return $this->db->affected_rows();
        }
    }
    public function delete($table,array $where)
    {
        if(is_array($where)){
            $this->db
            ->where($where)
            ->delete($table);
            return $this->db->affected_rows();
        }
    }
    public function fetch_multi($table,array $where)
    {
        if(is_array($where)){
            return $this->db
                        ->where($where)
                        ->get($table)->result();
        }
    }
    public function fetch_single($table,array $where)
    {
        if(is_array($where)){
            return $this->db
                        ->where($where)
                        ->get($table)->row_array();
        }
    }
    public function fetch_all($table)
    {
        return $this->db->get($table)->result();
    }
    public function checkExists(array $where, $table){
        $this->db->where($where);
        return $this->db->get($table)->result();
    }
}