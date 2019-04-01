<?php
    class User
    {       
        private $id;
        private $cin;
        private $username;
        private $password;
        private $role;
        private $email;
        private $numero;
        private $nom;
        private $prenom;
        private $dateNaissance;
        private $region;
        private $ville;
        private $codePostal;
        private $degree;
        private $photo;
        private $token;
        private $enabled;
        private $sexe;
        private $dateDebutContrat;
        private $dateFinContrat;
        private $disponibilite;

        public function __construct()
        {

        }


        /**
         * @return mixed
         */
        public function getId()
        {
            return $this->id;
        }

        /**
         * @param mixed $id
         */
        public function setId($id)
        {
            $this->id = $id;
        }

        /**
         * @return mixed
         */
        public function getCin()
        {
            return $this->cin;
        }

        /**
         * @param mixed $cin
         */
        public function setCin($cin)
        {
            $this->cin = $cin;
        }

        /**
         * @return mixed
         */
        public function getUsername()
        {
            return $this->username;
        }

        /**
         * @param mixed $username
         */
        public function setUsername($username)
        {
            $this->username = $username;
        }

        /**
         * @return mixed
         */
        public function getPassword()
        {
            return $this->password;
        }

        /**
         * @param mixed $password
         */
        public function setPassword($password)
        {
            $this->password = $password;
        }

        /**
         * @return mixed
         */
        public function getRole()
        {
            return $this->role;
        }

        /**
         * @param mixed $role
         */
        public function setRole($role)
        {
            $this->role = $role;
        }

        /**
         * @return mixed
         */
        public function getEmail()
        {
            return $this->email;
        }

        /**
         * @param mixed $email
         */
        public function setEmail($email)
        {
            $this->email = $email;
        }

        /**
         * @return mixed
         */
        public function getNumero()
        {
            return $this->numero;
        }

        /**
         * @param mixed $numero
         */
        public function setNumero($numero)
        {
            $this->numero = $numero;
        }

        /**
         * @return mixed
         */
        public function getNom()
        {
            return $this->nom;
        }

        /**
         * @param mixed $nom
         */
        public function setNom($nom)
        {
            $this->nom = $nom;
        }

        /**
         * @return mixed
         */
        public function getPrenom()
        {
            return $this->prenom;
        }

        /**
         * @param mixed $prenom
         */
        public function setPrenom($prenom)
        {
            $this->prenom = $prenom;
        }

        /**
         * @return mixed
         */
        public function getDateNaissance()
        {
            return $this->dateNaissance;
        }

        /**
         * @param mixed $dateNaissance
         */
        public function setDateNaissance($dateNaissance)
        {
            $this->dateNaissance = $dateNaissance;
        }

        /**
         * @return mixed
         */
        public function getRegion()
        {
            return $this->region;
        }

        /**
         * @param mixed $region
         */
        public function setRegion($region)
        {
            $this->region = $region;
        }

        /**
         * @return mixed
         */
        public function getVille()
        {
            return $this->ville;
        }

        /**
         * @param mixed $ville
         */
        public function setVille($ville)
        {
            $this->ville = $ville;
        }

        /**
         * @return mixed
         */
        public function getCodePostal()
        {
            return $this->codePostal;
        }

        /**
         * @param mixed $codePostal
         */
        public function setCodePostal($codePostal)
        {
            $this->codePostal = $codePostal;
        }

        /**
         * @return mixed
         */
        public function getDegree()
        {
            return $this->degree;
        }

        /**
         * @param mixed $degree
         */
        public function setDegree($degree)
        {
            $this->degree = $degree;
        }

        /**
         * @return mixed
         */
        public function getPhoto()
        {
            return $this->photo;
        }

        /**
         * @param mixed $photo
         */
        public function setPhoto($photo)
        {
            $this->photo = $photo;
        }

        /**
         * @return mixed
         */
        public function getToken()
        {
            return $this->token;
        }

        /**
         * @param mixed $token
         */
        public function setToken($token)
        {
            $this->token = $token;
        }

        /**
         * @return mixed
         */
        public function getEnabled()
        {
            return $this->enabled;
        }

        /**
         * @param mixed $enabled
         */
        public function setEnabled($enabled)
        {
            $this->enabled = $enabled;
        }

        /**
         * @return mixed
         */
        public function getSexe()
        {
            return $this->sexe;
        }

        /**
         * @param mixed $sexe
         */
        public function setSexe($sexe)
        {
            $this->sexe = $sexe;
        }

        /**
         * @return mixed
         */
        public function getDateDebutContrat()
        {
            return $this->dateDebutContrat;
        }

        /**
         * @param mixed $dateDebutContrat
         */
        public function setDateDebutContrat($dateDebutContrat)
        {
            $this->dateDebutContrat = $dateDebutContrat;
        }

        /**
         * @return mixed
         */
        public function getDateFinContrat()
        {
            return $this->dateFinContrat;
        }

        /**
         * @param mixed $dateFinContrat
         */
        public function setDateFinContrat($dateFinContrat)
        {
            $this->dateFinContrat = $dateFinContrat;
        }

        /**
         * @return mixed
         */
        public function getDisponibilite()
        {
            return $this->disponibilite;
        }

        /**
         * @param mixed $disponibilite
         */
        public function setDisponibilite($disponibilite)
        {
            $this->disponibilite = $disponibilite;
        }


        public function afficherUser()
        {
            echo "cin : ".$this->cin . " ";
            echo "username : ".$this->username . " ";
            echo "password : ".$this->password . " ";
        }
        
    }

?>