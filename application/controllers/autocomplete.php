<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class Autocomplete extends CI_Controller {
 
    /*
    function index(){
        $this->load->view('autocomplete/show');
    }*/
     
    function lookups(){
        // process posted form data (the requested items like province)
        $keyword = $this->input->post('term');
        $data['response'] = 'false'; //Set default response
        $query = $this->mautocomplete->lookup($keyword); //Search DB
        if( ! empty($query) )
        {
            $data['response'] = 'true'; //Set response
            $data['message'] = array(); //Create array
            foreach( $query as $row )
            {
                $data['message'][] = array( 
    //                                    'id'=>$row->product_id,
                                        'value' => $row->stu_name,
                                        ''
                                     );  //Add a row to array
            }
        }
        if('IS_AJAX')
        {
            echo json_encode($data); //echo json string if ajax request
             
        }
        else
        {
            $this->load->view('autocomplete/index',$data); //Load html view of search results
        }
    }
}