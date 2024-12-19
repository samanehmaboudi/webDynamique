<?php

function user_select() {
    require_once(CONNEX_DIR);
    $sql = "SELECT * FROM user ORDER BY full_name";
    $result = mysqli_query($connex, $sql);
    $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $result;
}

function user_insert($request) {
    require_once(CONNEX_DIR);
    foreach ($request as $key => $value) {
        $$key = mysqli_real_escape_string($connex, $value);
    }
    $sql = "INSERT INTO user (full_name, username, password, birth_date) 
            VALUES ('$full_name', '$username', '$password', '$birth_date')";
    if (mysqli_query($connex, $sql)) {
        return mysqli_insert_id($connex);
    } else {
        return false;
    }
}

function user_select_id($id) {
    require_once(CONNEX_DIR);
    $id = mysqli_real_escape_string($connex, $id);
    $sql = "SELECT * FROM user WHERE user_id = '$id'";
    $result = mysqli_query($connex, $sql);
    $result = mysqli_fetch_array($result, MYSQLI_ASSOC);
    return $result;
}

function user_update($request) {
    require_once(CONNEX_DIR);
    foreach ($request as $key => $value) {
        $$key = mysqli_real_escape_string($connex, $value);
    }
    $sql = "UPDATE user SET 
            full_name = '$full_name', 
            username = '$username', 
            password = '$password', 
            birth_date = '$birth_date' 
            WHERE user_id = '$user_id'";
    return mysqli_query($connex, $sql);
}

function user_delete($id) {
    require_once(CONNEX_DIR);
    $id = mysqli_real_escape_string($connex, $id);
    $sql = "DELETE FROM user WHERE user_id = '$id'";
    return mysqli_query($connex, $sql);
}
