<?php
class userModel{
    private $u_name;
    private $p_word;
    protected $logged_in = false;
    function __construct($uname,$pass)
    {
        $this->u_name=$uname;
        $this->p_word=$pass;
        $this->logged_in = false;
    }
    public function loginCheck(){
        return $this->logged_in;
    }
     public function login( $con)
    {   
        $stmp = $con->prepare("SELECT * FROM user WHERE USER_ID=? AND PASSWORD=?");
        $stmp->bind_param("ss",$u,$p);
        $u = $this->u_name;
        $p = $this->p_word;
        $stmp->execute();
		$res = $stmp->get_result();
        $stmp->close();
        if($res->num_rows)
        {
           $this->logged_in = 'true';
        }
        else
        {
            $this->logged_in = 'false';
        }
        
    }
    function show_id()
    {
        return $this->logged_in;
    }

    public function logout(){
        if($_SESSION['login']){
        $_SESSION['login'] = false;
        return true;
        }
        else
            return false;
    }
}
?>