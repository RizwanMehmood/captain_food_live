<?php

class Common_Model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->db->flush_cache();
    }

    function save($table, $data) {
        $this->db->insert($table, $data);
        return $this->db->insert_id();
    }

    function update($table, $data, $where) {
        $this->db->update($table, $data, $where);
        return $this->db->affected_rows();
    }

    function find($table, $select = false, $where = false, $joins = false, $joins_on = false, $group = false, $order = false, $having = false, $limit1 = false, $limit2 = false, $where_in = FALSE, $where_in_col = FALSE) {
        if ($select) {
            $this->db->select($select,false);
        } else {
            $this->db->select('*');
        }

        if (is_array($joins) && is_array($joins_on)) {
            $index = 0;
            foreach ($joins as $join) {
                $this->db->join($join, $joins_on[$index], 'left');
                $index++;
            }
        } else {
            if ($joins && $joins_on) {
                $this->db->join($joins, $joins_on, 'left');
            }
        }

        if ($where) {
            //$where array or string
            $this->db->where($where);
        }
        if ($where_in) {
            //$where array or string
            $this->db->where_in($where_in_col, $where_in);
        }
        if ($group) {
            //$group array or string
            $this->db->group_by($group);
        }
        if ($order) {
            //$order string
            $this->db->order_by($order);
        }
        if ($having) {
            //$having string or array
            $this->db->having($having);
        }
        if (!$limit2 && $limit1) {
            $this->db->limit($limit1);
        } else {
            if ($limit1) {
                $this->db->limit($limit1, $limit2);
            }
        }
        $query = $this->db->get($table);
//]      echo $this->db->last_query(); echo '<br />';
//       echo mysql_error();
//        die;
       
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    function delete($table, $where = false) {
        $this->db->delete($table, $where);
        return $this->db->affected_rows();
    }
    
    
    function fetchAll($table = FALSE) {
        $result = $this->db->get($table)->result_array();
        return $result;
    }
    public function countByCondition($table,$where) {
        $result = $this->db->select('*')
                ->from($table)
                ->where($where)
                ->count_all_results();
        return $result;
    }
    public function findByCondition($table,$fields,$where) {
        $result = $this->db->select($fields)
                ->from($table)
                ->where($where)
                ->get()
                ->result_array();
        return $result;
    }
    public function getMax($table,$column,$where = FALSE)
    {
        $result = $this->db->select_max($column)
                ->from($table)
                ->where($where)
                ->get()
                ->result_array();
        return $result;
        
    }
    public function updateByCondition($table,$where, $data) {
        $this->db->where($where);
        $this->db->update($table, $data);

        return $this->db->affected_rows();
    }
    
    public function execute_exact_string($query)
    {
        $res = $this->db->query($query)
                    ->result_array();
            
            return $res;
    }
    
    public function execute_exact_insert_string($query)
    {
        $res = $this->db->query($query);
            
            return $res;
    }
    public function execute_exact_string_update($query)
    {
        $res = $this->db->query($query);
            
            return $res;
    }
    
    public function execute_mysql_query($query)
    {
      $res = mysqli_multi_query($this->db->conn_id,$query) or die(mysqli_error($this->db->conn_id));
      $this->db->close();


        return $res;
    }
    
    

}