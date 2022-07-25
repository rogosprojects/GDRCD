<?php

# Importazione pagine necessarie
Router::loadRequired();

# Inizializzazione classe necessaria
$abi_class = AbilitaExtra::getInstance();

# Switch operazione
switch ( $_POST['action'] ) {

    # Estrazione dinamica dati via Ajax
    case 'get_extra_data':
        echo json_encode($abi_class->ajaxExtraData($_POST));
        break;

    # Crea riga abilita_extra
    case 'op_insert':
        echo json_encode($abi_class->NewAbiExtra($_POST));
        break;

    # Modifica riga abilita_extra
    case 'op_edit':
        echo json_encode($abi_class->ModAbiExtra($_POST));
        break;

    # Elimina riga abilita_extra
    case 'op_delete':
        echo json_encode($abi_class->DelAbiExtra($_POST));
        break;

}

