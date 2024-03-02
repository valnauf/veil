<?php
include_once('connect.php');

if (isset($_POST['type']) && $_POST['type'] != '' && isset($_POST['id']) && $_POST['foto_id'] > 0) {
  $type = $conn->real_escape_string($_POST['type']);
  $foto_id =   $conn->real_escape_string($_POST['foto_id']);

  if ($type == 'awesome') {
    if (isset($_COOKIE['awesome_' . $foto_id])) {
      setcookie('awesome_' . $foto_id, "yes", 1, "/");
      $sql = "update like_dislikes set awesome=awesome-1 where foto_id='$foto_id'";
      $conn->query($sql);
      $opertion = "un_awesome";
      //$opertion = $id;
    } else {

      if (isset($_COOKIE['good_' . $foto_id])) {
        setcookie('good_' . $id, "yes", 1, "/");
        $sql = "update like_dislikes set good=good-1 where foto_id='$foto_id'";
        $conn->query($sql);
      }
      if (isset($_COOKIE['ok_' . $foto_id])) {
        setcookie('ok_' . $foto_id, "yes", 1, "/");
        $sql = "update like_dislikes set ok=ok-1 where foto_id='$foto_id'";
        $conn->query($sql);
      }
      if (isset($_COOKIE['not_good_' . $foto_id])) {
        setcookie('not_good_' . $foto_id, "yes", 1, "/");
        $sql = "update like_dislikes set not_good=not_good-1 where foto_id='$foto_id'";
        $conn->query($sql);
      }
      if (isset($_COOKIE['fail_' . $foto_id])) {
        setcookie('fail_' . $foto_id, "yes", 1, "/");
        $sql = "update like_dislikes set fail=fail-1 where foto_id='$foto_id'";
        $conn->query($sql);
      }

      setcookie('awesome_' . $foto_id, "yes", time() + 60 * 60 * 24 * 365 * 5, "/");
      $sql = "update like_dislikes set awesome=awesome+1 where foto_id='$foto_id'";
      $conn->query($sql);
      $opertion = "awesome";
      //$opertion = $id;
    }
  }

  if ($type == 'good') {
    if (isset($_COOKIE['good_' . $foto_id])) {
      setcookie('good_' . $foto_id, "yes", 1, "/");
      $sql = "update like_dislikes set good=good-1 where foto_id='$foto_id'";
      $conn->query($sql);
      $opertion = "un_good";
      //$opertion = $conn;
    } else {

      if (isset($_COOKIE['awesome_' . $foto_id])) {
        setcookie('awesome_' . $foto_id, "yes", 1, "/");
        $sql = "update like_dislikes set awesome=awesome-1 where foto_id='$foto_id'";
        $conn->query($sql);
      }
      if (isset($_COOKIE['ok_' . $foto_id])) {
        setcookie('ok_' . $foto_id, "yes", 1, "/");
        $sql = "update like_dislikes set ok=ok-1 where foto_id='$foto_id'";
        $conn->query($sql);
      }
      if (isset($_COOKIE['not_good_' . $foto_id])) {
        setcookie('not_good_' . $foto_id, "yes", 1, "/");
        $sql = "update like_dislikes set not_good=not_good-1 where foto_id='$foto_id'";
        $conn->query($sql);
      }
      if (isset($_COOKIE['fail_' . $foto_id])) {
        setcookie('fail_' . $foto_id, "yes", 1, "/");
        $sql = "update like_dislikes set fail=fail-1 where foto_id='$foto_id'";
        $conn->query($sql);
      }

      setcookie('good_' . $foto_id, "yes", time() + 60 * 60 * 24 * 365 * 5, "/");
      $sql = "update like_dislikes set good=good+1 where foto_id='$foto_id'";
      $conn->query($sql);
      $opertion = "good";
    }
  }

  if ($type == 'ok') {
    if (isset($_COOKIE['ok_' . $foto_id])) {
      setcookie('ok_' . $foto_id, "yes", 1, "/");
      $sql = "update like_dislikes set ok=ok-1 where foto_id='$foto_id'";
      $conn->query($sql);
      $opertion = "un_ok";
      //$opertion = $conn;
    } else {

      if (isset($_COOKIE['awesome_' .$foto_id])) {
        setcookie('awesome_' . $foto_id, "yes", 1, "/");
        $sql = "update like_dislikes set awesome=awesome-1 where foto_id='$foto_id'";
        $conn->query($sql);
      }
      if (isset($_COOKIE['good_' . $foto_id])) {
        setcookie('good_' . $foto_id, "yes", 1, "/");
        $sql = "update like_dislikes set good=good-1 where foto_id='$foto_id'";
        $conn->query($sql);
      }
      if (isset($_COOKIE['not_good_' . $foto_id])) {
        setcookie('not_good_' . $foto_id, "yes", 1, "/");
        $sql = "update like_dislikes set not_good=not_good-1 where foto_id='$foto_id'";
        $conn->query($sql);
      }
      if (isset($_COOKIE['fail_' . $foto_id])) {
        setcookie('fail_' . $foto_id, "yes", 1, "/");
        $sql = "update like_dislikes set fail=fail-1 where id='$foto_id'";
        $conn->query($sql);
      }

      setcookie('ok_' . $foto_id, "yes", time() + 60 * 60 * 24 * 365 * 5, "/");
      $sql = "update like_dislikes set ok=ok+1 where foto_id='$foto_id'";
      $conn->query($sql);
      $opertion = "ok";
    }
  }



  if ($type == 'not_good') {
    if (isset($_COOKIE['not_good_' . $foto_id])) {
      setcookie('not_good_' . $foto_id, "yes", 1, "/");
      $sql = "update like_dislikes set not_good=not_good-1 where foto_id='$foto_id'";
      $conn->query($sql);
      $opertion = "un_not_good";
      //$opertion = $conn;
    } else {

      if (isset($_COOKIE['awesome_' . $foto_id])) {
        setcookie('awesome_' . $foto_id, "yes", 1, "/");
        $sql = "update like_dislikes set awesome=awesome-1 where foto_id='$foto_id'";
        $conn->query($sql);
      }
      if (isset($_COOKIE['good_' . $foto_id])) {
        setcookie('good_' . $foto_id, "yes", 1, "/");
        $sql = "update like_dislikes set good=good-1 where foto_id='$foto_id'";
        $conn->query($sql);
      }
      if (isset($_COOKIE['ok_' . $foto_id])) {
        setcookie('ok_' . $foto_id, "yes", 1, "/");
        $sql = "update like_dislikes set ok=ok-1 where foto_id='$foto_id'";
        $conn->query($sql);
      }
      if (isset($_COOKIE['fail_' . $foto_id])) {
        setcookie('fail_' . $foto_id, "yes", 1, "/");
        $sql = "update like_dislikes set fail=fail-1 where foto_id='$foto_id'";
        $conn->query($sql);
      }

      setcookie('not_good_' . $foto_id, "yes", time() + 60 * 60 * 24 * 365 * 5, "/");
      $sql = "update like_dislikes set not_good=not_good+1 where foto_id='$foto_id'";
      $conn->query($sql);
      $opertion = "not_good";
    }
  }

  if ($type == 'fail') {
    if (isset($_COOKIE['fail_' . $foto_id])) {
      setcookie('fail_' . $foto_id, "yes", 1, "/");
      $sql = "update like_dislikes set fail=fail-1 where foto_id='$foto_id'";
      $conn->query($sql);
      $opertion = "un_fail";
      //$opertion = $conn;
    } else {

      if (isset($_COOKIE['awesome_' . $foto_id])) {
        setcookie('awesome_' . $foto_id, "yes", 1, "/");
        $sql = "update like_dislikes set awesome=awesome-1 where foto_id='$foto_id'";
        $conn->query($sql);
      }
      if (isset($_COOKIE['good_' . $foto_id])) {
        setcookie('good_' . $foto_id, "yes", 1, "/");
        $sql = "update like_dislikes set good=good-1 where foto_id='$foto_id'";
        $conn->query($sql);
      }
      if (isset($_COOKIE['ok_' . $foto_id])) {
        setcookie('ok_' . $foto_id, "yes", 1, "/");
        $sql = "update like_dislikes set ok=ok-1 where foto_id='$foto_id'";
        $conn->query($sql);
      }
      if (isset($_COOKIE['not_good_' . $foto_id])) {
        setcookie('not_good_' . $foto_id, "yes", 1, "/");
        $sql = "update like_dislikes set not_good=not_good-1 where foto_id='$foto_id'";
        $conn->query($sql);
      }

      setcookie('fail_' . $id, "yes", time() + 60 * 60 * 24 * 365 * 5, "/");
      $sql = "update like_dislikes set fail=fail+1 where foto_id='$foto_id'";
      $conn->query($sql);
      $opertion = "fail";
    }
  }


  $sql = "select * from like_foto where foto_id='$foto_id'";
  $result = $conn->query($sql);

  $row =  $result->fetch_assoc();

  echo json_encode([
    'opertion' => $opertion,
    'awesome' => $row['awesome'],
    'good' => $row['good'],
    'ok' => $row['ok'],
    'not_good' => $row['not_good'],
    'fail' => $row['fail']
  ]);
}