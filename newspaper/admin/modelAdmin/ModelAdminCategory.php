<?php
class ModelAdminCategory
{
    // List
    public static function getCategoryList()
    {
        $sql = "SELECT * FROM category ORDER BY category.name ASC";
        $db = new Database();
        $rows = $db->getAll($sql);
        return $rows;
    }
}  // class
