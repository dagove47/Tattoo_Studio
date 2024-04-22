<?php
require "../models/charts.php";

class graficosAdminController
{
    public function chart1()
    {
        $chart = new Charts();
        $chart1 = $this->$chart->Chart1();
        require_once "../views/pages/graficosAdmin.php";
    }

    public function chart2()
    {
        $chart = new Charts();
        $chart2 = $this->$chart->Chart2();
        require_once "../views/pages/graficosAdmin.php";    }
    
    public function chart3()
    {
        $chart = new Charts();
        $chart3 = $this->$chart->Chart3();
        require_once "../views/pages/graficosAdmin.php";    }

    public function chart4()
    {
        $chart = new Charts();
        $chart4 = $this->$chart->Chart4();
        require_once "../views/pages/graficosAdmin.php";    }

    public function chart5()
    {
        $chart = new Charts();
        $chart5 = $this->$chart->Chart5();
        require_once "../views/pages/graficosAdmin.php";    }

    public function chart6()
    {
        $chart = new Charts();
        $chart6 = $this->$chart->Chart6();
        require_once "../views/pages/graficosAdmin.php";    }

}
