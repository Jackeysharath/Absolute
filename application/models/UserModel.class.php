<?php

// application/models/UserModel.class.php

class UserModel extends Model{

	protected $table="users";
    public function getUsers(){

        $sql = "select * from $this->table";
        
        $users = $this->db->getAll($sql);

        return $users;

    }

}
?>