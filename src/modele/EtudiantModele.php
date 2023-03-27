<?php
require(__DIR__."/../lib/database.php");

class EtudiantModele{
    private $db;
    function __construct(){
        $this->db= new Database();
    }
    public function getAllById($id){
        $statement="SELECT u.id_utilisateur, u.nom_utilisateur, u.prenom_utilisateur, u.login, u.mdp, e.id_eleve, e.CV, e.id_classe, s.id_statut, s.statut FROM 
        (Eleve e INNER JOIN Utilisateur u on e.id_utilisateur = u.id_utilisateur) 
        INNER JOIN Statut s on e.id_statut = s.id_statut WHERE e.id_eleve = :id;";
        return $this->db->executeAll($statement,array(':id'=>$id));
    }
    public function getAllByStatut($statut){
        $statement="SELECT u.id_utilisateur, u.nom_utilisateur, u.prenom_utilisateur, u.login, u.mdp, e.id_eleve, e.CV, e.id_classe, s.id_statut, s.statut FROM
         (Eleve e INNER JOIN Utilisateur u on e.id_utilisateur = u.id_utilisateur) 
         INNER JOIN Statut s on e.id_statut = s.id_statut WHERE s.statut = :statut ;";
        return $this->db->executeAll($statement,array(":statut"=>$statut));
    }
    public function getAllRechercheByIdTuteur(){
        $statement="SELECT *
        FROM Eleve e INNER JOIN Utilisateur u on e.id_utilisateur = u.id_utilisateur WHERE (
            e.id_classe = (SELECT c.id_classe FROM (
            Classe c INNER JOIN Pilote p on c.id_classe = p.id_classe)
            INNER JOIN Tuteur t on p.id_tuteur = t.id_tuteur
            WHERE t.id_utilisateur = :sess
            ) 
            )
            AND e.id_statut = (SELECT DISTINCT s.id_statut FROM 
            Eleve e INNER JOIN Statut s on e.id_statut = s.id_statut 
            WHERE s.statut = 'En recherche') 
            ;";
        return $this->db->executeAll($statement,array(":sess"=>$_SESSION['user_id']));
    }
    public function getCountByStatutByIdTuteur($statut){
        $statement="SELECT count(e.id_utilisateur) AS nb_eleve
        FROM Eleve e INNER JOIN Utilisateur u on e.id_utilisateur = u.id_utilisateur WHERE (
            e.id_classe = (SELECT c.id_classe FROM (
            Classe c INNER JOIN Pilote p on c.id_classe = p.id_classe)
            INNER JOIN Tuteur t on p.id_tuteur = t.id_tuteur
            WHERE t.id_utilisateur = :sess
            ) 
            )
            AND e.id_statut = (SELECT DISTINCT s.id_statut FROM 
            Eleve e INNER JOIN Statut s on e.id_statut = s.id_statut 
            WHERE s.statut = :statut) 
            ;";
        return $this->db->executeall($statement,array(":statut"=>$statut, ":sess"=>$_SESSION['user_id']));
    }
    public function getCountAll(){
        $statement="SELECT Count(e.id_eleve) AS nb_eleve
        FROM Eleve e INNER JOIN Utilisateur u on e.id_utilisateur = u.id_utilisateur WHERE (
            e.id_classe = (SELECT c.id_classe FROM (
            Classe c INNER JOIN Pilote p on c.id_classe = p.id_classe)
            INNER JOIN Tuteur t on p.id_tuteur = t.id_tuteur
            WHERE t.id_utilisateur = :sess
            ) 
            )
            ;";
        return $this->db->executeAll($statement,array(":sess"=>$_SESSION['user_id']));
    }
}
?>