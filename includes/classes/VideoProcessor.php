<?php
class VideoProcessor {

    private $con;
    private $sizeLimit = 50000000;

    public function __construct($con)
    {
        $this->con = $con;
    }

    public function upload($videoUploadData) {

        $targetDir = "uploads/videos/";
        $videoData = $videoUploadData->videoDataArray;

        $tempFilePath = $targetDir . uniqid() . basename($videoData["name"]);
        // uploads/videos/5sjdjfbeehjdhebdog_splaying.flv

        $tempFilePath = str_replace(" ", "_", $tempFilePath);

        $isValidData = $this->processData($videoData, $tempFilePath);

        echo $tempFilePath;
    }

    private function processData($videoData, $filePath) {
        $videoType = pathInfo($filePath, PATHINFO_EXTENSION);

        if(!$this->isValidSize($videoData)) {
            echo "File too large. Cant be more than " . $this->sizeLimit . " bytes";
        }
    }

    private function isValidSize($data) {
        return $data["size"] <= $this->sizeLimit;
    }
}
?>
