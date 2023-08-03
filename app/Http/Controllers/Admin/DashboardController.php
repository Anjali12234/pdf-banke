<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DownloadList;
use App\Models\Employee;
use App\Models\NewsCategory;
use App\Models\NewsList;
use App\Models\Slider;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke(){
        $slider_count = Slider::count();
        $employee_count = Employee::count();
        $downloads_count = DownloadList::count();
        $newsCategories=NewsCategory::withCount('newsLists')->orderBy('position')->get();

        $chartData = collect([
            'Sliders' => $slider_count,
            'Employees' => $employee_count,
            "Downloads" => $downloads_count
                    ]);

        return view('admin.layouts.index',compact('slider_count','employee_count','downloads_count','newsCategories', 'chartData'));
    }

   
}
