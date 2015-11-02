<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SportsMeetController extends CI_Controller
{

    function __construct() {
        parent::__construct();
        $this->load->model('Sportsmeetmodel');
    }

    public function index()
    {
        $data['title'] = 'DSSC Management';
        $this->load->view('asela3/style_Resources/header', $data);
        $this->load->view('asela3/style_Resources/menu');
        $this->load->view('asela3/sportsMeetHome');
        $this->load->view('asela3/style_Resources/footer');
        //$this->viewHousePanel();
    }

    /*view houses after clicking sportsmeet home buttons*/

    public  function houses()
    {
        $data['title'] = 'DSSC Management';
        $this->load->view('asela3/style_Resources/header', $data);
        $this->load->view('asela3/style_Resources/menu');
        $this->load->view('asela3/houses');
        $this->load->view('asela3/style_Resources/footer');
    }


    public function viewHome(){
        $data['title'] = 'DSSC Management';
        $this->load->view('asela3/style_Resources/header', $data);
        $this->load->view('asela3/style_Resources/menu');
        $this->load->view('asela3/sportsMeetHome');
        $this->load->view('asela3/style_Resources/footer');
    }

    public  function housesMeththa()
    {
        $data['title'] = 'DSSC Management';
        $this->load->view('asela3/style_Resources/header', $data);
        $this->load->view('asela3/style_Resources/menu');
        $this->load->view('asela3/houseMeththa');
        $this->load->view('asela3/style_Resources/footer');
    }

    public  function housesWeera()
    {
        $data['title'] = 'DSSC Management';
        $this->load->view('asela3/style_Resources/header', $data);
        $this->load->view('asela3/style_Resources/menu');
        $this->load->view('asela3/houseWeera');
        $this->load->view('asela3/style_Resources/footer');
    }

    public  function housesShantha()
    {
        $data['title'] = 'DSSC Management';
        $this->load->view('asela3/style_Resources/header', $data);
        $this->load->view('asela3/style_Resources/menu');
        $this->load->view('asela3/houseShantha');
        $this->load->view('asela3/style_Resources/footer');
    }

    /*view house panel form*/

    public function viewHousePanel() //view house panel form
    {

        $data['title'] = 'DSSC Management';
        $this->load->view('asela3/style_Resources/header', $data);
        $this->load->view('asela3/style_Resources/menu');
        $this->load->view('asela3/HousePanel');
        $this->load->view('asela3/style_Resources/footer');
    }

    public function viewHousePanelMeththa() //view Meththa house panel form
    {

        $data['title'] = 'DSSC Management';
        $this->load->view('asela3/style_Resources/header', $data);
        $this->load->view('asela3/style_Resources/menu');
        $this->load->view('asela3/HousePanelMeththa');
        $this->load->view('asela3/style_Resources/footer');
    }

    public function viewHousePanelWeera() //view Weera house panel form
    {

        $data['title'] = 'DSSC Management';
        $this->load->view('asela3/style_Resources/header', $data);
        $this->load->view('asela3/style_Resources/menu');
        $this->load->view('asela3/HousePanelWeera');
        $this->load->view('asela3/style_Resources/footer');
    }

    public function viewHousePanelShantha() //view Shantha house panel form
    {

        $data['title'] = 'DSSC Management';
        $this->load->view('asela3/style_Resources/header', $data);
        $this->load->view('asela3/style_Resources/menu');
        $this->load->view('asela3/HousePanelShantha');
        $this->load->view('asela3/style_Resources/footer');
    }

    /*update form view*/

    public  function viewUpdateHousePanel($data)//view shura update house panel form
    {
        $data['title'] = 'DSSC Management';
        $this->load->view('asela3/style_Resources/header', $data);
        $this->load->view('asela3/style_Resources/menu');
        $this->load->view('asela3/HousePanelUpdate');
        $this->load->view('asela3/style_Resources/footer');
    }
    public  function viewUpdateHousePanelMeththa($data)//view shura update house panel form
    {
        $data['title'] = 'DSSC Management';
        $this->load->view('asela3/style_Resources/header', $data);
        $this->load->view('asela3/style_Resources/menu');
        $this->load->view('asela3/HousePanelUpdateMeththa');
        $this->load->view('asela3/style_Resources/footer');
    }
    public  function viewUpdateHousePanelWeera($data)//view shura update house panel form
    {
        $data['title'] = 'DSSC Management';
        $this->load->view('asela3/style_Resources/header', $data);
        $this->load->view('asela3/style_Resources/menu');
        $this->load->view('asela3/HousePanelUpdateWeera');
        $this->load->view('asela3/style_Resources/footer');
    }
    public  function viewUpdateHousePanelShantha($data)//view shura update house panel form
    {
        $data['title'] = 'DSSC Management';
        $this->load->view('asela3/style_Resources/header', $data);
        $this->load->view('asela3/style_Resources/menu');
        $this->load->view('asela3/HousePanelUpdateShantha');
        $this->load->view('asela3/style_Resources/footer');
    }

    /*delete form view*/

    public  function viewDeleteHousePanelShura($data)//view delete house panel form
    {
        $data['title'] = 'DSSC Management';
        $this->load->view('asela3/style_Resources/header', $data);
        $this->load->view('asela3/style_Resources/menu');
        $this->load->view('asela3/HousePanelDelete');
        $this->load->view('asela3/style_Resources/footer');
    }
    public  function viewDeleteHousePanelMeththa($data)//view delete house panel form
    {
        $data['title'] = 'DSSC Management';
        $this->load->view('asela3/style_Resources/header', $data);
        $this->load->view('asela3/style_Resources/menu');
        $this->load->view('asela3/HousePanelDeleteMeththa');
        $this->load->view('asela3/style_Resources/footer');
    }
    public  function viewDeleteHousePanelWeera($data)//view delete house panel form
    {
        $data['title'] = 'DSSC Management';
        $this->load->view('asela3/style_Resources/header', $data);
        $this->load->view('asela3/style_Resources/menu');
        $this->load->view('asela3/HousePanelDeleteWeera');
        $this->load->view('asela3/style_Resources/footer');
    }
    public  function viewDeleteHousePanelShantha($data)//view delete house panel form
    {
        $data['title'] = 'DSSC Management';
        $this->load->view('asela3/style_Resources/header', $data);
        $this->load->view('asela3/style_Resources/menu');
        $this->load->view('asela3/HousePanelDeleteShantha');
        $this->load->view('asela3/style_Resources/footer');
    }


    public function getHousePanel($data) //get data to house panel
    {

       $status=$this->Sportsmeetmodel->getStatus($data);

       if($status == 1) {
          echo "you have already send request.";
       }

        else if($status == 2) {
            echo "you have already send request and Request has been accepted!!";
        }

        else if($status == 3)
        {
            echo "you have already send request and Request has been Rejected!!";
        }

       else {

           date_default_timezone_set('Asia/Colombo');
           $aa=date("Y");

            $data = array(
                'houseID'=>$data,
                'president' => $this->input->get('president'),
                'wpresident' => $this->input->get('wpresident'),
                'secretary' => $this->input->get('secretary'),
                'wsecretary' =>$this->input->get('wsecretary'),
                'treasurer' => $this->input->get('treasurer'),
                'wTreasurer' => $this->input->get('wtreasurer'),
                'p1' => $this->input->get('pm1'),
                'p2' => $this->input->get('pm2'),
                'p3' => $this->input->get('pm3'),
                'p4' => $this->input->get('pm4'),
                'p5' => $this->input->get('pm5'),
                'pid' => $this->input->get('presidentID'),
                'wpid' => $this->input->get('wpresidentID'),
                'sid' => $this->input->get('secretaryID'),
                'wsid' =>$this->input->get('wsecretaryID'),
                'tid' => $this->input->get('treasurerID'),
                'wtid' => $this->input->get('wtreasurerID'),
                'p1id' => $this->input->get('pm1ID'),
                'p2id' => $this->input->get('pm2ID'),
                'p3id' => $this->input->get('pm3ID'),
                'p4id' => $this->input->get('pm4ID'),
                'p5id' => $this->input->get('pm5ID'),
                'status' => '1',
                'year'=>$aa,
            );

            $this->Sportsmeetmodel->insertPanel($data);
            if($status == true) {
               echo "<script>alert('Successfully Inserted!');</script>";
           }

           else{

               echo "<script>alert('Successfully Inserted!');</script>";
           }
           $this->viewHousePanel();
       }

    }

    public function GetSelectStudent() //get data to select student
    {
        $res=$this->Sportsmeetmodel->selectStudent();
        foreach($res as $result)
        {
            $output[] = array ($result['index_no'],$result['name'],$result['address'],$result['parent'],$result['phone']);
        }
        echo json_encode($output);
    }

    public function update($house,$ID) //update panel members
    {
        date_default_timezone_set('Asia/Colombo');
        $aa=date("Y");
        $status=$this->Sportsmeetmodel->getStatus($ID);

        if($status == 1|| $status==3) {

            $data = array(
                'president' => $this->input->get('president'),
                'wpresident' => $this->input->get('wpresident'),
                'secretary' => $this->input->get('secretary'),
                'wsecretary' =>$this->input->get('wsecretary'),
                'treasurer' => $this->input->get('treasurer'),
                'wtreasurer' => $this->input->get('wtreasurer'),
                'p1' => $this->input->get('pm1'),
                'p2' => $this->input->get('pm2'),
                'p3' => $this->input->get('pm3'),
                'p4' => $this->input->get('pm4'),
                'p5' => $this->input->get('pm5'),
                'pid' => $this->input->get('presidentID'),
                'wpid' => $this->input->get('wpresidentID'),
                'sid' => $this->input->get('secretaryID'),
                'wsid' =>$this->input->get('wsecretaryID'),
                'tid' => $this->input->get('treasurerID'),
                'wtid' => $this->input->get('wtreasurerID'),
                'p1id' => $this->input->get('pm1ID'),
                'p2id' => $this->input->get('pm2ID'),
                'p3id' => $this->input->get('pm3ID'),
                'p4id' => $this->input->get('pm4ID'),
                'p5id' => $this->input->get('pm5ID'),
                'status' => '1',
                'year'=>$aa,
            );

            $status=$this->Sportsmeetmodel->updatePanel($house,$data);
            if($status == true) {
                echo "<script>alert('Successfully Updated!');</script>";
                $this->houses();
            }

            else{

                echo "<script>alert('Successfully Inserted!');</script>";
                $this->houses();
            }
        }

        else  {
            echo "you have already send request and Request has been accepted!!";
        }

       /* else if($status == 3)
        {
            echo "you have already send request and Request has been Rejected!!";
        }*/

    }


    public function deletePanel($hid,$id) //delete panel
    {
        $status=$this->Sportsmeetmodel->getStatus($id);
        //$hid=array('houseID'=>1);

        if($status == 1) {

            $this->Sportsmeetmodel->deletePanel($hid);
            echo "<script>alert('Sucessfully deleted!');</script>";
            $this->houses();
        }

        else if($status == 2)
        {
            echo "<script>alert('Can not delete.request already accepted!');</script>";
            $this->houses();
        }

        else if($status == 3)
        {
            echo "<script>alert('Can not delete.request already Rejected!');</script>";
            $this->houses();
        }
    }

    /*select panel (insert)*/

    public function ShuraInsert() // select panel shura house
    {
        $this->getHousePanel(1);
    }

    public function MeththaInsert() // select panel Meththa house
    {
        $this->getHousePanel(2);
    }

    public function WeeraInsert() // select panel Weera  house
    {
        $this->getHousePanel(3);
    }

    public function ShanthaInsert() // select panel Shantha   house
    {
        $this->getHousePanel(4);
    }

    /*fill update text boxes*/

    public function fillUpdateTextBoxShura() //fill update text boxes
    {
        $data['aaa'] = $this->Sportsmeetmodel->getDataUpdate(1);
        $this->viewUpdateHousePanel($data);
    }

    public function fillUpdateTextBoxMeththa() //fill update text boxes
    {
        $data['aaa'] = $this->Sportsmeetmodel->getDataUpdate(2);
        $this->viewUpdateHousePanelMeththa($data);
    }

    public function fillUpdateTextBoxWeera() //fill update text boxes
    {
        $data['aaa'] = $this->Sportsmeetmodel->getDataUpdate(3);
        $this->viewUpdateHousePanelWeera($data);
    }

    public function fillUpdateTextBoxShantha() //fill update text boxes
    {
        $data['aaa'] = $this->Sportsmeetmodel->getDataUpdate(4);
        $this->viewUpdateHousePanelShantha($data);
    }

    /*update panel*/

    public function updateShura()
    {
        $house=array('houseID'=>1);
        $this->update($house,1);
    }

    public function updateMeththa()
    {
        $house=array('houseID'=>2);
        $this->update($house,2);
    }

    public function updateWeera()
    {
        $house=array('houseID'=>3);
        $this->update($house,3);
    }

    public function updateShantha()
    {
        $house=array('houseID'=>4);
        $this->update($house,4);
    }

    /*delete Panel*/

    public function deletePanelShura()
    {
        $hid=array('houseID'=>1);
        $id=1;
        $this->deletePanel($hid,$id);
    }
    public function deletePanelMeththa()
    {
        $hid=array('houseID'=>2);
        $id=2;
        $this->deletePanel($hid,$id);
    }
    public function deletePanelWeera()
    {
        $hid=array('houseID'=>3);
        $id=3;
        $this->deletePanel($hid,$id);
    }
    public function deletePanelShantha()
    {
        $hid=array('houseID'=>4);
        $id=4;
        $this->deletePanel($hid,$id);
    }

    /*fill delete form text boxes*/

    public function fillDeleteTextBoxShura() //fill delete text boxes
    {
        $data['aaa'] = $this->Sportsmeetmodel->getDataUpdate(1);
        $this->viewDeleteHousePanelShura($data);
    }
    public function fillDeleteTextBoxMeththa() //fill delete text boxes
    {
        $data['aaa'] = $this->Sportsmeetmodel->getDataUpdate(2);
        $this->viewDeleteHousePanelMeththa($data);
    }
    public function fillDeleteTextBoxWeera() //fill delete text boxes
    {
        $data['aaa'] = $this->Sportsmeetmodel->getDataUpdate(3);
        $this->viewDeleteHousePanelWeera($data);
    }
    public function fillDeleteTextBoxShantha() //fill delete text boxes
    {
        $data['aaa'] = $this->Sportsmeetmodel->getDataUpdate(4);
        $this->viewDeleteHousePanelShantha($data);
    }

    ////////////////////////////////////////////////////////////////////////

    public function viewPrograssShura($data) // view shura prograss page
    {
        $data['title'] = 'DSSC Management';
        $this->load->view('asela3/style_Resources/header', $data);
        $this->load->view('asela3/style_Resources/menu');
        $this->load->view('asela3/prgressShura');
        $this->load->view('asela3/style_Resources/footer');
    }

    public function shuraProgressFill()
    {
        $id= $this->input->get('houseID',TRUE);
        $data['aaa']=$this->Sportsmeetmodel->getDataUpdate2($id);
        $this->viewPrograssShura($data);
    }

    public function ViewSearch() // view shura prograss page
    {
        $data['title'] = 'DSSC Management';
        $this->load->view('asela3/style_Resources/header', $data);
        $this->load->view('asela3/style_Resources/menu');
        $this->load->view('asela3/ViewSearch');
        $this->load->view('asela3/style_Resources/footer');
    }

    public function ViewSearch2($data) // view shura prograss page
    {
        $data['title'] = 'DSSC Management';
        $this->load->view('asela3/style_Resources/header', $data);
        $this->load->view('asela3/style_Resources/menu');
        $this->load->view('asela3/ViewSearch');
        $this->load->view('asela3/style_Resources/footer');
    }

    public function search()
    {
        $date=$this->input->get('date');
        $house=$this->input->get('house');
        $data['aaa']= $this->Sportsmeetmodel->search($date,$house);
        $this->ViewSearch2($data);
   }

    // generate reports

    public  function ViewReport($data)
    {
        $data['title'] = 'DSSC Management';
        $this->load->view('asela3/style_Resources/header', $data);
        $this->load->view('asela3/GenarateReport');
    }

    public function report()
    {
        $id= $this->input->get('houseID',TRUE);
        $sataus=$this->Sportsmeetmodel->checkStatus($id);
       if($sataus==1 || $sataus==2 || $sataus==3){
            $data['aaa']= $this->Sportsmeetmodel->getDatatoReport($id);
            $this->ViewReport($data);
        }

       else{
           echo "<script>alert('Please Send Request!!');</script>";
        }
    }


}