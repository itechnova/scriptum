<?php

namespace Itechnova\Scriptum\Core;

class Scriptum {
    public static function run() {
        add_action( 'init', function () {
            error_log( 'Scriptum Framework cargado correctamente.' );
        } );
    }
}
