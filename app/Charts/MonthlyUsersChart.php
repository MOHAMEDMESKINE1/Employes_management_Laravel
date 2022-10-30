<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class MonthlyUsersChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    } 
   
    public function build()
    {
        return $this->chart->horizontalBarChart()
                ->setTitle('Monthly Users')
                ->setSubtitle('Season 2022.')
                ->addData('active users',[
                \App\Models\Employe::where('id','>', 3 )->count(),
       
      
    ])
    ->addData('inactive users',[
        \App\Models\Employe::where('id','<', 7)->count(),      
    ])
    ->setColors(['#ffc63b', '#ff6384'])
    ->setLabels(['Active users', 'Inactive users'])
    ->setXAxis(['January', 'February', 'March', 'April', 'May', 'June']);
    }
}
// class MonthlyUsersChart extends Chart
// {
//     /**
//      * Initializes the chart.
//      *
//      * @return void
//      */
//     public function __construct()
//     {
//         parent::__construct();
//     }
// }
