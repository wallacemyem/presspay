<?php defined('BASEPATH') OR exit('No direct script access allowed');
class GenModel extends CI_Model
{
    public function create($table,array $data)
    {
        $this->db->insert($table,$data);
        return $this->db->insert_id();
    }
    public function update($table,array $data, $where)
    {
        if(is_array($data) && $where){
            $this->db
            ->where($where)
            ->update($table,$data);
            return $this->db->affected_rows();
        }
    }
    public function updateBool($table,$key,$val, array $where, $bool)
    {
        if($key && $val && is_array($where)){
            $this->db
            ->where($where)
            ->set($key,$val,$bool)
            ->update($table);
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
    public function fetch_multi($table,$where,$select=NULL,$orderBy=NULL)
    {
        if($where){
            if($select)
                $this->db->select($select);
                if($orderBy){
                    $this->db->order_by($orderBy);
                }
                else{
                    $this->db->order_by('id','desc');
                }
            return $this->db
                    ->where($where)
                    ->get($table)->result();
        }
    }
    public function fetch_multi_no_order($table,array $where)
    {
        if(is_array($where)){
            return $this->db
                        ->where($where)
                        ->get($table)->result();
        }
    }
    public function fetch_multi_limit($table,array $where,$limit)
    {
        if(is_array($where)){
            return $this->db
                        ->where($where)
                        ->limit($limit)
                        ->get($table)->result();
        }
    }
    public function fetch_multi_group($table,array $where,$where2=NULL,$group=NULL)
    {
        if(is_array($where)){
            $this->db->where($where2);
            if(is_array($where2)){
                $this->db->or_where($where2);
            }
            return $this->db
                        ->group_by($group)
                        ->order_by('id','asc')
                        ->get($table)->result();
        }
    }
    public function fetch_multi_select($table,array $where,$select,$distinct=NULL)
    {
        if(is_array($where)){
            $this->db->select($select);
            $this->db->where($where);
            if(@$distinct){
                $this->db->group_by($distinct);
            }
            return $this->db->get($table)->result();
        }
    }
    public function fetch_multi_group_by($table,array $where, $term)
    {
        if(is_array($where)){
            return $this->db
                        ->where($where)
                        ->group_by($term)
                        ->get($table)->result();
        }
    }
    public function fetch_multi_or_where($table,array $where, array $where2)
    {
        if(is_array($where) || is_array($where2)){
            return $this->db
                        //->select('*')
                        ->group_start()
                            ->where($where)
                            ->or_group_start()
                                ->where($where2)
                            ->group_end()
                        ->group_end()
                        ->get($table)->result();
        }
    }
    public function fetch_multi_or_where_group($table,array $where, array $where2,$term)
    {
        if(is_array($where) || is_array($where2)){
            return $this->db
                        //->select('*')
                        ->group_start()
                            ->where($where)
                            ->or_group_start()
                                ->where($where2)
                            ->group_end()
                        ->group_end()
                        ->group_by($term)
                        ->get($table)->result();
        }
    }
    public function fetch_single($table,array $where, $select = NULL)
    {
        if(is_array($where)){
            if($select){
                $this->db->select($select);
            }
            return $this->db
                        ->where($where)
                        ->get($table)->row_array();
        }
    }

    public function get_faqs($type, $select = NULL){
        
            if($select){
                $this->db->select($select);
            }
            return $this->db
                        ->where('type', $type)
                        ->get('faqs')->result();
        
    }
    
    public function fetch_single_arr($table,array $where)
    {
        if(is_array($where)){
            return $this->db
                        ->where($where)
                        ->get($table)->row();
        }
    }
    public function fetch_single_select($table,$select,array $where)
    {
        if(is_array($where)){
            return $this->db
                        ->select($select)
                        ->where($where)
                        ->get($table)->row_array();
        }
    }
    public function fetch_all($table)
    {
        return $this->db->get($table)->result();
    }
    public function fetch_all_arr($table)
    {
        return $this->db->get($table)->result_array();
    }
    public function fetch_all_select($table,$select)
    {
        $this->db->select($select);
        return $this->db->get($table)->result();
    }
    public function fetch_all_group_by($table,$groupby)
    {
        $this->db->group_by($groupby);
        return $this->db->get($table)->result();
    }
    public function checkExists(array $where, $table){
        $this->db->where($where);
        return $this->db->get($table)->result();
    }
    public function getCode($code){
        $this->db->select('code');
        $this->db->where("code",$code);
        return $this->db->get(Utils::tblActivate)->result();
    }
    public function fetchByOffset($count, $page, $cond, $tbl)
    {
        $query["items"] = $this->db
                            ->order_by('id','desc')
                            ->where($cond)
                            ->get($tbl, $count, $page)
                            ->result();
        $query['count'] = $this->getCount($tbl,$cond);
        return $query;
    }
    public function getCount($table,$cond){
        return $this->db
        ->where($cond)
        ->get($table)->num_rows();
    }
    public function fetchSum($table,$where,$name=NULL){
        if(!$name)
        $name = 'value';
        $this->db->select('SUM('.$name.') AS sum, COUNT(*) AS c');
        $this->db->where($where);
        //$this->db->group_by('DATE(created_at)');
        return $this->db->get($table)->result();
    }
    public function fetchSum2($tbl1,$tbl2,$key1,$key2,$where,$term){
        $this->db->select('SUM('.$term.') AS sum, COUNT(*) AS c');
        $this->db->join($tbl2,$tbl2.".".$key2." = $tbl1.".$key1);
        $this->db->where($where);
        //$this->db->group_by('DATE(created_at)');
        return $this->db->get($tbl1)->row_array();
    }
    public function fetchByPaginationAll($cond, $tbl1, $tbl2, $key1, $key2)
    {
        if(is_array($cond) && !empty($cond)){
            $items = $this->db
                ->select('*, '.$tbl1.'.id as alias_id')
                ->from($tbl1)
                ->join($tbl2,$tbl2.".".$key2." = $tbl1.".$key1)
                ->where($cond)
                ->get()->result();
        } 
        else{
            $items = $this->db
                ->select('*')
                ->from($tbl1)
                ->join($tbl2,$tbl2.".".$key2." = $tbl1.".$key1)
                ->get()->result();
        }
        return $items;
    }
    public function fetchByPagination($count, $page, $cond, $tbl1, $tbl2, $key1, $key2,$select=NULL,$group1=NULL,$group2=NULL)
    {
        if(is_array($cond) && !empty($cond)){
            if($select){
                $this->db->select($select);
            }
            else{
                $this->db->select('*');
            }
            if($group1){
                $this->db->group_start()
                    ->where($cond)
                    ->or_group_start()
                        ->where($group1)
                    ->group_end()
                ->group_end();
            }
            if(is_array($cond))
            $this->db->where($cond);
            $query["items"] = $this->db
                ->from($tbl1)
                ->limit($count, $page)
                ->join($tbl2,$tbl2.".".$key2." = $tbl1.".$key1)
                //->where($cond)
                ->get()->result();
            if($group1){
                $this->db->group_start()
                    ->where($cond)
                    ->or_group_start()
                        ->where($group1)
                    ->group_end()
                ->group_end();
            }
            if(is_array($cond))
            $this->db->where($cond);
            $items = $this->db
                    ->select('*')
                    ->from($tbl1)
                    ->join($tbl2,$tbl2.".".$key2." = $tbl1.".$key1)
                    //->where($cond)
                    ->get()->result();
            $query['count'] = count($items);
        } 
        else{
            if($select){
                $this->db->select($select);
            }
            else{
                $this->db->select('*');
            }
            $query["items"] = $this->db
                ->from($tbl1)
                ->limit($count, $page)
                ->join($tbl2,$tbl2.".".$key2." = $tbl1.".$key1)
                ->get()->result();
            $items = $this->db
                    ->select('*')
                    ->from($tbl1)
                    ->join($tbl2,$tbl2.".".$key2." = $tbl1.".$key1)
                    ->get()->result();
            $query['count'] = count($items);
        }
        return $query;
    }
    public function fetchByPaginationThree($count, $page, $cond, $tbl1, $tbl2, $tbl3, $key1, $key2, $key3,$key4)
    {
        if(is_array($cond) && !empty($cond)){
            $query["items"] = $this->db
                ->select('*, '.$tbl1.'.id as alias_id')
                ->from($tbl1)
                ->limit($count, $page)
                ->join($tbl2,$tbl2.".".$key2." = $tbl1.".$key1,'left')
                ->join($tbl3,$tbl3.".".$key3." = $tbl2.".$key4,'left')
                ->where($cond)
                ->get()->result();
            $items = $this->db
                    ->select('*')
                    ->from($tbl1)
                    ->join($tbl2,$tbl2.".".$key2." = $tbl1.".$key1,'left')
                    ->join($tbl3,$tbl3.".".$key3." = $tbl2.".$key4,'left')
                    ->where($cond)
                    ->get()->result();
            $query['count'] = count($items);
        } 
        else{
            $query["items"] = $this->db
                ->select('*, '.$tbl1.'.id as alias_id')
                ->from($tbl1)
                ->limit($count, $page)
                ->join($tbl2,$tbl2.".".$key2." = $tbl1.".$key1,'left')
                ->join($tbl3,$tbl3.".".$key3." = $tbl1.".$key1,'left')
                ->get()->result();
            $items = $this->db
                    ->select('*')
                    ->from($tbl1)
                    ->join($tbl2,$tbl2.".".$key2." = $tbl1.".$key1,'left')
                    ->join($tbl3,$tbl3.".".$key3." = $tbl1.".$key1,'left')
                    ->get()->result();
            $query['count'] = count($items);
        }
        return $query;
    }
    public function fetchNeutralPagination($count, $page, $cond = NULL, $tbl=NULL)
    {
        if(is_array($cond) && !empty($cond)){
            $query["items"] = $this->db
                ->select('*')
                ->from($tbl)
                ->limit($count, $page)
                ->where($cond)
                ->order_by('id','desc')
                ->get()->result();
            $items = $this->db
                    ->select('*')
                    ->from($tbl)
                    ->where($cond)
                    ->get()->result();
            $query['count'] = count($items);
        } 
        else{
            $query["items"] = $this->db
                ->select('*')
                ->from($tbl)
                ->limit($count, $page)
                ->order_by('id','desc')                
                ->get()->result();
            $items = $this->db
                    ->select('*')
                    ->from($tbl)
                    ->get()->result();
            $query['count'] = count($items);
        }
        return $query;
    }
    public function fetchByPaginationSingle($count, $page, $cond, $tbl, $select=NULL)
    {
        if($tbl=='fam_assets'){
            if(!@$cond['isDel !='] && !@$cond['isDel'] )
                $cond['isDel !='] = '1';
            if(!@$cond['isDisposed !='] && !@$cond['isDisposed'] )
                $cond['isDisposed !='] = '1';
        }
        $this->db->order_by('id','desc');
        if(is_array($cond)){
            if($select){
                $this->db->select($select);
            }
            else{
                $this->db->select('*');
            }
            $query["items"] = $this->db
                ->from($tbl)
                ->limit($count, $page)
                ->where($cond)
                ->get()->result();
            $items = $this->db
                    ->select('*')
                    ->from($tbl)
                    ->where($cond)
                    ->get()->result();
            $query['count'] = count($items);
        } 
        else{
            if($select){
                $this->db->select($select);
            }
            else{
                $this->db->select('*');
            }
            $query["items"] = $this->db
                ->from($tbl)
                ->limit($count, $page)
                ->get()->result();
            $items = $this->db
                    ->select('*')
                    ->from($tbl)
                    ->get()->result();
            $query['count'] = count($items);
        }
        return $query;
    }
    public function fetchByPaginationSingleJoin($count, $page, $cond, $tbl,$tbl2,$key,$key2, $select=NULL,$orderBy=NULL,$groupBy=NULL)
    {
        if($tbl=='fam_assets' || $tbl2=='fam_assets'){
            if(!@$cond['isDel !='] && !@$cond['isDel'] )
                $cond['isDel !='] = '1';
            if(!@$cond['isDisposed !='] && !@$cond['isDisposed'] )
                $cond['isDisposed !='] = '1';
        }
        if(!$orderBy){
            $this->db->order_by('id','desc');
        }
        if($groupBy){
            $this->db->group_by($groupBy);
        }
        else{
            $groupBy = '';
        }
        if(is_array($cond)){
            if($select){
                $this->db->select($select);
            }
            else{
                $this->db->select('*');
            }
            if($orderBy){
                $this->db->order_by($orderBy);
            }
            $query["items"] = $this->db
                ->from($tbl)
                ->limit($count, $page)
                ->join($tbl2,$tbl2.".".$key2." = $tbl.".$key)
                ->where($cond)
                ->get()->result();
            if($groupBy){
                $items = $this->db
                    ->select('*')
                    ->from($tbl)
                    ->join($tbl2,$tbl2.".".$key2." = $tbl.".$key)
                    ->where($cond)
                    ->group_by($groupBy)
                    ->get()->result();
            }
            else{
                $items = $this->db
                    ->select('*')
                    ->from($tbl)
                    ->join($tbl2,$tbl2.".".$key2." = $tbl.".$key)
                    ->where($cond)
                    ->group_by($groupBy)
                    ->get()->result();
            }
            $query['count'] = count($items);
            $query['all'] = $items;
        } 
        else{
            if($select){
                $this->db->select($select);
            }
            else{
                $this->db->select('*');
            }
            if($orderBy){
                $this->db->order_by($orderBy);
            }
            $query["items"] = $this->db
                ->from($tbl)
                ->limit($count, $page)
                ->join($tbl2,$tbl2.".".$key2." = $tbl.".$key)
                ->get()->result();
            $items = $this->db
                    ->select('*')
                    ->from($tbl)
                    ->group_by(@$groupBy)
                    ->join($tbl2,$tbl2.".".$key2." = $tbl.".$key)
                    ->get()->result();
            $query['count'] = count($items);
            $query['all'] = $items;
        }
        return $query;
    }
    public function fetchByJoinSingle($cond, $tbl1, $tbl2, $key1, $key2,$select=NULL)
    {
        if(is_array($cond) && !empty($cond)){
            if($select)
                $this->db->select($select);
            else
                $this->db->select('*, '.$tbl1.'.id as alias_id');
            return $this->db
                ->from($tbl1)
                ->join($tbl2,$tbl2.".".$key2." = $tbl1.".$key1)
                ->where($cond)
                ->get()->row_array();
        } 
    }
    public function fetchByJoinMulti($cond, $tbl1, $tbl2, $key1, $key2,$select=NULL,$group=NULL)
    {
        if(is_array($cond) && !empty($cond)){
            if($select){
                $this->db->select($select);
            }
            else{
                $this->db->select('*, '.$tbl1.'.id as alias_id');
            }
            if($group){
                $this->db->group_by($group);
            }
            return $this->db
                ->from($tbl1)
                ->join($tbl2,$tbl2.".".$key2." = $tbl1.".$key1)
                ->where($cond)
                ->get()->result();
        } 
        else{
            if($select){
                $this->db->select($select);
            }
            else{
                $this->db->select('*, '.$tbl1.'.id as alias_id');
            }
            if($group){
                $this->db->group_by($group);
            }
            return $this->db
                ->from($tbl1)
                ->join($tbl2,$tbl2.".".$key2." = $tbl1.".$key1)
                ->get()->result();
        } 
    }
    public function fetchByJoinMultiThree($cond, $tbl1, $tbl2, $tbl3, $key1, $key2, $key3,$key4,$orderBy=NULL,$select=NULL)
    {
        if(is_array($cond) && !empty($cond)){
            if($orderBy){
                $this->db->order_by($orderBy);
            }
            if($select){
                $q = $select;
            }
            $query = $this->db
                ->select('*, '.@$select.' '.$tbl1.'.id as alias_id')
                ->from($tbl1)
                ->join($tbl2,$tbl2.".".$key2." = $tbl1.".$key1,'left')
                ->join($tbl3,$tbl3.".".$key3." = $tbl1.".$key4,'left')
                ->where($cond)
                ->get()->result();
        }
        return $query;
    }
    public function fetchByJoinMultiFour($cond, $tbl1, $tbl2, $tbl3,$tbl4, $key1, $key2, $key3,$key4,$key5,$key6)
    {
        if(is_array($cond) && !empty($cond)){
            $query = $this->db
                ->select('*, '.$tbl1.'.id as alias_id')
                ->from($tbl1)
                ->join($tbl2,$tbl2.".".$key2." = $tbl1.".$key1,'left')
                ->join($tbl3,$tbl3.".".$key3." = $tbl1.".$key4,'left')
                ->join($tbl4,$tbl4.".".$key5." = $tbl2.".$key6,'left')
                ->where($cond)
                ->get()->result();
        }
        return $query;
    }
    public function getCities(){
        return $this->db
            ->select('city')
            ->from(Utils::tblTalents)
            ->distinct()
            ->get()->result();
    }
    public function fetch_multi_key_where($table,$select,$where){
        $this->db->select($select);
        $this->db->where($where);
        return $this->db->get($table)->result();
    }
    public function fetch_all_key_where($table,$select,$where){
        $this->db->select($select);
        $this->db->where($where);
        return $this->db->get($table)->result();
    }
    public function fetch_all_key($table,$select){
        $this->db->select($select);
        return $this->db->get($table)->result();
    }
    public function fetchSumNoJoin($tbl1,$where=NULL,$term=NULL){
        $this->db->select('SUM('.$term.') AS sum, COUNT(*) AS c');
        if($where)
            $this->db->where($where);
        //$this->db->group_by('DATE(created_at)');
        return $this->db->get($tbl1)->row_array();
    }
    public function fetch_by_terms($select,$term,$tbl,$key,$where=NULL){
        $field = "";
        if(is_array($select)){
            foreach($select as $s){
                $field .=$s.',';
            }
        }
        else
            $field = $select;
        if(is_array($where)){
            $this->db->where($where);
        }
        if(is_array($key)){
            $this->db->group_start();
            for($i=0;$i<count($key);$i++){
                $this->db->or_like($key[$i],$term);
            }
            $this->db->group_end();
        }
        else{
            $this->db->like($key,$term,'both');
        }
        return $this->db
                    ->select($field)
                    ->get($tbl)->result();
    }
    public function fetch_by_terms_join($select,$term,$tbl,$key1,$tbl2,$key2,$key,$where=NULL){
        $field = "";
        if(is_array($select)){
            foreach($select as $s){
                $field .=$s.',';
            }
        }
        else
            $field = $select;
        if(is_array($where)){
            $this->db->where($where);
        }
        if(is_array($key)){
            $this->db->group_start();
            for($i=0;$i<count($key);$i++){
                $this->db->or_like($tbl2.'.'.$key[$i],$term);
            }
            $this->db->group_end();
        }
        else{
            $this->db->like($tbl2.'.'.$key,$term,'both');
        }
        return $this->db
                ->select($field)
                ->join($tbl2,$tbl2.".".$key2." = $tbl.".$key1)
                ->get($tbl)->result();
    }
    public function fetch_multi_group_by_or($table,array $where,array $where2, $group_by){
        return $this->db
            ->where($where)
            ->or_where($where2)
            ->order_by('id','desc')
            ->group_by($group_by)
            ->get($table)->result();
    }
    public function fetch_single_three($table,array $where,$select=NULL,$where2=NULL,$where3=NULL)
    {
        if($select){
            $this->db->select($select);
        }
        if(is_array($where)){
            $this->db->where($where);
            if(is_array($where2)){
                $this->db->or_where($where2);
            }
            if(is_array($where3)){
                $this->db->or_where($where3);
            }
            return $this->db
                        ->get($table)->row_array();
        }
    }
}