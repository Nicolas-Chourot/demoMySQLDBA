<?php
include_once "MySQLDBA.php";
include_once "MyAppDB.php";
final class Bookmarks extends MySQLTable {
    // Énumération des champs de la table
    public $Id;
    /** VARCHAR(64) */
    public $Title;
    /** VARCHAR(128) */
    public $Description;
    /** VARCHAR(128) */
    public $Url;

    public $UserId;
   
    // Méthode abstraite: reféfinition obligatoire
    // Cette méthode permettra à la classe parente
    // de déterminer le type SQL pour chacune des
    // propriétés dont l'identificateur ne commence
    // pas le le caractère _
    public function init() {
        $this->Id = 0;          
        $this->Title = '';
        $this->Description = '';
        $this->Url = '';
        $this->UserId = 0;  
    }
}

function TableBookmarks() {
    return Bookmarks::getInstance(DB());
}
?>