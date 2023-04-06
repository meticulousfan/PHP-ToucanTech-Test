Sure, here's an example `index.php` file for your application:

```
<?php
require_once(__DIR__ . "/app/config.php");

// Define routes
$routes = array(
   "/add-member" => array("controller" => "MembersController", "method" => "addMember"),
   "/member-list" => array("controller" => "MembersController", "method" => "getMembersBySchool"),
   "/schools-list" => array("controller" => "SchoolsController", "method" => "getSchools")
);

// Parse incoming request URL
$url = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
$method = $_SERVER["REQUEST_METHOD"];

// Find the matching route
$route = null;
foreach ($routes as $pattern => $routeData) {
   if ($url === $pattern && $method === "GET") {
      $route = $routeData;
      break;
   } elseif (strpos($url, $pattern) === 0 && $method === "POST") {
      $route = $routeData;
      break;
   }
}

// Route to the appropriate controller method
if ($route !== null) {
   require_once(__DIR__ . "/app/controllers/" . $route["controller"] . ".php");
   $controllerName = $route["controller"];
   $method = $route["method"];

   $controller = new $controllerName(new MembersModel($db), new SchoolsModel($db));
   $controller->$method();
} else {
   http_response_code(404);
   echo "Page not found.";
}