<?php
// jika belum login redirect ke halaman login
function middleware()
{
    if (sess('auth') == NULL)
    {
        redirect('login.php');
    }
}
?>