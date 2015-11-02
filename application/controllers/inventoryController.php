<?php defined('BASEPATH') OR exit('No direct script access allowed');

class InventoryController extends CI_Controller
{
    public function index()
    {
        $this->addItem();
    }

    function __construct()
    {
        parent::__construct();
        $this->load->model('staff_model');
    }


    //-------------------------------------------------------Iteration 3 views--------------------------------------------------------------------------


    public function addItem()
    {

        $data['title'] = 'DSSC Management';
        $this->load->view('thariq/style_Resources/header4', $data);
        $this->load->view('thariq/style_Resources/menu_inventory');
        $this->load->view('thariq/view_add_item');
        $this->load->view('thariq/style_Resources/footer');
    }

    public function searchItem()
    {

        $data['title'] = 'DSSC Management';
        $this->load->view('thariq/style_Resources/header4', $data);
        $this->load->view('thariq/style_Resources/menu_inventory');
        $this->load->view('thariq/view_inventory_searchItem');
        $this->load->view('thariq/style_Resources/footer');
    }


    //--------------------------------------------------------------------------------------------------------------------------------------------------


    //-------------------------------------------------------Iteration 3 functions--------------------------------------------------------------------------

    public function dbSelect()
    {
        $query = mysql_query("SELECT * FROM `inventory`");
        while ($fetch = mysql_fetch_array($query)) {
            $output[] = array($fetch['item_id'], $fetch['item_name'], $fetch['item_condition'], $fetch['supplier_name'], $fetch['supplier_phone'], $fetch['supplier_mail'], $fetch['contact_person'], $fetch['quantity'], $fetch['unit_price'], $fetch['total_price'], $fetch['date_ordered'], $fetch['date_received'], $fetch['warranty'], $fetch['payment_mode']);
        }
        echo json_encode($output);
    }


    /**
     *
     * addItems()
     *
     * Save inventory details
     * Get input from user and assigning to database variables
     * @return boolean
     *
     */
    public function addItems()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('txt_inventory_SupplierEmail', 'Email', 'trim|required|valid_email');


        if ($this->form_validation->run() == FALSE) {
            $message = "<strong>Failed</strong>";
            $this->json_response(FALSE, $message);
        } else {
            $this->load->model('inventorymodel');
            $data['dat_table'] = 'inventory';

            $newRaw = array('item_id' => $_POST['txt_inventory_ItemID'],
                'item_name' => $_POST['txt_inventory_ItemName'],
                'item_description' => $_POST['txt_inventory_ItemDesc'],
                'quantity' => $_POST['txt_inventory_Quantity'],
                'date_ordered' => $_POST['txt_inventory_DateOrdered'],
                'supplier_name' => $_POST['txt_inventory_SupplierName'],
                'supplier_phone' => $_POST['txt_inventory_SupplierContactNo'],
                'supplier_addr' => $_POST['txt_inventory_SupplierAddr'],
                'supplier_mail' => $_POST['txt_inventory_SupplierEmail'],
                'contact_person' => $_POST['txt_inventory_ContactPerson']
            );

            $this->inventorymodel->insertDB($data, $newRaw);
            $message = "<strong>Success</strong>!";
            $this->json_response(TRUE, $message);

        }
    }

    /*
    * encode massage to json format and push that into view
    */
    private function json_response($successful, $message)
    {
        echo json_encode(array(
            'isSuccessful' => $successful,
            'message' => $message
        ));
    }


    /**
     *
     * addPrice()
     *
     * Select inventory record to update
     * Get input from user and search particular record
     * @return boolean
     *
     */
    public function addPrice()
    {
        $this->load->model('inventorymodel');
        $data['dat_table'] = 'inventory';

        $where = array('item_id' => $_POST['txt_inventory_ItemID']
        );
        $newRaw = array('unit_price' => $_POST['txt_inventory_UnitPrice'],
            'total_price' => $_POST['txt_inventory_TotalPrice'],
            'date_received' => $_POST['txt_inventory_DateReceived'],
            'warranty' => $_POST['txt_inventory_Warranty'],
            'payment_mode' => $_POST['txt_inventory_PaymentMode'],
            'item_condition' => $_POST['txt_inventory_Condition']
        );

        $this->inventorymodel->updateDB($data, $newRaw, $where);

        $message = "<strong>Price</strong> Added!";
        $this->json_response(TRUE, $message);
    }


    /**
     *
     * removeItem()
     *
     * Delete inventory details
     * Get input from user and delete existing record
     * @return boolean
     *
     */
    public function removeItem()
    {
        $item = stripcslashes($_POST['item']);
        $item = json_decode($item, TRUE);

        $itemID = $item['itemID'];

        $this->load->model('inventorymodel');
        $data['dat_table'] = 'inventory';

        $where = array('item_id' => $itemID
        );

        $this->inventorymodel->deleteDB($data, $where);

        $message = "<strong>Deleted</strong>!";
        $this->json_response(TRUE, $message);
    }


//--------------------------------------------------------------------------------------------------------------------------------------------------


    public function searchItems()
    {
        $itemID = stripcslashes($_POST['itemID']);
        $itemID = json_decode($itemID, TRUE);
        $itemIDs = $itemID['itemID'];
        $this->load->model('inventorymodel');
        $message = $this->inventorymodel->searchItem($itemIDs);
        $this->json_response(TRUE, $message);
    }

}