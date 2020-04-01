<?php
require_once 'PDOConnection.php';

class Model
{
   protected $bdd;

   /**
    * Model constructor.
    */
   public function __construct()
   {
      $this->bdd = PDOConnection::getSqlConnection();
   }

   /**
    * @param string $table
    * @return array
    */
   public function getAll(string $table): array
   {
      $req = 'SELECT * FROM ' . $table;
      $query = $this->bdd->query($req);
      return $query->fetchAll();
   }

   /**
    * @param string $table
    * @return array
    */
   public function get(string $table): array
   {
      $req = 'SELECT * FROM ' . $table;
      $query = $this->bdd->query($req);
      return $query->fetch();
   }

   /**
    * @param string $table
    * @param int    $id
    */
   public function delete(string $table, int $id):void
   {
      if ((int) $id < 0) {
         exit();
      }
      $req = 'DELETE FROM ' . $table . ' WHERE id=:id';
      $query = $this->bdd->prepare($req);
      $query->bindValue(':id', $id, \PDO::PARAM_INT);
      $query->execute();
   }
}