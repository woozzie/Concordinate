<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Section;
use App\Course;
use Auth;

include('simple_html_dom.php');

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $name = Auth::user()->name;

        return view('home', [
            'name' => $name
        ]);
    }

    public function profile()
    {
        return view('profile');
    }

    public function scraping()
    {
        // $html = file_get_html('https://www.concordia.ca/encs/students/course-schedules/fall-2016-2017.html');

        // dd($html->getElementById("boot")->children(5)->children(0)->children(0)->children(1)->children(0)->children(0)->children(0)->children(0));

        $html = file_get_html('https://aits.encs.concordia.ca/oldsite/resources/schedules/courses/?y=2016&s=2/index.php');

        $maincontent = $html->find('div[id=maincontent]');
        $tableRows = $maincontent[0]->first_child()->last_child()->children(10)->children(1);

        foreach ($tableRows->children() as $row) {

            $href       = $row->children(0)->children(0)->getAttribute('href');
            $newUrl     = html_entity_decode('https://aits.encs.concordia.ca/oldsite/resources/schedules/courses/' . $href);
            $newHtml    = file_get_html($newUrl);
            $tables     = $newHtml->find('table');
            $courseName = substr($href, strpos($href, "c=")+2);

            if (count($tables) > 1) {
                $table = $tables[1];
            } else {
                $table = $tables[0];
            }
            
            $tableRows = $table->find('tr');
            
            for ($i = 1; $i < count($tableRows); $i++) {
                $row = $tableRows[$i];
                $td  = $row->find('td');
                
                $type       = $td[0]->innertext;
                $section1   = $td[1]->innertext;
                $section2   = $td[2]->innertext;
                $section3   = $td[3]->innertext;
                $days       = $td[4]->innertext;
                $start      = $td[5]->innertext;
                $end        = $td[6]->innertext;
                $room       = $td[7]->innertext;
                $instructor = $td[8]->innertext;

                $section = new Section;

                $section->course    = $courseName;
                $section->type      = $type;
                $section->section1  = $section1;
                $section->section2  = $section2;
                $section->section3  = $section3;
                $section->days      = $days;
                $section->start     = $start;
                $section->end       = $end;
                $section->room      = $room;
                $section->instructor = $instructor;

                $section->save();
            }

            echo 'saved';
        }
    }
}
