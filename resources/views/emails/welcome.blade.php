@extends('headers.email')
@section('content')
    <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto;">
        <tr>
            <td valign="middle" class="hero bg_white" style="background-image: url('https://res.cloudinary.com/dkgtd3pil/image/upload/v1589750691/coming-soon/background.jpg'); background-size: cover; height: 400px;">
                <div class="overlay"></div>
                <table>
                    <tr>
                        <td>
                            <div class="text" style="padding: 0 4em; text-align: center;">
                                <h1 class="logo"><a href="{{url('/')}}">{{env('APP_NAME', 'The App')}}</a></h1>
                                <h2>{{env('APP_NAME', 'The App')}} is Coming!</h2>
                                <p>Thank you for Subscribing to our Update List. We shall notify you when we go live.</p>
                                <p><a href="#" class="btn btn-primary">Unsubscribe</a></p>
                            </div>
                        </td>
                    </tr>
                </table>
            </td>
        </tr><!-- end tr -->
    </table>
@endsection
