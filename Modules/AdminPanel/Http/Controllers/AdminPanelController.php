<?php

namespace Modules\AdminPanel\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminPanelController extends Controller
{
    // Shows dashboard
    public function index()
    {
        return view('adminpanel::pages.dashboard');
    } 

    /*
    * Modules
    */
    public function discordAutoPost()
    {
      return view('adminpanel::pages.discord_auto_poster');
    }

    public function notifications()
    {
      return view('adminpanel::pages.notifications');
    }

    /*
    * Backup
    */
    public function backupCreate()
    {
      return view('adminpanel::pages.backup_create');
    }

    public function backup_automatic()
    {
      return view('adminpanel::pages.backup_automatic');
    }

    /*
    * Updates
    */
    public function updates()
    {
      return view('adminpanel::pages.updates');
    }
    
    /*
    * Site settings
    */
    public function settingsGeneral()
    {
      return view('adminpanel::pages.site_general');
    }

    public function settingsArticles()
    {
      return view('adminpanel::pages.site_articles');
    }

    public function settingsComments()
    {
      return view('adminpanel::pages.site_comments');
    }

    public function settingsUrls()
    {
      return view('adminpanel::pages.site_urls');
    }

    public function settingsEmailServer()
    {
      return view('adminpanel::pages.site_email_server');
    }

    /*
    * Technical
    */
    public function SiteAndServerinfo()
    {
      return view('adminpanel::pages.site_and_server_info');
    }

    public function settingsCache()
    {
      return view('adminpanel::pages.cache');
    }

    public function settingsSecurity()
    {
      return view('adminpanel::pages.security');
    }

    /* 
    * Logs
    */
    public function logSystem()
    {
      return view('adminpanel::pages.log_system');
    }

    public function logError()
    {
      return view('adminpanel::pages.log_error');
    }

    public function logAccess()
    {
      return view('adminpanel::pages.log_access');
    }    
}
