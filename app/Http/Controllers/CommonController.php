<?php

namespace App\Http\Controllers;

use App\Models\Key_Master;
use App\Models\Key_Token_Master;
use App\Models\User_Master;
use App\Models\Version_Master;
use Faker\Provider\Image;
use Illuminate\Support\Facades\Mail;
use Prophecy\Exception\Exception;
use Storage;

class CommonController extends Controller
{
    public static function verify_email($email, $name)
    {
        $email1 = base64_encode($email);
        $link = env('APP_URL') . "mail?email=$email1";
        // $email_header = env('APP_URL') . "/public/images/ehead.png";
        // $email_footer = env('APP_URL') . "/public/images/envelope.png";
        $server_name = env('APP_NAME');

        $message_body = '<div style="margin:0;padding:0;font-family:Lato,Tahoma,Verdana,Segoe,sans-serif;font-size:14px">
          <table cellspacing="0" cellpadding="0" width="100%" bgcolor="#EEEEEE" style="vertical-align:top;border-collapse:collapse">
          <tbody>
              <tr style="vertical-align:top;border-collapse:collapse">
                  <td align="center" valign="top" style="vertical-align:top;border-collapse:collapse">

                      <div style="min-width:320px;max-width:600px;width:100%;margin:0 auto">
                          <div style="background:#fff;overflow:hidden;padding:0;max-width:525px;width:87.5%;text-align:left">

                                      <div style="padding:0 15px;margin-bottom:15px">
                                          <div style="font-size:18px;margin:0 0 5px;display:block;color:#000;text-decoration:none;text-align:center;">
                                          <b>Dear '.$name.'!</b><br/><br/>
                                         Thank you creating an account with '.$server_name.'.<br><br>
                                         To access your account we need you to finalize the verification process. <br><br>
                                         Please <a href="'.$link.'">click here</a> to confirm your email.<br>
                                          </div>
                                      </div>

                              <div style="color:#000;display:block;margin:10px 0;font-size:15px;text-align:center;text-decoration:none">
                              Sincerely yours,<br/>
                              Team '.$server_name.'</div>
                          </div>

                      </div>

                  </td>
              </tr>
          </tbody>
      </table>

      </div>';

        $template = 'send_mail';
        $subject = 'Important: Please verify your email address';
        $data = array('template' => $template, 'email' => $email, 'subject' => $subject, 'message_body' => $message_body, 'serverName' => $server_name);

        Mail::send($data['template'], $data, function ($message) use ($data) {
            $message->from(env('MAIL_USERNAME'), $data['serverName']);
            $message->to($data['email'])->subject($data['subject']);
        });
        return true;
    }
}
