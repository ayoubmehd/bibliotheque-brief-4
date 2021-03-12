<?php 

function p_base_url($path = '') {
    echo BASE_URL . $path;
}

function dump($value) {    
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
}

function require_file($path, $data = []) {

    $path = ROOT . "\\" . $path;

    if(!empty($data)) {
        extract($data);
    }

    if (file_exists($path)) {
        return require_once($path);
    }

}

function redirect($location = '/') {

    $location = isset($_GET["redirect"]) ? $_GET["redirect"] : "/";

    header("Location: "  . $location);
}

// Database

function add_book_author_relation($author_id, $book_id) {

    global $connectdb;

    $result=$connectdb->prepare('INSERT INTO auteur_livre(`id_auteur`, `id_livre`) VALUES(?, ?)');
    $result->execute([$author_id, $book_id]);

    return $result;

}

function remove_book_author_relaten($author_id, $book_id) {

    global $connectdb;

    $result=$connectdb->prepare('DELETE FROM auteur_livre WHERE id_auteur = ? AND id_livre = ?');
    $result->execute([$author_id, $book_id]);

    return $result;

}

// Upload

function upload($save_path, $name = "image") {

    if (!in_array($_FILES[$name]["type"], ["image/jpeg", "image/gif", "image/png"])) return;

        // You should also check filesize here.
    if ($_FILES[$name]['size'] > 1000000) {
        throw new RuntimeException('Exceeded filesize limit.');
    }

    $type_array = explode(".", $_FILES[$name]["name"]);

    $file_extension = end($type_array);

    $file_name = round(microtime(true)) . '_' . rand() . ".$file_extension";


    $save_path = ROOT . str_replace("/", "\\", $save_path);


    move_uploaded_file($_FILES[$name]["tmp_name"], $save_path .$file_name);

    return $file_name;

}