<?php
$rooms = [
  "Room 1" => [
    "description" => "You are in Room 1",
    "actions" => [
      "Room 3" => "North",
      "Room 2" => "East"
    ]
  ],
  "Room 2" => [
    "description" => "You are in Room 2",
    "actions" => [
      "Room 1" => "West"
    ]
  ],
  "Room 3" => [
    "description" => "You are in Room 3",
    "actions" => [
      "Room 6" => "North",
      "Room 1" => "South"
    ]
  ],
  "Room 4" => [
    "description" => "You are in Room 4",
    "actions" => [
      "Room 8" => "East",
      "Room 2" => "South",
      "Room 3" => "West"
    ]
  ],
  "Room 5" => [
    "description" => "You are in Room 5",
    "actions" => [
      "Room 7" => "East",
      "Room 4" => "South",
      "Room 3" => "West"
    ]
  ],
  "Room 6" => [
      "description" => "You are in Room 6",
      "actions" => [
        "Room 5" => "East",
        "Room 3" => "South"
      ]
  ],
  "Room 7" => [
    "description" => "You are trapped. Game Over.",
    "actions" => [
      "Room 1" => "Start Over"
    ]
  ],
  "Room 8" => [
    "description" => "You are in Room 8",
    "actions" => [
      "Room 7" => "North",
      "Room 9" => "South"
    ]
  ],
  "Room 9" => [
    "description" => "You are in Room 9",
    "actions" => [
      "Room 8" => "North",
      "Room 9" => "West"
    ]
  ],
  "End" => [
    "description" => "You escaped!",
    "actions" => [
      "Room 1" => "Start Over"
    ]
  ] 
    ];

if (isset($_GET["room"]) && isset($rooms[$_GET["room"]])) {
  $room = $rooms[$_GET["room"]];
} else {
  $room = $rooms["Room 1"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>aMAZing Adventures</title>
  <link rel="stylesheet" href="adventure.css">
</head>
<body>
  <div class="response"><?php echo $room["description"];?></div>
  <div class="actions">
    <?php foreach($room["actions"] as $r => $d) : ?>
      <a href="?room=<?php echo $r; ?>" class="action"><?php echo $d; ?></a>
    <?php endforeach ?>
    </div>
</body>
</html>