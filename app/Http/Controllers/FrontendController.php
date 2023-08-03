<?php

namespace App\Http\Controllers;

use App\Enums\OfficeDetailTypeEnum;
use App\Models\DocumentCategory;
use App\Models\DocumentList;
use App\Models\DownloadCategory;
use App\Models\DownloadList;
use App\Models\Employee;
use App\Models\Faq;
use App\Models\FarmerCategory;
use App\Models\FarmerList;
use App\Models\Link;
use App\Models\NewsCategory;
use App\Models\NewsList;
use App\Models\OfficeDetail;
use App\Models\Photo;
use App\Models\Slider;


class FrontendController extends Controller
{
    public function index()
    {
        $photos = Photo::with('files')->latest()->get();
        $sliders = Slider::all();
        $employees = Employee::with('department', 'designation')->orderBy('position')->get();
        $documentCategories = DocumentCategory::with('documentLists')->where('status', 1)->get();
        $newsCategories = NewsCategory::with('newsLists')->get();
        $introduction = OfficeDetail::where('type', OfficeDetailTypeEnum::INTRODUCTION->value)->first();
        $farmerCategories = FarmerCategory::with(['farmerLists' => function ($query) {
            $query->take(3);
        }])->get();
        $farmerCategories1 = FarmerCategory::with(['farmerLists' => function ($query) {
            $query->take(5);
        }])->get();

        return view('frontend.index', compact('sliders', 'employees', 'photos', 'documentCategories', 'newsCategories', 'introduction', 'farmerCategories','farmerCategories1'));
    }

    public function employeeDetail()
    {
        $employees = Employee::with('department', 'designation')->orderBy('position')->get();
        return view('frontend.employee-detail', compact('employees'));
    }

    public function newsCategory(NewsCategory $newsCategory)
    {
        $newsCategory->load('newsLists');
        return view('frontend.newsList', compact('newsCategory'));
    }

    public function newsDetail(NewsList $newsList)
    {
        $newsList->load('files');
        return view("frontend.news-detail", compact('newsList'));
    }

    public function downloadDetail(DownloadList $downloadList)
    {
        $downloadList->load('files');
        return view("frontend.download-detail", compact('downloadList'));
    }

    public function downloadCategory(DownloadCategory $downloadCategory)
    {
        $downloadCategory->load('downloadLists');
        return view('frontend.downloadList', compact('downloadCategory'));
    }

    public function photoGallery()
    {
        $photos = Photo::with('files')->latest()->get();
        return view('frontend.photo-gallery', compact('photos'));
    }

    public function photoList(Photo $photo)
    {
        $photo->load('files');
        return view("frontend.photoList", compact('photo'));
    }

    public function documentCategory(DocumentCategory $documentCategory)
    {
        $documentCategory->load('documentLists');
        return view('frontend.documentList', compact('documentCategory'));
    }

    public function documentDetail(DocumentList $documentList)
    {
        $documentList->load('files');
        return view('frontend.document-detail', compact('documentList'));
    }

    public function farmerCategory(FarmerCategory $farmerCategory)
    {
        $farmerCategory->load('farmerLists');
        return view('frontend.farmerList', compact('farmerCategory'));
    }

    public function farmerDetail(FarmerList $farmerList)
    {
        $farmerList->load('files');
        return view('frontend.farmer-detail', compact('farmerList'));
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function link()
    {
        $links = Link::all();
        return view('frontend.links', compact('links'));
    }

    public function faq()
    {
        $faqs = Faq::all();
        return view('frontend.faq', compact('faqs'));
    }

    public function officeDetail(OfficeDetail $officeDetail)
    {
        return view('frontend.officeDetail', compact('officeDetail'));
    }
}
