<?php
$avatar = "https://cdn.discordapp.com/avatars/1021102853915422770/eb255d51dba029547e0fdefeaf6efebe?size=2048";
$username = "API Failure";

function getUser(int $id): array
{
    $avatar = "https://cdn.discordapp.com/avatars/1021102853915422770/eb255d51dba029547e0fdefeaf6efebe?size=2048";
    $username = "API Failure";

    if (!file_exists('scripts/php/keys.php')) {
        echo "<script> console.error('Could not fetch any data as no key file was provided on the server with the necessary discord API key..') </script>";
    } else {
        $key = include 'scripts/php/keys.php';

        $json_options = [
            "http" => [
                "method" => "GET",
                "header" => "Authorization: Bot $key" # This requires an additional PHP file, please make a keys.php file in assets/scripts/ and return your discord bot token
            ]
        ];

        $url = 'https://discordapp.com/api/users/';
        $url .= $id;

        $json_context = stream_context_create($json_options);

        $json_get = file_get_contents($url, false, $json_context);

        $json_decode = json_decode($json_get, true);

        if (!$json_decode['id']) {
            echo "<script> console.error('API callback failed. Key might be expired or not provided correctly.') </script>";
        } else {
            $username = $json_decode['username'];
            $username .= "#";
            $username .= $json_decode['discriminator'];

            if ($json_decode['avatar']) {
                $avatar = 'https://cdn.discordapp.com/avatars/' . $id . '/' . $json_decode['avatar'] . '?size=2048';
            }
        }
    }
    return array(
        "name" => $username,
        "avatar" => $avatar
    );
}
