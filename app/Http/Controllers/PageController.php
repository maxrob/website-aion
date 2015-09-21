<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Webserver\Pages;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Lang;

class PageController extends Controller {

    /**
     * What language we need
     * @var string
     */
    protected $language;

    /**
     * Get the language from the cookie :)
     */
    public function __construct()
    {
        parent::__construct();

        $this->language = Cookie::get('language');
    }

    /**
     * GET /page/join-us
     */
    public function joinUs()
    {
        // SEO
        SEOMeta::setTitle(Lang::get('seo.joinus.title'));
        SEOMeta::setDescription(Lang::get('seo.joinus.description'));
        OpenGraph::setDescription(Lang::get('seo.joinus.description'));

        $content = 'TEST';

        return view('page.joinus', [
            'content' => $content
        ]);
    }

    /**
     * GET /page/teamspeak
     */
    public function teamspeak()
    {
        // SEO
        SEOMeta::setTitle(Lang::get('seo.teamspeak.title'));
        SEOMeta::setDescription(Lang::get('seo.teamspeak.description'));
        OpenGraph::setDescription(Lang::get('seo.teamspeak.description'));

        $content = Pages::where('page_name', '=', 'teamspeak')->first([$this->language]);

        return view('page.teamspeak', [
            'content' => $content[$this->language]
        ]);
    }

    /**
     * GET /page/rules
     */
    public function rules()
    {
        // SEO
        SEOMeta::setTitle(Lang::get('seo.rules.title'));
        SEOMeta::setDescription(Lang::get('seo.rules.description'));
        OpenGraph::setDescription(Lang::get('seo.rules.description'));

        $content = Pages::where('page_name', '=', 'rules')->first([$this->language]);

        return view('page.rules', [
            'content' => $content[$this->language]
        ]);
    }

    /**
     * GET /page/rules
     */
    public function team()
    {
        // SEO
        SEOMeta::setTitle(Lang::get('seo.team.title'));
        SEOMeta::setDescription(Lang::get('seo.team.description'));
        OpenGraph::setDescription(Lang::get('seo.team.description'));

        $content = Pages::where('page_name', '=', 'team')->first([$this->language]);

        return view('page.team', [
            'content' => $content[$this->language]
        ]);
    }

    /**
     * GET /page/error
     */
    public function error()
    {
        // SEO
        SEOMeta::setTitle(Lang::get('seo.error.title'));
        SEOMeta::setDescription(Lang::get('seo.error.description'));
        OpenGraph::setDescription(Lang::get('seo.error.description'));

        return view('page.error');
    }

    /**
     * GET /page/rates
     */
    public function rates()
    {
        // SEO
        SEOMeta::setTitle(Lang::get('seo.rates.title'));
        SEOMeta::setDescription(Lang::get('seo.rates.description'));
        OpenGraph::setDescription(Lang::get('seo.rates.description'));

        return view('page.rates');
    }

    /**
     * GET /donation
     */
    public function donation()
    {
        return view('page.donation');
    }

}
