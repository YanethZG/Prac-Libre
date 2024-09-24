<?php

class Productos{
    private $conn;
    private $table_name = "productos";

    public $id;
    public $name;
    public $description;
    public $categorie;

    public function __construct($db){
        $this->conn = $db;
    }

    public function create(): void{
        $query = "INSERT INTO " .$this->table_name <div class="SET name=:name, description=:description, categorie=:categorie";
        $result = $this->conn->prepare($query);

        //limpiar el codigo
        $this->name = htmlspecialchars(string: strip_tags(string: $this->name));    
        $this->description = htmlspecialchars(string: strip_tags(string: $this->description));    
        $this->categorie = htmlspecialchars(string: strip_tags(string: $this->categorie));  

        $result->bindParam(":name", $this->name);
        $result->bindParam(":description", $this->description);
        $result->bindParam(":categorie", $this->categorie);
        
        if ($result->execute()){
            return true;
        }
        else{
            return false;
        }
    }
    public function get_productos(): void{
         $query = "SELECT * FROM" . $this->table_name;
         $result = $this->conn->prepare($query);
         $result->execute();
         return $result;
    }

    public function get_productos_by_id(){
        $query = "SELECT * FROM" . $this->table_name . 
        "WHERE id = :id";
        $result = $this->conn->prepare($query);
        $result->bindParam("id", $this->id);
        $result->execute();

        $row = $result->fetch(PDO::FETCH_ASSOC);

        $this->name = $row["name"];
        $this->description = $row["description"];
        $this->categorie = $row["categorie"]''
    }
    //Metodo para actualizsar un producto
    public function update(){
        $query = "UPDATE" . $this->table_name . 
        "SET name=:name, description=:description, categorie=:categorie" . 
        "WHERE id=:id";

        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->description = htmlspecialchars(strip_tags($this->description));
        $this->categorie = htmlspecialchars(strip_tags($this->categorie));
        $this->id = htmlspecialchars(strip_tags($this->id));

        $result = $this->conn->prepare($query);
        $result->bindParam("name", $this->name);
        $result->bindParam("description", $this->description);
        $result->bindParam("categorie", $this->categorie);
        $result->bindParam("id", $this->id);

        if ($result->execute()){
            return true;
        }
        else{
            return false;
        }
    }
    //metodo para eliminar un producto
    public function delete(){
        $query = "DELETE * FROM " .$this->table_name . 
        "WHERE id=:id";
        $result = $this->conn->prepare($query);
        $result->bindParam("id", $this->id);
        if ($result->execute()){
            return true;
        }
        else{
            return false;
        }
        //Metodo para actualizar registro
        public function update($id, $data) {
            global $pdo;
            $stmt = $pdo->prepare('UPDATE products SET name = :name, price = :price, description = :description WHERE id = :id');
            return $stmt->execute([
                'name' => $data['name'],
                'price' => $data['price'],
                'description' => $data['description'],
                'id' => $id,
            ]);
        }
        
    }
}