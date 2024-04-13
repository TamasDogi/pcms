<?php

namespace App\Http\Controllers;

use App\Models\Site;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\View;

class SiteController extends Controller
{

    public function site($id): \Illuminate\Http\JsonResponse
    {
        $pages = Site::find($id);
        return response()->json($pages);
    }    

    public function dashboard()
    {
        $user = Auth::user();
        $site = Site::where('id', $user->siteID)->findOrFail($user->siteID);
        return View::make('pages/dashboard')->with(compact('fixtures')); 
    }

    public function index()
    {
        $user = Auth::user();
        $site = Site::where('id', $user->siteID)->findOrFail($user->siteID);
        return view('pages/site', compact("site"));
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        $site = Site::where('id', $user->siteID)->first();
        $site->title = is_null($request->title) ? $site->title : $request->title;
        $site->keywords = is_null($request->keywords) ? $site->keywords : $request->keywords;
        $site->owner = is_null($request->owner) ? $site->owner : $request->owner;
        $site->owner_email = is_null($request->owner_email) ? $site->owner_email : $request->owner_email;
        $site->owner_phone = is_null($request->owner_phone) ? $site->owner_phone : $request->owner_phone;
        $site->description = is_null($request->description) ? $site->description : $request->description;
        $site->save();
        $request->session()->flash('success', 'Site information has been updated successfully!');
        return view('pages/site', compact("site"));
    }

    public function sendEmail()
    {
        // Multiple recipients
        $to = 'info@tamasdogi.eu, clearcoders@gmail.com'; // note the comma

        // Subject
        $subject = 'Birthday Reminders for August';

        // Message
        $message = '
        <html>
        <head>
        <title>Birthday Reminders for August</title>
        </head>
        <body>
        <p>Here are the birthdays upcoming in August!</p>
        <table>
            <tr>
            <th>Person</th><th>Day</th><th>Month</th><th>Year</th>
            </tr>
            <tr>
            <td>Johny</td><td>10th</td><td>August</td><td>1970</td>
            </tr>
            <tr>
            <td>Sally</td><td>17th</td><td>August</td><td>1973</td>
            </tr>
        </table>
        </body>
        </html>
        ';

        // To send HTML mail, the Content-type header must be set
        $headers[] = 'MIME-Version: 1.0';
        $headers[] = 'Content-type: text/html; charset=iso-8859-1';

        // Additional headers
        $headers[] = 'To: Mary <mary@example.com>, Kelly <kelly@example.com>';
        $headers[] = 'From: Birthday Reminder <birthday@example.com>';
        //$headers[] = 'Cc: birthdayarchive@example.com';
        //$headers[] = 'Bcc: birthdaycheck@example.com';

        // Mail it
        mail($to, $subject, $message, implode("\r\n", $headers));
        print "Mail has been sent!";
    }

    public function clearcc(){
        Cache::flush();
        print "DONE!";
    }

}
