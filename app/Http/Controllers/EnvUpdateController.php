<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artisan;
use Illuminate\Support\Env;
use Dotenv\Dotenv;

class EnvUpdateController extends Controller
{

    public function env_update()
    {
        $envData = \Dotenv\Dotenv::parse(file_get_contents(base_path('.env')));
        return view('test.env-update',compact('envData'));
    }

    public function send_env_update(Request $request)
    {
        $envData = \Dotenv\Dotenv::parse(file_get_contents(base_path('.env')));
        $env = $request->all();
        $envData["MAIL_MAILER"] = $env['--ff']["MAIL_MAILER"];
        $envData["MAIL_HOST"] = $env['--ff']["MAIL_HOST"];
        $envData["MAIL_PORT"] = $env['--ff']["MAIL_PORT"];
        $envData["MAIL_USERNAME"] = $env['--ff']["MAIL_USERNAME"];
        $envData["MAIL_PASSWORD"] = $env['--ff']["MAIL_PASSWORD"];
        $envData["MAIL_ENCRYPTION"] = $env['--ff']["MAIL_ENCRYPTION"];
        $env_content = "";
        
        foreach($envData as $k => $v)
        {
            $env_content .= $k ."=". $v .PHP_EOL;
        }
        file_put_contents(base_path('.env'), $env_content);
        Artisan::call("optimize");
        Artisan::call("route:clear");

        return back();
    }

    public function env_db_update()
    {
        $envData = \Dotenv\Dotenv::parse(file_get_contents(base_path('.env')));
        return view('test.env-db-update',compact('envData'));
    }

    public function send_env_db_update(Request $request)
    {
        $envData = \Dotenv\Dotenv::parse(file_get_contents(base_path('.env')));
        $env = $request->all();
        $envData["DB_CONNECTION"] = $env['--ff']["DB_CONNECTION"];
        $envData["DB_HOST"] = $env['--ff']["DB_HOST"];
        $envData["DB_PORT"] = $env['--ff']["DB_PORT"];
        $envData["DB_DATABASE"] = $env['--ff']["DB_DATABASE"];
        $envData["DB_USERNAME"] = $env['--ff']["DB_USERNAME"];
        $envData["DB_PASSWORD"] = $env['--ff']["DB_PASSWORD"];
        $env_content = "";
        
        foreach($envData as $k => $v)
        {
            $env_content .= $k ."=". $v .PHP_EOL;
        }
        file_put_contents(base_path('.env'), $env_content);
        Artisan::call("optimize");
        Artisan::call("route:clear");

        return back();
    }
    
}
