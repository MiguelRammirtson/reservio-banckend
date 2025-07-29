<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /*
     * Dashboard Pages Routs
     */
    public function index(Request $request)
    {
        return view('dashboards.dashboard1');
    }

    public function MySchedule(Request $request)
    {
        return view('dashboards.myschedule');
    }

    public function Integration(Request $request)
    {
        return view('dashboards.integration');
    }



    /*
     * Auth pages Routs
     */

    function authLogin()
    {
        return view('auth.login');
    }

    function authRegister()
    {
        return view('auth.register');
    }

    function authRecoverPassword()
    {
        return view('auth.forgot-password');
    }

    function authConfirmEmail()
    {
        return view('auth.verify-email');
    }


    /*
     * UI Page Routs
     */

    public function UiGrid()
    {
        return view('ui.grid');
    }

    public function UiTabs()
    {
        return view('ui.tabs');
    }

    public function UiCards()
    {
        return view('ui.cards');
    }

    public function UiModal()
    {
        return view('ui.modal');
    }

    public function UiAlerts()
    {
        return view('ui.alerts');
    }

    public function UiBadges()
    {
        return view('ui.badges');
    }

    public function UiColors()
    {
        return view('ui.colors');
    }

    public function UiImages()
    {
        return view('ui.images');
    }

    public function UiAvatars()
    {
        return view('ui.avatars');
    }

    public function UiButtons()
    {
        return view('ui.buttons');
    }

    public function UiCarousel()
    {
        return view('ui.carousel');
    }

    public function UiPopovers()
    {
        return view('ui.popovers');
    }

    public function UiTooltips()
    {
        return view('ui.tooltips');
    }

    public function UiBoxshadows()
    {
        return view('ui.boxshadows');
    }

    public function UiBreadcrumb()
    {
        return view('ui.breadcrumb');
    }

    public function UiListgroup()
    {
        return view('ui.listgroup');
    }

    public function UiPagination()
    {
        return view('ui.pagination');
    }

    public function UiTypography()
    {
        return view('ui.typography');
    }

    public function UiMedia()
    {
        return view('ui.media');
    }

    public function UiProgressbars()
    {
        return view('ui.progressbars');
    }

    public function UiButtongroup()
    {
        return view('ui.buttongroup');
    }

    public function UiNotification()
    {
        return view('ui.notification');
    }

    public function UiVideo()
    {
        return view('ui.video');
    }

    public function UiHelperClass()
    {
        return view('ui.helperclass');
    }

    /*
    * Contact Page Routs
    */
    public function contactList()
    {
        return view('extrapages.contact.contactlist');
    }

    public function contactDetail()
    {
        return view('extrapages.contact.contactdetail');
    }

    /*
    * Main page Routs
    */
    public function CalenderConnections()
    {
        return view('main.calenderConnections');
    }


    public function User()
    {
        return view('main.user');
    }

    public function PageNewEvent()
    {
        return view('main.newEvent');
    }

    public function PageAddEvent()
    {
        return view('main.addEvent');
    }

    public function PageWorkFlow()
    {
        return view('main.pageWorkFlow');
    }
    /*
    * App UserPage Routs
    */

    public function Userprofile()
    {
        return view('app.userdetail.userprofile');
    }


    public function PrivacyPolicy()
    {
        return view('app.extraapp.privacyPolicy');
    }

    public function TermsOfUse()
    {
        return view('app.extraapp.termsOfUse');
    }


    /*
     * Error Page Routs
     */

    public function Error404()
    {
        return view('pageError.error404');
    }

    public function Error500()
    {
        return view('pageError.error500');
    }

    /*
     * Extra Pages Routs
     */

    public function ExtrapagesFaq()
    {
        return view('extrapages.faq');
    }

    public function ExtrapagesInvoice()
    {
        return view('extrapages.invoice');
    }

    public function ExtrapagesSubscriber()
    {
        return view('extrapages.subscriber');
    }

    public function ExtrapagesBlankpage()
    {
        return view('extrapages.blankpage');
    }

    public function ExtrapagesMaintenance()
    {
        return view('extrapages.maintenance');
    }

    public function ExtrapagesComingsoon()
    {
        return view('extrapages.comingsoon');
    }

    /*
    * Pricing Page Routs
    */

    public function Pricing1()
    {
        return view('extrapages.pricing.pricing1');
    }

    public function Pricing2()
    {
        return view('extrapages.pricing.pricing2');
    }

    public function Pricing3()
    {
        return view('extrapages.pricing.pricing3');
    }

    public function Pricing4()
    {
        return view('extrapages.pricing.pricing4');
    }

    /*
     * Timeline Page Routs
     */

    public function timeline1()
    {
        return view('timeline.timeline1');
    }

    public function timeline2()
    {
        return view('timeline.timeline2');
    }

    public function timeline3()
    {
        return view('timeline.timeline3');
    }

    public function timeline4()
    {
        return view('timeline.timeline4');
    }
}

