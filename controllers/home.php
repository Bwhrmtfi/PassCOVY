<?php

// http://localhost/live/Home/Show/1/2

class Home extends Controller
{

    function anonymous()
    {
        clearError();
        $this->view("Home/home", []);
    }

    function Show($a, $b)
    {
        // Call Models
        $teo = $this->model("SinhVienModel");
        $tong = $teo->Tong($a, $b); // 3

        // Call Views
        $this->view("aodep", [
            "Page" => "news",
            "Number" => $tong,
            "Mau" => "red",
            "SoThich" => ["A", "B", "C"],
            "SV" => $teo->SinhVien()
        ]);
    }
}
