<?php defined('BASEPATH') OR exit('No direct script access allowed');
class UserModel extends CI_Model
{
    public function activate($id)
    {
        $this->db->where(array('id'=>$id));
        $this->db->update(Utils::tblUser,array('status'=>'1'));
        return $this->db->affected_rows();
    }
}