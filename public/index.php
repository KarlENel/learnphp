<?php
if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js)$/', $_SERVER["REQUEST_URI"])) {
    return false;    // serve the requested resource as-is.
}

function dump($variable){
    echo '<pre>';
    var_dump($variable);
    echo '<pre>';
}

require 'src/router.php';
require 'src/DB.php';

$router = new Router();
$db = new DB();
var_dump($router);
var_dump($db);





// switch ($_SERVER['REQUEST_URI']) {
//     case '/':
//         $posts = [
//             [
//                 'title' => 'World news 1',
//                 'body' => 'World news body 1',
//                 'created_at' => 'December 14, 2020',
//                 'author' => 'Chris'
//             ],
//             [
//                 'title' => 'World news 2',
//                 'body' => 'World news body 2',
//                 'created_at' => 'December 14, 2020',
//                 'author' => 'Kaspar'
//             ],
//             [
//                 'title' => 'World news 3',
//                 'body' => 'World news body 3',
//                 'created_at' => 'December 14, 2020',
//                 'author' => 'Martin'
//             ],
//             [
//                 'title' => 'World news 4',
//                 'body' => 'World news body 4',
//                 'created_at' => 'December 14, 2020',
//                 'author' => 'Pets'
//             ],
//             [
//                 'title' => 'World news 5',
//                 'body' => 'World news body 5',
//                 'created_at' => 'December 14, 2020',
//                 'author' => 'Vello'
//             ],
//         ];
//         include 'views/index.php';
//         break;
//     case '/us':
//         $posts = [
//             [
//                 'title' => 'U.S news 1',
//                 'body' => 'U.S news body 1',
//                 'created_at' => 'December 14, 2020',
//                 'author' => 'Chris'
//             ],
//             [
//                 'title' => 'U.S news 2',
//                 'body' => 'U.S news body 2',
//                 'created_at' => 'December 14, 2020',
//                 'author' => 'Kaspar'
//             ],
//             [
//                 'title' => 'U.S news 3',
//                 'body' => 'U.S news body 3',
//                 'created_at' => 'December 14, 2020',
//                 'author' => 'Martin'
//             ],
//             [
//                 'title' => 'U.S news 4',
//                 'body' => 'U.S news body 4',
//                 'created_at' => 'December 14, 2020',
//                 'author' => 'Pets'
//             ],
//             [
//                 'title' => 'U.S news 5',
//                 'body' => 'U.S news body 5',
//                 'created_at' => 'December 14, 2020',
//                 'author' => 'Vello'
//             ],
//         ];
//         include 'views/us.php';
//         break;
//     case '/tech':
//         $posts = [
//             [
//                 'title' => 'Tech news 1',
//                 'body' => 'Tech news body 1',
//                 'created_at' => 'December 14, 2020',
//                 'author' => 'Chris'
//             ],
//             [
//                 'title' => 'Tech news 2',
//                 'body' => 'Tech news body 2',
//                 'created_at' => 'December 14, 2020',
//                 'author' => 'Kaspar'
//             ],
//             [
//                 'title' => 'Tech news 3',
//                 'body' => 'Tech news body 3',
//                 'created_at' => 'December 14, 2020',
//                 'author' => 'Martin'
//             ],
//             [
//                 'title' => 'Tech news 4',
//                 'body' => 'Tech news body 4',
//                 'created_at' => 'December 14, 2020',
//                 'author' => 'Pets'
//             ],
//             [
//                 'title' => 'Tech news 5',
//                 'body' => 'Tech news body 5',
//                 'created_at' => 'December 14, 2020',
//                 'author' => 'Vello'
//             ],
//         ];
//         include 'views/tech.php';
//         break;
//     default:
//         echo '404 page not found!';
// };