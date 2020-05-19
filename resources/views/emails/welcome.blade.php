@extends('headers.email')
@section('content')
    <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;mso-table-lspace: 0pt !important;mso-table-rspace: 0pt !important;border-spacing: 0 !important;border-collapse: collapse !important;table-layout: fixed !important;">
        <tr style="-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
            <td valign="middle" class="hero bg_white" style="background-image: url('https://res.cloudinary.com/dkgtd3pil/image/upload/v1589750691/coming-soon/background.jpg');background-size: cover;height: 400px;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;position: relative;z-index: 0;mso-table-lspace: 0pt !important;mso-table-rspace: 0pt !important;">
                <div class="overlay" style="-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;position: absolute;top: 0;left: 0;right: 0;bottom: 0;content: '';width: 100%;background: #000000;z-index: -1;opacity: .3;"></div>
                <table style="-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;mso-table-lspace: 0pt !important;mso-table-rspace: 0pt !important;border-spacing: 0 !important;border-collapse: collapse !important;table-layout: fixed !important;margin: 0 auto !important;">
                    <tr style="-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                        <td style="-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;mso-table-lspace: 0pt !important;mso-table-rspace: 0pt !important;">
                            <div class="text" style="padding: 0 4em;text-align: center;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: rgba(255, 255, 255, .9);">
                                <h1 class="logo" style="-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;font-family: 'Josefin Sans', sans-serif;color: #000000;margin-top: 0;font-weight: 400;margin: 0;display: inline-block;position: absolute;top: 10px;left: 0;right: 0;margin-bottom: 0;"><a href="{{url('/')}}" style="-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;text-decoration: none;color: #fff;font-size: 24px;font-weight: 700;text-transform: uppercase;font-family: 'Josefin Sans', sans-serif;display: inline-block;border: 2px solid #fff;line-height: 1.3;padding: 10px 15px 4px 15px;margin: 0;">{{env('APP_NAME', 'The App')}}</a></h1>
                                <h2 style="-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;font-family: 'Josefin Sans', sans-serif;color: #fff;margin-top: 0;font-weight: 600;font-size: 40px;margin-bottom: 0;line-height: 1;text-transform: uppercase;">{{env('APP_NAME', 'The App')}} is Coming Soon!</h2>
                                <p style="font-family: 'Josefin Sans', sans-serif;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">Thank you for Subscribing to our Update List. We shall notify you when we go live.</p>
                                <p style="-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;"><a href="{{route('unsubscribe', ['base64_email' => $email])}}" class="btn btn-primary" style="-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;text-decoration: none;color: #ffffff;padding: 5px 15px;display: inline-block;border-radius: 30px;background: #448ef6;">Unsubscribe</a></p>
                            </div>
                        </td>
                    </tr>
                </table>
            </td>
        </tr><!-- end tr -->
    </table>
@endsection
