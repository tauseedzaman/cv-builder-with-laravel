<?php

use App\Http\Livewire\BuildCV;
use App\Http\Livewire\Test;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\viewCv;
use Illuminate\Support\Facades\App;
use Barryvdh\DomPDF\Facade\Pdf;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/create_pdf',function ()
{

    view()->share(["age","name","email","phone","address","bio","photo","profiles","projects","OtherSkills","codingLanguages","frameWorkSystems","MarkupLanguages","socialLinks","technical_supports","software_engineering","webDevTime","Education"],[$this->age,$this->name,$this->email,$this->phone,$this->address,$this->bio,$this->photo,$this->profiles,$this->projects,$this->OtherSkills,$this->codingLanguages,$this->frameWorkSystems,$this->MarkupLanguages,$this->socialLinks,$this->technical_supports,$this->software_engineering,$this->webDevTime,$this->Education]);

    $pdf = PDF::loadView('pdf_view',["age" => $this->age,"name" => $this->name,"email" => $this->email,"phone" => $this->phone,"address" => $this->address,"bio" => $this->bio,"photo" => $this->photo,"profiles" => $this->profiles,"projects" => $this->projects,"OtherSkills" => $this->OtherSkills,"codingLanguages" => $this->codingLanguages,"frameWorkSystems" => $this->frameWorkSystems,"MarkupLanguages" => $this->MarkupLanguages,"socialLinks" => $this->socialLinks,"technical_supports" => $this->technical_supports,"software_engineering" => $this->software_engineering,"webDevTime" => $this->webDevTime,"Education" => $this->Education]);

    // download PDF file with download method
    return $pdf->download('cv.pdf');

    // $pdf = PDF::loadView('pdf.invoice', "hi");
    // return $pdf->download('invoice.pdf');

})->name('create_pdf');


Route::get('/welcome', function () {
    return view('index');
});

Auth::routes();

Route::middleware(['auth'])->group(function () {
    // Route::get("/", viewCv::class)->name("leftSideBar");
    Route::get("/CV_Builder", BuildCV::class)->name("buildCV");
});
Route::get('test',Test::class);
// Image::make(Input::file('photo'))->resize(300, 200)->save('foo.jpg')








Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



