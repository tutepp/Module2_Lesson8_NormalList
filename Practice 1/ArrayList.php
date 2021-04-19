<?php
class ArrayList
    {
    public $arrayList;

    public function ArrayList($array = "")
    {
        if (is_array($array)==true)
        {
           $this->arrayList = $array;
        }
        else
            $this->arrayList = array();
    }

    public function add($ojb)
    {
        array_push($this->arrayList,$ojb);
    }

    public function clear()
    {
        $this->arrayList = array();
    }

    public function get($index)
    {
        if($this->isInteger($index) && $index < $this->size())
    {
        return $this->arrayList[$index];
    }
    else
        die('Error in ArrayList.get');
    }

    public function isEmpty()
    {
        if (count($this->arrayList) == 0)

            return true;
        else
        return false;
    }
    function remove($index)
    {
        if ($this->isInteger($index)) {
            $newArrayList = array();
            for ($i = 0; $i < $this->size(); $i++)
                if ($index != $i) $newArrayList[] = $this->get($i);
            $this->arrayList = $newArrayList;
        }
        else
        {
            die ('ERROR in ArrayList.remove <br> Integer value required');
        }
    }
    public function size()
    {
        return count($this->arrayList);
    }

    public function sort()
    {
    return $this->sort();
    }

    public function toArray()
    {
        return $this->arrayList;
    }

    public function isInteger($toCheck)
    {
        return preg_match("/^[0-9]+$/", $toCheck);
    }
}