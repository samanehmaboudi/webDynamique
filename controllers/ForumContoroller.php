<?php

function forum_controller_index() {
    require_once(MODEL_DIR . "/forum.php");
    $data = forum_select_all();
    return render("forum/index.php", $data);
}

function forum_controller_create() {
    require_once(MODEL_DIR . "/forum.php");
    return render("forum/create.php");
}

function forum_controller_store($request) {
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        header("Location: ?controller=forum");
        exit;
    }
    require_once(MODEL_DIR . "/forum.php");
    $title = htmlspecialchars($request['title'] ?? '');
    $content = htmlspecialchars($request['content'] ?? '');

    if (empty($title) || empty($content)) {
        echo "Title and content are required.";
        return;
    }

    $id = forum_insert($title, $content);
    header("Location: ?controller=forum&function=show&id=" . $id);
    exit;
}

function forum_controller_show($request) {
    $id = $request['id'];
    require_once(MODEL_DIR . "/forum.php");
    $data = forum_select_by_id($id);
    return render("forum/show.php", $data);
}

function forum_controller_edit($request) {
    $id = $request['id'];
    require_once(MODEL_DIR . "/forum.php");
    $forum = forum_select_by_id($id);
    return render("forum/edit.php", $forum);
}

function forum_controller_update($request) {
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        header("Location: ?controller=forum");
        exit;
    }
    require_once(MODEL_DIR . "/forum.php");
    $id = $request['id'];
    $title = htmlspecialchars($request['title'] ?? '');
    $content = htmlspecialchars($request['content'] ?? '');

    if (empty($title) || empty($content)) {
        echo "Title and content are required.";
        return;
    }

    forum_update($id, $title, $content);
    header("Location: ?controller=forum&function=show&id=" . $id);
    exit;
}

function forum_controller_delete($request) {
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        header("Location: ?controller=forum");
        exit;
    }
    $id = $request['id'];
    require_once(MODEL_DIR . "/forum.php");
    forum_delete($id);
    header("Location: ?controller=forum&function=index");
    exit;
}
