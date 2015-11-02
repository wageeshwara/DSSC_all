<?php

class Staff_Model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

//-------------------------------------------------------Iteration 1 functions--------------------------------------------------------------------------

    public function save($data)
    {

        $this->db->insert('teacher', $data);

    }

    public function search($key){
        return $this->db->get_where('teacher',array('Emp_ID'=>$key))->result();
    }

    public function searchUpdate($key){
        return $this->db->get_where('teacher',array('Emp_ID'=>$key))->result();
    }

   /* public function update($table,$data,$where){

        $this->db->update($table, $data, $where);
    }*/

    public function update($data,$update_key){

        $this->db->where('Emp_ID', $update_key );
        $this->db->update('teacher',$data);
    }

    public function delete($delete_key){

        $this->db->where('Emp_ID', $delete_key );
        $this->db->delete('teacher');
    }

//--------------------------------------------------------------------------------------------------------------------------------------------------



//-------------------------------------------------------Iteration 2 functions--------------------------------------------------------------------------


    public function nonAcc_save($data)
    {

        $this->db->insert('non_acstaff', $data);

    }


    public function nonAcc_search($key){

        return $this->db->get_where('non_acstaff',array('NonAcc_Emp_ID'=>$key))->result();

    }

    public function nonAcc_searchUpdate($key){
        return $this->db->get_where('non_acstaff',array('NonAcc_Emp_ID'=>$key))->result();
    }


    public function nonAcc_update($data,$update_key){

        $this->db->where('NonAcc_Emp_ID', $update_key );
        $this->db->update('non_acstaff',$data);
    }


    public function nonAcc_delete($delete_key){

        $this->db->where('NonAcc_Emp_ID', $delete_key );
        $this->db->delete('non_acstaff');
    }



    public function student_save($data)
    {

        $this->db->insert('student', $data);

    }


    public function student_search($key){
        return $this->db->get_where('student',array('Index_No'=>$key))->result();
    }


    public function student_searchUpdate($key){

        return $this->db->get_where('student',array('Index_No'=>$key))->result();
    }


    public function student_update($data,$update_key){

        $this->db->where('Index_No', $update_key );
        $this->db->update('student',$data);
    }


    public function student_delete($delete_key){

        $this->db->where('Index_No', $delete_key );
        $this->db->delete('student');

    }
//--------------------------------------------------------------------------------------------------------------------------------------------------




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
    public function inventory_save($data)
    {
        $this->db->insert('inventory', $data);

    }



    /**
     *
     * Search record in database
     *
     * @param $key is the unique search key
     * @param $key contains user entered key needed to be search by
     *
     * @return boolean
     *
     */
    public function inventory_search($key){

        return $this->db->get_where('inventory',array('item_id'=>$key))->result();

    }



    /**
     *
     * Search record in database
     *
     * @param $key is the unique key to search existing record
     * @param $key contains user entered key needed to be search in order to update record
     *
     * @return boolean
     *
     */
    public function inventory_searchUpdate($key){
        return $this->db->get_where('inventory',array('item_id'=>$key))->result();
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
    public function inventory_update($data,$update_key){

        $this->db->where('item_id', $update_key );
        $this->db->update('inventory',$data);
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
    public function inventory_delete($delete_key){

        $this->db->where('item_id', $delete_key );
        $this->db->delete('inventory');
    }



    /**
     *
     * Store record in database
     *
     * @param $data can store data of different types
     * @param $data contains user entered values
     * @return boolean
     *
     */
    public function inventory_masterDBsave($data)
    {
        $this->db->insert('inventory_masterdb', $data);

    }


    /**
     *
     * Search record in database
     *
     * @param $key is the unique search key
     * @param $key contains user entered key needed to be search by
     *
     * @return boolean
     *
     */
    public function inventory_MasterDBsearch($key){

        return $this->db->get_where('inventory_masterdb',array('item_id'=>$key))->result();

    }


    /**
     *
     * Search record in database
     *
     * @param $key is the unique search key
     * @param $key contains user entered key needed to be search by
     *
     * @return boolean
     *
     */
    public function emergency_searchIndex($key){
        return $this->db->get_where('student',array('Index_No'=>$key))->result();
    }



    /**
     *
     * Search record in database
     *
     * @param $key is the unique search key
     * @param $key contains user entered key needed to be search by
     *
     * @return boolean
     *

    public function emergency_searchName($key){
        return $this->db->get_where('student',array('Student_FullName'=>$key))->result();
    }*/
    public function emergency_searchName($key){


        $this->db->from('student');
        $this->db->like('Student_FullName', $key);
        return $this->db->get()->result();

    }



    /**
     *
     * Search record in database
     *
     * @param $key is the unique search key
     * @param $key contains user entered key needed to be search by
     *
     * @return boolean
     *
     */
    public function emergency_searchGrade($key){


        $this->db->from('student');
        $this->db->like('Student_Grade', $key);
        return $this->db->get()->result();

    }


//--------------------------------------------------------------------------------------------------------------------------------------------------


//-------------------------------------------------------Iteration 4 functions--------------------------------------------------------------------------


    /**
     *
     * Store record in database
     *
     * @param $data can store data of different types
     * @param $data contains user entered values
     * @return boolean
     *
     */
    public function fees_save($data)
    {
        $this->db->insert('fees', $data);

    }



    /**
     *
     * Search record in database
     *
     * @param $key is the unique search key
     * @param $key contains user entered key needed to be search by
     *
     * @return boolean
     *
     */
    public function fees_search($key){

        return $this->db->get_where('fees',array('index_no'=>$key))->result();

    }



    /**
     *
     * Search record in database
     *
     * @param $key is the unique key to search existing record
     * @param $key contains user entered key needed to be search in order to update record
     *
     * @return boolean
     *
     */
    public function fees_searchUpdate($key){
        return $this->db->get_where('fees',array('index_no'=>$key))->result();
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
    public function fees_update($data,$update_key){

        $this->db->where('index_no', $update_key );
        $this->db->update('fees',$data);
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
    public function fees_delete($delete_key){

        $this->db->where('index_no', $delete_key );
        $this->db->delete('fees');
    }



    public function fees_search_receiptNo($key){

        return $this->db->get_where('fees',array('receipt_no'=>$key))->result();

    }


//--------------------------------------------------------------------------------------------------------------------------------------------------

}