<?php
class MainModel extends Mysqli
{
    public $table, $pk;
    function __construct($tbl = '')
    {
        parent::__construct(HOSTNAME, USERNAME, PASSWORD, DBNAME);
        if (!$this->table && $tbl) {
            $this->table = $tbl;
        }
        if (!$this->pk) {
            $this->pk = 'id';
        }
    }
    public function submitData($coldtls, $id = '')
    {
        $sql = "insert into $this->table set ";
        $wh = "";
        if ($id) {
            $sql = " update $this->table set ";
            $wh = " where $this->pk='$id'";
        }
        $coldtls = array_map('addslashes', $coldtls);
        foreach ($coldtls as $colname => $colvalue) {
            $sql .= "$colname='$colvalue',";
        }
        $sql = substr($sql, 0, -1) . $wh;
        //  dd($sql);
        if ($this->query($sql)) {
            if (!$id)

                return $this->insert_id;
            return $id;
        }
        return false;
        //echo "insert or update successfully";
    }
    public function fetchData($cols = "*",$wh="")
    {
        $where=" where 1 ";
        if($wh)
        {
            $where.="and ($wh)";
        }
        //dd("select $cols from $this->table $where order by $this->pk desc");
        if ($rs = $this->query("select $cols from $this->table $where order by $this->pk desc")) {
            if(method_exists($rs, 'fetch_all'))
                return $rs->fetch_all(MYSQLI_ASSOC);
            while ($data[] = $rs->fetch_assoc());
            array_pop($data);
            return $data;
            //dd($data);
        }
        return false;
        // $data = [
        //     ['name' => 'Compueter', 'des' => 'not avi.'],
        //     ['name' => 'keyboard', 'des' => 'wirleles.']
        // ];
        // return $data;
    }
    public function fetchInfo($id,$cols="*")
    {
        if ($rs = $this->query("select $cols from $this->table  where $this->pk='$id'")) {
            return $rs->fetch_assoc();
         }      
         return false;
    }
    public function deleteRecord($id){
        return $this->query("delete from $this->table where $this->pk in ($id)");
    }

    public function __destruct()
    {
        $this->close();
    }
}
