<?php
namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class KaryawanChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }
    public function build($webDevCount, $cyberSecurityCount, $softwareDevCount, $uiUxDesignCount): \ArielMejiaDev\LarapexCharts\PieChart
    {
        return $this->chart->pieChart()
            ->addData([$webDevCount, $cyberSecurityCount, $softwareDevCount, $uiUxDesignCount]) // Menggunakan data dinamis
            ->setLabels(['Web Developer', 'Cyber Security', 'Software Developer', 'UI/UX'])
            ->setColors(['#1E90FF', '#FF6347', '#FFD700', '#FFC0CB']);// Sesuaikan warna bagian

    }
    
    
}
