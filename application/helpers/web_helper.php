<?php 



if ( ! function_exists('generate_random_id'))
{
    function generate_random_id($length='')
    {
        if($length==''){ $length = 11; }
        $generated_id = substr(md5(substr( "aA1b2B3c4C5d6D7e8E9fF1g2G3h4H5i6I7j8J9kK1l2L3m4M5n6N789Pp1q2Q3r4R5s6S7t8T9u1U2v3V6w5W4x7X8y9Y6z5Z8" ,rand( 0 ,50 ) , 15 )), 0, $length) ;
        return $generated_id;
    }   
}
if ( ! function_exists('get_welcome'))
{
    function get_welcome()
    {  
        echo ' WELCOME TO BACKOFFICE ';
    }
}
if ( ! function_exists('get_company_name'))
{
    function get_company_name()
    {  
        return 'Company';
    }
}
//below function userd in helper
if ( ! function_exists('get_random_number'))
{
    function get_random_number()
    {
       
        $numbers = '10203040506070809019283746507391826405'.time();
        $generated_id = substr( "10203040506070809019283746507391826405" ,rand( 0 ,50 ) , 15 ) ;
       
        return $generated_id;
    }   
}
if(!function_exists('dateFormat'))
{
    function dateFormat($format='Y-m-d H:i:s', $givenDate=null)
    {
        return date($format, strtotime($givenDate));
    }
}
function get_user_by_id($id){
    $CI =& get_instance();
    $CI->db->select('first_name');   
    $CI->db->where('id', $id);
       
    $sql = $CI->db->get('users');
    if($sql->num_rows() == 1){
        	return $sql->row_array();
        }else{
        	return FALSE;
        }

}
function get_category_by_id($id){
    $CI =& get_instance();
    $CI->db->select('category_name');   
    $CI->db->where('id', $id);
       
    $sql = $CI->db->get('category_tbl');
    if($sql->num_rows() == 1){
        	return $sql->row_array();
        }else{
        	return FALSE;
        }
}
function get_user_email($id){
    $CI =& get_instance();
    $CI->db->select('email');   
    $CI->db->where('id', $id);
       
    $sql = $CI->db->get('users');
    if($sql->num_rows() == 1){
        	return $sql->row_array();
        }else{
        	return FALSE;
        }
}