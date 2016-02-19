<?php
class DBAction extends configDB{
	private $list;
    public $items = array("item","value");
    public $table;
    private $connection;
    private $query;

    public function New($items=array('item'=>'value'),$table,$id=1)
    {
        $this->query .= "Insert into ".$table." (".$items['item'].") values(".$items['value'].");";
        $stmt = $dbh->prepare("INSERT INTO REGISTRY (name, value) VALUES (?, ?)");
            $stmt->bindParam(1, $name);
            $stmt->bindParam(2, $value);
            // insert one row
            $name = 'one';
            $value = 1;
            $stmt->execute();
            // insert another row with different values
            $name = 'two';
            $value = 2;
            $stmt->execute();

        return $this->query;
    }

    public function Edit($items=array('item'=>'value'),$table,$id)
    {
        $this->query .= "Update table ".$table." SET ".$items['item']."='".$values['value']."' where id='".$id."';";
    }

    public function Delete($items,$table,$id=array('item'=>'value')){
        $this->query .= "Delete from ".$table." ".$items." WHERE ".$id['id']."=".$id['value'].";";
    }

    public function ListSingle($items=array(),$table,$limit,$range)
    {
        if($items == ''){ $items = "*";}else{ $items = $items;}
        $this->query .= "SELECT .".$items." FROM ".$table." LIMIT TO ".$limit.";";
    }

    public function ListMultiple($items=array(),$id='1')
    {
        $this->query .= "SELECT .".$items." FROM ".$table." WHERE ".$limit.";";
    }
}

/* Test DBAction class */
$action = new DBAction();
$items = array("name"=>"Marina","username"=>"gmanon");
$action->Edit($items,'user','2');
echo $action->query;

echo '<pre>';print_r($action);echo '</pre>';
