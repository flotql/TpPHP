<?php
    class Animaux{
        //Attributs
        private $idAnimal;
        private $nom;
        private $couleur;
        private $idRace;
        
        //Stockage info de connexion BDD
        public $connect;

        //Constructeur
        public function __construct(){
            $this->connect = getConnection();
        }

        //Getter (permet de récup les attributs privées ici)
        public function getIdAnimal(){
            return $this->idAnimal;
        }
        public function getNom(){
            return $this->nom;
        }
        public function getCouleur(){
            return $this->couleur;
        }
        public function getIdRace(){
            return $this->idRace;
        }

        //Setter (Modifie les attributs récup avec getter)
        public function setNom($nouveauNom){
            $this->nom = $nouveauNom;
        }
        public function setCouleur($nouvelleCouleur){
            $this->couleur = $nouvelleCouleur;
        }
        public function setIdRace($nouvelleRace){
            $this->idRace = $nouvelleRace;
        }
        public function setId($nouvelleRace){
            $this->idAnimal = $nouvelleRace;
        }

        //Fonctions CRUD
        public function readAll(){
            $myQuery = 'SELECT * 
                        FROM animaux';
            $stmt = $this->connect->prepare($myQuery); 
            //stmt =  "ETAT" (statment)
            $stmt->execute();
            return $stmt;
        }
        public function readSingle(){
            $myQuery = 'SELECT * 
                        FROM animaux 
                        WHERE nom = :nom';
            $stmt = $this->connect->prepare($myQuery);
            $stmt->bindParam(':nom',$this->nom);
            $stmt->execute();
            return $stmt;
        }
        public function createOne(){
            $myQuery = 'INSERT INTO animaux
                        SET nom = :nom,
                            couleur = :couleur,
                            id_race = :idRace';
            $stmt = $this->connect->prepare($myQuery);
            $stmt->bindParam(':nom',$this->nom);
            $stmt->bindParam(':couleur',$this->couleur);
            $stmt->bindParam(':idRace',$this->idRace);
            return $stmt->execute(); 
        }
        public function updateOne(){
            $myQuery = 'UPDATE animaux
                        SET nom = :nom,
                            couleur = :couleur,
                            id_race = :idRace
                        WHERE id_animal = :idAnimal';
            $stmt = $this->connect->prepare($myQuery);
            $stmt->bindParam(':nom',$this->nom);
            $stmt->bindParam(':couleur',$this->couleur);
            $stmt->bindParam(':idRace',$this->idRace);
            $stmt->bindParam(':idAnimal',$this->idAnimal);
            return $stmt->execute(); 
        }
        public function deleteOne(){
            $myQuery = 'DELETE FROM animaux
                        WHERE id_animal = :idAnimal';
            $stmt = $this->connect->prepare($myQuery);
            $stmt->bindParam('idAnimal',$this->idAnimal);
            return $stmt->execute(); 
        }
    }