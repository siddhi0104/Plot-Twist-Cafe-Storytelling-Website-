//storiessss 
<?php

$storyId = $_GET["id"]; 


$stories = array(
    1 => array(
        "image" => "https://img.wattpad.com/cover/112709081-256-k876148.jpg",
        "title" => "Story 1 Title",
        "description" => "Story 1 Description",
        "chapters" => array("Chapter 1", "Chapter 2", "Chapter 3")
    ),
    2 => array(
        "image" => "https://img.wattpad.com/cover/313562993-288-k602123.jpg",
        "title" => "Story 2 Title",
        "description" => "Story 2 Description",
        "chapters" => array("Chapter 1", "Chapter 2", "Chapter 3")
    ),
    
    3 => array(
        "image" => "https://static-cse.canva.com/blob/1396936/1024w-Jp7I2_rOQvc.jpg",
        "title" => "Story 2 Title",
        "description" => "Story 2 Description",
        "chapters" => array("Chapter 1", "Chapter 2", "Chapter 3")
    ),
    4 => array(
        "image" => "https://content.wepik.com/statics/13636424/preview-page0.jpg",
        "title" => "Story 5 Title",
        "description" => "Story 2 Description",
        "chapters" => array("Chapter 1", "Chapter 2", "Chapter 3")
    ),
    5 => array(
        "image" => "https://qph.cf2.quoracdn.net/main-qimg-fe751dee888da5396326f348fa54a84f-lq",
        "title" => "Story 5 Title",
        "description" => "Story 2 Description",
        "chapters" => array("Chapter 1", "Chapter 2", "Chapter 3")
    ),
);

if (isset($stories[$storyId])) {
    header("Content-Type: application/json");
    echo json_encode($stories[$storyId]);
} else {
    http_response_code(404);
}
?>

