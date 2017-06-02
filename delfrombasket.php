<?php
session_start();
if (isset($_SESSION['login']) && isset($_SESSION['adminmode'])) {
    echo header('Location:index.php');
} else {
    $itemnumber = '';
    for ($i = 0; $i < $_SESSION['basketcounter']; $i++) {
        if (!empty($_GET['product' . $i])) {
            $itemnumber = $_GET['product' . $i];
            if ($itemnumber != '') {
                $itemnumber = $i;
                break;
            }
        } else {
            continue;
        }
    }
    for ($i = $itemnumber; $i < $_SESSION['basketcounter']; $i++) {
        $next                       = $i + 1;
        $_SESSION['item' . $i]      = $_SESSION['item' . $next];
        $_SESSION['item_name' . $i] = $_SESSION['item_name' . $next];
        $_SESSION['price' . $i]     = $_SESSION['price' . $next];
        $_SESSION['quantity' . $i]  = $_SESSION['quantity' . $next];
    }
    $_SESSION['basketcounter']--;
    echo '<script>location.href="', $_SERVER['HTTP_REFERER'], '"</script>';
}
?>