<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Profile</title>
    <!-- Link to external CSS file -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Meet Group 2</h1>
        </div>
    </header>
    
    <div class="container">
        <div class="team">
            <!-- Team Member 1 -->
            <?php
            $members = [
                [
                    "name" => "Richmond Yabut",
                    "role" => "Group Leader",
                    "age" => 25,
                    "birthplace" => "Muntinlupa",
                    "student_status" => "A 3rd year BSIT Student",
                    "employment" => "Working Student",
                    "img" => "richmond.jpg",
                    "link" => "https://www.instagram.com/zenkii.y?igsh=MTE4c2Z5bmxvdWZh"
                ],
                [
                    "name" => "Rongavilla Almar",
                    "role" => "Member",
                    "age" => 20,
                    "birthplace" => "Muntinlupa",
                    "student_status" => "A 3rd year BSIT Student",
                    "employment" => "Working Student",
                    "img" => "Almar.jpg",
                    "link" => "https://www.facebook.com/25rongavilla?mibextid=ZbWKwL"
                ],
                [
                    "name" => "Angelo Coronejo",
                    "role" => "Member",
                    "age" => 20,
                    "birthplace" => "Pasig City",
                    "student_status" => "A 3rd year BSIT Student",
                    "employment" => "Working Student",
                    "img" => "Angelo.jpg",
                    "link" => "https://www.instagram.com/guevarra__angelo?igsh=c2VwcW52bnA3cjJ1"
                ],
                [
                    "name" => "Beyonce Ciprez",
                    "role" => "Member",
                    "age" => 20,
                    "birthplace" => "Muntinlupa",
                    "student_status" => "A 3rd year BSIT Student",
                    "employment" => "Fulltime Student",
                    "img" => "Beyonce.jpg",
                    "link" => "https://www.instagram.com/yceecey?igsh=MXV6NnRjb3NtOG12Yw%3D%3D&utm_source=qr"
                ],
                [
                    "name" => "Jan Lea Capones",
                    "role" => "Member",
                    "age" => 20,
                    "birthplace" => "Muntinlupa",
                    "student_status" => "A 3rd year BSIT Student",
                    "employment" => "Working Student",
                    "img" => "Lea.jpg",
                    "link" => "https://www.instagram.com/perty_lea?igsh=MWd6NnZxNGxpeWtnaA=="
                ]
            ];

            foreach ($members as $member) {
                echo "
                <a href='{$member['link']}' class='team-member' target='_blank' onclick='confirmLink(event)'>
                    <img src='{$member['img']}' alt='Member'>
                    <h2>{$member['name']}</h2>
                    <p>{$member['role']}</p>
                    <p>AGE: {$member['age']}</p>
                    <p>Birthplace: {$member['birthplace']}</p>
                    <p>{$member['student_status']}</p>
                    <p>{$member['employment']}</p>
                </a>";
            }
            ?>
        </div>
    </div>

    <!-- Link to external JS file -->
    <script src="scripts.js"></script>
</body>
</html>
