<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function about(){
        return view('subview.about');
    }

    public function list(){

        $data = array(   array('Title' => 'The Adventures of Tom Sawyer','Author' => 'Bell M.','ISBN' => '0140620524','Category' => 'Action & Adventure','Pages' => '246'),
                         array('Title' => '20,000 Leagues Under the Sea','Author' => 'Roxxa','ISBN' => '140272599X','Category' => 'Action & Adventure','Pages' => '296'),
                         array('Title' => 'The Call of the Wild','Author' => 'M. Salman','ISBN' => '0689856741','Category' => 'Action & Adventure','Pages' => '86'),
                         array('Title' => 'Leonardo da Vinci','Author' => 'George H.','ISBN' => '0262680920','Category' => 'Computer','Pages' => '493'),
                         array('Title' => 'The Hackers Dictionary','Author' => 'Endiessa Mow','ISBN' => '1863305955','Category' => 'Computer','Pages' => 'Age'),
                         array('Title' => 'Emma','Author' => 'Cindy Tay','ISBN' => '0141439580','Category' => 'Romance','Pages' => '380'),
                         array('Title' => 'Mademoiselle At Arms','Author' => 'Elizabeth Bailey','ISBN' => '192584621298XWER','Category' => 'Romance','Pages' => '189')
            
                    );
                    return view('subview.list',compact('data'));
    }
}

