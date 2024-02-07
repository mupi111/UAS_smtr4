<?php 

    class ModelPendaftaran extends CI_Model {

        public function __construct()
        {
            parent::__construct();
        }
        public function pendaftaran(){
            $sql = $this->db->query("SELECT * FROM `tb_pendaftar`");
            return $sql;
        }
    }
?>