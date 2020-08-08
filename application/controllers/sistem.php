<?php

    class sistem extends CI_Controller{

        public function base(){
            $judul['title'] = "base";
            $this->load->view('base',$judul);
        }

        public function login(){
            $judul['title'] = "Login";
            $this->load->view('login',$judul);
        }

        public function home(){
            $judul['title'] = "Home";
            $this->load->view('home',$judul);
        }

        public function data_karyawan(){
            $judul['title'] = "Data Karyawan";
            $this->load->view('data_karyawan',$judul);
        }
        

    }
    
    

?>