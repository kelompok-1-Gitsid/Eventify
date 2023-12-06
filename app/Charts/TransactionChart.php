<?php

namespace App\Charts;

use App\Models\Transaction;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class TransactionChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {

        $photo = Transaction::whereHas('product', function ($query) {
            $query->where('category', 'Photographer');
        })->get()->count();

        $video = Transaction::whereHas('product', function ($query) {
            $query->where('category', 'Videographer');
        })->get()->count();

        $mua = Transaction::whereHas('product', function ($query) {
            $query->where('category', 'Makeup Artist');
        })->get()->count();

        $decoration = Transaction::whereHas('product', function ($query) {
            $query->where('category', 'Decoration');
        })->get()->count();

        $catering = Transaction::whereHas('product', function ($query) {
            $query->where('category', 'Catering');
        })->get()->count();

        $value = [
            $photo,
            $video,
            $mua,
            $decoration,
            $catering,
        ];

        $label = [
            'Photographer',
            'Videographer',
            'Makeup Artist',
            'Decoration',
            'Catering',
        ];

        return $this->chart->pieChart()
            ->setTitle('Transaction by Categories')
            ->setSubtitle(date('Y'))
            ->addData($value)
            ->setLabels($label);

        // return $this->chart->pieChart()
        //     ->setTitle('Top 3 scorers of the team.')
        //     ->setSubtitle('Season 2021.')
        //     ->addData([40, 50, 30])
        //     ->setLabels(['Player 7', 'Player 10', 'Player 9']);
    }
}
