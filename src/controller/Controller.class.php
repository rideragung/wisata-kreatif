<?php
class Controller
{
    public function loadModel($modelName)
    {
        include_once __DIR__ . "/../model/Model.class.php";
        include_once __DIR__ . "/../model/$modelName.class.php";
        return new $modelName;
    }

    public function loadView($viewName, $data = [])
    {
        foreach ($data as $var => $value) {
            $$var = $value;
        }
        include_once __DIR__ . "/../view/$viewName.php";
    }
}
?>
