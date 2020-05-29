<?php
class VideoInfoControls
{
    private $video;
    private $userLoggedInObj;

    public function __construct($video, $userLoggedInObj)
    {
        $this->video = $video;
        $this->userLoggedInObj = $userLoggedInObj;
    }

    public function create()
    {

        $likeButton = $this->createLikeButton();
        $dislikeButton = $this->createDislikeButton();

        return "<div class='controls'>
                    $likeButton
                    $dislikeButton
                </div>";
    }

    private function createLikeButton() {
        return "<button>Like</button>";
    }

    private function createdisLikeButton() {
        return "<button>Dislike</button>";
    }
}
?>