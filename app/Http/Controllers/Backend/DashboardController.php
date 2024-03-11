<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
    }
    public function index()
    {
        $config = $this->config();
        $template = 'dashboard.home.index';
        return view('dashboard.layout',compact('template','config'));
    }
    private function config(){
        return $config = [
            'js' => [
                'assets/js/plugins/flot/jquery.flot.js',
                'assets/js/plugins/flot/jquery.flot.tooltip.min.js',
                'assets/js/plugins/flot/jquery.flot.spline.js',
                'assets/js/plugins/flot/jquery.flot.resize.js',
                'assets/js/plugins/flot/jquery.flot.pie.js',
                'assets/js/plugins/peity/jquery.peity.min.js',
                'assets/js/demo/peity-demo.js',
                'assets/js/inspinia.js',
                'assets/js/plugins/pace/pace.min.js',
                'assets/js/plugins/gritter/jquery.gritter.min.js',
                'assets/js/plugins/sparkline/jquery.sparkline.min.js',
                'assets/js/demo/sparkline-demo.js',
                'assets/js/plugins/chartassets/Js/Chart.min.js'
            ]
        ];
    }
}
