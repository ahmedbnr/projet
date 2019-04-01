<?php
/**
 * Created by PhpStorm.
 * User: Ahmed
 * Date: 3/30/2019
 * Time: 10:50 PM
 */
include_once ('../config.php');
include_once ('../entities/Role.php');
class RoleC
{

    public function __construct()
    {
        //1- creer une instance de la classe config
        $this->db=new config();
        //2-faire la cnx avec la base de donnée
        $this->db=$this->db->getCnx();
    }
    public function creerRole(Role $role)
    {

        $query = "INSERT INTO `role`(`description`, `salaire`, `nom`) 
                                  VALUES (:description,:salaire,:nom)";

        try {
            $req=$this->db->prepare($query);


            $req->bindValue(':description',$role->getDescription());
            $req->bindValue(':salaire',$role->getSalaire());
            $req->bindValue(':nom',$role->getNom());

            $req->execute();


        }catch(Exception $e) {
            echo 'Message: ' .$e->getMessage();
        }
    }
    public function getRole()
    {
        $sql = "SELECT * from role";
        $roles =$this->db->query($sql);
        return $roles;
    }
    public function getRoleById($id)
    {
        $sql = "SELECT * from role where id=".$id;
        $roles =$this->db->query($sql)->fetch();
        return $roles;
    }
    public  function updateRole(Role $rol,$id){
        $sql = "UPDATE role SET nom= :nom, description= :description, salaire= :salaire where id= :id";

        try{
            $req = $this->db->prepare($sql);

            $req->bindValue(':nom',$rol->getNom());
            $req->bindValue(':description',$rol->getDescription());
            $req->bindValue(':salaire',$rol->getSalaire());
            $req->bindValue(':id',$id);

            return $req->execute();
        }catch (Exception $e)
        {
            var_dump($e->getMessage());
        }
    }
}