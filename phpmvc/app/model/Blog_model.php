<?php
class Blog_model{
    private $blog = [[
        "penulis" => "FIKROTU DWI FUADATUZZAHI",
        "judul" => "RPL",
        "tulisan" => "57"
    ],
    [
        "penulis" => "IVANS ZUWANTA",
        "judul" => "RPL",
        "tulisan" => "39"
    ],
    [
        "penulis" => "LABIB FAYUMI",
        "judul" => "RPL",
        "tulisan" => "79"
    ]
    ];
    public function getAllBlog()
    {
        return $this->blog;
    }
}

?>