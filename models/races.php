<?php
    class Races{
        private $idRace;
        private $nomRace;

        public $connect;

        public function __construct(){
            $this->connect = $this->connect->getConnection();
        }

        public function getIdRace(){
            return $this->idRace;
        }
        public function getNomRace(){
            return $this->nomRace;
        }

        public function setNomRace($nouveauNom){
            $this->nomRace = $nouveauNom;
        }
        
        public function readAll(){
            $myQuery = 'SELECT * 
                        FROM races';
            $stmt = $this->connect->prepare($myQuery);
            $stmt->execute();
            return $stmt;
        }
        public function readSingle(){
            $myQuery = 'SELECT * 
                        FROM races 
                        WHERE id_race = :idRace';
            $stmt = $this->connect->prepare($myQuery);
            $stmt->bindParam('idAnimal',$this->idAnimal);
            $stmt->execute();
            return $stmt;                
        }
        public function createOne(){
            $myQuery = 'INSERT INTO races
                        SET nom_race = :nomRace';
            $stmt = $this->connect->prepare($myQuery);
            $stmt->bindParam('nomRace',$this->nomRace);
            return $stmt->execute(); 
        }
        public function updateOne(){
            $myQuery = 'UPDATE races
                        SET nom_race = :nomRace
                        WHERE id_race = :idRace';
            $stmt = $this->connect->prepare($myQuery);
            $stmt->bindParam(':nomRace',$this->nomRace);
            $stmt->bindParam(':idRace',$this->idRace);
            return $stmt->execute(); 
        }
        public function deleteOne(){
            $myQuery = 'DELETE FROM races
                        WHERE id_race = :idRace';
            $stmt = $this->connect->prepare($myQuery);
            $stmt->bindParam('idRace',$this->idRace);
            return $stmt->execute(); 
        }
    }