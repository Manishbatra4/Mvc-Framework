<?php
/*
 * Base Controller
 *
 */

Use eftec\bladeone\BladeOne;

class Controllers
{

    public function model($model)
    {
        if (file_exists('../app/models/' . ucwords($model) . '.php')) {
            require_once '../app/models/' . ucwords($model) . '.php';
            return new $model();
        } else {
            echo "Model Yet Not Created";
        }
    }

    public function view($view, $data = [])
    {
        extract($data);
        $views = APPROOT . '/views';
        $cache = APPROOT . '/cache';
        $blade = new BladeOne($views, $cache, BladeOne::MODE_AUTO);
        if (isset($_SESSION['user_id'])) {
            $blade->setAuth($_SESSION['user_id'], 'user');
        }
        echo $blade->run(ucwords($view), $data);
    }
}