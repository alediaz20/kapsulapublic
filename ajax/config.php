<?php
const COSTO_VINILO = 2000.00;
const COSTO_CONFECCION = 2000.00;

// Config servidor
const DB_HOST = 'localhost';
const DB_USER = 'u924410920_admin';
const DB_PASSWORD = 'CC_39030116aas';
const DB_NAME = 'u924410920_lakapsula';

const TBL_PRENDAS = 'prendas';
const TBL_TELAS = 'telas';
const TBL_USERS = 'usuarios';
const TBL_VINILOS = 'vinilos';
const TBL_PEDIDOS = 'pedidos';
const TBL_CLIENTES = 'clientes';
const TBL_COBROS = 'cobros';



const PERMITIDO_LUCAS = [
    // "listado" => ["dir" => "Prendas/listado.php"],
    "listado" => ["dir" => "Prendas/listado.php"],
    "stats" => ["dir" => "Stats/stats.php"],
    "pedidos" => ["dir" => "Pedidos/pedidos.php"],
    "nuevoPedido" => ["dir" => "Pedidos/nuevoPedido.php"],
    "clientes" => ["dir" => "Clientes/clientes.php"],
    "agregarDinero" => ["dir" => "Clientes/agregarDinero.php"],
    "login" => ["dir" => "login.php"],
    "salir" => ["dir" => "salir.php"],
];


const PAGINAS_LUCAS = [
    // "listado" => ["nombre" => "Listado de prendas", "icon" => "fas fa-ellipsis-v"],
    "listado" => ["nombre" => "Listado de prendas", "icon" => "fas fa-ellipsis-v"],
    "stats" => ["nombre" => "Estadísticas", "icon" => "fas fa-chart-bar"],
    "nuevoPedido" => ["nombre" => "Nuevo Pedido", "icon" => "fas fa-cart-plus"],
    "pedidos" => ["nombre" => "Ver Pedidos", "icon" => "fas fa-eye"],
    "clientes" => ["nombre" => "Clientes", "icon" => "fas fa-users"],
    "salir" => ["nombre" => "Salir", "icon" => "fas fa-sign-out-alt"],
];

const PERMITIDO_CARO = [
    // "listado" => ["dir" => "Prendas/listado.php"],
    "listado" => ["dir" => "Prendas/listado.php"],
    "stats" => ["dir" => "Stats/stats.php"],
    "prendas" => ["dir" => "Prendas/prendas.php"],
    "editarPrenda" => ["dir" => "Prendas/editarPrenda.php"],
    "telas" => ["dir" => "Telas/telas.php"],
    "editarTela" => ["dir" => "Telas/editarTela.php"],
    "pedidos" => ["dir" => "Pedidos/pedidos.php"],
    "nuevoPedido" => ["dir" => "Pedidos/nuevoPedido.php"],
    "pedidosConfeccion" => ["dir" => "Pedidos/pedidosConfeccion.php"],
    "calcvinil" => ["dir" => "Vinilos/calcvinil.php"],
    "editarVinilo" => ["dir" => "Vinilos/editarVinilo.php"],
    "clientes" => ["dir" => "Clientes/clientes.php"],
    "agregarDinero" => ["dir" => "Clientes/agregarDinero.php"],
    "cobros" => ["dir" => "Cobros/cobros.php"],
    "login" => ["dir" => "login.php"],
    "salir" => ["dir" => "salir.php"],
];

const PAGINAS_CARO = [
    // "listado" => ["nombre" => "Listado de prendas", "icon" => "fas fa-ellipsis-v"],
    "listado" => ["nombre" => "Listado de prendas", "icon" => "fas fa-ellipsis-v"],
    "stats" => ["nombre" => "Estadísticas", "icon" => "fas fa-chart-bar"],
    "prendas" => ["nombre" => "Prendas", "icon" => "fas fa-tshirt"],
    "telas" => ["nombre" => "Telas", "icon" => "fas fa-scroll"],
    "calcvinil" => ["nombre" => "Calculadora de vinilos", "icon" => "fas fa-calculator"],
    "nuevoPedido" => ["nombre" => "Nuevo Pedido", "icon" => "fas fa-cart-plus"],
    "pedidos" => ["nombre" => "Ver Pedidos", "icon" => "fas fa-eye"],
    "pedidosConfeccion" => ["nombre" => "Ver Pedidos a confeccionar", "icon" => "fas fa-eye"],
    "clientes" => ["nombre" => "Clientes", "icon" => "fas fa-users"],
    "cobros" => ["nombre" => "Cobros", "icon" => "fas fa-dollar"],
    "salir" => ["nombre" => "Salir", "icon" => "fas fa-sign-out-alt"],
];

const TALLES = ["4", "6", "8", "10", "12", "14", "16", "S", "M", "L", "XL", "XXL", "MEDIAS"];

const URL_ajax = "http://estudiokuality.com/ajax";
const URL_local = "http://estudiokuality.com/";
// const DIR_model = "http://estudiokuality.com/model";

defined('DIR_ROOT') || define('DIR_ROOT', $_SERVER['DOCUMENT_ROOT'] . "/");
defined('DIR_AJAX') || define('DIR_AJAX', $_SERVER['DOCUMENT_ROOT'] . "/ajax/");
defined('DIR_MODEL') || define('DIR_MODEL', $_SERVER['DOCUMENT_ROOT'] . "/model/");
defined('DIR_VIEWS') || define('DIR_VIEWS', $_SERVER['DOCUMENT_ROOT'] . "/views/");
defined('DIR_IMGS') || define('DIR_IMGS', $_SERVER['DOCUMENT_ROOT'] . "/imgs/");
