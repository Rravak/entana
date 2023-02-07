<?php 
    if(! defined('BASEPATH')) exit('No direct script acces allowed');

    class Model extends CI_Model 
    {
        public function checkLogin($email,$mdp)
        {
            $valiny = false;
            $sql = "SELECT * FROM utilisateur where email = '$email' and mdp = '$mdp'";
            $query = $this->db->query($sql);
            if($query[0]['email'] != null)
            {
                $valiny = true;
                $_SESSION['utilisateur'] = $query[0];
            }
            return $valiny;
        }
        public function inscription($email,$mdp,$nom)
        {
            $valiny = false;
            $sqlVerif = "select email from utilisateur where email ='$email'";
            $queryVerif = $this->db->query($sqlVerif);
            if($queryVerif[0]['email'] != null)
            {
                $sql = "INSERT into utilisateur values (null,'$email','$mdp','$nom',0)";
                try {
                    $query = $this->db->query($sql);
                    $valiny = true;
                } catch (\Throwable $th) {
                    $valiny = false;
                }
            }
        }
    }
?>