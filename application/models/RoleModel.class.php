<?php

// application/models/UserModel.class.php

class RoleModel extends Model{

	protected $table="roles";
    public function getRoles(){

        $sql = "select * from $this->table";
        
        $users = $this->db->getAll($sql);

        return $users;

    }

}
?>