<?php
function logout() {
    if (!isset($_SESSION)) {
        session_start();
    }
    unset($_SESSION["mailU"]);
    unset($_SESSION["mdpU"]);
}