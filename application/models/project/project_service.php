<?php

class Project_service extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->model('project/project_model');
    }

    public function get_all_projects_for_company($company_code) {

        $this->db->select('project.*,employee.employee_fname,employee.employee_lname');
        $this->db->from('project');
        $this->db->join('employee', 'employee.employee_code = project.added_by');
        $this->db->where('project.company_code', $company_code);
        $this->db->order_by("project.project_id", "desc");
        $query = $this->db->get();
        return $query->result();
    }

    function add_new_project($project_model) {
        return $this->db->insert('project', $project_model);
    }

    function delete_project($project_id) {
        $data = array('del_ind' => '0');
        $this->db->where('project_id', $project_id);
        return $this->db->update('project', $data);
    }

    function get_project_by_id($project_id) {
        $query = $this->db->get_where('project', array('project_id' => $project_id));
        return $query->row();
    }

    function get_project_by_name($name) {

        $query = $this->db->get_where('project', array('project_name' => $name));
        return $query->row();
    }

    function update_project($project_model) {

        $data = array(
            'project_name' => $project_model->get_project_name(),
            'project_vendor' => $project_model->get_project_vendor(),
            'project_start_date' => $project_model->get_project_start_date(),
            'project_end_date' => $project_model->get_project_end_date(),
            'project_description' => $project_model->get_project_description()
        );

        $this->db->where('project_id', $project_model->get_project_id());

        return $this->db->update('project', $data);
    }

    function get_projects_for_employee() {

        $this->db->select('project.*,employee.employee_fname,employee.employee_lname');
        $this->db->from('project');
        $this->db->join('task', 'task.project_id = project.project_id');
        $this->db->join('employee_tasks', 'employee_tasks.task_id = task.task_id');
        $this->db->where('employee_tasks.employee_code', $emp_code);
        $this->db->order_by("project.project_id", "desc");
        $query = $this->db->get();
        return $query->result();
    }

}
