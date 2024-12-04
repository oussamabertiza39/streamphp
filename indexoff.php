<?php
// Channel configuration
$channels = [
    "USANETWORK" => [
        "url" => "https://cfrt.stream.peacocktv.com/Content/CMAF_OL1-CTR-4s/Live/channel(usa-west)/master.mpd",
        "keyId" => "252a671825ba31ec8433f978c32ccf6d",
        "key" => "ee560759ecc8d2274df2e63fcef56915"
    ],
    "espnmx" => [
        "url" => "https://cdn9.tvplayhome.lt/live/eds2/VIP6/GO3_LIVE_DASH_AVC/VIP6.mpd",
        "keyId" => "4c121e31f96db29124c3a40443acd6ed",
        "key" => "ad206bf45075406da1ccfd824b4667c9"
    ]
];

// Validate channel ID
$id = $_GET['id'] ?? null;
if (!$id || !array_key_exists($id, $channels)) {
    die("Invalid channel ID.");
}

// Redirect to the player page with the selected channel data
$channel = $channels[$id];
header("Location: player.php?id=$id");
exit;
