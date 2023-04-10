<?php
class Auth extends CI_Controller
{

    function index()
    {
        if ($_SESSION['status'] != "logged_in") {
            // header("location:alamaturl");
            // echo "status tidak logged_in arahkan ke halaman login";
            redirect(site_url('auth/login'));
        }
        echo "Hello World! This is " . $_SESSION['user']; ?>
        <br><a href="<?= site_url('auth/logout') ?>">Logout</a>
<?php
    }
    function login()
    {
        if (isset($_SESSION['status']) && $_SESSION['status'] == "logged_in") {
            redirect(site_url('auth'));
        }
        $this->load->view("auth/login");
    }
    function loginProses()
    {
        $user = $_POST['username'];
        $pass = $this->input->post('password');
        if ($user == "admin" && $pass == "admin") {
            $info = array(
                "status" => "logged_in",
                "user" => $user
            );
            $this->session->set_userdata($info);
            // $_SESSION['status] = "logged_in"
            // $_SESSION['user'] = $user
            redirect(site_url('auth'));
        } else {
            echo "<script>alert('Username atau password salah')</script>";
            redirect(site_url('auth/login'));
        }
    }
    function logout()
    {
        // session_destroy();
        $this->session->sess_destroy();
        redirect(site_url('auth/login'));
    }
}
