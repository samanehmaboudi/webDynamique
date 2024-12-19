<?php

function forum_select_all() {
    require_once(CONNEX_DIR);
    $sql = "SELECT * FROM forum ORDER BY created_at DESC";
    $result = mysqli_query($connex, $sql);
    if ($result) {
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
    return [];
}

function forum_select_by_id($id) {
    require_once(CONNEX_DIR);
    $id = mysqli_real_escape_string($connex, $id);
    $sql = "SELECT * FROM forum WHERE id = '$id'";
    $result = mysqli_query($connex, $sql);
    $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $result;
}

function forum_insert($user_id, $title, $content) {
    require_once(CONNEX_DIR);
    $sql = "INSERT INTO forum (user_id, title, content, created_at) 
            VALUES ('$user_id', '$title', '$content', NOW())";
    $user_id = mysqli_real_escape_string($connex, $user_id);
    $title = mysqli_real_escape_string($connex, $title);
    $content = mysqli_real_escape_string($connex, $content);
    if (mysqli_query($connex, $sql)) {
        return mysqli_insert_id($connex); 
    }
    return false;
}

function forum_update($id, $title, $content) {
    require_once(CONNEX_DIR);
    $sql = "UPDATE forum SET title = '$title', content = '$content' WHERE id = '$id'";
    $id = mysqli_real_escape_string($connex, $id);
    $title = mysqli_real_escape_string($connex, $title);
    $content = mysqli_real_escape_string($connex, $content);
    return mysqli_query($connex, $sql);
}

function forum_delete($id) {
    require_once(CONNEX_DIR);
    $sql = "DELETE FROM forum WHERE id = '$id'";
    $id = mysqli_real_escape_string($connex, $id);
    return mysqli_query($connex, $sql);
}
?>
