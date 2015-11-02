<?php

class Inventorymodel extends CI_Model
{

    //-------------------------------------------------------Iteration 3 functions--------------------------------------------------------------------------


    /**
     *
     * Store record in database
     *
     * @param $data can store data of different types
     * @param $data contains user entered values
     * @return boolean
     *
     */
    public function insertDB($data1,$data)
    {
        $this->db->insert($data1['dat_table'], $data);
    }



    /**
     *
     * Update record in database
     *
     * @param $data contains user entered new vales
     * @param $update_key contains the key to update particular record
     *
     * @return boolean
     *
     */
    public function updateDB($table,$data,$where)
    {
        $this->db->update($table['dat_table'], $data, $where);
    }



    /**
     *
     * Delete record in database
     *
     * @param $delete_key is the user entered unique key to delete the record
     *
     * @return boolean
     *
     */
    public function deleteDB($table,$where)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }



    public function  searchItem($itemID)
    {
        $query = $this->db->query("SELECT * FROM `inventory_masterdb` WHERE `item_id`='$itemID'");

        if ($query->num_rows() > 0) {
            $row = $query->row();
            $output[] = array( $row->item_name, $row->item_description);
        }
        return $output;
    }
}

//--------------------------------------------------------------------------------------------------------------------------------------------------
