<?php
class dashboard {
    public function __construct() {

        // $login_url = BASE.'/login';
        // if($_SESSION[SUBDOMAIN] == '' || $_SESSION[SUBDOMAIN]['session_active'] == false){
        //     header("location: ".$login_url);
        // }
    }
    public function dashboard_method() {
        display_html( 'header/header' );
        display_html( 'dashboard_sidebar/dashboard_sidebar' );
        display_html( 'dashboard/dashboard_home');
        display_html( 'footer/footer' );
    }

    public function all_member() {
        display_html( 'header/header' );
        display_html( 'dashboard_sidebar/dashboard_sidebar' );
        $get_all_member=$this->get_all_member();
        display_html( 'dashboard/all_member',$get_all_member);
        display_html( 'footer/footer' );
    }

    public function add_member() {
        display_html( 'header/header' );
        display_html( 'dashboard_sidebar/dashboard_sidebar' );
        display_html( 'dashboard/add_member');
        display_html( 'footer/footer' );
    }

    public function save_member_info() {
        global $mysqli;

        $name = $_REQUEST['name'];
        $mobile = $_REQUEST['mobile'];
        $email = $_REQUEST['email'];
        $gender = $_REQUEST['gender'];
        $religion = $_REQUEST['religion'];
        $n_id = $_REQUEST['n_id'];
        $blood_grp = $_REQUEST['blood_grp'];
        $edu_institution = $_REQUEST['edu_institution'];
        $subject = $_REQUEST['subject'];
        $workplace = $_REQUEST['workplace'];
        $occupation = $_REQUEST['occupation'];
        $temp_address = $_REQUEST['temp_address'];
        $permanent_address = $_REQUEST['permanent_address'];
        $u_nion = $_REQUEST['u_nion'];
        $word = $_REQUEST[' word_name'];
        $pre_org = $_REQUEST['pre_org'];
        $pre_org_status = $_REQUEST['pre_org_status'];
        $present_org = $_REQUEST['present_org'];
        $present_org_status = $_REQUEST['present_org_status'];


        $file_name = $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_type = $_FILES['image']['type'];

        $file_url = $_SERVER['DOCUMENT_ROOT'] ."/amar_mirzapur/files/profile_images/".$file_name;
        move_uploaded_file($file_tmp, $file_url);

        $image = $file_url;
        $status = 1;

        $sql = "INSERT INTO member_info (name, mobile, email, gender, religion, n_id, blood_grp, edu_institution, subject, workplace, occupation, temp_address, permanent_address, u_nion, word_name, pre_org, pre_org_status, present_org, present_org_status, image, status) VALUES ('".$name."', '".$mobile."', '".$email."','".$gender."', '".$religion."', '".$n_id."', '".$blood_grp."', '".$edu_institution."', '".$subject."', '".$workplace."', '".$occupation."', '".$temp_address."', '".$permanent_address."', '".$u_nion."', '".$word_name."', '".$pre_org."', '".$pre_org_status."', '".$present_org."', '".$present_org_status."', '".$image."', '".$status."')";

        if ($mysqli->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $mysqli->error;
        }
    }

    public function edit_member() {
        global $break, $start;

        $member_id = $break[$start+2];

        display_html( 'header/header' );
        display_html( 'dashboard_sidebar/dashboard_sidebar' );

        $get_single_member=$this->get_single_member($member_id);

        display_html( 'dashboard/edit_member',$get_single_member[0]);
        display_html( 'footer/footer' );
    }

    public function update_member_info() {
        global $mysqli;

        $id = $_REQUEST['member_id'];

        $name = $_REQUEST['name'];
        $mobile = $_REQUEST['mobile'];
        $email = $_REQUEST['email'];
        $gender = $_REQUEST['gender'];
        $religion = $_REQUEST['religion'];
        $n_id = $_REQUEST['n_id'];
        $blood_grp = $_REQUEST['blood_grp'];
        $edu_institution = $_REQUEST['edu_institution'];
        $subject = $_REQUEST['subject'];
        $workplace = $_REQUEST['workplace'];
        $occupation = $_REQUEST['occupation'];
        $temp_address = $_REQUEST['temp_address'];
        $permanent_address = $_REQUEST['permanent_address'];
        $u_nion = $_REQUEST['u_nion'];
        $word_name = $_REQUEST['word_name'];
        $pre_org = $_REQUEST['pre_org'];
        $pre_org_status = $_REQUEST['pre_org_status'];
        $present_org = $_REQUEST['present_org'];
        $present_org_status = $_REQUEST['present_org_status'];


        $file_name = $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_type = $_FILES['image']['type'];

        $file_url = $_SERVER['DOCUMENT_ROOT'] ."/amar_mirzapur/files/profile_images/".$file_name;
        move_uploaded_file($file_tmp, $file_url);

        $image = $file_url;
        $status = 1;

        $sql = "UPDATE member_info SET name = '".$name."', mobile = '".$mobile."', email = '".$email."', gender = '".$gender."', religion = '".$religion."', n_id = '".$n_id."', blood_grp = '".$blood_grp."', edu_institution = '".$edu_institution."', subject = '".$subject."', workplace = '".$workplace."', occupation = '".$occupation."', temp_address = '".$temp_address."', permanent_address = '".$permanent_address."', u_nion = '".$u_nion."', word_name = '".$word_name."', pre_org = '".$pre_org."', pre_org_status = '".$pre_org_status."', present_org = '".$present_org."', present_org_status = '".$present_org_status."', image = '".$image."', status = '".$status."' WHERE id='".$id."'";



        if ($mysqli->query($sql) === TRUE) {
            echo "Update member info successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $mysqli->error;
        }
    }

    public function delete_member(){
        global $mysqli;

        $member_id = $_REQUEST['member_id'];

        $sql = "DELETE FROM member_info WHERE id= $member_id ";

        // echo $sql;

        if ($mysqli->query($sql) === TRUE) {
            echo "success";
        } else {
            echo "fail";
        }
    }

    public function member_profile() {

        global $break, $start;

        $member_id = $break[$start+2];

        display_html( 'header/header' );
        display_html( 'dashboard_sidebar/dashboard_sidebar' );

        $get_single_member=$this->get_single_member($member_id);

        display_html( 'dashboard/member_profile',$get_single_member[0]);
        display_html( 'footer/footer' );
    }

    public function get_all_member(){
        global $mysqli;
        $sql = "SELECT * FROM member_info";
        $sql = $mysqli->query($sql);
        $result = $sql->fetch_all(MYSQLI_ASSOC) ;
        return $result;
    }

    public function get_single_member($id){
        global $mysqli;

        $sql = "SELECT * FROM member_info WHERE id = $id";
        $sql = $mysqli->query($sql);
        $result = $sql->fetch_all(MYSQLI_ASSOC) ;
        return $result;
    }

    
    function __destruct() {

    }
}
?>
