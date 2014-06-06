<?php

class Statistics_service extends CI_Model {

	function __construct() {
        parent::__construct();
 
    }
    
    
    //Get all statistics
    public function get_all_stats($limit, $start)
    {
    		return $this->build_query($limit, $start, 1);
    }
    
    
    private function build_query($limit, $start, $total)
    {
    	//check of a search
    	 
    	//get the post values
    	 
    	date_default_timezone_set('Asia/Colombo');
    	
    	$search_type = $this->input->post('search_type');
    	$keyword	= $this->input->post('keywords');
    	$from = $this->input->post('from');
    	$to	= $this->input->post('to');
    	$system	= $this->input->post('systems');
    	 

    	//if search type = 1 this means its a new search so set the $start variable to 0
    	 
    	if($search_type == 1)
    	{
    		$start = 0;
    	
    		//store the posted values in the session.
    		$this->session->set_userdata('statistics_keywords', $keyword);
    		$this->session->set_userdata('statistics_from', $from);
    		$this->session->set_userdata('statistics_to', $to);
    		$this->session->set_userdata('statistics_system', $system);
    	}
    	 
    	//use the session data to search the table.
    	 
    	if((trim($this->session->userdata('statistics_from')) != "") && (trim($this->session->userdata('statistics_to')) == ""))
    	{
    		//echo 'from';die;
    		$this->db->where('date >'. strtotime($this->session->userdata('statistics_from')));
    	}
    	else if(($this->session->userdata('statistics_to') != "") && ($this->session->userdata('statistics_from') == ""))
    	{
    		//echo 'to';die;
    		$this->db->where('date <'. strtotime($this->session->userdata('statistics_to')));
    	}
    	else
    	{
    		//echo 'sdf';die;
    		if(($this->session->userdata('statistics_to') != "") && ($this->session->userdata('statistics_from') != ""))
    		{
    			$this->db->where('date BETWEEN '. strtotime($this->session->userdata('statistics_from')).' AND '.strtotime($this->session->userdata('statistics_to')));
    		}
    	}
    	 
    	 
    	if($this->session->userdata('statistics_system') != "")
    	{
    		$this->db->where('section ='. $this->session->userdata('statistics_system'));
    	}
    	 
    	 
    	if($this->session->userdata('statistics_keywords') != "")
    	{
    		$this->db->like('Employee_Name', $this->session->userdata('statistics_keywords'));
    		$this->db->or_like('last_name', $this->session->userdata('statistics_keywords'));
    		$this->db->or_like('section', $this->session->userdata('statistics_keywords'));
    		$this->db->or_like('action', $this->session->userdata('statistics_keywords'));
    	}
    	 
    	$this->db->select('lcs_crm_statistics.*,Employee_Name,last_name,lcs_system.System');
    	$this->db->from("lcs_crm_statistics");
    	$this->db->join('lcs_system', 'System_Code = section');
    	$this->db->join('lcs_employee', 'Employee_Code = user_id');
    	$this->db->order_by('lcs_crm_statistics.id','DESC');
    	
    	
    	if($total == 1){
    	$this->db->limit($limit, $start);
    	}
    	
    	 
    	$query = $this->db->get();
    	 
    	//print_r($query);die;
    	//echo $this->db->last_query();die;
    	$query->result();
    	 
    	if ($query->num_rows() > 0) {
    		foreach ($query->result() as $row) {
    			$data[] = $row;
    		}
    	
    		//print_r($data);
    		return $data;
    	}
    	return false;
    }
    
    public function get_statistics_count()
    {
    	return count($this->build_query(0,0,0));
    }

}

?>
