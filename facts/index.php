<?php
// Your JSON data
$data = [
    [
        "_id" => "591f9894d369931519ce358f",
        "__v" => 0,
        "text" => "A female cat will be pregnant for approximately 9 weeks - between 62 and 65 days from conception to delivery.",
        "updatedAt" => "2018-01-04T01:10:54.673Z",
        "deleted" => false,
        "source" => "api",
        "sentCount" => 5
    ],
    [
        "_id" => "591f9854c5cbe314f7a7ad34",
        "__v" => 0,
        "text" => "It has been scientifically proven that stroking a cat can lower one's blood pressure.",
        "updatedAt" => "2018-01-04T01:10:54.673Z",
        "deleted" => false,
        "source" => "api",
        "sentCount" => 3
    ]
];

$response = $data;

$url = $_SERVER['REQUEST_URI'];

$parsedUrl = parse_url($url);
if (isset($parsedUrl['query'])) {
    $url = str_replace('?'.$parsedUrl['query'], '', $url);
}

if (preg_match('/\/facts\/([^\/]+)/', $url, $matches)) {
    $_id = $matches[1];
}

if(isset($_id) AND $_id!='random'){

    $response = array();

    if ($data) {
        foreach ($data as $fact) {
            if ($fact['_id'] === $_id) {
                $response = $fact;
            }
        }
    }
}

// Set the response header to specify JSON content
header('Content-Type: application/json');

// Encode the array as JSON and echo the response
echo json_encode($response, JSON_PRETTY_PRINT);
?>
