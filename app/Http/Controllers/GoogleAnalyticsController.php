<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Analytics;
use Spatie\Analytics\Period;

class GoogleAnalyticsController extends Controller
{
    function getPageViews(){
    	$pageView = Analytics::fetchVisitorsAndPageViews(Period::days(7));
    	return $pageView[0]['pageViews'];
    }
}
