<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Spatie\Mjml\Mjml;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/size', function () {

    $contents = Storage::disk('public2')->size('image.jpg');

    dd($contents);
});

Route::get('/url', function () {

    $contents = Storage::disk('public2')->url('image.jpg');

    dd($contents);
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::get('/mjml', function () {

$mjml = 

<<<EOD
    <mjml>
    <mj-body background-color="#F4F4F4" color="#55575d" font-family="Arial, sans-serif">
        <mj-section background-color="#000000" background-repeat="no-repeat" text-align="center" vertical-align="top">
        <mj-column>
            <mj-image align="center" border="none" padding-bottom="30px" padding="10px 25px" src="http://5vph.mj.am/img/5vph/b/1g86w/0g67t.png" target="_blank" title="" width="180px"></mj-image>
            <mj-text align="left" color="#55575d" font-family="Arial, sans-serif" font-size="13px" line-height="22px" padding-bottom="0px" padding-top="0px" padding="10px 25px">
            <p style="line-height: 18px; margin: 10px 0; text-align: center;font-size:14px;color:#ffffff;font-family:'Times New Roman',Helvetica,Arial,sans-serif">WOMEN&nbsp; &nbsp; &nbsp; &nbsp;| &nbsp; &nbsp; &nbsp; MEN&nbsp; &nbsp; &nbsp; &nbsp;| &nbsp; &nbsp; &nbsp; KIDS</p>
            </mj-text>
        </mj-column>
        </mj-section>
        <mj-section background-color="#000000" background-repeat="no-repeat" text-align="center" vertical-align="top" padding="0 0 0 0">
        <mj-column>
            <mj-image align="center" border="none" padding-bottom="0px" padding-left="0px" padding-right="0px" padding="0px 25px" src="http://5vph.mj.am/img/5vph/b/1g86w/0696u.jpeg" target="_blank" title="" width="780px"></mj-image>
        </mj-column>
        </mj-section>
    
        <mj-section background-color="#000000" background-repeat="no-repeat" text-align="center" vertical-align="top" padding-bottom="40px" padding="0 0 0 0">
        <mj-column>
            <mj-button background-color="#ffffff" border-radius="3px" font-family="Times New Roman, Helvetica, Arial, sans-serif" font-size="18px" font-weight="normal" inner-padding="10px 25px" padding-bottom="30px" padding="10px 25px"><span style="color:#212020">Shop Now</span></mj-button>
            <mj-text align="left" color="#55575d" font-family="Arial, sans-serif" font-size="13px" line-height="22px" padding-bottom="0px" padding-top="5px" padding="10px 25px">
            <p style="line-height: 16px; text-align: center; margin: 10px 0;font-size:12px;color:#ffffff;font-family:'Times New Roman',Helvetica,Arial,sans-serif">* Offer valid on Allura purchases on 17/29/11 at 11:59 pm. No price adjustments on previous&nbsp;<br /><span style="color:#ffffff;font-family:'Times New Roman',Helvetica,Arial,sans-serif">purchases, offer limited to stock. Cannot be combined with any offer or promotion other than free.</span></p>
            </mj-text>
        </mj-column>
        </mj-section>
    </mj-body>
    </mjml>

EOD;

$html = Mjml::new()->toHtml($mjml);

dd($html);

});



require __DIR__.'/auth.php';
