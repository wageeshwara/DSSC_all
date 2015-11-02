<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class LibraryController extends CI_Controller
{

    public function index()
    {
        $this->loadLibHome();
    }

    /*
     * Loading library view via controller
     */
    public function loadLibHome()
    {
        $data['title'] = 'DSSC Management';
        $this->load->view('wagi/style_Resources/header', $data);
        $this->load->view('wagi/style_Resources/menuLibrary');
        $this->load->view('wagi/Library/viewLibraryHome');
        $this->load->view('wagi/style_Resources/footer');
    }

    public function loadLibAdd()
    {
        $this->load->model('librarymodel');
        $data['results'] = $this->librarymodel->getCategories();
        $data['title'] = 'DSSC Management';
        $this->load->view('wagi/style_Resources/header', $data);
        $this->load->view('wagi/style_Resources/menuLibrary');
        $this->load->view('wagi/Library/viewLibraryAdd', $data);
        $this->load->view('wagi/style_Resources/footer');
    }

    public function loadLibList()
    {
        $data['title'] = 'DSSC Management';
        $this->load->view('wagi/style_Resources/header', $data);
        $this->load->view('wagi/style_Resources/menuLibrary');
        $this->load->view('wagi/Library/viewLibraryList');
        $this->load->view('wagi/style_Resources/footer');
    }

    public function loadLibBorrow()
    {
        $data['title'] = 'DSSC Management';
        $this->load->view('wagi/style_Resources/header', $data);
        $this->load->view('wagi/style_Resources/menuLibrary');
        $this->load->view('wagi/Library/viewLibraryBorrow');
        $this->load->view('wagi/style_Resources/footer');
    }

    public function loadLibReturn()
    {
        $data['title'] = 'DSSC Management';
        $this->load->view('wagi/style_Resources/header', $data);
        $this->load->view('wagi/style_Resources/menuLibrary');
        $this->load->view('wagi/Library/viewReturn');
        $this->load->view('wagi/style_Resources/footer');
    }

    public function loadLibDueBooks()
    {
        $data['title'] = 'DSSC Management';
        $this->load->view('wagi/style_Resources/header', $data);
        $this->load->view('wagi/style_Resources/menuLibrary');
        $this->load->view('wagi/Library/viewDueDate');
        $this->load->view('wagi/style_Resources/footer');
    }

    public function loadLibCategory()
    {
        $data['title'] = 'DSSC Management';
        $this->load->view('wagi/style_Resources/header', $data);
        $this->load->view('wagi/style_Resources/menuLibrary');
        $this->load->view('wagi/Library/viewManageCategory');
        $this->load->view('wagi/style_Resources/footer');
    }

    public function loadLibLocation()
    {
        $data['title'] = 'DSSC Management';
        $this->load->view('wagi/style_Resources/header', $data);
        $this->load->view('wagi/style_Resources/menuLibrary');
        $this->load->view('wagi/Library/viewManageLocation');
        $this->load->view('wagi/style_Resources/footer');
    }

    /*
     * function to retrieve book data from database and feed it to view
     * this use json format send data to view
     */
    public function booksList()
    {
        $this->load->model('librarymodel');
        echo json_encode($this->librarymodel->getAllBooks());
    }

    /*
     * Load form validation library validate isbn,title,publisher and author is validation false return Failed msg
     * else validate if the isbn is already in the database  if not add book into library database and return
     * success msg
     */
    public function addBooks()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('isbn', 'Number', 'required|max_length[13]|numeric');
        $this->form_validation->set_rules('title', 'title', 'required|max_length[100]|alpha_numeric');
        $this->form_validation->set_rules('publisher', 'Publisher', 'required|max_length[100]|alpha_numeric');
        $this->form_validation->set_rules('author', 'Author', 'required|max_length[100]|callback_alpha_dash_space');

        if ($this->form_validation->run() == FALSE) {
            $message = "<strong>Failed</strong>";
            $this->json_response(FALSE, $message);
        } else {
            $this->load->model('librarymodel');
            if ($this->librarymodel->validateISBN($this->input->post('isbn'))) {
                $data['dat_table'] = 'librarybooks';

                $newRaw = array("isbn" => $this->input->post('isbn'),
                    "title" => $this->input->post('title'),
                    "subject" => $this->input->post('subject'),
                    "author" => $this->input->post('author'),
                    "eddition" => $this->input->post('edition'),
                    "copies" => $this->input->post('copies'),
                    "shelf_no" => $this->input->post('shelfNo'),
                    "publisher" => $this->input->post('publisher'),
                    "totalCopies" => $this->input->post('copies')
                );

                $this->librarymodel->insertDB($data, $newRaw);
                $message = "<strong>Success</strong>!";
                $this->json_response(TRUE, $message);
            } else {
                $message = "<strong>Failed</strong>!";
                $this->json_response(FALSE, $message);
            }
        }
    }

    /*
    * Function to borrow
    * Data is coming from 'viewLibraryBorrow' and adding into books
    */
    public function borrowBooks()
    {

        $this->load->model('librarymodel');

        if ($this->librarymodel->checkForNonReturn($this->input->post('studentID'))) {
            $data['dat_table'] = 'libraryborrow';

            $dateString = $this->input->post('issueDate');
            $myDateTime = new DateTime($dateString);
            $issueDate = $myDateTime->format('Y-m-d');

            $dateString2 = $this->input->post('dueDate');
            $myDateTime2 = new DateTime($dateString2);
            $dueDate = $myDateTime2->format('Y-m-d');

            $newRaw = array("studentID" => $this->input->post('studentID'),
                "isbn" => $this->input->post('isbn'),
                "issue_date" => $issueDate,
                "due_date" => $dueDate,
                "return" => '0');

            $this->librarymodel->insertDB($data, $newRaw);

            $this->db->where('isbn', $this->input->post('isbn'));
            $this->db->set('copies', 'copies-1', FALSE);
            $this->db->update('librarybooks');

            $message = "<strong>Success</strong>!";
            $this->json_response(TRUE, $message);
        }
        else
        {
            $message = "<strong>Failed</strong>!";
            $this->json_response(FALSE, $message);
        }

    }

    public function addSubject()
    {

        $this->load->model('librarymodel');

        $subject= $this->input->post('subject');

        if($this->librarymodel->validateSubject($subject)) {
            $data['dat_table'] = 'subjects';
            $newRaw = array("subject_name" =>$subject);
            $this->librarymodel->insertDB($data, $newRaw);

            $message = "<strong>Success</strong>!";
            $this->json_response(TRUE, $message);
        }
        else
        {
            $message = "<strong>Failed</strong>!";
            $this->json_response(FALSE, $message);
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

    /*
     * calculate no of working days
     * return result in Json format
     */
    public function dateCounter()
    {
        $days1 = stripcslashes($_POST['days']);
        $days1 = json_decode($days1, TRUE);

        $sDate = $days1['from'];
        $eDate = $days1['to'];

        $date1 = date_create($sDate);
        $date2 = date_create($eDate);
        $diff = date_diff($date1, $date2);

        $days = $diff->format("%R%a days");

        $message = $days;
        $this->json_response(true, $message);
    }

    /*
     * Get subject list from database via librarymodel
     * return result in Json format
     */
    public function subjectList()
    {
        $this->load->model('librarymodel');
        echo json_encode($this->librarymodel->getAllSubjects());
    }

    /*
     * Get due books list from database via librarymodel
     * return result in Json format
     */
    public function dueList()
    {
        $this->load->model('librarymodel');
        echo json_encode($this->librarymodel->dueBookToday());
    }

    /*
    * Get due books list from database via librarymodel
    * return result in Json format
    */
    public function studentDueBooks()
    {
        $studentID_txt = stripcslashes($_POST['studentID']);
        $studentID_txt = json_decode($studentID_txt, TRUE);

        $this->load->model('librarymodel');

        $studentID = $studentID_txt['studentID'];

        $message = $this->librarymodel->dueBookOfStudent($studentID);

        $this->json_response(TRUE, $message);
    }

    public function returnBook()
    {
        $returns = stripcslashes($_POST['returns']);

        $returns = json_decode($returns, TRUE);

        $studentID = $returns['studentID'];
        $isbn = $returns['isbn'];

        $this->load->model('dbaccess');
        $data['dat_table'] = 'libraryborrow';

        $where = array('studentID' => $studentID
        );
        $newRaw = array("return" => 1
        );

        $this->dbaccess->updateDB($data, $newRaw, $where);

        $this->db->where('isbn', $isbn);
        $this->db->set('copies', 'copies+1', FALSE);
        $this->db->update('librarybooks');

        $message = "<strong>Book</strong> Returned!";
        $this->json_response(TRUE, $message);
    }

    /*
     * Function to delete subject.
     * Get Subject data by JSON Format convert it php array and assign into variables
     * using deleteDB method delete subject from database
     */
    public function deleteSubjects()
    {
        $subjects = stripcslashes($_POST['subjects']);
        $subjects = json_decode($subjects, TRUE);
        $sub = $subjects['subject'];
        $this->load->model('dbaccess');
        $data = 'subjects';

        $where = array('subject_name' => $sub
        );

        $this->dbaccess->deleteDB($data, $where);

        $message = "<strong>Leave</strong> Accepted!";
        $this->json_response(TRUE, $message);
    }

    /*
     * Function to change book shelf location.
     * Get Location data by JSON format convert it to php array and assign into variables
     * using updateDB method update location information
     */
    public function changeLocation()
    {
        $changeLoc = stripcslashes($_POST['changeLocation']);
        $changeLoc = json_decode($changeLoc, TRUE);

        $isbn = $changeLoc['isbn'];
        $shelfNo = $changeLoc['shelfNo'];

        $this->load->model('dbaccess');
        $data['dat_table'] = 'librarybooks';

        $where = array('isbn' => $isbn
        );
        $newRaw = array("shelf_no" => $shelfNo
        );

        $this->dbaccess->updateDB($data, $newRaw, $where);

        $message = "<strong>Leave</strong> Accepted!";
        $this->json_response(TRUE, $message);
    }

}