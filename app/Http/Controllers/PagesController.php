<?php
/**
 * Created by PhpStorm.
 * User: Owner
 * Date: 2017-03-09
 * Time: 7:59 PM
 */

namespace App\Http\Controllers;


class PagesController extends Controller
{

    /**
     * Display the view showing the (static) contact us data
     * @param none
     * @return Response
     */
    protected function contact() {
        return view('pages.contactus');
    }


    public function about() {
        return view('pages.aboutus');
    }

}