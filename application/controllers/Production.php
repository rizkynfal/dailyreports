<?php

class Production extends CI_Controller
{
    public function productionData()
    {
        $data['judul'] = "Superintendent Dashboard";
        $this->load->view('templates/head');
        $this->load->view('dashboard/sidebar-dashboard',$data);
        $this->load->view('dashboard/index');
        $this->load->view('data_production/production_data');
    }
    public function monthlyOilProduced()
    {
        $data['judul'] = "Monthly Oil Production Data";
        $this->load->view('templates/head');
        $this->load->view('dashboard/sidebar-dashboard',$data);
        $this->load->view('data_production/monthly_report/monthly_oil');
    }
    public function monthlyWaterProduced()
    {
        $data['judul'] = "Monthly Oil Production Data";
        $this->load->view('templates/head');
        $this->load->view('dashboard/sidebar-dashboard',$data);
        $this->load->view('data_production/monthly_report/monthly_water');
    }
    public function monthlyGasProduced()
    {
        $data['judul'] = "Monthly Oil Production Data";
        $this->load->view('templates/head');
        $this->load->view('dashboard/sidebar-dashboard',$data);
        $this->load->view('data_production/monthly_report/monthly_gas');
    }
    public function monthlyTruckoilProduced()
    {
        $data['judul'] = "Monthly Trucked Oil Production Data";
        $this->load->view('templates/head');
        $this->load->view('dashboard/sidebar-dashboard',$data);
        $this->load->view('data_production/monthly_report/monthly_truckedoil');
    }


}
