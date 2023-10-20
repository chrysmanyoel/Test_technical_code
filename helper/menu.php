<?php

// cek menu aktif -> jika akif tambah class active
function menu_active($menu = NULL)
{
    if(sess('menu_active') == NULL)
    {
        return NULL;
    }

    return $menu == sess('menu_active') ? 'class="active"' : NULL;
}
?>