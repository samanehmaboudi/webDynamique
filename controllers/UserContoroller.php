<?php  

function user_controller_index(){
   require_once(MODEL_DIR."/user.php");
   $data = user_select();
   //print_r($forums);
   return render("user/index.php", $data);

}

function user_controller_create(){
   require_once(MODEL_DIR."/forum.php");
   $data = forum_select();
   //print_r($forums);
   return render("user/create.php", $data);
}

function user_controller_store($request){
   if($_SERVER['REQUEST_METHOD'] != 'POST'){
      header('location:?controller=user');
    }
   //print_r($request);
   require_once(MODEL_DIR."/user.php");
   $data = user_insert($request);
   header('location:?controller=user&function=show&id='.$data);

}

function user_controller_show($request){
   $id=$request['id'];
   require_once(MODEL_DIR."/user.php");
   $data = user_select_id($id);
   return render("user/show.php", $data);
}

function user_controller_edit($request){
   $id=$request['id'];
   require_once(MODEL_DIR."/user.php");
   $user = user_select_id($id);
   $user = array('user'=>$user);
   //print_r($user);
   require_once(MODEL_DIR."/forum.php");
   $forum = forum_select();
   $forum = array('forum'=>$forum);
   // echo "<br>";
   //print_r($forum);
   $data =  array_merge($user, $forum);
   // print_r($data);
   // echo "<br>";
   // echo $data['user']['name'];
   // echo "<br>";
   // echo $data['forum'][1]['title'];
   // die();

   return render("user/edit.php", $data);
}

function user_controller_update($request){
   if($_SERVER['REQUEST_METHOD'] != 'POST'){
      header('location:?controller=user');
    }
   require_once(MODEL_DIR."/user.php");
   $data = user_update($request);
   if($data){
      header('location:?controller=user');
   }else{
      echo "error";
   }
}

function user_controller_delete($request){
   if($_SERVER['REQUEST_METHOD'] != 'POST'){
      header('location:?controller=user');
    }
   $id = $request['id'];
   require_once(MODEL_DIR."/user.php");
   $data = user_delete($id);
   if($data){
      header('location:?controller=user');
   }else{
      echo "error";
   }
}
