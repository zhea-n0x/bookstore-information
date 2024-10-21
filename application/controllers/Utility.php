<?php

defined('BASEPATH') or EXIT('No Direct Allowed');
 
class Utility extends MY_controller{
 
 
        public  function backupdb(){
        $this->load->dbutil();
 
        $rule = array(    
                'format'      => 'zip',            
                'filename'    => 'dbs_library.sql'
              );
 
 
        $backup =& $this->dbutil->backup($rule);
 
        $dbname = 'backup-on-'. date("Y-m-d-H-i-s") .'.zip';
        $save = '/backup'.$dbname;
 
        $this->load->helper('file');
        write_file($save, $backup);
 
 
        $this->load->helper('download');
        force_download($dbname, $backup);
        }
    }
?>