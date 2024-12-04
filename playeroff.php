<?php
// Channel configuration
$channels = [
    "vip1" => [
        "url" => "https://cdn9.tvplayhome.lt/live/eds2/VIP1/GO3_LIVE_DASH_AVC/VIP1.mpd",
"keyId" => "cf9689067bc0465593084d7832982fd1",
"key" => "07454bafd70413ab57a3eb25de2c79c3"
    ],
    "vip2" => [
        "url" => "https://cdn9.tvplayhome.lt/live/eds2/VIP2/GO3_LIVE_DASH_AVC/VIP2.mpd",
"keyId" => "ad206bf45075406da1ccfd824b4667c9",
"key" => "dbb490040f3fece7959603e46e8314ab"
    ],
    "vip3" => [
        "url" => "https://cdn9.tvplayhome.lt/live/eds2/VIP3/GO3_LIVE_DASH_AVC/VIP3.mpd",
"keyId" => "ad206bf45075406da1ccfd824b4667c9",
"key" => "37a8b1230dbeff0a11ce0af9bd3445e3"
    ],
    "vip4" => [
        "url" => "https://cdn9.tvplayhome.lt/live/eds2/VIP4/GO3_LIVE_DASH_AVC/VIP4.mpd",
"keyId" => "ad206bf45075406da1ccfd824b4667c9",
"key" => "37a8b1230dbeff0a11ce0af9bd3445e3"
    ],
    "vip5" => [
        "url" => "https://cdn9.tvplayhome.lt/live/eds2/VIP5/GO3_LIVE_DASH_AVC/VIP5.mpd",
"keyId" => "ad206bf45075406da1ccfd824b4667c9",
"key" => "9ddaf9c8b38abe57defaad198014d304"
    ],
    "vip6" => [
        "url" => "https://cdn9.tvplayhome.lt/live/eds2/VIP6/GO3_LIVE_DASH_AVC/VIP6.mpd",
"keyId" => "ad206bf45075406da1ccfd824b4667c9",
"key" => "4c121e31f96db29124c3a40443acd6ed"
    ],
    "vip7" => [
        "url" => "https://cdn9.tvplayhome.lt/live/eds2/VIP7/GO3_LIVE_DASH_AVC/VIP7.mpd",
"keyId" => "ad206bf45075406da1ccfd824b4667c9",
"key" => "37a8b1230dbeff0a11ce0af9bd3445e3"
    ],
    "vip8" => [
        "url" => "https://cdn9.tvplayhome.lt/live/eds2/VIP8/GO3_LIVE_DASH_AVC/VIP8.mpd",
"keyId" => "ad206bf45075406da1ccfd824b4667c9",
"key" => "dbb490040f3fece7959603e46e8314ab"
    ],
    "vip9" => [
        "url" => "https://cdnlb.tvplayhome.lt/live/eds2/VIP9/GO3_LIVE_DASH_AVC/VIP9.mpd",
"keyId" => "ad206bf45075406da1ccfd824b4667c9",
"key" => "dbb490040f3fece7959603e46e8314ab"
    ],
    "vip10" => [
        "url" => "https://cdn9.tvplayhome.lt/live/eds2/VIP10/GO3_LIVE_DASH_AVC/VIP10.mpd",
"keyId" => "ad206bf45075406da1ccfd824b4667c9",
"key" => "dbb490040f3fece7959603e46e8314ab"
    ],
    "vip11" => [
        "url" => "https://cdn9.tvplayhome.lt/live/eds2/VIP11/GO3_LIVE_DASH_AVC/VIP11.mpd",
"keyId" => "ad206bf45075406da1ccfd824b4667c9",
"key" => "dbb490040f3fece7959603e46e8314ab"
    ],
    "vip12" => [
        "url" => "https://cdn9.tvplayhome.lt/live/eds2/VIP12/GO3_LIVE_DASH_AVC/VIP12.mpd",
"keyId" => "ad206bf45075406da1ccfd824b4667c9",
"key" => "dbb490040f3fece7959603e46e8314ab"
    ],
    "vip13" => [
        "url" => "https://cdn9.tvplayhome.lt/live/eds2/VIP13/GO3_LIVE_DASH_AVC/VIP13.mpd",
"keyId" => "ad206bf45075406da1ccfd824b4667c9",
"key" => "dbb490040f3fece7959603e46e8314ab"
    ],
    "vip14" => [
        "url" => "https://cdn9.tvplayhome.lt/live/eds2/VIP14/GO3_LIVE_DASH_AVC/VIP14.mpd",
"keyId" => "ad206bf45075406da1ccfd824b4667c9",
"key" => "16e237d0bbd9a9b2cfd3a9a36f6323eb"
    ],
    "vip15" => [
        "url" => "https://cdn9.tvplayhome.lt/live/eds2/VIP15/GO3_LIVE_DASH_AVC/VIP15.mpd",
"keyId" => "ad206bf45075406da1ccfd824b4667c9",
"key" => "dbb490040f3fece7959603e46e8314ab"
    ],
    "free" => [
        "url" => "https://live9b-dash-cdn1-vp-cdn-viaplay-tv.akamaized.net/vp/xtra1/xtra1.isml/index.mpd",
"keyId" => "9df8ec5f86995102a6c9987d360b18c7",
"key" => "bb525f095535fa1ef2fd42f3068afd56"
    ],
];

// Validate channel ID
$id = $_GET['id'] ?? null;
if (!$id || !array_key_exists($id, $channels)) {
    die("Invalid channel ID.");
}

$channel = $channels[$id];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Video Player</title>
    <meta content="noindex, nofollow, noarchive" name="robots"/>
    <meta name="referrer" content="no-referrer" />
    <script src="//ssl.p.jwpcdn.com/player/v/8.26.0/jwplayer.js"></script>
    <script>jwplayer.key = "XSuP4qMl+9tK17QNb+4+th2Pm9AWgMO/cYH8CI0HGGr7bdjo";</script>
    <style>
        body { margin: 0px; }
        #player { width: 100%; height: 100vh; }
    </style>
</head>
<body>
    <div id="player"></div>

    <script>
        const config = {
            url: "<?php echo $channel['url']; ?>",
            keyId: "<?php echo $channel['keyId']; ?>",
            key: "<?php echo $channel['key']; ?>"
        };

        // JWPlayer setup
        jwplayer("player").setup({
            playlist: [{
                sources: [{
                    file: config.url,
                    drm: {
                        clearkey: {
                            keyId: config.keyId,
                            key: config.key
                        }
                    }
                }]
            }],
            autostart: false,
            width: "100%",
            height: "100%",
            stretching: "exactfit",
            aspectratio: "16:9"
        });
    </script>
</body>
</html>
